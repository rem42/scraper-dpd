<?php

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VerifyClient StructType
 */
class VerifyClient extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var VerifyRequest
     */
    public $request;

    /**
     * Constructor method for VerifyClient
     *
     * @uses VerifyClient::setRequest()
     */
    public function __construct(?VerifyRequest $request = null)
    {
        $this
            ->setRequest($request)
        ;
    }

    /**
     * Get request value
     *
     * @return VerifyRequest|null
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
    public function setRequest(?VerifyRequest $request = null)
    {
        $this->request = $request;
        return $this;
    }
}
