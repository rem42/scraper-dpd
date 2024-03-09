<?php

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddressInfo StructType
 */
class AddressInfo extends AbstractStructBase
{
    /**
     * The contact
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $contact;
    /**
     * The name2
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $name2;
    /**
     * The name3
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $name3;
    /**
     * The name4
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $name4;
    /**
     * The digicode1
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $digicode1;
    /**
     * The digicode2
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $digicode2;
    /**
     * The intercomid
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $intercomid;
    /**
     * The vinfo1
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $vinfo1;
    /**
     * The vinfo2
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $vinfo2;

    /**
     * Constructor method for AddressInfo
     *
     * @uses AddressInfo::setContact()
     * @uses AddressInfo::setName2()
     * @uses AddressInfo::setName3()
     * @uses AddressInfo::setName4()
     * @uses AddressInfo::setDigicode1()
     * @uses AddressInfo::setDigicode2()
     * @uses AddressInfo::setIntercomid()
     * @uses AddressInfo::setVinfo1()
     * @uses AddressInfo::setVinfo2()
     *
     * @param string $contact
     * @param string $name2
     * @param string $name3
     * @param string $name4
     * @param string $digicode1
     * @param string $digicode2
     * @param string $intercomid
     * @param string $vinfo1
     * @param string $vinfo2
     */
    public function __construct($contact = null, $name2 = null, $name3 = null, $name4 = null, $digicode1 = null, $digicode2 = null, $intercomid = null, $vinfo1 = null, $vinfo2 = null)
    {
        $this
            ->setContact($contact)
            ->setName2($name2)
            ->setName3($name3)
            ->setName4($name4)
            ->setDigicode1($digicode1)
            ->setDigicode2($digicode2)
            ->setIntercomid($intercomid)
            ->setVinfo1($vinfo1)
            ->setVinfo2($vinfo2)
        ;
    }

    /**
     * Get contact value
     *
     * @return string|null
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Set contact value
     *
     * @param string $contact
     *
     * @return self
     */
    public function setContact($contact = null)
    {
        // validation for constraint: string
        if (null !== $contact && !\is_string($contact)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($contact, true), \gettype($contact)), __LINE__);
        }
        $this->contact = $contact;
        return $this;
    }

    /**
     * Get name2 value
     *
     * @return string|null
     */
    public function getName2()
    {
        return $this->name2;
    }

    /**
     * Set name2 value
     *
     * @param string $name2
     *
     * @return self
     */
    public function setName2($name2 = null)
    {
        // validation for constraint: string
        if (null !== $name2 && !\is_string($name2)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name2, true), \gettype($name2)), __LINE__);
        }
        $this->name2 = $name2;
        return $this;
    }

    /**
     * Get name3 value
     *
     * @return string|null
     */
    public function getName3()
    {
        return $this->name3;
    }

    /**
     * Set name3 value
     *
     * @param string $name3
     *
     * @return self
     */
    public function setName3($name3 = null)
    {
        // validation for constraint: string
        if (null !== $name3 && !\is_string($name3)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name3, true), \gettype($name3)), __LINE__);
        }
        $this->name3 = $name3;
        return $this;
    }

    /**
     * Get name4 value
     *
     * @return string|null
     */
    public function getName4()
    {
        return $this->name4;
    }

    /**
     * Set name4 value
     *
     * @param string $name4
     *
     * @return self
     */
    public function setName4($name4 = null)
    {
        // validation for constraint: string
        if (null !== $name4 && !\is_string($name4)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name4, true), \gettype($name4)), __LINE__);
        }
        $this->name4 = $name4;
        return $this;
    }

    /**
     * Get digicode1 value
     *
     * @return string|null
     */
    public function getDigicode1()
    {
        return $this->digicode1;
    }

    /**
     * Set digicode1 value
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
        $this->digicode1 = $digicode1;
        return $this;
    }

    /**
     * Get digicode2 value
     *
     * @return string|null
     */
    public function getDigicode2()
    {
        return $this->digicode2;
    }

    /**
     * Set digicode2 value
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
        $this->digicode2 = $digicode2;
        return $this;
    }

    /**
     * Get intercomid value
     *
     * @return string|null
     */
    public function getIntercomid()
    {
        return $this->intercomid;
    }

    /**
     * Set intercomid value
     *
     * @param string $intercomid
     *
     * @return self
     */
    public function setIntercomid($intercomid = null)
    {
        // validation for constraint: string
        if (null !== $intercomid && !\is_string($intercomid)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($intercomid, true), \gettype($intercomid)), __LINE__);
        }
        $this->intercomid = $intercomid;
        return $this;
    }

    /**
     * Get vinfo1 value
     *
     * @return string|null
     */
    public function getVinfo1()
    {
        return $this->vinfo1;
    }

    /**
     * Set vinfo1 value
     *
     * @param string $vinfo1
     *
     * @return self
     */
    public function setVinfo1($vinfo1 = null)
    {
        // validation for constraint: string
        if (null !== $vinfo1 && !\is_string($vinfo1)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($vinfo1, true), \gettype($vinfo1)), __LINE__);
        }
        $this->vinfo1 = $vinfo1;
        return $this;
    }

    /**
     * Get vinfo2 value
     *
     * @return string|null
     */
    public function getVinfo2()
    {
        return $this->vinfo2;
    }

    /**
     * Set vinfo2 value
     *
     * @param string $vinfo2
     *
     * @return self
     */
    public function setVinfo2($vinfo2 = null)
    {
        // validation for constraint: string
        if (null !== $vinfo2 && !\is_string($vinfo2)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($vinfo2, true), \gettype($vinfo2)), __LINE__);
        }
        $this->vinfo2 = $vinfo2;
        return $this;
    }
}
