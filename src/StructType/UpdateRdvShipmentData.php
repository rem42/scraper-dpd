<?php

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UpdateRdvShipmentData StructType
 */
class UpdateRdvShipmentData extends AbstractStructBase
{
    /**
     * The Sin
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $Sin;
    /**
     * The Receiver_EmailAddress
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $Receiver_EmailAddress;
    /**
     * The User
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $User;
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var UpdateRdvShipmentDataRequest
     */
    public $request;

    /**
     * Constructor method for UpdateRdvShipmentData
     *
     * @uses UpdateRdvShipmentData::setSin()
     * @uses UpdateRdvShipmentData::setReceiver_EmailAddress()
     * @uses UpdateRdvShipmentData::setUser()
     * @uses UpdateRdvShipmentData::setRequest()
     *
     * @param string $sin
     * @param string $receiver_EmailAddress
     * @param string $user
     */
    public function __construct($sin = null, $receiver_EmailAddress = null, $user = null, ?UpdateRdvShipmentDataRequest $request = null)
    {
        $this
            ->setSin($sin)
            ->setReceiver_EmailAddress($receiver_EmailAddress)
            ->setUser($user)
            ->setRequest($request)
        ;
    }

    /**
     * Get Sin value
     *
     * @return string|null
     */
    public function getSin()
    {
        return $this->Sin;
    }

    /**
     * Set Sin value
     *
     * @param string $sin
     *
     * @return self
     */
    public function setSin($sin = null)
    {
        // validation for constraint: string
        if (null !== $sin && !\is_string($sin)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sin, true), \gettype($sin)), __LINE__);
        }
        $this->Sin = $sin;
        return $this;
    }

    /**
     * Get Receiver_EmailAddress value
     *
     * @return string|null
     */
    public function getReceiver_EmailAddress()
    {
        return $this->Receiver_EmailAddress;
    }

    /**
     * Set Receiver_EmailAddress value
     *
     * @param string $receiver_EmailAddress
     *
     * @return self
     */
    public function setReceiver_EmailAddress($receiver_EmailAddress = null)
    {
        // validation for constraint: string
        if (null !== $receiver_EmailAddress && !\is_string($receiver_EmailAddress)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($receiver_EmailAddress, true), \gettype($receiver_EmailAddress)), __LINE__);
        }
        $this->Receiver_EmailAddress = $receiver_EmailAddress;
        return $this;
    }

    /**
     * Get User value
     *
     * @return string|null
     */
    public function getUser()
    {
        return $this->User;
    }

    /**
     * Set User value
     *
     * @param string $user
     *
     * @return self
     */
    public function setUser($user = null)
    {
        // validation for constraint: string
        if (null !== $user && !\is_string($user)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($user, true), \gettype($user)), __LINE__);
        }
        $this->User = $user;
        return $this;
    }

    /**
     * Get request value
     *
     * @return UpdateRdvShipmentDataRequest|null
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * Set request value
     *
     * @return self
     */
    public function setRequest(?UpdateRdvShipmentDataRequest $request = null)
    {
        $this->request = $request;
        return $this;
    }
}
