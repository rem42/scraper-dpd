<?php

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VerifyConfigurationResponse StructType
 */
class VerifyConfigurationResponse extends AbstractStructBase
{
    /**
     * The Allowed
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     *
     * @var bool
     */
    public $Allowed;
    /**
     * The VerifyConfigurationResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var self
     */
    public $VerifyConfigurationResult;

    /**
     * Constructor method for VerifyConfigurationResponse
     *
     * @uses VerifyConfigurationResponse::setAllowed()
     * @uses VerifyConfigurationResponse::setVerifyConfigurationResult()
     *
     * @param bool $allowed
     */
    public function __construct($allowed = null, ?self $verifyConfigurationResult = null)
    {
        $this
            ->setAllowed($allowed)
            ->setVerifyConfigurationResult($verifyConfigurationResult)
        ;
    }

    /**
     * Get Allowed value
     *
     * @return bool
     */
    public function getAllowed()
    {
        return $this->Allowed;
    }

    /**
     * Set Allowed value
     *
     * @param bool $allowed
     *
     * @return self
     */
    public function setAllowed($allowed = null)
    {
        // validation for constraint: boolean
        if (null !== $allowed && !\is_bool($allowed)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($allowed, true), \gettype($allowed)), __LINE__);
        }
        $this->Allowed = $allowed;
        return $this;
    }

    /**
     * Get VerifyConfigurationResult value
     *
     * @return self|null
     */
    public function getVerifyConfigurationResult()
    {
        return $this->VerifyConfigurationResult;
    }

    /**
     * Set VerifyConfigurationResult value
     *
     * @return self
     */
    public function setVerifyConfigurationResult(?self $verifyConfigurationResult = null)
    {
        $this->VerifyConfigurationResult = $verifyConfigurationResult;
        return $this;
    }
}
