<?php

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CustomerSmall StructType
 */
class CustomerSmall extends AbstractStructBase
{
    /**
     * The centernumber
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     *
     * @var int
     */
    public $centernumber;
    /**
     * The number
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     *
     * @var int
     */
    public $number;

    /**
     * Constructor method for CustomerSmall
     *
     * @uses CustomerSmall::setCenternumber()
     * @uses CustomerSmall::setNumber()
     *
     * @param int $centernumber
     * @param int $number
     */
    public function __construct($centernumber = null, $number = null)
    {
        $this
            ->setCenternumber($centernumber)
            ->setNumber($number)
        ;
    }

    /**
     * Get centernumber value
     *
     * @return int
     */
    public function getCenternumber()
    {
        return $this->centernumber;
    }

    /**
     * Set centernumber value
     *
     * @param int $centernumber
     *
     * @return self
     */
    public function setCenternumber($centernumber = null)
    {
        // validation for constraint: int
        if (null !== $centernumber && !(\is_int($centernumber) || ctype_digit($centernumber))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($centernumber, true), \gettype($centernumber)), __LINE__);
        }
        $this->centernumber = $centernumber;
        return $this;
    }

    /**
     * Get number value
     *
     * @return int
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Set number value
     *
     * @param int $number
     *
     * @return self
     */
    public function setNumber($number = null)
    {
        // validation for constraint: int
        if (null !== $number && !(\is_int($number) || ctype_digit($number))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($number, true), \gettype($number)), __LINE__);
        }
        $this->number = $number;
        return $this;
    }
}
