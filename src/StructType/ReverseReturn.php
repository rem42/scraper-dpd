<?php

namespace Scraper\ScraperDPD\StructType;

/**
 * This class stands for ReverseReturn StructType
 */
class ReverseReturn extends ReverseReturnBase
{
    /**
     * The original_parcel
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var Parcel
     */
    public $original_parcel;

    /**
     * Constructor method for ReverseReturn
     *
     * @uses ReverseReturn::setOriginal_parcel()
     */
    public function __construct(?Parcel $original_parcel = null)
    {
        $this
            ->setOriginal_parcel($original_parcel)
        ;
    }

    /**
     * Get original_parcel value
     *
     * @return Parcel|null
     */
    public function getOriginal_parcel()
    {
        return $this->original_parcel;
    }

    /**
     * Set original_parcel value
     *
     * @return self
     */
    public function setOriginal_parcel(?Parcel $original_parcel = null)
    {
        $this->original_parcel = $original_parcel;
        return $this;
    }
}
