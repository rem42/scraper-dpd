<?php

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateShipmentWithLabelsBc StructType
 */
class CreateShipmentWithLabelsBc extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var StdShipmentLabelRequest
     */
    public $request;

    /**
     * Constructor method for CreateShipmentWithLabelsBc
     *
     * @uses CreateShipmentWithLabelsBc::setRequest()
     */
    public function __construct(?StdShipmentLabelRequest $request = null)
    {
        $this
            ->setRequest($request)
        ;
    }

    /**
     * Get request value
     *
     * @return StdShipmentLabelRequest|null
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
    public function setRequest(?StdShipmentLabelRequest $request = null)
    {
        $this->request = $request;
        return $this;
    }
}
