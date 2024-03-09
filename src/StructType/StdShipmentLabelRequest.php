<?php

namespace Scraper\ScraperDPD\StructType;

/**
 * This class stands for StdShipmentLabelRequest StructType
 */
class StdShipmentLabelRequest extends StdShipmentLabelBaseRequest
{
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
     * The overrideShipperLabelAddress
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var Address
     */
    public $overrideShipperLabelAddress;
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
     * Constructor method for StdShipmentLabelRequest
     *
     * @uses StdShipmentLabelRequest::setBic3data()
     * @uses StdShipmentLabelRequest::setOverrideShipperLabelAddress()
     * @uses StdShipmentLabelRequest::setInjectionHub()
     * @uses StdShipmentLabelRequest::setRefnrasbarcode()
     * @uses StdShipmentLabelRequest::setReferenceInBarcode()
     *
     * @param string $injectionHub
     * @param bool   $refnrasbarcode
     */
    public function __construct(?Bic3LabelData $bic3data = null, ?Address $overrideShipperLabelAddress = null, $injectionHub = null, $refnrasbarcode = null, ?ReferenceInBarcode $referenceInBarcode = null)
    {
        $this
            ->setBic3data($bic3data)
            ->setOverrideShipperLabelAddress($overrideShipperLabelAddress)
            ->setInjectionHub($injectionHub)
            ->setRefnrasbarcode($refnrasbarcode)
            ->setReferenceInBarcode($referenceInBarcode)
        ;
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
}
