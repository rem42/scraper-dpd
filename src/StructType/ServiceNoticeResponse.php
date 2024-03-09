<?php

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ServiceNoticeResponse StructType
 */
class ServiceNoticeResponse extends AbstractStructBase
{
    /**
     * The servicenotices
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var \Scraper\ScraperDPD\ArrayType\ArrayOfServiceNotice
     */
    public $servicenotices;

    /**
     * Constructor method for ServiceNoticeResponse
     *
     * @uses ServiceNoticeResponse::setServicenotices()
     */
    public function __construct(?\Scraper\ScraperDPD\ArrayType\ArrayOfServiceNotice $servicenotices = null)
    {
        $this
            ->setServicenotices($servicenotices)
        ;
    }

    /**
     * Get servicenotices value
     *
     * @return \Scraper\ScraperDPD\ArrayType\ArrayOfServiceNotice|null
     */
    public function getServicenotices()
    {
        return $this->servicenotices;
    }

    /**
     * Set servicenotices value
     *
     * @return self
     */
    public function setServicenotices(?\Scraper\ScraperDPD\ArrayType\ArrayOfServiceNotice $servicenotices = null)
    {
        $this->servicenotices = $servicenotices;
        return $this;
    }
}
