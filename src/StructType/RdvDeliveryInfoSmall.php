<?php

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RdvDeliveryInfoSmall StructType
 */
class RdvDeliveryInfoSmall extends AbstractStructBase
{
    /**
     * The ContactName
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $ContactName;
    /**
     * The Digicode1
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $Digicode1;
    /**
     * The Digicode2
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $Digicode2;
    /**
     * The IntercomID
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $IntercomID;
    /**
     * The Remark
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $Remark;

    /**
     * Constructor method for RdvDeliveryInfoSmall
     *
     * @uses RdvDeliveryInfoSmall::setContactName()
     * @uses RdvDeliveryInfoSmall::setDigicode1()
     * @uses RdvDeliveryInfoSmall::setDigicode2()
     * @uses RdvDeliveryInfoSmall::setIntercomID()
     * @uses RdvDeliveryInfoSmall::setRemark()
     *
     * @param string $contactName
     * @param string $digicode1
     * @param string $digicode2
     * @param string $intercomID
     * @param string $remark
     */
    public function __construct($contactName = null, $digicode1 = null, $digicode2 = null, $intercomID = null, $remark = null)
    {
        $this
            ->setContactName($contactName)
            ->setDigicode1($digicode1)
            ->setDigicode2($digicode2)
            ->setIntercomID($intercomID)
            ->setRemark($remark)
        ;
    }

    /**
     * Get ContactName value
     *
     * @return string|null
     */
    public function getContactName()
    {
        return $this->ContactName;
    }

    /**
     * Set ContactName value
     *
     * @param string $contactName
     *
     * @return self
     */
    public function setContactName($contactName = null)
    {
        // validation for constraint: string
        if (null !== $contactName && !\is_string($contactName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($contactName, true), \gettype($contactName)), __LINE__);
        }
        $this->ContactName = $contactName;
        return $this;
    }

    /**
     * Get Digicode1 value
     *
     * @return string|null
     */
    public function getDigicode1()
    {
        return $this->Digicode1;
    }

    /**
     * Set Digicode1 value
     *
     * @param string $digicode1
     *
     * @return self
     */
    public function setDigicode1($digicode1 = null)
    {
        // validation for constraint: string
        if (null !== $digicode1 && !\is_string($digicode1)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($digicode1, true), \gettype($digicode1)), __LINE__);
        }
        $this->Digicode1 = $digicode1;
        return $this;
    }

    /**
     * Get Digicode2 value
     *
     * @return string|null
     */
    public function getDigicode2()
    {
        return $this->Digicode2;
    }

    /**
     * Set Digicode2 value
     *
     * @param string $digicode2
     *
     * @return self
     */
    public function setDigicode2($digicode2 = null)
    {
        // validation for constraint: string
        if (null !== $digicode2 && !\is_string($digicode2)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($digicode2, true), \gettype($digicode2)), __LINE__);
        }
        $this->Digicode2 = $digicode2;
        return $this;
    }

    /**
     * Get IntercomID value
     *
     * @return string|null
     */
    public function getIntercomID()
    {
        return $this->IntercomID;
    }

    /**
     * Set IntercomID value
     *
     * @param string $intercomID
     *
     * @return self
     */
    public function setIntercomID($intercomID = null)
    {
        // validation for constraint: string
        if (null !== $intercomID && !\is_string($intercomID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($intercomID, true), \gettype($intercomID)), __LINE__);
        }
        $this->IntercomID = $intercomID;
        return $this;
    }

    /**
     * Get Remark value
     *
     * @return string|null
     */
    public function getRemark()
    {
        return $this->Remark;
    }

    /**
     * Set Remark value
     *
     * @param string $remark
     *
     * @return self
     */
    public function setRemark($remark = null)
    {
        // validation for constraint: string
        if (null !== $remark && !\is_string($remark)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($remark, true), \gettype($remark)), __LINE__);
        }
        $this->Remark = $remark;
        return $this;
    }
}
