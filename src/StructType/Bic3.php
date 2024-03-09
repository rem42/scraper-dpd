<?php

namespace Scraper\ScraperDPD\StructType;

/**
 * This class stands for Bic3 StructType
 */
class Bic3 extends AppendOptionsBase
{
    /**
     * The generateBic3
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     *
     * @var bool
     */
    public $generateBic3;

    /**
     * Constructor method for Bic3
     *
     * @uses Bic3::setGenerateBic3()
     *
     * @param bool $generateBic3
     */
    public function __construct($generateBic3 = null)
    {
        $this
            ->setGenerateBic3($generateBic3)
        ;
    }

    /**
     * Get generateBic3 value
     *
     * @return bool
     */
    public function getGenerateBic3()
    {
        return $this->generateBic3;
    }

    /**
     * Set generateBic3 value
     *
     * @param bool $generateBic3
     *
     * @return self
     */
    public function setGenerateBic3($generateBic3 = null)
    {
        // validation for constraint: boolean
        if (null !== $generateBic3 && !\is_bool($generateBic3)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($generateBic3, true), \gettype($generateBic3)), __LINE__);
        }
        $this->generateBic3 = $generateBic3;
        return $this;
    }
}
