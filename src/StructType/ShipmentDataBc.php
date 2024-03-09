<?php

namespace Scraper\ScraperDPD\StructType;

/**
 * This class stands for ShipmentDataBc StructType
 */
class ShipmentDataBc extends ShipmentDataBase
{
    /**
     * The shipment
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var BcDataExt
     */
    public $shipment;
    /**
     * The shipmentRetour
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var BcDataExt
     */
    public $shipmentRetour;

    /**
     * Constructor method for ShipmentDataBc
     *
     * @uses ShipmentDataBc::setShipment()
     * @uses ShipmentDataBc::setShipmentRetour()
     */
    public function __construct(?BcDataExt $shipment = null, ?BcDataExt $shipmentRetour = null)
    {
        $this
            ->setShipment($shipment)
            ->setShipmentRetour($shipmentRetour)
        ;
    }

    /**
     * Get shipment value
     *
     * @return BcDataExt|null
     */
    public function getShipment()
    {
        return $this->shipment;
    }

    /**
     * Set shipment value
     *
     * @return self
     */
    public function setShipment(?BcDataExt $shipment = null)
    {
        $this->shipment = $shipment;
        return $this;
    }

    /**
     * Get shipmentRetour value
     *
     * @return BcDataExt|null
     */
    public function getShipmentRetour()
    {
        return $this->shipmentRetour;
    }

    /**
     * Set shipmentRetour value
     *
     * @return self
     */
    public function setShipmentRetour(?BcDataExt $shipmentRetour = null)
    {
        $this->shipmentRetour = $shipmentRetour;
        return $this;
    }
}
