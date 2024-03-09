<?php

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReceiveLabelRequestBase StructType
 */
abstract class ReceiveLabelRequestBase extends AbstractStructBase
{
    /**
     * The overrideShipperLabelAddress
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var Address
     */
    public $overrideShipperLabelAddress;
    /**
     * The refnrasbarcode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var bool
     */
    public $refnrasbarcode;
    /**
     * The referenceInBarcode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var ReferenceInBarcode
     */
    public $referenceInBarcode;
    /**
     * The bic3data
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var Bic3LabelData
     */
    public $bic3data;
    /**
     * The injectionHub
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $injectionHub;
    /**
     * The labelType
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var LabelType
     */
    public $labelType;

    /**
     * Constructor method for ReceiveLabelRequestBase
     *
     * @uses ReceiveLabelRequestBase::setOverrideShipperLabelAddress()
     * @uses ReceiveLabelRequestBase::setRefnrasbarcode()
     * @uses ReceiveLabelRequestBase::setReferenceInBarcode()
     * @uses ReceiveLabelRequestBase::setBic3data()
     * @uses ReceiveLabelRequestBase::setInjectionHub()
     * @uses ReceiveLabelRequestBase::setLabelType()
     *
     * @param bool   $refnrasbarcode
     * @param string $injectionHub
     */
    public function __construct(?Address $overrideShipperLabelAddress = null, $refnrasbarcode = null, ?ReferenceInBarcode $referenceInBarcode = null, ?Bic3LabelData $bic3data = null, $injectionHub = null, ?LabelType $labelType = null)
    {
        $this
            ->setOverrideShipperLabelAddress($overrideShipperLabelAddress)
            ->setRefnrasbarcode($refnrasbarcode)
            ->setReferenceInBarcode($referenceInBarcode)
            ->setBic3data($bic3data)
            ->setInjectionHub($injectionHub)
            ->setLabelType($labelType)
        ;
    }

    /**
     * Get overrideShipperLabelAddress value
     *
     * @return Address|null
     */
    public function getOverrideShipperLabelAddress()
    {
        return $this->overrideShipperLabelAddress;
    }

    /**
     * Set overrideShipperLabelAddress value
     *
     * @return self
     */
    public function setOverrideShipperLabelAddress(?Address $overrideShipperLabelAddress = null)
    {
        $this->overrideShipperLabelAddress = $overrideShipperLabelAddress;
        return $this;
    }

    /**
     * Get refnrasbarcode value
     *
     * @return bool|null
     */
    public function getRefnrasbarcode()
    {
        return $this->refnrasbarcode;
    }

    /**
     * Set refnrasbarcode value
     *
     * @param bool $refnrasbarcode
     *
     * @return self
     */
    public function setRefnrasbarcode($refnrasbarcode = null)
    {
        // validation for constraint: boolean
        if (null !== $refnrasbarcode && !\is_bool($refnrasbarcode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($refnrasbarcode, true), \gettype($refnrasbarcode)), __LINE__);
        }
        $this->refnrasbarcode = $refnrasbarcode;
        return $this;
    }

    /**
     * Get referenceInBarcode value
     *
     * @return ReferenceInBarcode|null
     */
    public function getReferenceInBarcode()
    {
        return $this->referenceInBarcode;
    }

    /**
     * Set referenceInBarcode value
     *
     * @return self
     */
    public function setReferenceInBarcode(?ReferenceInBarcode $referenceInBarcode = null)
    {
        $this->referenceInBarcode = $referenceInBarcode;
        return $this;
    }

    /**
     * Get bic3data value
     *
     * @return Bic3LabelData|null
     */
    public function getBic3data()
    {
        return $this->bic3data;
    }

    /**
     * Set bic3data value
     *
     * @return self
     */
    public function setBic3data(?Bic3LabelData $bic3data = null)
    {
        $this->bic3data = $bic3data;
        return $this;
    }

    /**
     * Get injectionHub value
     *
     * @return string|null
     */
    public function getInjectionHub()
    {
        return $this->injectionHub;
    }

    /**
     * Set injectionHub value
     *
     * @param string $injectionHub
     *
     * @return self
     */
    public function setInjectionHub($injectionHub = null)
    {
        // validation for constraint: string
        if (null !== $injectionHub && !\is_string($injectionHub)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($injectionHub, true), \gettype($injectionHub)), __LINE__);
        }
        $this->injectionHub = $injectionHub;
        return $this;
    }

    /**
     * Get labelType value
     *
     * @return LabelType|null
     */
    public function getLabelType()
    {
        return $this->labelType;
    }

    /**
     * Set labelType value
     *
     * @return self
     */
    public function setLabelType(?LabelType $labelType = null)
    {
        $this->labelType = $labelType;
        return $this;
    }
}
