<?php

namespace Scraper\ScraperDPD\ArrayType;

use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfServiceNoticeEntry ArrayType
 */
class ArrayOfServiceNoticeEntry extends AbstractStructArrayBase
{
    /**
     * The ServiceNoticeEntry
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     *
     * @var array<\Scraper\ScraperDPD\StructType\ServiceNoticeEntry>
     */
    public $ServiceNoticeEntry;

    /**
     * Constructor method for ArrayOfServiceNoticeEntry
     *
     * @uses ArrayOfServiceNoticeEntry::setServiceNoticeEntry()
     *
     * @param array<\Scraper\ScraperDPD\StructType\ServiceNoticeEntry> $serviceNoticeEntry
     */
    public function __construct(array $serviceNoticeEntry = [])
    {
        $this
            ->setServiceNoticeEntry($serviceNoticeEntry)
        ;
    }

    /**
     * Get ServiceNoticeEntry value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return array<\Scraper\ScraperDPD\StructType\ServiceNoticeEntry>|null
     */
    public function getServiceNoticeEntry()
    {
        return $this->ServiceNoticeEntry ?? null;
    }

    /**
     * This method is responsible for validating the values passed to the setServiceNoticeEntry method
     * This method is willingly generated in order to preserve the one-line inline validation within the setServiceNoticeEntry method
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateServiceNoticeEntryForArrayConstraintsFromSetServiceNoticeEntry(array $values = [])
    {
        $message = '';
        $invalidValues = [];

        foreach ($values as $arrayOfServiceNoticeEntryServiceNoticeEntryItem) {
            // validation for constraint: itemType
            if (!$arrayOfServiceNoticeEntryServiceNoticeEntryItem instanceof \Scraper\ScraperDPD\StructType\ServiceNoticeEntry) {
                $invalidValues[] = \is_object($arrayOfServiceNoticeEntryServiceNoticeEntryItem) ? $arrayOfServiceNoticeEntryServiceNoticeEntryItem::class : sprintf('%s(%s)', \gettype($arrayOfServiceNoticeEntryServiceNoticeEntryItem), var_export($arrayOfServiceNoticeEntryServiceNoticeEntryItem, true));
            }
        }

        if (!empty($invalidValues)) {
            $message = sprintf('The ServiceNoticeEntry property can only contain items of type \Scraper\ScraperDPD\StructType\ServiceNoticeEntry, %s given', \is_object($invalidValues) ? $invalidValues::class : (\is_array($invalidValues) ? implode(', ', $invalidValues) : \gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }

    /**
     * Set ServiceNoticeEntry value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param array<\Scraper\ScraperDPD\StructType\ServiceNoticeEntry> $serviceNoticeEntry
     *
     * @throws \InvalidArgumentException
     *
     * @return self
     */
    public function setServiceNoticeEntry(array $serviceNoticeEntry = [])
    {
        // validation for constraint: array
        if ('' !== ($serviceNoticeEntryArrayErrorMessage = self::validateServiceNoticeEntryForArrayConstraintsFromSetServiceNoticeEntry($serviceNoticeEntry))) {
            throw new \InvalidArgumentException($serviceNoticeEntryArrayErrorMessage, __LINE__);
        }

        if (null === $serviceNoticeEntry || (\is_array($serviceNoticeEntry) && empty($serviceNoticeEntry))) {
            unset($this->ServiceNoticeEntry);
        } else {
            $this->ServiceNoticeEntry = $serviceNoticeEntry;
        }
        return $this;
    }

    /**
     * Add item to ServiceNoticeEntry value
     *
     * @throws \InvalidArgumentException
     *
     * @return self
     */
    public function addToServiceNoticeEntry(\Scraper\ScraperDPD\StructType\ServiceNoticeEntry $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Scraper\ScraperDPD\StructType\ServiceNoticeEntry) {
            throw new \InvalidArgumentException(sprintf('The ServiceNoticeEntry property can only contain items of type \Scraper\ScraperDPD\StructType\ServiceNoticeEntry, %s given', \is_object($item) ? $item::class : (\is_array($item) ? implode(', ', $item) : \gettype($item))), __LINE__);
        }
        $this->ServiceNoticeEntry[] = $item;
        return $this;
    }

    /**
     * Returns the current element
     *
     * @see AbstractStructArrayBase::current()
     *
     * @return \Scraper\ScraperDPD\StructType\ServiceNoticeEntry|null
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
     * @return \Scraper\ScraperDPD\StructType\ServiceNoticeEntry|null
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
     * @return \Scraper\ScraperDPD\StructType\ServiceNoticeEntry|null
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
     * @return \Scraper\ScraperDPD\StructType\ServiceNoticeEntry|null
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
     * @return \Scraper\ScraperDPD\StructType\ServiceNoticeEntry|null
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
     * @return string ServiceNoticeEntry
     */
    public function getAttributeName()
    {
        return 'ServiceNoticeEntry';
    }
}
