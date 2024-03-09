<?php

namespace Scraper\ScraperDPD\StructType;

/**
 * This class stands for CollectionRequestRequest StructType
 */
class CollectionRequestRequest extends CollectionRequestRequestBase
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
     * The pick_date
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $pick_date;
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
     * The pick_remark
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $pick_remark;
    /**
     * The delivery_remark
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $delivery_remark;

    /**
     * Constructor method for CollectionRequestRequest
     *
     * @uses CollectionRequestRequest::setDayCheckDone()
     * @uses CollectionRequestRequest::setPick_date()
     * @uses CollectionRequestRequest::setTime_from()
     * @uses CollectionRequestRequest::setTime_to()
     * @uses CollectionRequestRequest::setPick_remark()
     * @uses CollectionRequestRequest::setDelivery_remark()
     *
     * @param bool   $dayCheckDone
     * @param string $pick_date
     * @param string $time_from
     * @param string $time_to
     * @param string $pick_remark
     * @param string $delivery_remark
     */
    public function __construct($dayCheckDone = null, $pick_date = null, $time_from = null, $time_to = null, $pick_remark = null, $delivery_remark = null)
    {
        $this
            ->setDayCheckDone($dayCheckDone)
            ->setPick_date($pick_date)
            ->setTime_from($time_from)
            ->setTime_to($time_to)
            ->setPick_remark($pick_remark)
            ->setDelivery_remark($delivery_remark)
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
     * Get pick_date value
     *
     * @return string|null
     */
    public function getPick_date()
    {
        return $this->pick_date;
    }

    /**
     * Set pick_date value
     *
     * @param string $pick_date
     *
     * @return self
     */
    public function setPick_date($pick_date = null)
    {
        // validation for constraint: string
        if (null !== $pick_date && !\is_string($pick_date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pick_date, true), \gettype($pick_date)), __LINE__);
        }
        $this->pick_date = $pick_date;
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

    /**
     * Get delivery_remark value
     *
     * @return string|null
     */
    public function getDelivery_remark()
    {
        return $this->delivery_remark;
    }

    /**
     * Set delivery_remark value
     *
     * @param string $delivery_remark
     *
     * @return self
     */
    public function setDelivery_remark($delivery_remark = null)
    {
        // validation for constraint: string
        if (null !== $delivery_remark && !\is_string($delivery_remark)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($delivery_remark, true), \gettype($delivery_remark)), __LINE__);
        }
        $this->delivery_remark = $delivery_remark;
        return $this;
    }
}
