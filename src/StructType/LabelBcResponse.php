<?php

namespace Scraper\ScraperDPD\StructType;

/**
 * This class stands for LabelBcResponse StructType
 */
class LabelBcResponse extends LabelBaseResponse
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
     * Constructor method for LabelBcResponse
     *
     * @uses LabelBcResponse::setShipment()
     */
    public function __construct(?BcDataExt $shipment = null)
    {
        $this
            ->setShipment($shipment)
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
}
