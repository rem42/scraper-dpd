<?php

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GeoRoutingReverseRequest StructType
 */
class GeoRoutingReverseRequest extends AbstractStructBase
{
    /**
     * The originIso2Country
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $originIso2Country;
    /**
     * The originZipCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $originZipCode;
    /**
     * The originDepot
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $originDepot;
    /**
     * The destinationIso2Country
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $destinationIso2Country;
    /**
     * The destinationZipCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $destinationZipCode;
    /**
     * The soCodeReverse
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $soCodeReverse;
    /**
     * The retourShipperIso2Country
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $retourShipperIso2Country;
    /**
     * The retourShipperZipCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $retourShipperZipCode;
    /**
     * The retourIso2Country
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $retourIso2Country;
    /**
     * The retourZipCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $retourZipCode;
    /**
     * The soCodeRetour
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $soCodeRetour;
    /**
     * The date
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $date;

    /**
     * Constructor method for GeoRoutingReverseRequest
     *
     * @uses GeoRoutingReverseRequest::setOriginIso2Country()
     * @uses GeoRoutingReverseRequest::setOriginZipCode()
     * @uses GeoRoutingReverseRequest::setOriginDepot()
     * @uses GeoRoutingReverseRequest::setDestinationIso2Country()
     * @uses GeoRoutingReverseRequest::setDestinationZipCode()
     * @uses GeoRoutingReverseRequest::setSoCodeReverse()
     * @uses GeoRoutingReverseRequest::setRetourShipperIso2Country()
     * @uses GeoRoutingReverseRequest::setRetourShipperZipCode()
     * @uses GeoRoutingReverseRequest::setRetourIso2Country()
     * @uses GeoRoutingReverseRequest::setRetourZipCode()
     * @uses GeoRoutingReverseRequest::setSoCodeRetour()
     * @uses GeoRoutingReverseRequest::setDate()
     *
     * @param string $originIso2Country
     * @param string $originZipCode
     * @param string $originDepot
     * @param string $destinationIso2Country
     * @param string $destinationZipCode
     * @param string $soCodeReverse
     * @param string $retourShipperIso2Country
     * @param string $retourShipperZipCode
     * @param string $retourIso2Country
     * @param string $retourZipCode
     * @param string $soCodeRetour
     * @param string $date
     */
    public function __construct($originIso2Country = null, $originZipCode = null, $originDepot = null, $destinationIso2Country = null, $destinationZipCode = null, $soCodeReverse = null, $retourShipperIso2Country = null, $retourShipperZipCode = null, $retourIso2Country = null, $retourZipCode = null, $soCodeRetour = null, $date = null)
    {
        $this
            ->setOriginIso2Country($originIso2Country)
            ->setOriginZipCode($originZipCode)
            ->setOriginDepot($originDepot)
            ->setDestinationIso2Country($destinationIso2Country)
            ->setDestinationZipCode($destinationZipCode)
            ->setSoCodeReverse($soCodeReverse)
            ->setRetourShipperIso2Country($retourShipperIso2Country)
            ->setRetourShipperZipCode($retourShipperZipCode)
            ->setRetourIso2Country($retourIso2Country)
            ->setRetourZipCode($retourZipCode)
            ->setSoCodeRetour($soCodeRetour)
            ->setDate($date)
        ;
    }

    /**
     * Get originIso2Country value
     *
     * @return string|null
     */
    public function getOriginIso2Country()
    {
        return $this->originIso2Country;
    }

    /**
     * Set originIso2Country value
     *
     * @param string $originIso2Country
     *
     * @return self
     */
    public function setOriginIso2Country($originIso2Country = null)
    {
        // validation for constraint: string
        if (null !== $originIso2Country && !\is_string($originIso2Country)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($originIso2Country, true), \gettype($originIso2Country)), __LINE__);
        }
        $this->originIso2Country = $originIso2Country;
        return $this;
    }

    /**
     * Get originZipCode value
     *
     * @return string|null
     */
    public function getOriginZipCode()
    {
        return $this->originZipCode;
    }

    /**
     * Set originZipCode value
     *
     * @param string $originZipCode
     *
     * @return self
     */
    public function setOriginZipCode($originZipCode = null)
    {
        // validation for constraint: string
        if (null !== $originZipCode && !\is_string($originZipCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($originZipCode, true), \gettype($originZipCode)), __LINE__);
        }
        $this->originZipCode = $originZipCode;
        return $this;
    }

    /**
     * Get originDepot value
     *
     * @return string|null
     */
    public function getOriginDepot()
    {
        return $this->originDepot;
    }

    /**
     * Set originDepot value
     *
     * @param string $originDepot
     *
     * @return self
     */
    public function setOriginDepot($originDepot = null)
    {
        // validation for constraint: string
        if (null !== $originDepot && !\is_string($originDepot)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($originDepot, true), \gettype($originDepot)), __LINE__);
        }
        $this->originDepot = $originDepot;
        return $this;
    }

    /**
     * Get destinationIso2Country value
     *
     * @return string|null
     */
    public function getDestinationIso2Country()
    {
        return $this->destinationIso2Country;
    }

    /**
     * Set destinationIso2Country value
     *
     * @param string $destinationIso2Country
     *
     * @return self
     */
    public function setDestinationIso2Country($destinationIso2Country = null)
    {
        // validation for constraint: string
        if (null !== $destinationIso2Country && !\is_string($destinationIso2Country)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($destinationIso2Country, true), \gettype($destinationIso2Country)), __LINE__);
        }
        $this->destinationIso2Country = $destinationIso2Country;
        return $this;
    }

    /**
     * Get destinationZipCode value
     *
     * @return string|null
     */
    public function getDestinationZipCode()
    {
        return $this->destinationZipCode;
    }

    /**
     * Set destinationZipCode value
     *
     * @param string $destinationZipCode
     *
     * @return self
     */
    public function setDestinationZipCode($destinationZipCode = null)
    {
        // validation for constraint: string
        if (null !== $destinationZipCode && !\is_string($destinationZipCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($destinationZipCode, true), \gettype($destinationZipCode)), __LINE__);
        }
        $this->destinationZipCode = $destinationZipCode;
        return $this;
    }

    /**
     * Get soCodeReverse value
     *
     * @return string|null
     */
    public function getSoCodeReverse()
    {
        return $this->soCodeReverse;
    }

    /**
     * Set soCodeReverse value
     *
     * @param string $soCodeReverse
     *
     * @return self
     */
    public function setSoCodeReverse($soCodeReverse = null)
    {
        // validation for constraint: string
        if (null !== $soCodeReverse && !\is_string($soCodeReverse)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($soCodeReverse, true), \gettype($soCodeReverse)), __LINE__);
        }
        $this->soCodeReverse = $soCodeReverse;
        return $this;
    }

    /**
     * Get retourShipperIso2Country value
     *
     * @return string|null
     */
    public function getRetourShipperIso2Country()
    {
        return $this->retourShipperIso2Country;
    }

    /**
     * Set retourShipperIso2Country value
     *
     * @param string $retourShipperIso2Country
     *
     * @return self
     */
    public function setRetourShipperIso2Country($retourShipperIso2Country = null)
    {
        // validation for constraint: string
        if (null !== $retourShipperIso2Country && !\is_string($retourShipperIso2Country)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($retourShipperIso2Country, true), \gettype($retourShipperIso2Country)), __LINE__);
        }
        $this->retourShipperIso2Country = $retourShipperIso2Country;
        return $this;
    }

    /**
     * Get retourShipperZipCode value
     *
     * @return string|null
     */
    public function getRetourShipperZipCode()
    {
        return $this->retourShipperZipCode;
    }

    /**
     * Set retourShipperZipCode value
     *
     * @param string $retourShipperZipCode
     *
     * @return self
     */
    public function setRetourShipperZipCode($retourShipperZipCode = null)
    {
        // validation for constraint: string
        if (null !== $retourShipperZipCode && !\is_string($retourShipperZipCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($retourShipperZipCode, true), \gettype($retourShipperZipCode)), __LINE__);
        }
        $this->retourShipperZipCode = $retourShipperZipCode;
        return $this;
    }

    /**
     * Get retourIso2Country value
     *
     * @return string|null
     */
    public function getRetourIso2Country()
    {
        return $this->retourIso2Country;
    }

    /**
     * Set retourIso2Country value
     *
     * @param string $retourIso2Country
     *
     * @return self
     */
    public function setRetourIso2Country($retourIso2Country = null)
    {
        // validation for constraint: string
        if (null !== $retourIso2Country && !\is_string($retourIso2Country)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($retourIso2Country, true), \gettype($retourIso2Country)), __LINE__);
        }
        $this->retourIso2Country = $retourIso2Country;
        return $this;
    }

    /**
     * Get retourZipCode value
     *
     * @return string|null
     */
    public function getRetourZipCode()
    {
        return $this->retourZipCode;
    }

    /**
     * Set retourZipCode value
     *
     * @param string $retourZipCode
     *
     * @return self
     */
    public function setRetourZipCode($retourZipCode = null)
    {
        // validation for constraint: string
        if (null !== $retourZipCode && !\is_string($retourZipCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($retourZipCode, true), \gettype($retourZipCode)), __LINE__);
        }
        $this->retourZipCode = $retourZipCode;
        return $this;
    }

    /**
     * Get soCodeRetour value
     *
     * @return string|null
     */
    public function getSoCodeRetour()
    {
        return $this->soCodeRetour;
    }

    /**
     * Set soCodeRetour value
     *
     * @param string $soCodeRetour
     *
     * @return self
     */
    public function setSoCodeRetour($soCodeRetour = null)
    {
        // validation for constraint: string
        if (null !== $soCodeRetour && !\is_string($soCodeRetour)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($soCodeRetour, true), \gettype($soCodeRetour)), __LINE__);
        }
        $this->soCodeRetour = $soCodeRetour;
        return $this;
    }

    /**
     * Get date value
     *
     * @return string|null
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set date value
     *
     * @param string $date
     *
     * @return self
     */
    public function setDate($date = null)
    {
        // validation for constraint: string
        if (null !== $date && !\is_string($date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($date, true), \gettype($date)), __LINE__);
        }
        $this->date = $date;
        return $this;
    }
}
