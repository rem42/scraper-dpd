<?php

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CheckIfReverseInverseShipmentExistsResponse StructType
 */
class CheckIfReverseInverseShipmentExistsResponse extends AbstractStructBase
{
    /**
     * The CheckIfReverseInverseShipmentExistsResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     *
     * @var string
     */
    public $CheckIfReverseInverseShipmentExistsResult;

    /**
     * Constructor method for CheckIfReverseInverseShipmentExistsResponse
     *
     * @uses CheckIfReverseInverseShipmentExistsResponse::setCheckIfReverseInverseShipmentExistsResult()
     *
     * @param string $checkIfReverseInverseShipmentExistsResult
     */
    public function __construct($checkIfReverseInverseShipmentExistsResult = null)
    {
        $this
            ->setCheckIfReverseInverseShipmentExistsResult($checkIfReverseInverseShipmentExistsResult)
        ;
    }

    /**
     * Get CheckIfReverseInverseShipmentExistsResult value
     *
     * @return string
     */
    public function getCheckIfReverseInverseShipmentExistsResult()
    {
        return $this->CheckIfReverseInverseShipmentExistsResult;
    }

    /**
     * Set CheckIfReverseInverseShipmentExistsResult value
     *
     * @uses \Scraper\ScraperDPD\EnumType\CheckReverseInverseShipmentReturn::valueIsValid()
     * @uses \Scraper\ScraperDPD\EnumType\CheckReverseInverseShipmentReturn::getValidValues()
     *
     * @param string $checkIfReverseInverseShipmentExistsResult
     *
     * @throws \InvalidArgumentException
     *
     * @return self
     */
    public function setCheckIfReverseInverseShipmentExistsResult($checkIfReverseInverseShipmentExistsResult = null)
    {
        // validation for constraint: enumeration
        if (!\Scraper\ScraperDPD\EnumType\CheckReverseInverseShipmentReturn::valueIsValid($checkIfReverseInverseShipmentExistsResult)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Scraper\ScraperDPD\EnumType\CheckReverseInverseShipmentReturn', \is_array($checkIfReverseInverseShipmentExistsResult) ? implode(', ', $checkIfReverseInverseShipmentExistsResult) : var_export($checkIfReverseInverseShipmentExistsResult, true), implode(', ', \Scraper\ScraperDPD\EnumType\CheckReverseInverseShipmentReturn::getValidValues())), __LINE__);
        }
        $this->CheckIfReverseInverseShipmentExistsResult = $checkIfReverseInverseShipmentExistsResult;
        return $this;
    }
}
