<?php

namespace Scraper\ScraperDPD\StructType;

/**
 * This class stands for RetourServices StructType
 */
class RetourServices extends ServiceBaseList
{
    /**
     * The expireOffset
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     *
     * @var int
     */
    public $expireOffset;

    /**
     * Constructor method for RetourServices
     *
     * @uses RetourServices::setExpireOffset()
     *
     * @param int $expireOffset
     */
    public function __construct($expireOffset = null)
    {
        $this
            ->setExpireOffset($expireOffset)
        ;
    }

    /**
     * Get expireOffset value
     *
     * @return int
     */
    public function getExpireOffset()
    {
        return $this->expireOffset;
    }

    /**
     * Set expireOffset value
     *
     * @param int $expireOffset
     *
     * @return self
     */
    public function setExpireOffset($expireOffset = null)
    {
        // validation for constraint: int
        if (null !== $expireOffset && !(\is_int($expireOffset) || ctype_digit($expireOffset))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($expireOffset, true), \gettype($expireOffset)), __LINE__);
        }
        $this->expireOffset = $expireOffset;
        return $this;
    }
}
