<?php

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetShippingResponse StructType
 */
class GetShippingResponse extends AbstractStructBase
{
    /**
     * The GetShippingResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var self
     */
    public $GetShippingResult;
    /**
     * The shippings
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var \Scraper\ScraperDPD\ArrayType\ArrayOfShipping
     */
    public $shippings;

    /**
     * Constructor method for GetShippingResponse
     *
     * @uses GetShippingResponse::setGetShippingResult()
     * @uses GetShippingResponse::setShippings()
     */
    public function __construct(?self $getShippingResult = null, ?\Scraper\ScraperDPD\ArrayType\ArrayOfShipping $shippings = null)
    {
        $this
            ->setGetShippingResult($getShippingResult)
            ->setShippings($shippings)
        ;
    }

    /**
     * Get GetShippingResult value
     *
     * @return self|null
     */
    public function getGetShippingResult()
    {
        return $this->GetShippingResult;
    }

    /**
     * Set GetShippingResult value
     *
     * @return self
     */
    public function setGetShippingResult(?self $getShippingResult = null)
    {
        $this->GetShippingResult = $getShippingResult;
        return $this;
    }

    /**
     * Get shippings value
     *
     * @return \Scraper\ScraperDPD\ArrayType\ArrayOfShipping|null
     */
    public function getShippings()
    {
        return $this->shippings;
    }

    /**
     * Set shippings value
     *
     * @return self
     */
    public function setShippings(?\Scraper\ScraperDPD\ArrayType\ArrayOfShipping $shippings = null)
    {
        $this->shippings = $shippings;
        return $this;
    }
}
