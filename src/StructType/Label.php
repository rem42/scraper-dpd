<?php

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Label StructType
 */
class Label extends AbstractStructBase
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
     * The label
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $label;

    /**
     * Constructor method for Label
     *
     * @uses Label::setType()
     * @uses Label::setLabel()
     *
     * @param string $type
     * @param string $label
     */
    public function __construct($type = null, $label = null)
    {
        $this
            ->setType($type)
            ->setLabel($label)
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
        $this->type = $type;
        return $this;
    }

    /**
     * Get label value
     *
     * @return string|null
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * Set label value
     *
     * @param string $label
     *
     * @return self
     */
    public function setLabel($label = null)
    {
        // validation for constraint: string
        if (null !== $label && !\is_string($label)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($label, true), \gettype($label)), __LINE__);
        }
        $this->label = $label;
        return $this;
    }
}
