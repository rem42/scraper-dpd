<?php

namespace Scraper\ScraperDPD\StructType;

/**
 * This class stands for MultiServices StructType
 */
class MultiServices extends ServiceBaseList
{
    /**
     * The consolidation
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var Consolidation
     */
    public $consolidation;
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
     * The pickupAtCustomer
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var PickupData
     */
    public $pickupAtCustomer;

    /**
     * Constructor method for MultiServices
     *
     * @uses MultiServices::setConsolidation()
     * @uses MultiServices::setContact()
     * @uses MultiServices::setPickupAtCustomer()
     */
    public function __construct(?Consolidation $consolidation = null, ?Contact $contact = null, ?PickupData $pickupAtCustomer = null)
    {
        $this
            ->setConsolidation($consolidation)
            ->setContact($contact)
            ->setPickupAtCustomer($pickupAtCustomer)
        ;
    }

    /**
     * Get consolidation value
     *
     * @return Consolidation|null
     */
    public function getConsolidation()
    {
        return $this->consolidation;
    }

    /**
     * Set consolidation value
     *
     * @return self
     */
    public function setConsolidation(?Consolidation $consolidation = null)
    {
        $this->consolidation = $consolidation;
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

    /**
     * Get pickupAtCustomer value
     *
     * @return PickupData|null
     */
    public function getPickupAtCustomer()
    {
        return $this->pickupAtCustomer;
    }

    /**
     * Set pickupAtCustomer value
     *
     * @return self
     */
    public function setPickupAtCustomer(?PickupData $pickupAtCustomer = null)
    {
        $this->pickupAtCustomer = $pickupAtCustomer;
        return $this;
    }
}
