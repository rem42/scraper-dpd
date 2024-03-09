<?php

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RunActionResponse StructType
 */
class RunActionResponse_1 extends AbstractStructBase
{
    /**
     * The Response
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $Response;

    /**
     * Constructor method for RunActionResponse
     *
     * @uses RunActionResponse_1::setResponse()
     *
     * @param string $response
     */
    public function __construct($response = null)
    {
        $this
            ->setResponse($response)
        ;
    }

    /**
     * Get Response value
     *
     * @return string|null
     */
    public function getResponse()
    {
        return $this->Response;
    }

    /**
     * Set Response value
     *
     * @param string $response
     *
     * @return self
     */
    public function setResponse($response = null)
    {
        // validation for constraint: string
        if (null !== $response && !\is_string($response)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($response, true), \gettype($response)), __LINE__);
        }
        $this->Response = $response;
        return $this;
    }
}
