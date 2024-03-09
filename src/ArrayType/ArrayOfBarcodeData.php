<?php

namespace Scraper\ScraperDPD\ArrayType;

use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfBarcodeData ArrayType
 */
class ArrayOfBarcodeData extends AbstractStructArrayBase
{
    /**
     * The BarcodeData
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     *
     * @var array<\Scraper\ScraperDPD\StructType\BarcodeData>
     */
    public $BarcodeData;

    /**
     * Constructor method for ArrayOfBarcodeData
     *
     * @uses ArrayOfBarcodeData::setBarcodeData()
     *
     * @param array<\Scraper\ScraperDPD\StructType\BarcodeData> $barcodeData
     */
    public function __construct(array $barcodeData = [])
    {
        $this
            ->setBarcodeData($barcodeData)
        ;
    }

    /**
     * Get BarcodeData value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return array<\Scraper\ScraperDPD\StructType\BarcodeData>|null
     */
    public function getBarcodeData()
    {
        return $this->BarcodeData ?? null;
    }

    /**
     * This method is responsible for validating the values passed to the setBarcodeData method
     * This method is willingly generated in order to preserve the one-line inline validation within the setBarcodeData method
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateBarcodeDataForArrayConstraintsFromSetBarcodeData(array $values = [])
    {
        $message = '';
        $invalidValues = [];

        foreach ($values as $arrayOfBarcodeDataBarcodeDataItem) {
            // validation for constraint: itemType
            if (!$arrayOfBarcodeDataBarcodeDataItem instanceof \Scraper\ScraperDPD\StructType\BarcodeData) {
                $invalidValues[] = \is_object($arrayOfBarcodeDataBarcodeDataItem) ? $arrayOfBarcodeDataBarcodeDataItem::class : sprintf('%s(%s)', \gettype($arrayOfBarcodeDataBarcodeDataItem), var_export($arrayOfBarcodeDataBarcodeDataItem, true));
            }
        }

        if (!empty($invalidValues)) {
            $message = sprintf('The BarcodeData property can only contain items of type \Scraper\ScraperDPD\StructType\BarcodeData, %s given', \is_object($invalidValues) ? $invalidValues::class : (\is_array($invalidValues) ? implode(', ', $invalidValues) : \gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }

    /**
     * Set BarcodeData value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param array<\Scraper\ScraperDPD\StructType\BarcodeData> $barcodeData
     *
     * @throws \InvalidArgumentException
     *
     * @return self
     */
    public function setBarcodeData(array $barcodeData = [])
    {
        // validation for constraint: array
        if ('' !== ($barcodeDataArrayErrorMessage = self::validateBarcodeDataForArrayConstraintsFromSetBarcodeData($barcodeData))) {
            throw new \InvalidArgumentException($barcodeDataArrayErrorMessage, __LINE__);
        }

        if (null === $barcodeData || (\is_array($barcodeData) && empty($barcodeData))) {
            unset($this->BarcodeData);
        } else {
            $this->BarcodeData = $barcodeData;
        }
        return $this;
    }

    /**
     * Add item to BarcodeData value
     *
     * @throws \InvalidArgumentException
     *
     * @return self
     */
    public function addToBarcodeData(\Scraper\ScraperDPD\StructType\BarcodeData $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Scraper\ScraperDPD\StructType\BarcodeData) {
            throw new \InvalidArgumentException(sprintf('The BarcodeData property can only contain items of type \Scraper\ScraperDPD\StructType\BarcodeData, %s given', \is_object($item) ? $item::class : (\is_array($item) ? implode(', ', $item) : \gettype($item))), __LINE__);
        }
        $this->BarcodeData[] = $item;
        return $this;
    }

    /**
     * Returns the current element
     *
     * @see AbstractStructArrayBase::current()
     *
     * @return \Scraper\ScraperDPD\StructType\BarcodeData|null
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
     * @return \Scraper\ScraperDPD\StructType\BarcodeData|null
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
     * @return \Scraper\ScraperDPD\StructType\BarcodeData|null
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
     * @return \Scraper\ScraperDPD\StructType\BarcodeData|null
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
     * @return \Scraper\ScraperDPD\StructType\BarcodeData|null
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
     * @return string BarcodeData
     */
    public function getAttributeName()
    {
        return 'BarcodeData';
    }
}
