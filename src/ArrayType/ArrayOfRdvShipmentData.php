<?php

namespace Scraper\ScraperDPD\ArrayType;

use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfRdvShipmentData ArrayType
 */
class ArrayOfRdvShipmentData extends AbstractStructArrayBase
{
    /**
     * The RdvShipmentData
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     *
     * @var array<\Scraper\ScraperDPD\StructType\RdvShipmentData>
     */
    public $RdvShipmentData;

    /**
     * Constructor method for ArrayOfRdvShipmentData
     *
     * @uses ArrayOfRdvShipmentData::setRdvShipmentData()
     *
     * @param array<\Scraper\ScraperDPD\StructType\RdvShipmentData> $rdvShipmentData
     */
    public function __construct(array $rdvShipmentData = [])
    {
        $this
            ->setRdvShipmentData($rdvShipmentData)
        ;
    }

    /**
     * Get RdvShipmentData value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return array<\Scraper\ScraperDPD\StructType\RdvShipmentData>|null
     */
    public function getRdvShipmentData()
    {
        return $this->RdvShipmentData ?? null;
    }

    /**
     * This method is responsible for validating the values passed to the setRdvShipmentData method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRdvShipmentData method
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRdvShipmentDataForArrayConstraintsFromSetRdvShipmentData(array $values = [])
    {
        $message = '';
        $invalidValues = [];

        foreach ($values as $arrayOfRdvShipmentDataRdvShipmentDataItem) {
            // validation for constraint: itemType
            if (!$arrayOfRdvShipmentDataRdvShipmentDataItem instanceof \Scraper\ScraperDPD\StructType\RdvShipmentData) {
                $invalidValues[] = \is_object($arrayOfRdvShipmentDataRdvShipmentDataItem) ? $arrayOfRdvShipmentDataRdvShipmentDataItem::class : sprintf('%s(%s)', \gettype($arrayOfRdvShipmentDataRdvShipmentDataItem), var_export($arrayOfRdvShipmentDataRdvShipmentDataItem, true));
            }
        }

        if (!empty($invalidValues)) {
            $message = sprintf('The RdvShipmentData property can only contain items of type \Scraper\ScraperDPD\StructType\RdvShipmentData, %s given', \is_object($invalidValues) ? $invalidValues::class : (\is_array($invalidValues) ? implode(', ', $invalidValues) : \gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }

    /**
     * Set RdvShipmentData value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param array<\Scraper\ScraperDPD\StructType\RdvShipmentData> $rdvShipmentData
     *
     * @throws \InvalidArgumentException
     *
     * @return self
     */
    public function setRdvShipmentData(array $rdvShipmentData = [])
    {
        // validation for constraint: array
        if ('' !== ($rdvShipmentDataArrayErrorMessage = self::validateRdvShipmentDataForArrayConstraintsFromSetRdvShipmentData($rdvShipmentData))) {
            throw new \InvalidArgumentException($rdvShipmentDataArrayErrorMessage, __LINE__);
        }

        if (null === $rdvShipmentData || (\is_array($rdvShipmentData) && empty($rdvShipmentData))) {
            unset($this->RdvShipmentData);
        } else {
            $this->RdvShipmentData = $rdvShipmentData;
        }
        return $this;
    }

    /**
     * Add item to RdvShipmentData value
     *
     * @throws \InvalidArgumentException
     *
     * @return self
     */
    public function addToRdvShipmentData(\Scraper\ScraperDPD\StructType\RdvShipmentData $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Scraper\ScraperDPD\StructType\RdvShipmentData) {
            throw new \InvalidArgumentException(sprintf('The RdvShipmentData property can only contain items of type \Scraper\ScraperDPD\StructType\RdvShipmentData, %s given', \is_object($item) ? $item::class : (\is_array($item) ? implode(', ', $item) : \gettype($item))), __LINE__);
        }
        $this->RdvShipmentData[] = $item;
        return $this;
    }

    /**
     * Returns the current element
     *
     * @see AbstractStructArrayBase::current()
     *
     * @return \Scraper\ScraperDPD\StructType\RdvShipmentData|null
     */
    public function current()
    {
        return parent::current();
    }

    /**
     * Returns the indexed element
     *
     * @see AbstractStructArrayBase::item()
     *
     * @param int $index
     *
     * @return \Scraper\ScraperDPD\StructType\RdvShipmentData|null
     */
    public function item($index)
    {
        return parent::item($index);
    }

    /**
     * Returns the first element
     *
     * @see AbstractStructArrayBase::first()
     *
     * @return \Scraper\ScraperDPD\StructType\RdvShipmentData|null
     */
    public function first()
    {
        return parent::first();
    }

    /**
     * Returns the last element
     *
     * @see AbstractStructArrayBase::last()
     *
     * @return \Scraper\ScraperDPD\StructType\RdvShipmentData|null
     */
    public function last()
    {
        return parent::last();
    }

    /**
     * Returns the element at the offset
     *
     * @see AbstractStructArrayBase::offsetGet()
     *
     * @param int $offset
     *
     * @return \Scraper\ScraperDPD\StructType\RdvShipmentData|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }

    /**
     * Returns the attribute name
     *
     * @see AbstractStructArrayBase::getAttributeName()
     *
     * @return string RdvShipmentData
     */
    public function getAttributeName()
    {
        return 'RdvShipmentData';
    }
}
