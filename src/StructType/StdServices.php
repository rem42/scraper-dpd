<?php

namespace Scraper\ScraperDPD\StructType;

/**
 * This class stands for StdServices StructType
 */
class StdServices extends StdServicesBase
{
    /**
     * The extraInsurance
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var ExtraInsurance
     */
    public $extraInsurance;
    /**
     * The contact
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var Contact
     */
    public $contact;
    /**
     * The parcelshop
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var ParcelShop
     */
    public $parcelshop;
    /**
     * The reverse
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var Reverse
     */
    public $reverse;
    /**
     * The reverseInverseReturn
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var ReverseInverseReturn
     */
    public $reverseInverseReturn;
    /**
     * The reversInverseBcReturn
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var ReverseInverseReturnBc
     */
    public $reversInverseBcReturn;
    /**
     * The autoConsolidation
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var AutoConsolidation
     */
    public $autoConsolidation;
    /**
     * The pickupAtCustomer
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var PickupData
     */
    public $pickupAtCustomer;
    /**
     * The bic3
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var Bic3
     */
    public $bic3;
    /**
     * The sameday
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var Sameday
     */
    public $sameday;
    /**
     * The marketing
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var Marketing
     */
    public $marketing;

    /**
     * Constructor method for StdServices
     *
     * @uses StdServices::setExtraInsurance()
     * @uses StdServices::setContact()
     * @uses StdServices::setParcelshop()
     * @uses StdServices::setReverse()
     * @uses StdServices::setReverseInverseReturn()
     * @uses StdServices::setReversInverseBcReturn()
     * @uses StdServices::setAutoConsolidation()
     * @uses StdServices::setPickupAtCustomer()
     * @uses StdServices::setBic3()
     * @uses StdServices::setSameday()
     * @uses StdServices::setMarketing()
     */
    public function __construct(?ExtraInsurance $extraInsurance = null, ?Contact $contact = null, ?ParcelShop $parcelshop = null, ?Reverse $reverse = null, ?ReverseInverseReturn $reverseInverseReturn = null, ?ReverseInverseReturnBc $reversInverseBcReturn = null, ?AutoConsolidation $autoConsolidation = null, ?PickupData $pickupAtCustomer = null, ?Bic3 $bic3 = null, ?Sameday $sameday = null, ?Marketing $marketing = null)
    {
        $this
            ->setExtraInsurance($extraInsurance)
            ->setContact($contact)
            ->setParcelshop($parcelshop)
            ->setReverse($reverse)
            ->setReverseInverseReturn($reverseInverseReturn)
            ->setReversInverseBcReturn($reversInverseBcReturn)
            ->setAutoConsolidation($autoConsolidation)
            ->setPickupAtCustomer($pickupAtCustomer)
            ->setBic3($bic3)
            ->setSameday($sameday)
            ->setMarketing($marketing)
        ;
    }

    /**
     * Get extraInsurance value
     *
     * @return ExtraInsurance|null
     */
    public function getExtraInsurance()
    {
        return $this->extraInsurance;
    }

    /**
     * Set extraInsurance value
     *
     * @return self
     */
    public function setExtraInsurance(?ExtraInsurance $extraInsurance = null)
    {
        $this->extraInsurance = $extraInsurance;
        return $this;
    }

    /**
     * Get contact value
     *
     * @return Contact|null
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Set contact value
     *
     * @return self
     */
    public function setContact(?Contact $contact = null)
    {
        $this->contact = $contact;
        return $this;
    }

    /**
     * Get parcelshop value
     *
     * @return ParcelShop|null
     */
    public function getParcelshop()
    {
        return $this->parcelshop;
    }

    /**
     * Set parcelshop value
     *
     * @return self
     */
    public function setParcelshop(?ParcelShop $parcelshop = null)
    {
        $this->parcelshop = $parcelshop;
        return $this;
    }

    /**
     * Get reverse value
     *
     * @return Reverse|null
     */
    public function getReverse()
    {
        return $this->reverse;
    }

    /**
     * Set reverse value
     *
     * @return self
     */
    public function setReverse(?Reverse $reverse = null)
    {
        $this->reverse = $reverse;
        return $this;
    }

    /**
     * Get reverseInverseReturn value
     *
     * @return ReverseInverseReturn|null
     */
    public function getReverseInverseReturn()
    {
        return $this->reverseInverseReturn;
    }

    /**
     * Set reverseInverseReturn value
     *
     * @return self
     */
    public function setReverseInverseReturn(?ReverseInverseReturn $reverseInverseReturn = null)
    {
        $this->reverseInverseReturn = $reverseInverseReturn;
        return $this;
    }

    /**
     * Get reversInverseBcReturn value
     *
     * @return ReverseInverseReturnBc|null
     */
    public function getReversInverseBcReturn()
    {
        return $this->reversInverseBcReturn;
    }

    /**
     * Set reversInverseBcReturn value
     *
     * @return self
     */
    public function setReversInverseBcReturn(?ReverseInverseReturnBc $reversInverseBcReturn = null)
    {
        $this->reversInverseBcReturn = $reversInverseBcReturn;
        return $this;
    }

    /**
     * Get autoConsolidation value
     *
     * @return AutoConsolidation|null
     */
    public function getAutoConsolidation()
    {
        return $this->autoConsolidation;
    }

    /**
     * Set autoConsolidation value
     *
     * @return self
     */
    public function setAutoConsolidation(?AutoConsolidation $autoConsolidation = null)
    {
        $this->autoConsolidation = $autoConsolidation;
        return $this;
    }

    /**
     * Get pickupAtCustomer value
     *
     * @return PickupData|null
     */
    public function getPickupAtCustomer()
    {
        return $this->pickupAtCustomer;
    }

    /**
     * Set pickupAtCustomer value
     *
     * @return self
     */
    public function setPickupAtCustomer(?PickupData $pickupAtCustomer = null)
    {
        $this->pickupAtCustomer = $pickupAtCustomer;
        return $this;
    }

    /**
     * Get bic3 value
     *
     * @return Bic3|null
     */
    public function getBic3()
    {
        return $this->bic3;
    }

    /**
     * Set bic3 value
     *
     * @return self
     */
    public function setBic3(?Bic3 $bic3 = null)
    {
        $this->bic3 = $bic3;
        return $this;
    }

    /**
     * Get sameday value
     *
     * @return Sameday|null
     */
    public function getSameday()
    {
        return $this->sameday;
    }

    /**
     * Set sameday value
     *
     * @return self
     */
    public function setSameday(?Sameday $sameday = null)
    {
        $this->sameday = $sameday;
        return $this;
    }

    /**
     * Get marketing value
     *
     * @return Marketing|null
     */
    public function getMarketing()
    {
        return $this->marketing;
    }

    /**
     * Set marketing value
     *
     * @return self
     */
    public function setMarketing(?Marketing $marketing = null)
    {
        $this->marketing = $marketing;
        return $this;
    }
}
