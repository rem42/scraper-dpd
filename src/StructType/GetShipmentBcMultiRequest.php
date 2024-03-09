<?php

namespace Scraper\ScraperDPD\StructType;

/**
 * This class stands for GetShipmentBcMultiRequest StructType
 */
class GetShipmentBcMultiRequest extends ShipmentRequestBc
{
    /**
     * The LinkedType
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     *
     * @var string
     */
    public $LinkedType;

    /**
     * Constructor method for GetShipmentBcMultiRequest
     *
     * @uses GetShipmentBcMultiRequest::setLinkedType()
     *
     * @param string $linkedType
     */
    public function __construct($linkedType = null)
    {
        $this
            ->setLinkedType($linkedType)
        ;
    }

    /**
     * Get LinkedType value
     *
     * @return string
     */
    public function getLinkedType()
    {
        return $this->LinkedType;
    }

    /**
     * Set LinkedType value
     *
     * @uses \Scraper\ScraperDPD\EnumType\ELinkedType::valueIsValid()
     * @uses \Scraper\ScraperDPD\EnumType\ELinkedType::getValidValues()
     *
     * @param string $linkedType
     *
     * @throws \InvalidArgumentException
     *
     * @return self
     */
    public function setLinkedType($linkedType = null)
    {
        // validation for constraint: enumeration
        if (!\Scraper\ScraperDPD\EnumType\ELinkedType::valueIsValid($linkedType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Scraper\ScraperDPD\EnumType\ELinkedType', \is_array($linkedType) ? implode(', ', $linkedType) : var_export($linkedType, true), implode(', ', \Scraper\ScraperDPD\EnumType\ELinkedType::getValidValues())), __LINE__);
        }
        $this->LinkedType = $linkedType;
        return $this;
    }
}
