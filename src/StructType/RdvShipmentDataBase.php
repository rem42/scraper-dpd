<?php

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RdvShipmentDataBase StructType
 */
class RdvShipmentDataBase extends AbstractStructBase
{
    /**
     * The ParcelOptional
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     *
     * @var bool
     */
    public $ParcelOptional;
    /**
     * The SC_CenterNumber
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     *
     * @var int
     */
    public $SC_CenterNumber;
    /**
     * The RC_CenterNumber
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     *
     * @var int
     */
    public $RC_CenterNumber;
    /**
     * The Weight
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     *
     * @var float
     */
    public $Weight;
    /**
     * The NumberOfParcelsReal
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     *
     * @var int
     */
    public $NumberOfParcelsReal;
    /**
     * The CustomerRDVProfile
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     *
     * @var bool
     */
    public $CustomerRDVProfile;
    /**
     * The SavePlaceRDVAllowed
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     *
     * @var bool
     */
    public $SavePlaceRDVAllowed;
    /**
     * The RDVServiceAllowed
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     *
     * @var bool
     */
    public $RDVServiceAllowed;
    /**
     * The Predict
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     *
     * @var bool
     */
    public $Predict;
    /**
     * The RdvUpdateable
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     *
     * @var bool
     */
    public $RdvUpdateable;
    /**
     * The ShippingDate
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $ShippingDate;
    /**
     * The PredictCutOffDate
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $PredictCutOffDate;
    /**
     * The ShipperName
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $ShipperName;
    /**
     * The ReceiverAddress
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var RdvAddress
     */
    public $ReceiverAddress;
    /**
     * The ReceiverEmailAddress
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $ReceiverEmailAddress;
    /**
     * The ReceiverMobileNumber
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $ReceiverMobileNumber;
    /**
     * The ReceiverAltZipCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $ReceiverAltZipCode;
    /**
     * The ShipperInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var RdvDeliveryInfo
     */
    public $ShipperInfo;
    /**
     * The RdvInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var RdvDeliveryInfo
     */
    public $RdvInfo;
    /**
     * The Services
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var \Scraper\ScraperDPD\ArrayType\ArrayOfRdvService
     */
    public $Services;

    /**
     * Constructor method for RdvShipmentDataBase
     *
     * @uses RdvShipmentDataBase::setParcelOptional()
     * @uses RdvShipmentDataBase::setSC_CenterNumber()
     * @uses RdvShipmentDataBase::setRC_CenterNumber()
     * @uses RdvShipmentDataBase::setWeight()
     * @uses RdvShipmentDataBase::setNumberOfParcelsReal()
     * @uses RdvShipmentDataBase::setCustomerRDVProfile()
     * @uses RdvShipmentDataBase::setSavePlaceRDVAllowed()
     * @uses RdvShipmentDataBase::setRDVServiceAllowed()
     * @uses RdvShipmentDataBase::setPredict()
     * @uses RdvShipmentDataBase::setRdvUpdateable()
     * @uses RdvShipmentDataBase::setShippingDate()
     * @uses RdvShipmentDataBase::setPredictCutOffDate()
     * @uses RdvShipmentDataBase::setShipperName()
     * @uses RdvShipmentDataBase::setReceiverAddress()
     * @uses RdvShipmentDataBase::setReceiverEmailAddress()
     * @uses RdvShipmentDataBase::setReceiverMobileNumber()
     * @uses RdvShipmentDataBase::setReceiverAltZipCode()
     * @uses RdvShipmentDataBase::setShipperInfo()
     * @uses RdvShipmentDataBase::setRdvInfo()
     * @uses RdvShipmentDataBase::setServices()
     *
     * @param bool   $parcelOptional
     * @param int    $sC_CenterNumber
     * @param int    $rC_CenterNumber
     * @param float  $weight
     * @param int    $numberOfParcelsReal
     * @param bool   $customerRDVProfile
     * @param bool   $savePlaceRDVAllowed
     * @param bool   $rDVServiceAllowed
     * @param bool   $predict
     * @param bool   $rdvUpdateable
     * @param string $shippingDate
     * @param string $predictCutOffDate
     * @param string $shipperName
     * @param string $receiverEmailAddress
     * @param string $receiverMobileNumber
     * @param string $receiverAltZipCode
     */
    public function __construct($parcelOptional = null, $sC_CenterNumber = null, $rC_CenterNumber = null, $weight = null, $numberOfParcelsReal = null, $customerRDVProfile = null, $savePlaceRDVAllowed = null, $rDVServiceAllowed = null, $predict = null, $rdvUpdateable = null, $shippingDate = null, $predictCutOffDate = null, $shipperName = null, ?RdvAddress $receiverAddress = null, $receiverEmailAddress = null, $receiverMobileNumber = null, $receiverAltZipCode = null, ?RdvDeliveryInfo $shipperInfo = null, ?RdvDeliveryInfo $rdvInfo = null, ?\Scraper\ScraperDPD\ArrayType\ArrayOfRdvService $services = null)
    {
        $this
            ->setParcelOptional($parcelOptional)
            ->setSC_CenterNumber($sC_CenterNumber)
            ->setRC_CenterNumber($rC_CenterNumber)
            ->setWeight($weight)
            ->setNumberOfParcelsReal($numberOfParcelsReal)
            ->setCustomerRDVProfile($customerRDVProfile)
            ->setSavePlaceRDVAllowed($savePlaceRDVAllowed)
            ->setRDVServiceAllowed($rDVServiceAllowed)
            ->setPredict($predict)
            ->setRdvUpdateable($rdvUpdateable)
            ->setShippingDate($shippingDate)
            ->setPredictCutOffDate($predictCutOffDate)
            ->setShipperName($shipperName)
            ->setReceiverAddress($receiverAddress)
            ->setReceiverEmailAddress($receiverEmailAddress)
            ->setReceiverMobileNumber($receiverMobileNumber)
            ->setReceiverAltZipCode($receiverAltZipCode)
            ->setShipperInfo($shipperInfo)
            ->setRdvInfo($rdvInfo)
            ->setServices($services)
        ;
    }

    /**
     * Get ParcelOptional value
     *
     * @return bool
     */
    public function getParcelOptional()
    {
        return $this->ParcelOptional;
    }

    /**
     * Set ParcelOptional value
     *
     * @param bool $parcelOptional
     *
     * @return self
     */
    public function setParcelOptional($parcelOptional = null)
    {
        // validation for constraint: boolean
        if (null !== $parcelOptional && !\is_bool($parcelOptional)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($parcelOptional, true), \gettype($parcelOptional)), __LINE__);
        }
        $this->ParcelOptional = $parcelOptional;
        return $this;
    }

    /**
     * Get SC_CenterNumber value
     *
     * @return int
     */
    public function getSC_CenterNumber()
    {
        return $this->SC_CenterNumber;
    }

    /**
     * Set SC_CenterNumber value
     *
     * @param int $sC_CenterNumber
     *
     * @return self
     */
    public function setSC_CenterNumber($sC_CenterNumber = null)
    {
        // validation for constraint: int
        if (null !== $sC_CenterNumber && !(\is_int($sC_CenterNumber) || ctype_digit($sC_CenterNumber))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($sC_CenterNumber, true), \gettype($sC_CenterNumber)), __LINE__);
        }
        $this->SC_CenterNumber = $sC_CenterNumber;
        return $this;
    }

    /**
     * Get RC_CenterNumber value
     *
     * @return int
     */
    public function getRC_CenterNumber()
    {
        return $this->RC_CenterNumber;
    }

    /**
     * Set RC_CenterNumber value
     *
     * @param int $rC_CenterNumber
     *
     * @return self
     */
    public function setRC_CenterNumber($rC_CenterNumber = null)
    {
        // validation for constraint: int
        if (null !== $rC_CenterNumber && !(\is_int($rC_CenterNumber) || ctype_digit($rC_CenterNumber))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($rC_CenterNumber, true), \gettype($rC_CenterNumber)), __LINE__);
        }
        $this->RC_CenterNumber = $rC_CenterNumber;
        return $this;
    }

    /**
     * Get Weight value
     *
     * @return float
     */
    public function getWeight()
    {
        return $this->Weight;
    }

    /**
     * Set Weight value
     *
     * @param float $weight
     *
     * @return self
     */
    public function setWeight($weight = null)
    {
        // validation for constraint: float
        if (null !== $weight && !(\is_float($weight) || is_numeric($weight))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($weight, true), \gettype($weight)), __LINE__);
        }
        $this->Weight = $weight;
        return $this;
    }

    /**
     * Get NumberOfParcelsReal value
     *
     * @return int
     */
    public function getNumberOfParcelsReal()
    {
        return $this->NumberOfParcelsReal;
    }

    /**
     * Set NumberOfParcelsReal value
     *
     * @param int $numberOfParcelsReal
     *
     * @return self
     */
    public function setNumberOfParcelsReal($numberOfParcelsReal = null)
    {
        // validation for constraint: int
        if (null !== $numberOfParcelsReal && !(\is_int($numberOfParcelsReal) || ctype_digit($numberOfParcelsReal))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($numberOfParcelsReal, true), \gettype($numberOfParcelsReal)), __LINE__);
        }
        $this->NumberOfParcelsReal = $numberOfParcelsReal;
        return $this;
    }

    /**
     * Get CustomerRDVProfile value
     *
     * @return bool
     */
    public function getCustomerRDVProfile()
    {
        return $this->CustomerRDVProfile;
    }

    /**
     * Set CustomerRDVProfile value
     *
     * @param bool $customerRDVProfile
     *
     * @return self
     */
    public function setCustomerRDVProfile($customerRDVProfile = null)
    {
        // validation for constraint: boolean
        if (null !== $customerRDVProfile && !\is_bool($customerRDVProfile)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($customerRDVProfile, true), \gettype($customerRDVProfile)), __LINE__);
        }
        $this->CustomerRDVProfile = $customerRDVProfile;
        return $this;
    }

    /**
     * Get SavePlaceRDVAllowed value
     *
     * @return bool
     */
    public function getSavePlaceRDVAllowed()
    {
        return $this->SavePlaceRDVAllowed;
    }

    /**
     * Set SavePlaceRDVAllowed value
     *
     * @param bool $savePlaceRDVAllowed
     *
     * @return self
     */
    public function setSavePlaceRDVAllowed($savePlaceRDVAllowed = null)
    {
        // validation for constraint: boolean
        if (null !== $savePlaceRDVAllowed && !\is_bool($savePlaceRDVAllowed)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($savePlaceRDVAllowed, true), \gettype($savePlaceRDVAllowed)), __LINE__);
        }
        $this->SavePlaceRDVAllowed = $savePlaceRDVAllowed;
        return $this;
    }

    /**
     * Get RDVServiceAllowed value
     *
     * @return bool
     */
    public function getRDVServiceAllowed()
    {
        return $this->RDVServiceAllowed;
    }

    /**
     * Set RDVServiceAllowed value
     *
     * @param bool $rDVServiceAllowed
     *
     * @return self
     */
    public function setRDVServiceAllowed($rDVServiceAllowed = null)
    {
        // validation for constraint: boolean
        if (null !== $rDVServiceAllowed && !\is_bool($rDVServiceAllowed)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($rDVServiceAllowed, true), \gettype($rDVServiceAllowed)), __LINE__);
        }
        $this->RDVServiceAllowed = $rDVServiceAllowed;
        return $this;
    }

    /**
     * Get Predict value
     *
     * @return bool
     */
    public function getPredict()
    {
        return $this->Predict;
    }

    /**
     * Set Predict value
     *
     * @param bool $predict
     *
     * @return self
     */
    public function setPredict($predict = null)
    {
        // validation for constraint: boolean
        if (null !== $predict && !\is_bool($predict)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($predict, true), \gettype($predict)), __LINE__);
        }
        $this->Predict = $predict;
        return $this;
    }

    /**
     * Get RdvUpdateable value
     *
     * @return bool
     */
    public function getRdvUpdateable()
    {
        return $this->RdvUpdateable;
    }

    /**
     * Set RdvUpdateable value
     *
     * @param bool $rdvUpdateable
     *
     * @return self
     */
    public function setRdvUpdateable($rdvUpdateable = null)
    {
        // validation for constraint: boolean
        if (null !== $rdvUpdateable && !\is_bool($rdvUpdateable)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($rdvUpdateable, true), \gettype($rdvUpdateable)), __LINE__);
        }
        $this->RdvUpdateable = $rdvUpdateable;
        return $this;
    }

    /**
     * Get ShippingDate value
     *
     * @return string|null
     */
    public function getShippingDate()
    {
        return $this->ShippingDate;
    }

    /**
     * Set ShippingDate value
     *
     * @param string $shippingDate
     *
     * @return self
     */
    public function setShippingDate($shippingDate = null)
    {
        // validation for constraint: string
        if (null !== $shippingDate && !\is_string($shippingDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shippingDate, true), \gettype($shippingDate)), __LINE__);
        }
        $this->ShippingDate = $shippingDate;
        return $this;
    }

    /**
     * Get PredictCutOffDate value
     *
     * @return string|null
     */
    public function getPredictCutOffDate()
    {
        return $this->PredictCutOffDate;
    }

    /**
     * Set PredictCutOffDate value
     *
     * @param string $predictCutOffDate
     *
     * @return self
     */
    public function setPredictCutOffDate($predictCutOffDate = null)
    {
        // validation for constraint: string
        if (null !== $predictCutOffDate && !\is_string($predictCutOffDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($predictCutOffDate, true), \gettype($predictCutOffDate)), __LINE__);
        }
        $this->PredictCutOffDate = $predictCutOffDate;
        return $this;
    }

    /**
     * Get ShipperName value
     *
     * @return string|null
     */
    public function getShipperName()
    {
        return $this->ShipperName;
    }

    /**
     * Set ShipperName value
     *
     * @param string $shipperName
     *
     * @return self
     */
    public function setShipperName($shipperName = null)
    {
        // validation for constraint: string
        if (null !== $shipperName && !\is_string($shipperName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shipperName, true), \gettype($shipperName)), __LINE__);
        }
        $this->ShipperName = $shipperName;
        return $this;
    }

    /**
     * Get ReceiverAddress value
     *
     * @return RdvAddress|null
     */
    public function getReceiverAddress()
    {
        return $this->ReceiverAddress;
    }

    /**
     * Set ReceiverAddress value
     *
     * @return self
     */
    public function setReceiverAddress(?RdvAddress $receiverAddress = null)
    {
        $this->ReceiverAddress = $receiverAddress;
        return $this;
    }

    /**
     * Get ReceiverEmailAddress value
     *
     * @return string|null
     */
    public function getReceiverEmailAddress()
    {
        return $this->ReceiverEmailAddress;
    }

    /**
     * Set ReceiverEmailAddress value
     *
     * @param string $receiverEmailAddress
     *
     * @return self
     */
    public function setReceiverEmailAddress($receiverEmailAddress = null)
    {
        // validation for constraint: string
        if (null !== $receiverEmailAddress && !\is_string($receiverEmailAddress)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($receiverEmailAddress, true), \gettype($receiverEmailAddress)), __LINE__);
        }
        $this->ReceiverEmailAddress = $receiverEmailAddress;
        return $this;
    }

    /**
     * Get ReceiverMobileNumber value
     *
     * @return string|null
     */
    public function getReceiverMobileNumber()
    {
        return $this->ReceiverMobileNumber;
    }

    /**
     * Set ReceiverMobileNumber value
     *
     * @param string $receiverMobileNumber
     *
     * @return self
     */
    public function setReceiverMobileNumber($receiverMobileNumber = null)
    {
        // validation for constraint: string
        if (null !== $receiverMobileNumber && !\is_string($receiverMobileNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($receiverMobileNumber, true), \gettype($receiverMobileNumber)), __LINE__);
        }
        $this->ReceiverMobileNumber = $receiverMobileNumber;
        return $this;
    }

    /**
     * Get ReceiverAltZipCode value
     *
     * @return string|null
     */
    public function getReceiverAltZipCode()
    {
        return $this->ReceiverAltZipCode;
    }

    /**
     * Set ReceiverAltZipCode value
     *
     * @param string $receiverAltZipCode
     *
     * @return self
     */
    public function setReceiverAltZipCode($receiverAltZipCode = null)
    {
        // validation for constraint: string
        if (null !== $receiverAltZipCode && !\is_string($receiverAltZipCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($receiverAltZipCode, true), \gettype($receiverAltZipCode)), __LINE__);
        }
        $this->ReceiverAltZipCode = $receiverAltZipCode;
        return $this;
    }

    /**
     * Get ShipperInfo value
     *
     * @return RdvDeliveryInfo|null
     */
    public function getShipperInfo()
    {
        return $this->ShipperInfo;
    }

    /**
     * Set ShipperInfo value
     *
     * @return self
     */
    public function setShipperInfo(?RdvDeliveryInfo $shipperInfo = null)
    {
        $this->ShipperInfo = $shipperInfo;
        return $this;
    }

    /**
     * Get RdvInfo value
     *
     * @return RdvDeliveryInfo|null
     */
    public function getRdvInfo()
    {
        return $this->RdvInfo;
    }

    /**
     * Set RdvInfo value
     *
     * @return self
     */
    public function setRdvInfo(?RdvDeliveryInfo $rdvInfo = null)
    {
        $this->RdvInfo = $rdvInfo;
        return $this;
    }

    /**
     * Get Services value
     *
     * @return \Scraper\ScraperDPD\ArrayType\ArrayOfRdvService|null
     */
    public function getServices()
    {
        return $this->Services;
    }

    /**
     * Set Services value
     *
     * @return self
     */
    public function setServices(?\Scraper\ScraperDPD\ArrayType\ArrayOfRdvService $services = null)
    {
        $this->Services = $services;
        return $this;
    }
}
