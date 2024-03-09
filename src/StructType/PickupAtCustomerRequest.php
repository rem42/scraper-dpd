<?php

namespace Scraper\ScraperDPD\StructType;

/**
 * This class stands for PickupAtCustomerRequest StructType
 */
class PickupAtCustomerRequest extends PickupAtCustomerRequestBase
{
    /**
     * The shipments
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var \Scraper\ScraperDPD\ArrayType\ArrayOfParcel
     */
    public $shipments;

    /**
     * Constructor method for PickupAtCustomerRequest
     *
     * @uses PickupAtCustomerRequest::setShipments()
     */
    public function __construct(?\Scraper\ScraperDPD\ArrayType\ArrayOfParcel $shipments = null)
    {
        $this
            ->setShipments($shipments)
        ;
    }

    /**
     * Get shipments value
     *
     * @return \Scraper\ScraperDPD\ArrayType\ArrayOfParcel|null
     */
    public function getShipments()
    {
        return $this->shipments;
    }

    /**
     * Set shipments value
     *
     * @return self
     */
    public function setShipments(?\Scraper\ScraperDPD\ArrayType\ArrayOfParcel $shipments = null)
    {
        $this->shipments = $shipments;
        return $this;
    }
}
