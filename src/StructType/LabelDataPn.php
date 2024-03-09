<?php

namespace Scraper\ScraperDPD\StructType;

/**
 * This class stands for LabelDataPn StructType
 */
class LabelDataPn extends LabelDataBase
{
    /**
     * The OSortInverse
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     *
     * @var bool
     */
    public $OSortInverse;
    /**
     * The OSort2Inverse
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     *
     * @var bool
     */
    public $OSort2Inverse;
    /**
     * The DSortInverse
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     *
     * @var bool
     */
    public $DSortInverse;
    /**
     * The IsShop
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     *
     * @var bool
     */
    public $IsShop;
    /**
     * The ReverseHint
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     *
     * @var bool
     */
    public $ReverseHint;
    /**
     * The DutiableHint
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $DutiableHint;
    /**
     * The Hint
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $Hint;
    /**
     * The Routingtext
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $Routingtext;
    /**
     * The Servicetext
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $Servicetext;
    /**
     * The ServiceMark
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $ServiceMark;
    /**
     * The ReceiverCenterLine
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $ReceiverCenterLine;

    /**
     * Constructor method for LabelDataPn
     *
     * @uses LabelDataPn::setOSortInverse()
     * @uses LabelDataPn::setOSort2Inverse()
     * @uses LabelDataPn::setDSortInverse()
     * @uses LabelDataPn::setIsShop()
     * @uses LabelDataPn::setReverseHint()
     * @uses LabelDataPn::setDutiableHint()
     * @uses LabelDataPn::setHint()
     * @uses LabelDataPn::setRoutingtext()
     * @uses LabelDataPn::setServicetext()
     * @uses LabelDataPn::setServiceMark()
     * @uses LabelDataPn::setReceiverCenterLine()
     *
     * @param bool   $oSortInverse
     * @param bool   $oSort2Inverse
     * @param bool   $dSortInverse
     * @param bool   $isShop
     * @param bool   $reverseHint
     * @param string $dutiableHint
     * @param string $hint
     * @param string $routingtext
     * @param string $servicetext
     * @param string $serviceMark
     * @param string $receiverCenterLine
     */
    public function __construct($oSortInverse = null, $oSort2Inverse = null, $dSortInverse = null, $isShop = null, $reverseHint = null, $dutiableHint = null, $hint = null, $routingtext = null, $servicetext = null, $serviceMark = null, $receiverCenterLine = null)
    {
        $this
            ->setOSortInverse($oSortInverse)
            ->setOSort2Inverse($oSort2Inverse)
            ->setDSortInverse($dSortInverse)
            ->setIsShop($isShop)
            ->setReverseHint($reverseHint)
            ->setDutiableHint($dutiableHint)
            ->setHint($hint)
            ->setRoutingtext($routingtext)
            ->setServicetext($servicetext)
            ->setServiceMark($serviceMark)
            ->setReceiverCenterLine($receiverCenterLine)
        ;
    }

    /**
     * Get OSortInverse value
     *
     * @return bool
     */
    public function getOSortInverse()
    {
        return $this->OSortInverse;
    }

    /**
     * Set OSortInverse value
     *
     * @param bool $oSortInverse
     *
     * @return self
     */
    public function setOSortInverse($oSortInverse = null)
    {
        // validation for constraint: boolean
        if (null !== $oSortInverse && !\is_bool($oSortInverse)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($oSortInverse, true), \gettype($oSortInverse)), __LINE__);
        }
        $this->OSortInverse = $oSortInverse;
        return $this;
    }

    /**
     * Get OSort2Inverse value
     *
     * @return bool
     */
    public function getOSort2Inverse()
    {
        return $this->OSort2Inverse;
    }

    /**
     * Set OSort2Inverse value
     *
     * @param bool $oSort2Inverse
     *
     * @return self
     */
    public function setOSort2Inverse($oSort2Inverse = null)
    {
        // validation for constraint: boolean
        if (null !== $oSort2Inverse && !\is_bool($oSort2Inverse)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($oSort2Inverse, true), \gettype($oSort2Inverse)), __LINE__);
        }
        $this->OSort2Inverse = $oSort2Inverse;
        return $this;
    }

    /**
     * Get DSortInverse value
     *
     * @return bool
     */
    public function getDSortInverse()
    {
        return $this->DSortInverse;
    }

    /**
     * Set DSortInverse value
     *
     * @param bool $dSortInverse
     *
     * @return self
     */
    public function setDSortInverse($dSortInverse = null)
    {
        // validation for constraint: boolean
        if (null !== $dSortInverse && !\is_bool($dSortInverse)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($dSortInverse, true), \gettype($dSortInverse)), __LINE__);
        }
        $this->DSortInverse = $dSortInverse;
        return $this;
    }

    /**
     * Get IsShop value
     *
     * @return bool
     */
    public function getIsShop()
    {
        return $this->IsShop;
    }

    /**
     * Set IsShop value
     *
     * @param bool $isShop
     *
     * @return self
     */
    public function setIsShop($isShop = null)
    {
        // validation for constraint: boolean
        if (null !== $isShop && !\is_bool($isShop)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isShop, true), \gettype($isShop)), __LINE__);
        }
        $this->IsShop = $isShop;
        return $this;
    }

    /**
     * Get ReverseHint value
     *
     * @return bool
     */
    public function getReverseHint()
    {
        return $this->ReverseHint;
    }

    /**
     * Set ReverseHint value
     *
     * @param bool $reverseHint
     *
     * @return self
     */
    public function setReverseHint($reverseHint = null)
    {
        // validation for constraint: boolean
        if (null !== $reverseHint && !\is_bool($reverseHint)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($reverseHint, true), \gettype($reverseHint)), __LINE__);
        }
        $this->ReverseHint = $reverseHint;
        return $this;
    }

    /**
     * Get DutiableHint value
     *
     * @return string|null
     */
    public function getDutiableHint()
    {
        return $this->DutiableHint;
    }

    /**
     * Set DutiableHint value
     *
     * @param string $dutiableHint
     *
     * @return self
     */
    public function setDutiableHint($dutiableHint = null)
    {
        // validation for constraint: string
        if (null !== $dutiableHint && !\is_string($dutiableHint)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dutiableHint, true), \gettype($dutiableHint)), __LINE__);
        }
        $this->DutiableHint = $dutiableHint;
        return $this;
    }

    /**
     * Get Hint value
     *
     * @return string|null
     */
    public function getHint()
    {
        return $this->Hint;
    }

    /**
     * Set Hint value
     *
     * @param string $hint
     *
     * @return self
     */
    public function setHint($hint = null)
    {
        // validation for constraint: string
        if (null !== $hint && !\is_string($hint)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($hint, true), \gettype($hint)), __LINE__);
        }
        $this->Hint = $hint;
        return $this;
    }

    /**
     * Get Routingtext value
     *
     * @return string|null
     */
    public function getRoutingtext()
    {
        return $this->Routingtext;
    }

    /**
     * Set Routingtext value
     *
     * @param string $routingtext
     *
     * @return self
     */
    public function setRoutingtext($routingtext = null)
    {
        // validation for constraint: string
        if (null !== $routingtext && !\is_string($routingtext)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($routingtext, true), \gettype($routingtext)), __LINE__);
        }
        $this->Routingtext = $routingtext;
        return $this;
    }

    /**
     * Get Servicetext value
     *
     * @return string|null
     */
    public function getServicetext()
    {
        return $this->Servicetext;
    }

    /**
     * Set Servicetext value
     *
     * @param string $servicetext
     *
     * @return self
     */
    public function setServicetext($servicetext = null)
    {
        // validation for constraint: string
        if (null !== $servicetext && !\is_string($servicetext)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($servicetext, true), \gettype($servicetext)), __LINE__);
        }
        $this->Servicetext = $servicetext;
        return $this;
    }

    /**
     * Get ServiceMark value
     *
     * @return string|null
     */
    public function getServiceMark()
    {
        return $this->ServiceMark;
    }

    /**
     * Set ServiceMark value
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
        $this->ServiceMark = $serviceMark;
        return $this;
    }

    /**
     * Get ReceiverCenterLine value
     *
     * @return string|null
     */
    public function getReceiverCenterLine()
    {
        return $this->ReceiverCenterLine;
    }

    /**
     * Set ReceiverCenterLine value
     *
     * @param string $receiverCenterLine
     *
     * @return self
     */
    public function setReceiverCenterLine($receiverCenterLine = null)
    {
        // validation for constraint: string
        if (null !== $receiverCenterLine && !\is_string($receiverCenterLine)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($receiverCenterLine, true), \gettype($receiverCenterLine)), __LINE__);
        }
        $this->ReceiverCenterLine = $receiverCenterLine;
        return $this;
    }
}
