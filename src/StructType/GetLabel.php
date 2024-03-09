<?php

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetLabel StructType
 */
class GetLabel extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var ReceiveLabelRequest
     */
    public $request;

    /**
     * Constructor method for GetLabel
     *
     * @uses GetLabel::setRequest()
     */
    public function __construct(?ReceiveLabelRequest $request = null)
    {
        $this
            ->setRequest($request)
        ;
    }

    /**
     * Get request value
     *
     * @return ReceiveLabelRequest|null
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
    public function setRequest(?ReceiveLabelRequest $request = null)
    {
        $this->request = $request;
        return $this;
    }
}
