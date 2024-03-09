<?php

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VerifyConfiguration StructType
 */
class VerifyConfiguration extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var VerifyConfigurationRequest
     */
    public $request;

    /**
     * Constructor method for VerifyConfiguration
     *
     * @uses VerifyConfiguration::setRequest()
     */
    public function __construct(?VerifyConfigurationRequest $request = null)
    {
        $this
            ->setRequest($request)
        ;
    }

    /**
     * Get request value
     *
     * @return VerifyConfigurationRequest|null
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
    public function setRequest(?VerifyConfigurationRequest $request = null)
    {
        $this->request = $request;
        return $this;
    }
}
