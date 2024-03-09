<?php

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GeoRouting StructType
 */
class GeoRouting extends AbstractStructBase
{
    /**
     * The barcodeId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $barcodeId;
    /**
     * The barcodePostcode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $barcodePostcode;
    /**
     * The buAlphaStr
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $buAlphaStr;
    /**
     * The buCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $buCode;
    /**
     * The cSort
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $cSort;
    /**
     * The dCountry
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $dCountry;
    /**
     * The dDepot
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $dDepot;
    /**
     * The dDepotCountry
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $dDepotCountry;
    /**
     * The dDepotStr
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $dDepotStr;
    /**
     * The dSort
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $dSort;
    /**
     * The networkCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $networkCode;
    /**
     * The oSort
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $oSort;
    /**
     * The partnerCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $partnerCode;
    /**
     * The routingText
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $routingText;
    /**
     * The sSort
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $sSort;
    /**
     * The serviceMark
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $serviceMark;
    /**
     * The serviceText
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $serviceText;
    /**
     * The version
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $version;
    /**
     * The soCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $soCode;

    /**
     * Constructor method for GeoRouting
     *
     * @uses GeoRouting::setBarcodeId()
     * @uses GeoRouting::setBarcodePostcode()
     * @uses GeoRouting::setBuAlphaStr()
     * @uses GeoRouting::setBuCode()
     * @uses GeoRouting::setCSort()
     * @uses GeoRouting::setDCountry()
     * @uses GeoRouting::setDDepot()
     * @uses GeoRouting::setDDepotCountry()
     * @uses GeoRouting::setDDepotStr()
     * @uses GeoRouting::setDSort()
     * @uses GeoRouting::setNetworkCode()
     * @uses GeoRouting::setOSort()
     * @uses GeoRouting::setPartnerCode()
     * @uses GeoRouting::setRoutingText()
     * @uses GeoRouting::setSSort()
     * @uses GeoRouting::setServiceMark()
     * @uses GeoRouting::setServiceText()
     * @uses GeoRouting::setVersion()
     * @uses GeoRouting::setSoCode()
     *
     * @param string $barcodeId
     * @param string $barcodePostcode
     * @param string $buAlphaStr
     * @param string $buCode
     * @param string $cSort
     * @param string $dCountry
     * @param string $dDepot
     * @param string $dDepotCountry
     * @param string $dDepotStr
     * @param string $dSort
     * @param string $networkCode
     * @param string $oSort
     * @param string $partnerCode
     * @param string $routingText
     * @param string $sSort
     * @param string $serviceMark
     * @param string $serviceText
     * @param string $version
     * @param string $soCode
     */
    public function __construct($barcodeId = null, $barcodePostcode = null, $buAlphaStr = null, $buCode = null, $cSort = null, $dCountry = null, $dDepot = null, $dDepotCountry = null, $dDepotStr = null, $dSort = null, $networkCode = null, $oSort = null, $partnerCode = null, $routingText = null, $sSort = null, $serviceMark = null, $serviceText = null, $version = null, $soCode = null)
    {
        $this
            ->setBarcodeId($barcodeId)
            ->setBarcodePostcode($barcodePostcode)
            ->setBuAlphaStr($buAlphaStr)
            ->setBuCode($buCode)
            ->setCSort($cSort)
            ->setDCountry($dCountry)
            ->setDDepot($dDepot)
            ->setDDepotCountry($dDepotCountry)
            ->setDDepotStr($dDepotStr)
            ->setDSort($dSort)
            ->setNetworkCode($networkCode)
            ->setOSort($oSort)
            ->setPartnerCode($partnerCode)
            ->setRoutingText($routingText)
            ->setSSort($sSort)
            ->setServiceMark($serviceMark)
            ->setServiceText($serviceText)
            ->setVersion($version)
            ->setSoCode($soCode)
        ;
    }

    /**
     * Get barcodeId value
     *
     * @return string|null
     */
    public function getBarcodeId()
    {
        return $this->barcodeId;
    }

    /**
     * Set barcodeId value
     *
     * @param string $barcodeId
     *
     * @return self
     */
    public function setBarcodeId($barcodeId = null)
    {
        // validation for constraint: string
        if (null !== $barcodeId && !\is_string($barcodeId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($barcodeId, true), \gettype($barcodeId)), __LINE__);
        }
        $this->barcodeId = $barcodeId;
        return $this;
    }

    /**
     * Get barcodePostcode value
     *
     * @return string|null
     */
    public function getBarcodePostcode()
    {
        return $this->barcodePostcode;
    }

    /**
     * Set barcodePostcode value
     *
     * @param string $barcodePostcode
     *
     * @return self
     */
    public function setBarcodePostcode($barcodePostcode = null)
    {
        // validation for constraint: string
        if (null !== $barcodePostcode && !\is_string($barcodePostcode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($barcodePostcode, true), \gettype($barcodePostcode)), __LINE__);
        }
        $this->barcodePostcode = $barcodePostcode;
        return $this;
    }

    /**
     * Get buAlphaStr value
     *
     * @return string|null
     */
    public function getBuAlphaStr()
    {
        return $this->buAlphaStr;
    }

    /**
     * Set buAlphaStr value
     *
     * @param string $buAlphaStr
     *
     * @return self
     */
    public function setBuAlphaStr($buAlphaStr = null)
    {
        // validation for constraint: string
        if (null !== $buAlphaStr && !\is_string($buAlphaStr)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($buAlphaStr, true), \gettype($buAlphaStr)), __LINE__);
        }
        $this->buAlphaStr = $buAlphaStr;
        return $this;
    }

    /**
     * Get buCode value
     *
     * @return string|null
     */
    public function getBuCode()
    {
        return $this->buCode;
    }

    /**
     * Set buCode value
     *
     * @param string $buCode
     *
     * @return self
     */
    public function setBuCode($buCode = null)
    {
        // validation for constraint: string
        if (null !== $buCode && !\is_string($buCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($buCode, true), \gettype($buCode)), __LINE__);
        }
        $this->buCode = $buCode;
        return $this;
    }

    /**
     * Get cSort value
     *
     * @return string|null
     */
    public function getCSort()
    {
        return $this->cSort;
    }

    /**
     * Set cSort value
     *
     * @param string $cSort
     *
     * @return self
     */
    public function setCSort($cSort = null)
    {
        // validation for constraint: string
        if (null !== $cSort && !\is_string($cSort)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cSort, true), \gettype($cSort)), __LINE__);
        }
        $this->cSort = $cSort;
        return $this;
    }

    /**
     * Get dCountry value
     *
     * @return string|null
     */
    public function getDCountry()
    {
        return $this->dCountry;
    }

    /**
     * Set dCountry value
     *
     * @param string $dCountry
     *
     * @return self
     */
    public function setDCountry($dCountry = null)
    {
        // validation for constraint: string
        if (null !== $dCountry && !\is_string($dCountry)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dCountry, true), \gettype($dCountry)), __LINE__);
        }
        $this->dCountry = $dCountry;
        return $this;
    }

    /**
     * Get dDepot value
     *
     * @return string|null
     */
    public function getDDepot()
    {
        return $this->dDepot;
    }

    /**
     * Set dDepot value
     *
     * @param string $dDepot
     *
     * @return self
     */
    public function setDDepot($dDepot = null)
    {
        // validation for constraint: string
        if (null !== $dDepot && !\is_string($dDepot)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dDepot, true), \gettype($dDepot)), __LINE__);
        }
        $this->dDepot = $dDepot;
        return $this;
    }

    /**
     * Get dDepotCountry value
     *
     * @return string|null
     */
    public function getDDepotCountry()
    {
        return $this->dDepotCountry;
    }

    /**
     * Set dDepotCountry value
     *
     * @param string $dDepotCountry
     *
     * @return self
     */
    public function setDDepotCountry($dDepotCountry = null)
    {
        // validation for constraint: string
        if (null !== $dDepotCountry && !\is_string($dDepotCountry)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dDepotCountry, true), \gettype($dDepotCountry)), __LINE__);
        }
        $this->dDepotCountry = $dDepotCountry;
        return $this;
    }

    /**
     * Get dDepotStr value
     *
     * @return string|null
     */
    public function getDDepotStr()
    {
        return $this->dDepotStr;
    }

    /**
     * Set dDepotStr value
     *
     * @param string $dDepotStr
     *
     * @return self
     */
    public function setDDepotStr($dDepotStr = null)
    {
        // validation for constraint: string
        if (null !== $dDepotStr && !\is_string($dDepotStr)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dDepotStr, true), \gettype($dDepotStr)), __LINE__);
        }
        $this->dDepotStr = $dDepotStr;
        return $this;
    }

    /**
     * Get dSort value
     *
     * @return string|null
     */
    public function getDSort()
    {
        return $this->dSort;
    }

    /**
     * Set dSort value
     *
     * @param string $dSort
     *
     * @return self
     */
    public function setDSort($dSort = null)
    {
        // validation for constraint: string
        if (null !== $dSort && !\is_string($dSort)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dSort, true), \gettype($dSort)), __LINE__);
        }
        $this->dSort = $dSort;
        return $this;
    }

    /**
     * Get networkCode value
     *
     * @return string|null
     */
    public function getNetworkCode()
    {
        return $this->networkCode;
    }

    /**
     * Set networkCode value
     *
     * @param string $networkCode
     *
     * @return self
     */
    public function setNetworkCode($networkCode = null)
    {
        // validation for constraint: string
        if (null !== $networkCode && !\is_string($networkCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($networkCode, true), \gettype($networkCode)), __LINE__);
        }
        $this->networkCode = $networkCode;
        return $this;
    }

    /**
     * Get oSort value
     *
     * @return string|null
     */
    public function getOSort()
    {
        return $this->oSort;
    }

    /**
     * Set oSort value
     *
     * @param string $oSort
     *
     * @return self
     */
    public function setOSort($oSort = null)
    {
        // validation for constraint: string
        if (null !== $oSort && !\is_string($oSort)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($oSort, true), \gettype($oSort)), __LINE__);
        }
        $this->oSort = $oSort;
        return $this;
    }

    /**
     * Get partnerCode value
     *
     * @return string|null
     */
    public function getPartnerCode()
    {
        return $this->partnerCode;
    }

    /**
     * Set partnerCode value
     *
     * @param string $partnerCode
     *
     * @return self
     */
    public function setPartnerCode($partnerCode = null)
    {
        // validation for constraint: string
        if (null !== $partnerCode && !\is_string($partnerCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($partnerCode, true), \gettype($partnerCode)), __LINE__);
        }
        $this->partnerCode = $partnerCode;
        return $this;
    }

    /**
     * Get routingText value
     *
     * @return string|null
     */
    public function getRoutingText()
    {
        return $this->routingText;
    }

    /**
     * Set routingText value
     *
     * @param string $routingText
     *
     * @return self
     */
    public function setRoutingText($routingText = null)
    {
        // validation for constraint: string
        if (null !== $routingText && !\is_string($routingText)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($routingText, true), \gettype($routingText)), __LINE__);
        }
        $this->routingText = $routingText;
        return $this;
    }

    /**
     * Get sSort value
     *
     * @return string|null
     */
    public function getSSort()
    {
        return $this->sSort;
    }

    /**
     * Set sSort value
     *
     * @param string $sSort
     *
     * @return self
     */
    public function setSSort($sSort = null)
    {
        // validation for constraint: string
        if (null !== $sSort && !\is_string($sSort)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sSort, true), \gettype($sSort)), __LINE__);
        }
        $this->sSort = $sSort;
        return $this;
    }

    /**
     * Get serviceMark value
     *
     * @return string|null
     */
    public function getServiceMark()
    {
        return $this->serviceMark;
    }

    /**
     * Set serviceMark value
     *
     * @param string $serviceMark
     *
     * @return self
     */
    public function setServiceMark($serviceMark = null)
    {
        // validation for constraint: string
        if (null !== $serviceMark && !\is_string($serviceMark)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($serviceMark, true), \gettype($serviceMark)), __LINE__);
        }
        $this->serviceMark = $serviceMark;
        return $this;
    }

    /**
     * Get serviceText value
     *
     * @return string|null
     */
    public function getServiceText()
    {
        return $this->serviceText;
    }

    /**
     * Set serviceText value
     *
     * @param string $serviceText
     *
     * @return self
     */
    public function setServiceText($serviceText = null)
    {
        // validation for constraint: string
        if (null !== $serviceText && !\is_string($serviceText)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($serviceText, true), \gettype($serviceText)), __LINE__);
        }
        $this->serviceText = $serviceText;
        return $this;
    }

    /**
     * Get version value
     *
     * @return string|null
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Set version value
     *
     * @param string $version
     *
     * @return self
     */
    public function setVersion($version = null)
    {
        // validation for constraint: string
        if (null !== $version && !\is_string($version)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($version, true), \gettype($version)), __LINE__);
        }
        $this->version = $version;
        return $this;
    }

    /**
     * Get soCode value
     *
     * @return string|null
     */
    public function getSoCode()
    {
        return $this->soCode;
    }

    /**
     * Set soCode value
     *
     * @param string $soCode
     *
     * @return self
     */
    public function setSoCode($soCode = null)
    {
        // validation for constraint: string
        if (null !== $soCode && !\is_string($soCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($soCode, true), \gettype($soCode)), __LINE__);
        }
        $this->soCode = $soCode;
        return $this;
    }
}
