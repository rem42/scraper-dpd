<?php

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetRetourLabel StructType
 */
class GetRetourLabel extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var ReceiveRetourLabelRequest
     */
    public $request;

    /**
     * Constructor method for GetRetourLabel
     *
     * @uses GetRetourLabel::setRequest()
     */
    public function __construct(?ReceiveRetourLabelRequest $request = null)
    {
        $this
            ->setRequest($request)
        ;
    }

    /**
     * Get request value
     *
     * @return ReceiveRetourLabelRequest|null
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
    public function setRequest(?ReceiveRetourLabelRequest $request = null)
    {
        $this->request = $request;
        return $this;
    }
}
