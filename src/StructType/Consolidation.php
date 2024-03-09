<?php

namespace Scraper\ScraperDPD\StructType;

/**
 * This class stands for Consolidation StructType
 */
class Consolidation extends DefaultService
{
    /**
     * The type
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     *
     * @var string
     */
    public $type;

    /**
     * Constructor method for Consolidation
     *
     * @uses Consolidation::setType()
     *
     * @param string $type
     */
    public function __construct($type = null)
    {
        $this
            ->setType($type)
        ;
    }

    /**
     * Get type value
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set type value
     *
     * @uses \Scraper\ScraperDPD\EnumType\EtypeConsolidation::valueIsValid()
     * @uses \Scraper\ScraperDPD\EnumType\EtypeConsolidation::getValidValues()
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
        if (!\Scraper\ScraperDPD\EnumType\EtypeConsolidation::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Scraper\ScraperDPD\EnumType\EtypeConsolidation', \is_array($type) ? implode(', ', $type) : var_export($type, true), implode(', ', \Scraper\ScraperDPD\EnumType\EtypeConsolidation::getValidValues())), __LINE__);
        }
        $this->type = $type;
        return $this;
    }
}
