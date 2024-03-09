<?php

namespace Scraper\ScraperDPD\ArrayType;

use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfText ArrayType
 */
class ArrayOfText extends AbstractStructArrayBase
{
    /**
     * The Text
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     *
     * @var array<\Scraper\ScraperDPD\StructType\Text>
     */
    public $Text;

    /**
     * Constructor method for ArrayOfText
     *
     * @uses ArrayOfText::setText()
     *
     * @param array<\Scraper\ScraperDPD\StructType\Text> $text
     */
    public function __construct(array $text = [])
    {
        $this
            ->setText($text)
        ;
    }

    /**
     * Get Text value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return array<\Scraper\ScraperDPD\StructType\Text>|null
     */
    public function getText()
    {
        return $this->Text ?? null;
    }

    /**
     * This method is responsible for validating the values passed to the setText method
     * This method is willingly generated in order to preserve the one-line inline validation within the setText method
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTextForArrayConstraintsFromSetText(array $values = [])
    {
        $message = '';
        $invalidValues = [];

        foreach ($values as $arrayOfTextTextItem) {
            // validation for constraint: itemType
            if (!$arrayOfTextTextItem instanceof \Scraper\ScraperDPD\StructType\Text) {
                $invalidValues[] = \is_object($arrayOfTextTextItem) ? $arrayOfTextTextItem::class : sprintf('%s(%s)', \gettype($arrayOfTextTextItem), var_export($arrayOfTextTextItem, true));
            }
        }

        if (!empty($invalidValues)) {
            $message = sprintf('The Text property can only contain items of type \Scraper\ScraperDPD\StructType\Text, %s given', \is_object($invalidValues) ? $invalidValues::class : (\is_array($invalidValues) ? implode(', ', $invalidValues) : \gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }

    /**
     * Set Text value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param array<\Scraper\ScraperDPD\StructType\Text> $text
     *
     * @throws \InvalidArgumentException
     *
     * @return self
     */
    public function setText(array $text = [])
    {
        // validation for constraint: array
        if ('' !== ($textArrayErrorMessage = self::validateTextForArrayConstraintsFromSetText($text))) {
            throw new \InvalidArgumentException($textArrayErrorMessage, __LINE__);
        }

        if (null === $text || (\is_array($text) && empty($text))) {
            unset($this->Text);
        } else {
            $this->Text = $text;
        }
        return $this;
    }

    /**
     * Add item to Text value
     *
     * @throws \InvalidArgumentException
     *
     * @return self
     */
    public function addToText(\Scraper\ScraperDPD\StructType\Text $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Scraper\ScraperDPD\StructType\Text) {
            throw new \InvalidArgumentException(sprintf('The Text property can only contain items of type \Scraper\ScraperDPD\StructType\Text, %s given', \is_object($item) ? $item::class : (\is_array($item) ? implode(', ', $item) : \gettype($item))), __LINE__);
        }
        $this->Text[] = $item;
        return $this;
    }

    /**
     * Returns the current element
     *
     * @see AbstractStructArrayBase::current()
     *
     * @return \Scraper\ScraperDPD\StructType\Text|null
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
     * @return \Scraper\ScraperDPD\StructType\Text|null
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
     * @return \Scraper\ScraperDPD\StructType\Text|null
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
     * @return \Scraper\ScraperDPD\StructType\Text|null
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
     * @return \Scraper\ScraperDPD\StructType\Text|null
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
     * @return string Text
     */
    public function getAttributeName()
    {
        return 'Text';
    }
}
