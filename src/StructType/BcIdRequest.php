<?php

namespace Scraper\ScraperDPD\StructType;

/**
 * This class stands for BcIdRequest StructType
 */
class BcIdRequest extends BcIdBaseRequest
{
    /**
     * The Barcode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var BcData
     */
    public $Barcode;

    /**
     * Constructor method for BcIdRequest
     *
     * @uses BcIdRequest::setBarcode()
     */
    public function __construct(?BcData $barcode = null)
    {
        $this
            ->setBarcode($barcode)
        ;
    }

    /**
     * Get Barcode value
     *
     * @return BcData|null
     */
    public function getBarcode()
    {
        return $this->Barcode;
    }

    /**
     * Set Barcode value
     *
     * @return self
     */
    public function setBarcode(?BcData $barcode = null)
    {
        $this->Barcode = $barcode;
        return $this;
    }
}
