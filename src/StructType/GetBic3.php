<?php

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetBic3 StructType
 */
class GetBic3 extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var GetBic3Request
     */
    public $request;

    /**
     * Constructor method for GetBic3
     *
     * @uses GetBic3::setRequest()
     */
    public function __construct(?GetBic3Request $request = null)
    {
        $this
            ->setRequest($request)
        ;
    }

    /**
     * Get request value
     *
     * @return GetBic3Request|null
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * Set request value
     *
     * @return self
     */
    public function setRequest(?GetBic3Request $request = null)
    {
        $this->request = $request;
        return $this;
    }
}
