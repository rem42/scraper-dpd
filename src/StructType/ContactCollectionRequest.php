<?php

namespace Scraper\ScraperDPD\StructType;

/**
 * This class stands for ContactCollectionRequest StructType
 */
class ContactCollectionRequest extends Contact
{
    /**
     * The shipper_email
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $shipper_email;
    /**
     * The shipper_mobil
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $shipper_mobil;

    /**
     * Constructor method for ContactCollectionRequest
     *
     * @uses ContactCollectionRequest::setShipper_email()
     * @uses ContactCollectionRequest::setShipper_mobil()
     *
     * @param string $shipper_email
     * @param string $shipper_mobil
     */
    public function __construct($shipper_email = null, $shipper_mobil = null)
    {
        $this
            ->setShipper_email($shipper_email)
            ->setShipper_mobil($shipper_mobil)
        ;
    }

    /**
     * Get shipper_email value
     *
     * @return string|null
     */
    public function getShipper_email()
    {
        return $this->shipper_email;
    }

    /**
     * Set shipper_email value
     *
     * @param string $shipper_email
     *
     * @return self
     */
    public function setShipper_email($shipper_email = null)
    {
        // validation for constraint: string
        if (null !== $shipper_email && !\is_string($shipper_email)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shipper_email, true), \gettype($shipper_email)), __LINE__);
        }
        $this->shipper_email = $shipper_email;
        return $this;
    }

    /**
     * Get shipper_mobil value
     *
     * @return string|null
     */
    public function getShipper_mobil()
    {
        return $this->shipper_mobil;
    }

    /**
     * Set shipper_mobil value
     *
     * @param string $shipper_mobil
     *
     * @return self
     */
    public function setShipper_mobil($shipper_mobil = null)
    {
        // validation for constraint: string
        if (null !== $shipper_mobil && !\is_string($shipper_mobil)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shipper_mobil, true), \gettype($shipper_mobil)), __LINE__);
        }
        $this->shipper_mobil = $shipper_mobil;
        return $this;
    }
}
