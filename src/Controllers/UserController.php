<?php


namespace KeineWaste\Controllers;

use KeineWaste\Controllers\Base\BaseTrait;
use KeineWaste\Services\UserService;
use Psr\Log\LoggerAwareTrait;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;


class UserController
{
    use BaseTrait;
    use LoggerAwareTrait;

    /**
     * @var UserService
     */
    protected $userService;

    function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    /**
     * @param Request $request
     *
     * @return JsonResponse
     * @throws NotFoundHttpException
     * @throws \Exception
     */
    public function getAction(Request $request)
    {

        $user = $this->userService->getUserById($request->get('id'));

        if (null === $user) {
            throw new NotFoundHttpException();
        }

        return $this
            ->getResponse()
            ->setData(
                $user
            );
    }
}