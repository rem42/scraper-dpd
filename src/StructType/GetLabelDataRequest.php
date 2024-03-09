<?php

namespace Scraper\ScraperDPD\StructType;

/**
 * This class stands for GetLabelDataRequest StructType
 */
class GetLabelDataRequest extends ShipmentRequestBcBase
{
    /**
     * The Options
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     *
     * @var string
     */
    public $Options;

    /**
     * Constructor method for GetLabelDataRequest
     *
     * @uses GetLabelDataRequest::setOptions()
     *
     * @param string $options
     */
    public function __construct($options = null)
    {
        $this
            ->setOptions($options)
        ;
    }

    /**
     * Get Options value
     *
     * @return string
     */
    public function getOptions()
    {
        return $this->Options;
    }

    /**
     * Set Options value
     *
     * @uses \Scraper\ScraperDPD\EnumType\ELabelDataOptions::valueIsValid()
     * @uses \Scraper\ScraperDPD\EnumType\ELabelDataOptions::getValidValues()
     *
     * @param string $options
     *
     * @throws \InvalidArgumentException
     *
     * @return self
     */
    public function setOptions($options = null)
    {
        // validation for constraint: enumeration
        if (!\Scraper\ScraperDPD\EnumType\ELabelDataOptions::valueIsValid($options)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Scraper\ScraperDPD\EnumType\ELabelDataOptions', \is_array($options) ? implode(', ', $options) : var_export($options, true), implode(', ', \Scraper\ScraperDPD\EnumType\ELabelDataOptions::getValidValues())), __LINE__);
        }
        $this->Options = $options;
        return $this;
    }
}
