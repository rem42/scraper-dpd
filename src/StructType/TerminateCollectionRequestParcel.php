<?php

namespace Scraper\ScraperDPD\StructType;

/**
 * This class stands for TerminateCollectionRequestParcel StructType
 */
class TerminateCollectionRequestParcel extends TerminateCollectionRequestBase
{
    /**
     * The parcel
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var Parcel
     */
    public $parcel;

    /**
     * Constructor method for TerminateCollectionRequestParcel
     *
     * @uses TerminateCollectionRequestParcel::setParcel()
     */
    public function __construct(?Parcel $parcel = null)
    {
        $this
            ->setParcel($parcel)
        ;
    }

    /**
     * Get parcel value
     *
     * @return Parcel|null
     */
    public function getParcel()
    {
        return $this->parcel;
    }

    /**
     * Set parcel value
     *
     * @return self
     */
    public function setParcel(?Parcel $parcel = null)
    {
        $this->parcel = $parcel;
        return $this;
    }
}
