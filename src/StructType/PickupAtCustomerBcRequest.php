<?php

namespace Scraper\ScraperDPD\StructType;

/**
 * This class stands for PickupAtCustomerBcRequest StructType
 */
class PickupAtCustomerBcRequest extends PickupAtCustomerRequestBase
{
    /**
     * The shipments
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var \Scraper\ScraperDPD\ArrayType\ArrayOfString
     */
    public $shipments;

    /**
     * Constructor method for PickupAtCustomerBcRequest
     *
     * @uses PickupAtCustomerBcRequest::setShipments()
     */
    public function __construct(?\Scraper\ScraperDPD\ArrayType\ArrayOfString $shipments = null)
    {
        $this
            ->setShipments($shipments)
        ;
    }

    /**
     * Get shipments value
     *
     * @return \Scraper\ScraperDPD\ArrayType\ArrayOfString|null
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
    public function setShipments(?\Scraper\ScraperDPD\ArrayType\ArrayOfString $shipments = null)
    {
        $this->shipments = $shipments;
        return $this;
    }
}
