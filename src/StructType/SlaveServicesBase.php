<?php

namespace Scraper\ScraperDPD\StructType;

/**
 * This class stands for SlaveServicesBase StructType
 */
class SlaveServicesBase extends ServiceBaseList
{
    /**
     * The extraInsurance
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var ExtraInsurance
     */
    public $extraInsurance;

    /**
     * Constructor method for SlaveServicesBase
     *
     * @uses SlaveServicesBase::setExtraInsurance()
     */
    public function __construct(?ExtraInsurance $extraInsurance = null)
    {
        $this
            ->setExtraInsurance($extraInsurance)
        ;
    }

    /**
     * Get extraInsurance value
     *
     * @return ExtraInsurance|null
     */
    public function getExtraInsurance()
    {
        return $this->extraInsurance;
    }

    /**
     * Set extraInsurance value
     *
     * @return self
     */
    public function setExtraInsurance(?ExtraInsurance $extraInsurance = null)
    {
        $this->extraInsurance = $extraInsurance;
        return $this;
    }
}
