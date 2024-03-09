<?php

namespace Scraper\ScraperDPD\ArrayType;

use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfString ArrayType
 */
class ArrayOfString extends AbstractStructArrayBase
{
    /**
     * The string
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     *
     * @var array<string>
     */
    public $string;

    /**
     * Constructor method for ArrayOfString
     *
     * @uses ArrayOfString::setString()
     *
     * @param array<string> $string
     */
    public function __construct(array $string = [])
    {
        $this
            ->setString($string)
        ;
    }

    /**
     * Get string value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return array<string>|null
     */
    public function getString()
    {
        return $this->string ?? null;
    }

    /**
     * This method is responsible for validating the values passed to the setString method
     * This method is willingly generated in order to preserve the one-line inline validation within the setString method
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateStringForArrayConstraintsFromSetString(array $values = [])
    {
        $message = '';
        $invalidValues = [];

        foreach ($values as $arrayOfStringStringItem) {
            // validation for constraint: itemType
            if (!\is_string($arrayOfStringStringItem)) {
                $invalidValues[] = \is_object($arrayOfStringStringItem) ? $arrayOfStringStringItem::class : sprintf('%s(%s)', \gettype($arrayOfStringStringItem), var_export($arrayOfStringStringItem, true));
            }
        }

        if (!empty($invalidValues)) {
            $message = sprintf('The string property can only contain items of type string, %s given', \is_object($invalidValues) ? $invalidValues::class : (\is_array($invalidValues) ? implode(', ', $invalidValues) : \gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }

    /**
     * Set string value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param array<string> $string
     *
     * @throws \InvalidArgumentException
     *
     * @return self
     */
    public function setString(array $string = [])
    {
        // validation for constraint: array
        if ('' !== ($stringArrayErrorMessage = self::validateStringForArrayConstraintsFromSetString($string))) {
            throw new \InvalidArgumentException($stringArrayErrorMessage, __LINE__);
        }

        if (null === $string || (\is_array($string) && empty($string))) {
            unset($this->string);
        } else {
            $this->string = $string;
        }
        return $this;
    }

    /**
     * Add item to string value
     *
     * @param string $item
     *
     * @throws \InvalidArgumentException
     *
     * @return self
     */
    public function addToString($item)
    {
        // validation for constraint: itemType
        if (!\is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The string property can only contain items of type string, %s given', \is_object($item) ? $item::class : (\is_array($item) ? implode(', ', $item) : \gettype($item))), __LINE__);
        }
        $this->string[] = $item;
        return $this;
    }

    /**
     * Returns the current element
     *
     * @see AbstractStructArrayBase::current()
     *
     * @return string|null
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
     * @return string|null
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
     * @return string|null
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
     * @return string|null
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
     * @return string|null
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
     * @return string string
     */
    public function getAttributeName()
    {
        return 'string';
    }
}
