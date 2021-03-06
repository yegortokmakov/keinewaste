<?php

namespace KeineWaste\Controllers\Base;

use KeineWaste\Services\UserService;
use Pseudo\Exception;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Symfony\Component\HttpKernel\Exception\HttpException;
use KeineWaste\Config\General as GeneralConfig;

trait BaseTrait
{

    /**
     * @var UserService
     */
    protected $userService;


    /**
     * @var JsonResponse
     */
    protected $response;

    /**
     * @var GeneralConfig
     */
    protected $config;

    /**
     * Set Response
     *
     * @param JsonResponse $response Response
     *
     * @return void
     */
    public function setResponse(JsonResponse $response)
    {
        $this->response = $response;
    }

    /**
     * Get Response
     *
     * @return JsonResponse
     */
    protected function getResponse()
    {
        return $this->response;
    }

    /**
     * Set Config
     *
     * @param GeneralConfig $config Config
     *
     * @return void
     */
    public function setConfig(GeneralConfig $config)
    {
        $this->config = $config;
    }

    /**
     * Get Config
     *
     * @return Config
     */
    protected function getConfig()
    {
        return $this->config;
    }

    /**
     * Finish handling and return response with error message
     *
     * @param int         $httpStatusCode HTTP status code
     * @param \Exception  $exception      Exception
     * @param int|null    $errorCode      Error code
     * @param int|null    $appDomain      App domain
     * @param string|null $locale         Locale
     *
     * @throws HttpException
     *
     * @return void
     */
    protected function triggerError($httpStatusCode, $exception = null, $errorCode = null, $appDomain = null, $locale = null)
    {
        $message = $this->getExceptionTranslation($errorCode, $appDomain, $locale);
        throw new HttpException($httpStatusCode, $message, $exception, [], $errorCode);
    }

    /**
     * Returns translated exception
     *
     * @param string $errorCode Error code
     * @param string $appDomain App domain
     * @param string $locale    Locale
     *
     * @return string|null
     */
    protected function getExceptionTranslation($errorCode, $appDomain, $locale)
    {
        $message = 'Exception: ' . $errorCode;
        return $message;
    }

    /**
     * @param UserService $userService
     */
    public function setUserService($userService)
    {
        $this->userService = $userService;
    }


    /**
     * Generate token from request.
     *
     * @param Request $request The request.
     *
     * @return string
     */
    protected function getToken(Request $request)
    {
        $token_string = str_replace('Bearer ', '', $request->headers->get('Authorization'));
        if (null !== ($token_from_query = $request->query->get('access_token'))) {
            $token_string = $token_from_query;
        }

        return $token_string;
    }


    protected function getLoggedUser(Request $request, $allowAnonymous = false)
    {
        if (null == $this->userService) {
            throw new Exception("User Service is not set");
        }

        $loggedUser = $this->userService->getUserByToken($this->getToken($request));
        if ($allowAnonymous === false && $loggedUser === null) {
            throw new AccessDeniedHttpException();
        }
        return $loggedUser;
    }
}