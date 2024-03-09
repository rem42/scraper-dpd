<?php

namespace Scraper\ScraperDPD\ArrayType;

use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfLong ArrayType
 */
class ArrayOfLong extends AbstractStructArrayBase
{
    /**
     * The long
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     *
     * @var array<int>
     */
    public $long;

    /**
     * Constructor method for ArrayOfLong
     *
     * @uses ArrayOfLong::setLong()
     *
     * @param array<int> $long
     */
    public function __construct(array $long = [])
    {
        $this
            ->setLong($long)
        ;
    }

    /**
     * Get long value
     *
     * @return array<int>|null
     */
    public function getLong()
    {
        return $this->long;
    }

    /**
     * This method is responsible for validating the values passed to the setLong method
     * This method is willingly generated in order to preserve the one-line inline validation within the setLong method
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateLongForArrayConstraintsFromSetLong(array $values = [])
    {
        $message = '';
        $invalidValues = [];

        foreach ($values as $arrayOfLongLongItem) {
            // validation for constraint: itemType
            if (!(\is_int($arrayOfLongLongItem) || ctype_digit($arrayOfLongLongItem))) {
                $invalidValues[] = \is_object($arrayOfLongLongItem) ? $arrayOfLongLongItem::class : sprintf('%s(%s)', \gettype($arrayOfLongLongItem), var_export($arrayOfLongLongItem, true));
            }
        }

        if (!empty($invalidValues)) {
            $message = sprintf('The long property can only contain items of type long, %s given', \is_object($invalidValues) ? $invalidValues::class : (\is_array($invalidValues) ? implode(', ', $invalidValues) : \gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }

    /**
     * Set long value
     *
     * @param array<int> $long
     *
     * @throws \InvalidArgumentException
     *
     * @return self
     */
    public function setLong(array $long = [])
    {
        // validation for constraint: array
        if ('' !== ($longArrayErrorMessage = self::validateLongForArrayConstraintsFromSetLong($long))) {
            throw new \InvalidArgumentException($longArrayErrorMessage, __LINE__);
        }
        $this->long = $long;
        return $this;
    }

    /**
     * Add item to long value
     *
     * @param int $item
     *
     * @throws \InvalidArgumentException
     *
     * @return self
     */
    public function addToLong($item)
    {
        // validation for constraint: itemType
        if (!(\is_int($item) || ctype_digit($item))) {
            throw new \InvalidArgumentException(sprintf('The long property can only contain items of type long, %s given', \is_object($item) ? $item::class : (\is_array($item) ? implode(', ', $item) : \gettype($item))), __LINE__);
        }
        $this->long[] = $item;
        return $this;
    }

    /**
     * Returns the current element
     *
     * @see AbstractStructArrayBase::current()
     *
     * @return int|null
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
     * @return int|null
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
     * @return int|null
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
     * @return int|null
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
     * @return int|null
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
     * @return string long
     */
    public function getAttributeName()
    {
        return 'long';
    }
}
