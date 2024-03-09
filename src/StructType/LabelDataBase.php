<?php

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LabelDataBase StructType
 */
class LabelDataBase extends AbstractStructBase
{
    /**
     * The ServiceCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $ServiceCode;
    /**
     * The SSort
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $SSort;
    /**
     * The OSort
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $OSort;
    /**
     * The OSort2
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $OSort2;
    /**
     * The DSort
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $DSort;

    /**
     * Constructor method for LabelDataBase
     *
     * @uses LabelDataBase::setServiceCode()
     * @uses LabelDataBase::setSSort()
     * @uses LabelDataBase::setOSort()
     * @uses LabelDataBase::setOSort2()
     * @uses LabelDataBase::setDSort()
     *
     * @param string $serviceCode
     * @param string $sSort
     * @param string $oSort
     * @param string $oSort2
     * @param string $dSort
     */
    public function __construct($serviceCode = null, $sSort = null, $oSort = null, $oSort2 = null, $dSort = null)
    {
        $this
            ->setServiceCode($serviceCode)
            ->setSSort($sSort)
            ->setOSort($oSort)
            ->setOSort2($oSort2)
            ->setDSort($dSort)
        ;
    }

    /**
     * Get ServiceCode value
     *
     * @return string|null
     */
    public function getServiceCode()
    {
        return $this->ServiceCode;
    }

    /**
     * Set ServiceCode value
     *
     * @param string $serviceCode
     *
     * @return self
     */
    public function setServiceCode($serviceCode = null)
    {
        // validation for constraint: string
        if (null !== $serviceCode && !\is_string($serviceCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($serviceCode, true), \gettype($serviceCode)), __LINE__);
        }
        $this->ServiceCode = $serviceCode;
        return $this;
    }

    /**
     * Get SSort value
     *
     * @return string|null
     */
    public function getSSort()
    {
        return $this->SSort;
    }

    /**
     * Set SSort value
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
        $this->SSort = $sSort;
        return $this;
    }

    /**
     * Get OSort value
     *
     * @return string|null
     */
    public function getOSort()
    {
        return $this->OSort;
    }

    /**
     * Set OSort value
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
        $this->OSort = $oSort;
        return $this;
    }

    /**
     * Get OSort2 value
     *
     * @return string|null
     */
    public function getOSort2()
    {
        return $this->OSort2;
    }

    /**
     * Set OSort2 value
     *
     * @param string $oSort2
     *
     * @return self
     */
    public function setOSort2($oSort2 = null)
    {
        // validation for constraint: string
        if (null !== $oSort2 && !\is_string($oSort2)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($oSort2, true), \gettype($oSort2)), __LINE__);
        }
        $this->OSort2 = $oSort2;
        return $this;
    }

    /**
     * Get DSort value
     *
     * @return string|null
     */
    public function getDSort()
    {
        return $this->DSort;
    }

    /**
     * Set DSort value
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
        $this->DSort = $dSort;
        return $this;
    }
}
