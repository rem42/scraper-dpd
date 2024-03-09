<?php

namespace Scraper\ScraperDPD\ArrayType;

use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfLabel ArrayType
 */
class ArrayOfLabel extends AbstractStructArrayBase
{
    /**
     * The Label
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     *
     * @var array<\Scraper\ScraperDPD\StructType\Label>
     */
    public $Label;

    /**
     * Constructor method for ArrayOfLabel
     *
     * @uses ArrayOfLabel::setLabel()
     *
     * @param array<\Scraper\ScraperDPD\StructType\Label> $label
     */
    public function __construct(array $label = [])
    {
        $this
            ->setLabel($label)
        ;
    }

    /**
     * Get Label value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return array<\Scraper\ScraperDPD\StructType\Label>|null
     */
    public function getLabel()
    {
        return $this->Label ?? null;
    }

    /**
     * This method is responsible for validating the values passed to the setLabel method
     * This method is willingly generated in order to preserve the one-line inline validation within the setLabel method
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateLabelForArrayConstraintsFromSetLabel(array $values = [])
    {
        $message = '';
        $invalidValues = [];

        foreach ($values as $arrayOfLabelLabelItem) {
            // validation for constraint: itemType
            if (!$arrayOfLabelLabelItem instanceof \Scraper\ScraperDPD\StructType\Label) {
                $invalidValues[] = \is_object($arrayOfLabelLabelItem) ? $arrayOfLabelLabelItem::class : sprintf('%s(%s)', \gettype($arrayOfLabelLabelItem), var_export($arrayOfLabelLabelItem, true));
            }
        }

        if (!empty($invalidValues)) {
            $message = sprintf('The Label property can only contain items of type \Scraper\ScraperDPD\StructType\Label, %s given', \is_object($invalidValues) ? $invalidValues::class : (\is_array($invalidValues) ? implode(', ', $invalidValues) : \gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }

    /**
     * Set Label value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param array<\Scraper\ScraperDPD\StructType\Label> $label
     *
     * @throws \InvalidArgumentException
     *
     * @return self
     */
    public function setLabel(array $label = [])
    {
        // validation for constraint: array
        if ('' !== ($labelArrayErrorMessage = self::validateLabelForArrayConstraintsFromSetLabel($label))) {
            throw new \InvalidArgumentException($labelArrayErrorMessage, __LINE__);
        }

        if (null === $label || (\is_array($label) && empty($label))) {
            unset($this->Label);
        } else {
            $this->Label = $label;
        }
        return $this;
    }

    /**
     * Add item to Label value
     *
     * @throws \InvalidArgumentException
     *
     * @return self
     */
    public function addToLabel(\Scraper\ScraperDPD\StructType\Label $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Scraper\ScraperDPD\StructType\Label) {
            throw new \InvalidArgumentException(sprintf('The Label property can only contain items of type \Scraper\ScraperDPD\StructType\Label, %s given', \is_object($item) ? $item::class : (\is_array($item) ? implode(', ', $item) : \gettype($item))), __LINE__);
        }
        $this->Label[] = $item;
        return $this;
    }

    /**
     * Returns the current element
     *
     * @see AbstractStructArrayBase::current()
     *
     * @return \Scraper\ScraperDPD\StructType\Label|null
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
     * @return \Scraper\ScraperDPD\StructType\Label|null
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
     * @return \Scraper\ScraperDPD\StructType\Label|null
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
     * @return \Scraper\ScraperDPD\StructType\Label|null
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
     * @return \Scraper\ScraperDPD\StructType\Label|null
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
     * @return string Label
     */
    public function getAttributeName()
    {
        return 'Label';
    }
}
