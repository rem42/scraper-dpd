<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

/**
 * This class stands for TerminateCollectionRequestParcel StructType
 */
#[\AllowDynamicProperties]
class TerminateCollectionRequestParcel extends TerminateCollectionRequestBase
{
    /**
     * The parcel
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?Parcel $parcel = null;

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
     */
    public function getParcel(): ?Parcel
    {
        return $this->parcel;
    }

    /**
     * Set parcel value
     */
    public function setParcel(?Parcel $parcel = null): self
    {
        $this->parcel = $parcel;

        return $this;
    }
}
