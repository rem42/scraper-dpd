<?php

namespace Scraper\ScraperDPD\ArrayType;

use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfShipmentBc ArrayType
 */
class ArrayOfShipmentBc extends AbstractStructArrayBase
{
    /**
     * The ShipmentBc
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     *
     * @var array<\Scraper\ScraperDPD\StructType\ShipmentBc>
     */
    public $ShipmentBc;

    /**
     * Constructor method for ArrayOfShipmentBc
     *
     * @uses ArrayOfShipmentBc::setShipmentBc()
     *
     * @param array<\Scraper\ScraperDPD\StructType\ShipmentBc> $shipmentBc
     */
    public function __construct(array $shipmentBc = [])
    {
        $this
            ->setShipmentBc($shipmentBc)
        ;
    }

    /**
     * Get ShipmentBc value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return array<\Scraper\ScraperDPD\StructType\ShipmentBc>|null
     */
    public function getShipmentBc()
    {
        return $this->ShipmentBc ?? null;
    }

    /**
     * This method is responsible for validating the values passed to the setShipmentBc method
     * This method is willingly generated in order to preserve the one-line inline validation within the setShipmentBc method
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateShipmentBcForArrayConstraintsFromSetShipmentBc(array $values = [])
    {
        $message = '';
        $invalidValues = [];

        foreach ($values as $arrayOfShipmentBcShipmentBcItem) {
            // validation for constraint: itemType
            if (!$arrayOfShipmentBcShipmentBcItem instanceof \Scraper\ScraperDPD\StructType\ShipmentBc) {
                $invalidValues[] = \is_object($arrayOfShipmentBcShipmentBcItem) ? $arrayOfShipmentBcShipmentBcItem::class : sprintf('%s(%s)', \gettype($arrayOfShipmentBcShipmentBcItem), var_export($arrayOfShipmentBcShipmentBcItem, true));
            }
        }

        if (!empty($invalidValues)) {
            $message = sprintf('The ShipmentBc property can only contain items of type \Scraper\ScraperDPD\StructType\ShipmentBc, %s given', \is_object($invalidValues) ? $invalidValues::class : (\is_array($invalidValues) ? implode(', ', $invalidValues) : \gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }

    /**
     * Set ShipmentBc value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param array<\Scraper\ScraperDPD\StructType\ShipmentBc> $shipmentBc
     *
     * @throws \InvalidArgumentException
     *
     * @return self
     */
    public function setShipmentBc(array $shipmentBc = [])
    {
        // validation for constraint: array
        if ('' !== ($shipmentBcArrayErrorMessage = self::validateShipmentBcForArrayConstraintsFromSetShipmentBc($shipmentBc))) {
            throw new \InvalidArgumentException($shipmentBcArrayErrorMessage, __LINE__);
        }

        if (null === $shipmentBc || (\is_array($shipmentBc) && empty($shipmentBc))) {
            unset($this->ShipmentBc);
        } else {
            $this->ShipmentBc = $shipmentBc;
        }
        return $this;
    }

    /**
     * Add item to ShipmentBc value
     *
     * @throws \InvalidArgumentException
     *
     * @return self
     */
    public function addToShipmentBc(\Scraper\ScraperDPD\StructType\ShipmentBc $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Scraper\ScraperDPD\StructType\ShipmentBc) {
            throw new \InvalidArgumentException(sprintf('The ShipmentBc property can only contain items of type \Scraper\ScraperDPD\StructType\ShipmentBc, %s given', \is_object($item) ? $item::class : (\is_array($item) ? implode(', ', $item) : \gettype($item))), __LINE__);
        }
        $this->ShipmentBc[] = $item;
        return $this;
    }

    /**
     * Returns the current element
     *
     * @see AbstractStructArrayBase::current()
     *
     * @return \Scraper\ScraperDPD\StructType\ShipmentBc|null
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
     * @return \Scraper\ScraperDPD\StructType\ShipmentBc|null
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
     * @return \Scraper\ScraperDPD\StructType\ShipmentBc|null
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
     * @return \Scraper\ScraperDPD\StructType\ShipmentBc|null
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
     * @return \Scraper\ScraperDPD\StructType\ShipmentBc|null
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
     * @return string ShipmentBc
     */
    public function getAttributeName()
    {
        return 'ShipmentBc';
    }
}
