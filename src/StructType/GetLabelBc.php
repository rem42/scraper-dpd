<?php

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetLabelBc StructType
 */
class GetLabelBc extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var ReceiveLabelBcRequest
     */
    public $request;

    /**
     * Constructor method for GetLabelBc
     *
     * @uses GetLabelBc::setRequest()
     */
    public function __construct(?ReceiveLabelBcRequest $request = null)
    {
        $this
            ->setRequest($request)
        ;
    }

    /**
     * Get request value
     *
     * @return ReceiveLabelBcRequest|null
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
    public function setRequest(?ReceiveLabelBcRequest $request = null)
    {
        $this->request = $request;
        return $this;
    }
}
