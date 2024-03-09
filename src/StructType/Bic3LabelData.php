<?php

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Bic3LabelData StructType
 */
class Bic3LabelData extends AbstractStructBase
{
    /**
     * The mode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     *
     * @var string
     */
    public $mode;

    /**
     * Constructor method for Bic3LabelData
     *
     * @uses Bic3LabelData::setMode()
     *
     * @param string $mode
     */
    public function __construct($mode = null)
    {
        $this
            ->setMode($mode)
        ;
    }

    /**
     * Get mode value
     *
     * @return string
     */
    public function getMode()
    {
        return $this->mode;
    }

    /**
     * Set mode value
     *
     * @uses \Scraper\ScraperDPD\EnumType\EBic3Mode::valueIsValid()
     * @uses \Scraper\ScraperDPD\EnumType\EBic3Mode::getValidValues()
     *
     * @param string $mode
     *
     * @throws \InvalidArgumentException
     *
     * @return self
     */
    public function setMode($mode = null)
    {
        // validation for constraint: enumeration
        if (!\Scraper\ScraperDPD\EnumType\EBic3Mode::valueIsValid($mode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Scraper\ScraperDPD\EnumType\EBic3Mode', \is_array($mode) ? implode(', ', $mode) : var_export($mode, true), implode(', ', \Scraper\ScraperDPD\EnumType\EBic3Mode::getValidValues())), __LINE__);
        }
        $this->mode = $mode;
        return $this;
    }
}
