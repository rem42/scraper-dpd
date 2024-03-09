<?php

namespace Scraper\ScraperDPD\StructType;

/**
 * This class stands for GetShipmentEntry StructType
 */
class GetShipmentEntry extends ShipmentDataExtendedBc
{
    /**
     * The LinkedShipmentType
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     *
     * @var string
     */
    public $LinkedShipmentType;

    /**
     * Constructor method for GetShipmentEntry
     *
     * @uses GetShipmentEntry::setLinkedShipmentType()
     *
     * @param string $linkedShipmentType
     */
    public function __construct($linkedShipmentType = null)
    {
        $this
            ->setLinkedShipmentType($linkedShipmentType)
        ;
    }

    /**
     * Get LinkedShipmentType value
     *
     * @return string
     */
    public function getLinkedShipmentType()
    {
        return $this->LinkedShipmentType;
    }

    /**
     * Set LinkedShipmentType value
     *
     * @uses \Scraper\ScraperDPD\EnumType\ELinkedShipmentType::valueIsValid()
     * @uses \Scraper\ScraperDPD\EnumType\ELinkedShipmentType::getValidValues()
     *
     * @param string $linkedShipmentType
     *
     * @throws \InvalidArgumentException
     *
     * @return self
     */
    public function setLinkedShipmentType($linkedShipmentType = null)
    {
        // validation for constraint: enumeration
        if (!\Scraper\ScraperDPD\EnumType\ELinkedShipmentType::valueIsValid($linkedShipmentType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Scraper\ScraperDPD\EnumType\ELinkedShipmentType', \is_array($linkedShipmentType) ? implode(', ', $linkedShipmentType) : var_export($linkedShipmentType, true), implode(', ', \Scraper\ScraperDPD\EnumType\ELinkedShipmentType::getValidValues())), __LINE__);
        }
        $this->LinkedShipmentType = $linkedShipmentType;
        return $this;
    }
}
