<?php

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShipmentBc StructType
 */
class ShipmentBc extends AbstractStructBase
{
    /**
     * The Type
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     *
     * @var string
     */
    public $Type;
    /**
     * The Shipment
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var BcDataExt
     */
    public $Shipment;

    /**
     * Constructor method for ShipmentBc
     *
     * @uses ShipmentBc::setType()
     * @uses ShipmentBc::setShipment()
     *
     * @param string $type
     */
    public function __construct($type = null, ?BcDataExt $shipment = null)
    {
        $this
            ->setType($type)
            ->setShipment($shipment)
        ;
    }

    /**
     * Get Type value
     *
     * @return string
     */
    public function getType()
    {
        return $this->Type;
    }

    /**
     * Set Type value
     *
     * @uses \Scraper\ScraperDPD\EnumType\Etype::valueIsValid()
     * @uses \Scraper\ScraperDPD\EnumType\Etype::getValidValues()
     *
     * @param string $type
     *
     * @throws \InvalidArgumentException
     *
     * @return self
     */
    public function setType($type = null)
    {
        // validation for constraint: enumeration
        if (!\Scraper\ScraperDPD\EnumType\Etype::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Scraper\ScraperDPD\EnumType\Etype', \is_array($type) ? implode(', ', $type) : var_export($type, true), implode(', ', \Scraper\ScraperDPD\EnumType\Etype::getValidValues())), __LINE__);
        }
        $this->Type = $type;
        return $this;
    }

    /**
     * Get Shipment value
     *
     * @return BcDataExt|null
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
    public function setShipment(?BcDataExt $shipment = null)
    {
        $this->Shipment = $shipment;
        return $this;
    }
}
