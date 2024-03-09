<?php

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetBic3RoutingResponse StructType
 */
class GetBic3RoutingResponse extends AbstractStructBase
{
    /**
     * The bic3
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     *
     * @var int
     */
    public $bic3;
    /**
     * The GetBic3RoutingResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var self
     */
    public $GetBic3RoutingResult;
    /**
     * The route
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var GeoRouting
     */
    public $route;

    /**
     * Constructor method for GetBic3RoutingResponse
     *
     * @uses GetBic3RoutingResponse::setBic3()
     * @uses GetBic3RoutingResponse::setGetBic3RoutingResult()
     * @uses GetBic3RoutingResponse::setRoute()
     *
     * @param int $bic3
     */
    public function __construct($bic3 = null, ?self $getBic3RoutingResult = null, ?GeoRouting $route = null)
    {
        $this
            ->setBic3($bic3)
            ->setGetBic3RoutingResult($getBic3RoutingResult)
            ->setRoute($route)
        ;
    }

    /**
     * Get bic3 value
     *
     * @return int
     */
    public function getBic3()
    {
        return $this->bic3;
    }

    /**
     * Set bic3 value
     *
     * @param int $bic3
     *
     * @return self
     */
    public function setBic3($bic3 = null)
    {
        // validation for constraint: int
        if (null !== $bic3 && !(\is_int($bic3) || ctype_digit($bic3))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($bic3, true), \gettype($bic3)), __LINE__);
        }
        $this->bic3 = $bic3;
        return $this;
    }

    /**
     * Get GetBic3RoutingResult value
     *
     * @return self|null
     */
    public function getGetBic3RoutingResult()
    {
        return $this->GetBic3RoutingResult;
    }

    /**
     * Set GetBic3RoutingResult value
     *
     * @return self
     */
    public function setGetBic3RoutingResult(?self $getBic3RoutingResult = null)
    {
        $this->GetBic3RoutingResult = $getBic3RoutingResult;
        return $this;
    }

    /**
     * Get route value
     *
     * @return GeoRouting|null
     */
    public function getRoute()
    {
        return $this->route;
    }

    /**
     * Set route value
     *
     * @return self
     */
    public function setRoute(?GeoRouting $route = null)
    {
        $this->route = $route;
        return $this;
    }
}
