<?php

namespace Scraper\ScraperDPD\StructType;

/**
 * This class stands for SlaveServices StructType
 */
class SlaveServices extends SlaveServicesBase
{
    /**
     * The marketing
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var Marketing
     */
    public $marketing;

    /**
     * Constructor method for SlaveServices
     *
     * @uses SlaveServices::setMarketing()
     */
    public function __construct(?Marketing $marketing = null)
    {
        $this
            ->setMarketing($marketing)
        ;
    }

    /**
     * Get marketing value
     *
     * @return Marketing|null
     */
    public function getMarketing()
    {
        return $this->marketing;
    }

    /**
     * Set marketing value
     *
     * @return self
     */
    public function setMarketing(?Marketing $marketing = null)
    {
        $this->marketing = $marketing;
        return $this;
    }
}
