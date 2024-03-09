<?php

namespace Scraper\ScraperDPD\StructType;

/**
 * This class stands for CollectionRequestServices StructType
 */
class CollectionRequestServices extends StdServicesBase
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
     * @var ContactCollectionRequest
     */
    public $contact;

    /**
     * Constructor method for CollectionRequestServices
     *
     * @uses CollectionRequestServices::setExtraInsurance()
     * @uses CollectionRequestServices::setContact()
     */
    public function __construct(?ExtraInsurance $extraInsurance = null, ?ContactCollectionRequest $contact = null)
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
     * @return ContactCollectionRequest|null
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
    public function setContact(?ContactCollectionRequest $contact = null)
    {
        $this->contact = $contact;
        return $this;
    }
}
