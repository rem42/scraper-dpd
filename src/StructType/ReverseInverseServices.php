<?php

namespace Scraper\ScraperDPD\StructType;

/**
 * This class stands for ReverseInverseServices StructType
 */
class ReverseInverseServices extends ServiceBaseList
{
    /**
     * The extraInsurance
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var ExtraInsurance
     */
    public $extraInsurance;
    /**
     * The contact
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var Contact
     */
    public $contact;

    /**
     * Constructor method for ReverseInverseServices
     *
     * @uses ReverseInverseServices::setExtraInsurance()
     * @uses ReverseInverseServices::setContact()
     */
    public function __construct(?ExtraInsurance $extraInsurance = null, ?Contact $contact = null)
    {
        $this
            ->setExtraInsurance($extraInsurance)
            ->setContact($contact)
        ;
    }

    /**
     * Get extraInsurance value
     *
     * @return ExtraInsurance|null
     */
    public function getExtraInsurance()
    {
        return $this->extraInsurance;
    }

    /**
     * Set extraInsurance value
     *
     * @return self
     */
    public function setExtraInsurance(?ExtraInsurance $extraInsurance = null)
    {
        $this->extraInsurance = $extraInsurance;
        return $this;
    }

    /**
     * Get contact value
     *
     * @return Contact|null
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Set contact value
     *
     * @return self
     */
    public function setContact(?Contact $contact = null)
    {
        $this->contact = $contact;
        return $this;
    }
}
