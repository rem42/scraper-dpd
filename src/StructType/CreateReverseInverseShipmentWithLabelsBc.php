<?php

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateReverseInverseShipmentWithLabelsBc StructType
 */
class CreateReverseInverseShipmentWithLabelsBc extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var ReverseShipmentLabelRequest
     */
    public $request;

    /**
     * Constructor method for CreateReverseInverseShipmentWithLabelsBc
     *
     * @uses CreateReverseInverseShipmentWithLabelsBc::setRequest()
     */
    public function __construct(?ReverseShipmentLabelRequest $request = null)
    {
        $this
            ->setRequest($request)
        ;
    }

    /**
     * Get request value
     *
     * @return ReverseShipmentLabelRequest|null
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
    public function setRequest(?ReverseShipmentLabelRequest $request = null)
    {
        $this->request = $request;
        return $this;
    }
}
