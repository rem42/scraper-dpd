<?php

namespace Scraper\ScraperDPD\ArrayType;

use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfParcel ArrayType
 */
class ArrayOfParcel extends AbstractStructArrayBase
{
    /**
     * The Parcel
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     *
     * @var array<\Scraper\ScraperDPD\StructType\Parcel>
     */
    public $Parcel;

    /**
     * Constructor method for ArrayOfParcel
     *
     * @uses ArrayOfParcel::setParcel()
     *
     * @param array<\Scraper\ScraperDPD\StructType\Parcel> $parcel
     */
    public function __construct(array $parcel = [])
    {
        $this
            ->setParcel($parcel)
        ;
    }

    /**
     * Get Parcel value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return array<\Scraper\ScraperDPD\StructType\Parcel>|null
     */
    public function getParcel()
    {
        return $this->Parcel ?? null;
    }

    /**
     * This method is responsible for validating the values passed to the setParcel method
     * This method is willingly generated in order to preserve the one-line inline validation within the setParcel method
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateParcelForArrayConstraintsFromSetParcel(array $values = [])
    {
        $message = '';
        $invalidValues = [];

        foreach ($values as $arrayOfParcelParcelItem) {
            // validation for constraint: itemType
            if (!$arrayOfParcelParcelItem instanceof \Scraper\ScraperDPD\StructType\Parcel) {
                $invalidValues[] = \is_object($arrayOfParcelParcelItem) ? $arrayOfParcelParcelItem::class : sprintf('%s(%s)', \gettype($arrayOfParcelParcelItem), var_export($arrayOfParcelParcelItem, true));
            }
        }

        if (!empty($invalidValues)) {
            $message = sprintf('The Parcel property can only contain items of type \Scraper\ScraperDPD\StructType\Parcel, %s given', \is_object($invalidValues) ? $invalidValues::class : (\is_array($invalidValues) ? implode(', ', $invalidValues) : \gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }

    /**
     * Set Parcel value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param array<\Scraper\ScraperDPD\StructType\Parcel> $parcel
     *
     * @throws \InvalidArgumentException
     *
     * @return self
     */
    public function setParcel(array $parcel = [])
    {
        // validation for constraint: array
        if ('' !== ($parcelArrayErrorMessage = self::validateParcelForArrayConstraintsFromSetParcel($parcel))) {
            throw new \InvalidArgumentException($parcelArrayErrorMessage, __LINE__);
        }

        if (null === $parcel || (\is_array($parcel) && empty($parcel))) {
            unset($this->Parcel);
        } else {
            $this->Parcel = $parcel;
        }
        return $this;
    }

    /**
     * Add item to Parcel value
     *
     * @throws \InvalidArgumentException
     *
     * @return self
     */
    public function addToParcel(\Scraper\ScraperDPD\StructType\Parcel $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Scraper\ScraperDPD\StructType\Parcel) {
            throw new \InvalidArgumentException(sprintf('The Parcel property can only contain items of type \Scraper\ScraperDPD\StructType\Parcel, %s given', \is_object($item) ? $item::class : (\is_array($item) ? implode(', ', $item) : \gettype($item))), __LINE__);
        }
        $this->Parcel[] = $item;
        return $this;
    }

    /**
     * Returns the current element
     *
     * @see AbstractStructArrayBase::current()
     *
     * @return \Scraper\ScraperDPD\StructType\Parcel|null
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
     * @return \Scraper\ScraperDPD\StructType\Parcel|null
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
     * @return \Scraper\ScraperDPD\StructType\Parcel|null
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
     * @return \Scraper\ScraperDPD\StructType\Parcel|null
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
     * @return \Scraper\ScraperDPD\StructType\Parcel|null
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
     * @return string Parcel
     */
    public function getAttributeName()
    {
        return 'Parcel';
    }
}
