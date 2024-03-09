<?php

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShipmentWithLabelsBc StructType
 */
class ShipmentWithLabelsBc extends AbstractStructBase
{
    /**
     * The Shipment
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var ShipmentBc
     */
    public $Shipment;
    /**
     * The Labels
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var \Scraper\ScraperDPD\ArrayType\ArrayOfLabel
     */
    public $Labels;

    /**
     * Constructor method for ShipmentWithLabelsBc
     *
     * @uses ShipmentWithLabelsBc::setShipment()
     * @uses ShipmentWithLabelsBc::setLabels()
     */
    public function __construct(?ShipmentBc $shipment = null, ?\Scraper\ScraperDPD\ArrayType\ArrayOfLabel $labels = null)
    {
        $this
            ->setShipment($shipment)
            ->setLabels($labels)
        ;
    }

    /**
     * Get Shipment value
     *
     * @return ShipmentBc|null
     */
    public function getShipment()
    {
        return $this->Shipment;
    }

    /**
     * Set Shipment value
     *
     * @return self
     */
    public function setShipment(?ShipmentBc $shipment = null)
    {
        $this->Shipment = $shipment;
        return $this;
    }

    /**
     * Get Labels value
     *
     * @return \Scraper\ScraperDPD\ArrayType\ArrayOfLabel|null
     */
    public function getLabels()
    {
        return $this->Labels;
    }

    /**
     * Set Labels value
     *
     * @return self
     */
    public function setLabels(?\Scraper\ScraperDPD\ArrayType\ArrayOfLabel $labels = null)
    {
        $this->Labels = $labels;
        return $this;
    }
}
