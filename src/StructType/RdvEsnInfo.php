<?php

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RdvEsnInfo StructType
 */
class RdvEsnInfo extends AbstractStructBase
{
    /**
     * The CreateEsn
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     *
     * @var bool
     */
    public $CreateEsn;
    /**
     * The EsnDirective
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $EsnDirective;

    /**
     * Constructor method for RdvEsnInfo
     *
     * @uses RdvEsnInfo::setCreateEsn()
     * @uses RdvEsnInfo::setEsnDirective()
     *
     * @param bool   $createEsn
     * @param string $esnDirective
     */
    public function __construct($createEsn = null, $esnDirective = null)
    {
        $this
            ->setCreateEsn($createEsn)
            ->setEsnDirective($esnDirective)
        ;
    }

    /**
     * Get CreateEsn value
     *
     * @return bool
     */
    public function getCreateEsn()
    {
        return $this->CreateEsn;
    }

    /**
     * Set CreateEsn value
     *
     * @param bool $createEsn
     *
     * @return self
     */
    public function setCreateEsn($createEsn = null)
    {
        // validation for constraint: boolean
        if (null !== $createEsn && !\is_bool($createEsn)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($createEsn, true), \gettype($createEsn)), __LINE__);
        }
        $this->CreateEsn = $createEsn;
        return $this;
    }

    /**
     * Get EsnDirective value
     *
     * @return string|null
     */
    public function getEsnDirective()
    {
        return $this->EsnDirective;
    }

    /**
     * Set EsnDirective value
     *
     * @param string $esnDirective
     *
     * @return self
     */
    public function setEsnDirective($esnDirective = null)
    {
        // validation for constraint: string
        if (null !== $esnDirective && !\is_string($esnDirective)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($esnDirective, true), \gettype($esnDirective)), __LINE__);
        }
        $this->EsnDirective = $esnDirective;
        return $this;
    }
}
