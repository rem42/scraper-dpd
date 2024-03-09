<?php

namespace Scraper\ScraperDPD\StructType;

/**
 * This class stands for RdvDeliveryInfo StructType
 */
class RdvDeliveryInfo extends RdvDeliveryInfoSmall
{
    /**
     * The Date
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $Date;
    /**
     * The TimeFrom
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $TimeFrom;
    /**
     * The TimeTo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $TimeTo;

    /**
     * Constructor method for RdvDeliveryInfo
     *
     * @uses RdvDeliveryInfo::setDate()
     * @uses RdvDeliveryInfo::setTimeFrom()
     * @uses RdvDeliveryInfo::setTimeTo()
     *
     * @param string $date
     * @param string $timeFrom
     * @param string $timeTo
     */
    public function __construct($date = null, $timeFrom = null, $timeTo = null)
    {
        $this
            ->setDate($date)
            ->setTimeFrom($timeFrom)
            ->setTimeTo($timeTo)
        ;
    }

    /**
     * Get Date value
     *
     * @return string|null
     */
    public function getDate()
    {
        return $this->Date;
    }

    /**
     * Set Date value
     *
     * @param string $date
     *
     * @return self
     */
    public function setDate($date = null)
    {
        // validation for constraint: string
        if (null !== $date && !\is_string($date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($date, true), \gettype($date)), __LINE__);
        }
        $this->Date = $date;
        return $this;
    }

    /**
     * Get TimeFrom value
     *
     * @return string|null
     */
    public function getTimeFrom()
    {
        return $this->TimeFrom;
    }

    /**
     * Set TimeFrom value
     *
     * @param string $timeFrom
     *
     * @return self
     */
    public function setTimeFrom($timeFrom = null)
    {
        // validation for constraint: string
        if (null !== $timeFrom && !\is_string($timeFrom)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($timeFrom, true), \gettype($timeFrom)), __LINE__);
        }
        $this->TimeFrom = $timeFrom;
        return $this;
    }

    /**
     * Get TimeTo value
     *
     * @return string|null
     */
    public function getTimeTo()
    {
        return $this->TimeTo;
    }

    /**
     * Set TimeTo value
     *
     * @param string $timeTo
     *
     * @return self
     */
    public function setTimeTo($timeTo = null)
    {
        // validation for constraint: string
        if (null !== $timeTo && !\is_string($timeTo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($timeTo, true), \gettype($timeTo)), __LINE__);
        }
        $this->TimeTo = $timeTo;
        return $this;
    }
}
