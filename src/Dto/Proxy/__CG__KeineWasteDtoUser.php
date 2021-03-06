<?php

namespace KeineWaste\Dto\Proxy\__CG__\KeineWaste\Dto;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class User extends \KeineWaste\Dto\User implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', 'id', 'facebookId', 'offers', 'name', 'companyName', 'address', 'type', 'bio', 'createdAt', 'email', 'token', 'sentMessages', 'receivedMessages', 'profilePicture', 'imageUrl', 'categories', 'meetingTimeFrom', 'meetingTimeTo', 'deliveryType', 'distance'];
        }

        return ['__isInitialized__', 'id', 'facebookId', 'offers', 'name', 'companyName', 'address', 'type', 'bio', 'createdAt', 'email', 'token', 'sentMessages', 'receivedMessages', 'profilePicture', 'imageUrl', 'categories', 'meetingTimeFrom', 'meetingTimeTo', 'deliveryType', 'distance'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (User $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function jsonSerialize()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'jsonSerialize', []);

        return parent::jsonSerialize();
    }

    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function getCreatedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreatedAt', []);

        return parent::getCreatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function getEmail()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmail', []);

        return parent::getEmail();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmail($email)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmail', [$email]);

        return parent::setEmail($email);
    }

    /**
     * {@inheritDoc}
     */
    public function getToken()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getToken', []);

        return parent::getToken();
    }

    /**
     * {@inheritDoc}
     */
    public function setToken($token)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setToken', [$token]);

        return parent::setToken($token);
    }

    /**
     * {@inheritDoc}
     */
    public function getName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getName', []);

        return parent::getName();
    }

    /**
     * {@inheritDoc}
     */
    public function setName($name)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setName', [$name]);

        return parent::setName($name);
    }

    /**
     * {@inheritDoc}
     */
    public function isIndividual()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isIndividual', []);

        return parent::isIndividual();
    }

    /**
     * {@inheritDoc}
     */
    public function getProfilePicture()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProfilePicture', []);

        return parent::getProfilePicture();
    }

    /**
     * {@inheritDoc}
     */
    public function setProfilePicture($profilePicture)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setProfilePicture', [$profilePicture]);

        return parent::setProfilePicture($profilePicture);
    }

    /**
     * {@inheritDoc}
     */
    public function setAddress($address)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAddress', [$address]);

        return parent::setAddress($address);
    }

    /**
     * {@inheritDoc}
     */
    public function getAddress()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAddress', []);

        return parent::getAddress();
    }

    /**
     * {@inheritDoc}
     */
    public function setBio($bio)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBio', [$bio]);

        return parent::setBio($bio);
    }

    /**
     * {@inheritDoc}
     */
    public function getBio()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBio', []);

        return parent::getBio();
    }

    /**
     * {@inheritDoc}
     */
    public function setCompanyName($companyName)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCompanyName', [$companyName]);

        return parent::setCompanyName($companyName);
    }

    /**
     * {@inheritDoc}
     */
    public function getCompanyName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCompanyName', []);

        return parent::getCompanyName();
    }

    /**
     * {@inheritDoc}
     */
    public function setImageUrl($imageUrl)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setImageUrl', [$imageUrl]);

        return parent::setImageUrl($imageUrl);
    }

    /**
     * {@inheritDoc}
     */
    public function getImageUrl()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImageUrl', []);

        return parent::getImageUrl();
    }

    /**
     * {@inheritDoc}
     */
    public function setOffers($offers)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOffers', [$offers]);

        return parent::setOffers($offers);
    }

    /**
     * {@inheritDoc}
     */
    public function getOffers()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOffers', []);

        return parent::getOffers();
    }

    /**
     * {@inheritDoc}
     */
    public function setType($type)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setType', [$type]);

        return parent::setType($type);
    }

    /**
     * {@inheritDoc}
     */
    public function getType()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getType', []);

        return parent::getType();
    }

    /**
     * {@inheritDoc}
     */
    public function setCategories($categories)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCategories', [$categories]);

        return parent::setCategories($categories);
    }

    /**
     * {@inheritDoc}
     */
    public function getCategories()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCategories', []);

        return parent::getCategories();
    }

    /**
     * {@inheritDoc}
     */
    public function setDeliveryType($deliveryType)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDeliveryType', [$deliveryType]);

        return parent::setDeliveryType($deliveryType);
    }

    /**
     * {@inheritDoc}
     */
    public function getDeliveryType()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDeliveryType', []);

        return parent::getDeliveryType();
    }

    /**
     * {@inheritDoc}
     */
    public function setMeetingTimeFrom($meetingTimeFrom)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMeetingTimeFrom', [$meetingTimeFrom]);

        return parent::setMeetingTimeFrom($meetingTimeFrom);
    }

    /**
     * {@inheritDoc}
     */
    public function getMeetingTimeFrom()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMeetingTimeFrom', []);

        return parent::getMeetingTimeFrom();
    }

    /**
     * {@inheritDoc}
     */
    public function setMeetingTimeTo($meetingTimeTo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMeetingTimeTo', [$meetingTimeTo]);

        return parent::setMeetingTimeTo($meetingTimeTo);
    }

    /**
     * {@inheritDoc}
     */
    public function getMeetingTimeTo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMeetingTimeTo', []);

        return parent::getMeetingTimeTo();
    }

    /**
     * {@inheritDoc}
     */
    public function setDistance($distance)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDistance', [$distance]);

        return parent::setDistance($distance);
    }

    /**
     * {@inheritDoc}
     */
    public function getDistance()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDistance', []);

        return parent::getDistance();
    }

}
