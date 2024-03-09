<?php

namespace Scraper\ScraperDPD\ArrayType;

use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfCNOTParcel ArrayType
 */
class ArrayOfCNOTParcel extends AbstractStructArrayBase
{
    /**
     * The CNOTParcel
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     *
     * @var array<\Scraper\ScraperDPD\StructType\CNOTParcel>
     */
    public $CNOTParcel;

    /**
     * Constructor method for ArrayOfCNOTParcel
     *
     * @uses ArrayOfCNOTParcel::setCNOTParcel()
     *
     * @param array<\Scraper\ScraperDPD\StructType\CNOTParcel> $cNOTParcel
     */
    public function __construct(array $cNOTParcel = [])
    {
        $this
            ->setCNOTParcel($cNOTParcel)
        ;
    }

    /**
     * Get CNOTParcel value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return array<\Scraper\ScraperDPD\StructType\CNOTParcel>|null
     */
    public function getCNOTParcel()
    {
        return $this->CNOTParcel ?? null;
    }

    /**
     * This method is responsible for validating the values passed to the setCNOTParcel method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCNOTParcel method
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCNOTParcelForArrayConstraintsFromSetCNOTParcel(array $values = [])
    {
        $message = '';
        $invalidValues = [];

        foreach ($values as $arrayOfCNOTParcelCNOTParcelItem) {
            // validation for constraint: itemType
            if (!$arrayOfCNOTParcelCNOTParcelItem instanceof \Scraper\ScraperDPD\StructType\CNOTParcel) {
                $invalidValues[] = \is_object($arrayOfCNOTParcelCNOTParcelItem) ? $arrayOfCNOTParcelCNOTParcelItem::class : sprintf('%s(%s)', \gettype($arrayOfCNOTParcelCNOTParcelItem), var_export($arrayOfCNOTParcelCNOTParcelItem, true));
            }
        }

        if (!empty($invalidValues)) {
            $message = sprintf('The CNOTParcel property can only contain items of type \Scraper\ScraperDPD\StructType\CNOTParcel, %s given', \is_object($invalidValues) ? $invalidValues::class : (\is_array($invalidValues) ? implode(', ', $invalidValues) : \gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }

    /**
     * Set CNOTParcel value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param array<\Scraper\ScraperDPD\StructType\CNOTParcel> $cNOTParcel
     *
     * @throws \InvalidArgumentException
     *
     * @return self
     */
    public function setCNOTParcel(array $cNOTParcel = [])
    {
        // validation for constraint: array
        if ('' !== ($cNOTParcelArrayErrorMessage = self::validateCNOTParcelForArrayConstraintsFromSetCNOTParcel($cNOTParcel))) {
            throw new \InvalidArgumentException($cNOTParcelArrayErrorMessage, __LINE__);
        }

        if (null === $cNOTParcel || (\is_array($cNOTParcel) && empty($cNOTParcel))) {
            unset($this->CNOTParcel);
        } else {
            $this->CNOTParcel = $cNOTParcel;
        }
        return $this;
    }

    /**
     * Add item to CNOTParcel value
     *
     * @throws \InvalidArgumentException
     *
     * @return self
     */
    public function addToCNOTParcel(\Scraper\ScraperDPD\StructType\CNOTParcel $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Scraper\ScraperDPD\StructType\CNOTParcel) {
            throw new \InvalidArgumentException(sprintf('The CNOTParcel property can only contain items of type \Scraper\ScraperDPD\StructType\CNOTParcel, %s given', \is_object($item) ? $item::class : (\is_array($item) ? implode(', ', $item) : \gettype($item))), __LINE__);
        }
        $this->CNOTParcel[] = $item;
        return $this;
    }

    /**
     * Returns the current element
     *
     * @see AbstractStructArrayBase::current()
     *
     * @return \Scraper\ScraperDPD\StructType\CNOTParcel|null
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
     * @return \Scraper\ScraperDPD\StructType\CNOTParcel|null
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
     * @return \Scraper\ScraperDPD\StructType\CNOTParcel|null
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
     * @return \Scraper\ScraperDPD\StructType\CNOTParcel|null
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
     * @return \Scraper\ScraperDPD\StructType\CNOTParcel|null
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
     * @return string CNOTParcel
     */
    public function getAttributeName()
    {
        return 'CNOTParcel';
    }
}
