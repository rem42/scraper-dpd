<?php

namespace Scraper\ScraperDPD\StructType;

/**
 * This class stands for ReverseBcReturn StructType
 */
class ReverseBcReturn extends ReverseReturnBase
{
    /**
     * The original_parcel
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var BcData
     */
    public $original_parcel;

    /**
     * Constructor method for ReverseBcReturn
     *
     * @uses ReverseBcReturn::setOriginal_parcel()
     */
    public function __construct(?BcData $original_parcel = null)
    {
        $this
            ->setOriginal_parcel($original_parcel)
        ;
    }

    /**
     * Get original_parcel value
     *
     * @return BcData|null
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
    public function setOriginal_parcel(?BcData $original_parcel = null)
    {
        $this->original_parcel = $original_parcel;
        return $this;
    }
}
