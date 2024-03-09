<?php

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetRetourLabelBc StructType
 */
class GetRetourLabelBc extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var ReceiveRetourLabelBcRequest
     */
    public $request;

    /**
     * Constructor method for GetRetourLabelBc
     *
     * @uses GetRetourLabelBc::setRequest()
     */
    public function __construct(?ReceiveRetourLabelBcRequest $request = null)
    {
        $this
            ->setRequest($request)
        ;
    }

    /**
     * Get request value
     *
     * @return ReceiveRetourLabelBcRequest|null
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
    public function setRequest(?ReceiveRetourLabelBcRequest $request = null)
    {
        $this->request = $request;
        return $this;
    }
}
