<?php

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CheckIfReverseInverseShipmentExists StructType
 */
class CheckIfReverseInverseShipmentExists extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var CheckIfReverseInverseShipmentExistsRequest
     */
    public $request;

    /**
     * Constructor method for CheckIfReverseInverseShipmentExists
     *
     * @uses CheckIfReverseInverseShipmentExists::setRequest()
     */
    public function __construct(?CheckIfReverseInverseShipmentExistsRequest $request = null)
    {
        $this
            ->setRequest($request)
        ;
    }

    /**
     * Get request value
     *
     * @return CheckIfReverseInverseShipmentExistsRequest|null
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
    public function setRequest(?CheckIfReverseInverseShipmentExistsRequest $request = null)
    {
        $this->request = $request;
        return $this;
    }
}
