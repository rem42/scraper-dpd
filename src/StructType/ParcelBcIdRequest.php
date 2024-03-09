<?php

namespace Scraper\ScraperDPD\StructType;

/**
 * This class stands for ParcelBcIdRequest StructType
 */
class ParcelBcIdRequest extends BcIdBaseRequest
{
    /**
     * The Parcel
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var Parcel
     */
    public $Parcel;

    /**
     * Constructor method for ParcelBcIdRequest
     *
     * @uses ParcelBcIdRequest::setParcel()
     */
    public function __construct(?Parcel $parcel = null)
    {
        $this
            ->setParcel($parcel)
        ;
    }

    /**
     * Get Parcel value
     *
     * @return Parcel|null
     */
    public function getParcel()
    {
        return $this->Parcel;
    }

    /**
     * Set Parcel value
     *
     * @return self
     */
    public function setParcel(?Parcel $parcel = null)
    {
        $this->Parcel = $parcel;
        return $this;
    }
}
