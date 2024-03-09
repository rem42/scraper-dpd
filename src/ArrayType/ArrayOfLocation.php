<?php

namespace Scraper\ScraperDPD\ArrayType;

use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfLocation ArrayType
 */
class ArrayOfLocation extends AbstractStructArrayBase
{
    /**
     * The Location
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     *
     * @var array<\Scraper\ScraperDPD\StructType\Location>
     */
    public $Location;

    /**
     * Constructor method for ArrayOfLocation
     *
     * @uses ArrayOfLocation::setLocation()
     *
     * @param array<\Scraper\ScraperDPD\StructType\Location> $location
     */
    public function __construct(array $location = [])
    {
        $this
            ->setLocation($location)
        ;
    }

    /**
     * Get Location value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return array<\Scraper\ScraperDPD\StructType\Location>|null
     */
    public function getLocation()
    {
        return $this->Location ?? null;
    }

    /**
     * This method is responsible for validating the values passed to the setLocation method
     * This method is willingly generated in order to preserve the one-line inline validation within the setLocation method
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateLocationForArrayConstraintsFromSetLocation(array $values = [])
    {
        $message = '';
        $invalidValues = [];

        foreach ($values as $arrayOfLocationLocationItem) {
            // validation for constraint: itemType
            if (!$arrayOfLocationLocationItem instanceof \Scraper\ScraperDPD\StructType\Location) {
                $invalidValues[] = \is_object($arrayOfLocationLocationItem) ? $arrayOfLocationLocationItem::class : sprintf('%s(%s)', \gettype($arrayOfLocationLocationItem), var_export($arrayOfLocationLocationItem, true));
            }
        }

        if (!empty($invalidValues)) {
            $message = sprintf('The Location property can only contain items of type \Scraper\ScraperDPD\StructType\Location, %s given', \is_object($invalidValues) ? $invalidValues::class : (\is_array($invalidValues) ? implode(', ', $invalidValues) : \gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }

    /**
     * Set Location value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param array<\Scraper\ScraperDPD\StructType\Location> $location
     *
     * @throws \InvalidArgumentException
     *
     * @return self
     */
    public function setLocation(array $location = [])
    {
        // validation for constraint: array
        if ('' !== ($locationArrayErrorMessage = self::validateLocationForArrayConstraintsFromSetLocation($location))) {
            throw new \InvalidArgumentException($locationArrayErrorMessage, __LINE__);
        }

        if (null === $location || (\is_array($location) && empty($location))) {
            unset($this->Location);
        } else {
            $this->Location = $location;
        }
        return $this;
    }

    /**
     * Add item to Location value
     *
     * @throws \InvalidArgumentException
     *
     * @return self
     */
    public function addToLocation(\Scraper\ScraperDPD\StructType\Location $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Scraper\ScraperDPD\StructType\Location) {
            throw new \InvalidArgumentException(sprintf('The Location property can only contain items of type \Scraper\ScraperDPD\StructType\Location, %s given', \is_object($item) ? $item::class : (\is_array($item) ? implode(', ', $item) : \gettype($item))), __LINE__);
        }
        $this->Location[] = $item;
        return $this;
    }

    /**
     * Returns the current element
     *
     * @see AbstractStructArrayBase::current()
     *
     * @return \Scraper\ScraperDPD\StructType\Location|null
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
     * @return \Scraper\ScraperDPD\StructType\Location|null
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
     * @return \Scraper\ScraperDPD\StructType\Location|null
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
     * @return \Scraper\ScraperDPD\StructType\Location|null
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
     * @return \Scraper\ScraperDPD\StructType\Location|null
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
     * @return string Location
     */
    public function getAttributeName()
    {
        return 'Location';
    }
}
