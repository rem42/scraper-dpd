<?php

namespace Scraper\ScraperDPD\StructType;

/**
 * This class stands for PickupData StructType
 */
class PickupData extends ServiceBaseList
{
    /**
     * The dayCheckDone
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     *
     * @var bool
     */
    public $dayCheckDone;
    /**
     * The time_from
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $time_from;
    /**
     * The time_to
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $time_to;
    /**
     * The remark
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $remark;
    /**
     * The pick_remark
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $pick_remark;

    /**
     * Constructor method for PickupData
     *
     * @uses PickupData::setDayCheckDone()
     * @uses PickupData::setTime_from()
     * @uses PickupData::setTime_to()
     * @uses PickupData::setRemark()
     * @uses PickupData::setPick_remark()
     *
     * @param bool   $dayCheckDone
     * @param string $time_from
     * @param string $time_to
     * @param string $remark
     * @param string $pick_remark
     */
    public function __construct($dayCheckDone = null, $time_from = null, $time_to = null, $remark = null, $pick_remark = null)
    {
        $this
            ->setDayCheckDone($dayCheckDone)
            ->setTime_from($time_from)
            ->setTime_to($time_to)
            ->setRemark($remark)
            ->setPick_remark($pick_remark)
        ;
    }

    /**
     * Get dayCheckDone value
     *
     * @return bool
     */
    public function getDayCheckDone()
    {
        return $this->dayCheckDone;
    }

    /**
     * Set dayCheckDone value
     *
     * @param bool $dayCheckDone
     *
     * @return self
     */
    public function setDayCheckDone($dayCheckDone = null)
    {
        // validation for constraint: boolean
        if (null !== $dayCheckDone && !\is_bool($dayCheckDone)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($dayCheckDone, true), \gettype($dayCheckDone)), __LINE__);
        }
        $this->dayCheckDone = $dayCheckDone;
        return $this;
    }

    /**
     * Get time_from value
     *
     * @return string|null
     */
    public function getTime_from()
    {
        return $this->time_from;
    }

    /**
     * Set time_from value
     *
     * @param string $time_from
     *
     * @return self
     */
    public function setTime_from($time_from = null)
    {
        // validation for constraint: string
        if (null !== $time_from && !\is_string($time_from)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($time_from, true), \gettype($time_from)), __LINE__);
        }
        $this->time_from = $time_from;
        return $this;
    }

    /**
     * Get time_to value
     *
     * @return string|null
     */
    public function getTime_to()
    {
        return $this->time_to;
    }

    /**
     * Set time_to value
     *
     * @param string $time_to
     *
     * @return self
     */
    public function setTime_to($time_to = null)
    {
        // validation for constraint: string
        if (null !== $time_to && !\is_string($time_to)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($time_to, true), \gettype($time_to)), __LINE__);
        }
        $this->time_to = $time_to;
        return $this;
    }

    /**
     * Get remark value
     *
     * @return string|null
     */
    public function getRemark()
    {
        return $this->remark;
    }

    /**
     * Set remark value
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
        $this->remark = $remark;
        return $this;
    }

    /**
     * Get pick_remark value
     *
     * @return string|null
     */
    public function getPick_remark()
    {
        return $this->pick_remark;
    }

    /**
     * Set pick_remark value
     *
     * @param string $pick_remark
     *
     * @return self
     */
    public function setPick_remark($pick_remark = null)
    {
        // validation for constraint: string
        if (null !== $pick_remark && !\is_string($pick_remark)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pick_remark, true), \gettype($pick_remark)), __LINE__);
        }
        $this->pick_remark = $pick_remark;
        return $this;
    }
}
