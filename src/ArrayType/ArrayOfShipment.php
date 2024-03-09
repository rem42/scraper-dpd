<?php

namespace Scraper\ScraperDPD\ArrayType;

use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfShipment ArrayType
 */
class ArrayOfShipment extends AbstractStructArrayBase
{
    /**
     * The Shipment
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     *
     * @var array<\Scraper\ScraperDPD\StructType\Shipment>
     */
    public $Shipment;

    /**
     * Constructor method for ArrayOfShipment
     *
     * @uses ArrayOfShipment::setShipment()
     *
     * @param array<\Scraper\ScraperDPD\StructType\Shipment> $shipment
     */
    public function __construct(array $shipment = [])
    {
        $this
            ->setShipment($shipment)
        ;
    }

    /**
     * Get Shipment value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return array<\Scraper\ScraperDPD\StructType\Shipment>|null
     */
    public function getShipment()
    {
        return $this->Shipment ?? null;
    }

    /**
     * This method is responsible for validating the values passed to the setShipment method
     * This method is willingly generated in order to preserve the one-line inline validation within the setShipment method
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateShipmentForArrayConstraintsFromSetShipment(array $values = [])
    {
        $message = '';
        $invalidValues = [];

        foreach ($values as $arrayOfShipmentShipmentItem) {
            // validation for constraint: itemType
            if (!$arrayOfShipmentShipmentItem instanceof \Scraper\ScraperDPD\StructType\Shipment) {
                $invalidValues[] = \is_object($arrayOfShipmentShipmentItem) ? $arrayOfShipmentShipmentItem::class : sprintf('%s(%s)', \gettype($arrayOfShipmentShipmentItem), var_export($arrayOfShipmentShipmentItem, true));
            }
        }

        if (!empty($invalidValues)) {
            $message = sprintf('The Shipment property can only contain items of type \Scraper\ScraperDPD\StructType\Shipment, %s given', \is_object($invalidValues) ? $invalidValues::class : (\is_array($invalidValues) ? implode(', ', $invalidValues) : \gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }

    /**
     * Set Shipment value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param array<\Scraper\ScraperDPD\StructType\Shipment> $shipment
     *
     * @throws \InvalidArgumentException
     *
     * @return self
     */
    public function setShipment(array $shipment = [])
    {
        // validation for constraint: array
        if ('' !== ($shipmentArrayErrorMessage = self::validateShipmentForArrayConstraintsFromSetShipment($shipment))) {
            throw new \InvalidArgumentException($shipmentArrayErrorMessage, __LINE__);
        }

        if (null === $shipment || (\is_array($shipment) && empty($shipment))) {
            unset($this->Shipment);
        } else {
            $this->Shipment = $shipment;
        }
        return $this;
    }

    /**
     * Add item to Shipment value
     *
     * @throws \InvalidArgumentException
     *
     * @return self
     */
    public function addToShipment(\Scraper\ScraperDPD\StructType\Shipment $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Scraper\ScraperDPD\StructType\Shipment) {
            throw new \InvalidArgumentException(sprintf('The Shipment property can only contain items of type \Scraper\ScraperDPD\StructType\Shipment, %s given', \is_object($item) ? $item::class : (\is_array($item) ? implode(', ', $item) : \gettype($item))), __LINE__);
        }
        $this->Shipment[] = $item;
        return $this;
    }

    /**
     * Returns the current element
     *
     * @see AbstractStructArrayBase::current()
     *
     * @return \Scraper\ScraperDPD\StructType\Shipment|null
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
     * @return \Scraper\ScraperDPD\StructType\Shipment|null
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
     * @return \Scraper\ScraperDPD\StructType\Shipment|null
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
     * @return \Scraper\ScraperDPD\StructType\Shipment|null
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
     * @return \Scraper\ScraperDPD\StructType\Shipment|null
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
     * @return string Shipment
     */
    public function getAttributeName()
    {
        return 'Shipment';
    }
}
