<?php

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VerifyClientResponse StructType
 */
class VerifyClientResponse extends AbstractStructBase
{
    /**
     * The VerifyClientResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var VerifyResponse
     */
    public $VerifyClientResult;

    /**
     * Constructor method for VerifyClientResponse
     *
     * @uses VerifyClientResponse::setVerifyClientResult()
     */
    public function __construct(?VerifyResponse $verifyClientResult = null)
    {
        $this
            ->setVerifyClientResult($verifyClientResult)
        ;
    }

    /**
     * Get VerifyClientResult value
     *
     * @return VerifyResponse|null
     */
    public function getVerifyClientResult()
    {
        return $this->VerifyClientResult;
    }

    /**
     * Set VerifyClientResult value
     *
     * @return self
     */
    public function setVerifyClientResult(?VerifyResponse $verifyClientResult = null)
    {
        $this->VerifyClientResult = $verifyClientResult;
        return $this;
    }
}
