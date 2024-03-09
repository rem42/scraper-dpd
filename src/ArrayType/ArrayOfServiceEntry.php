<?php

namespace Scraper\ScraperDPD\ArrayType;

use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfServiceEntry ArrayType
 */
class ArrayOfServiceEntry extends AbstractStructArrayBase
{
    /**
     * The ServiceEntry
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     *
     * @var array<\Scraper\ScraperDPD\StructType\ServiceEntry>
     */
    public $ServiceEntry;

    /**
     * Constructor method for ArrayOfServiceEntry
     *
     * @uses ArrayOfServiceEntry::setServiceEntry()
     *
     * @param array<\Scraper\ScraperDPD\StructType\ServiceEntry> $serviceEntry
     */
    public function __construct(array $serviceEntry = [])
    {
        $this
            ->setServiceEntry($serviceEntry)
        ;
    }

    /**
     * Get ServiceEntry value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return array<\Scraper\ScraperDPD\StructType\ServiceEntry>|null
     */
    public function getServiceEntry()
    {
        return $this->ServiceEntry ?? null;
    }

    /**
     * This method is responsible for validating the values passed to the setServiceEntry method
     * This method is willingly generated in order to preserve the one-line inline validation within the setServiceEntry method
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateServiceEntryForArrayConstraintsFromSetServiceEntry(array $values = [])
    {
        $message = '';
        $invalidValues = [];

        foreach ($values as $arrayOfServiceEntryServiceEntryItem) {
            // validation for constraint: itemType
            if (!$arrayOfServiceEntryServiceEntryItem instanceof \Scraper\ScraperDPD\StructType\ServiceEntry) {
                $invalidValues[] = \is_object($arrayOfServiceEntryServiceEntryItem) ? $arrayOfServiceEntryServiceEntryItem::class : sprintf('%s(%s)', \gettype($arrayOfServiceEntryServiceEntryItem), var_export($arrayOfServiceEntryServiceEntryItem, true));
            }
        }

        if (!empty($invalidValues)) {
            $message = sprintf('The ServiceEntry property can only contain items of type \Scraper\ScraperDPD\StructType\ServiceEntry, %s given', \is_object($invalidValues) ? $invalidValues::class : (\is_array($invalidValues) ? implode(', ', $invalidValues) : \gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }

    /**
     * Set ServiceEntry value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param array<\Scraper\ScraperDPD\StructType\ServiceEntry> $serviceEntry
     *
     * @throws \InvalidArgumentException
     *
     * @return self
     */
    public function setServiceEntry(array $serviceEntry = [])
    {
        // validation for constraint: array
        if ('' !== ($serviceEntryArrayErrorMessage = self::validateServiceEntryForArrayConstraintsFromSetServiceEntry($serviceEntry))) {
            throw new \InvalidArgumentException($serviceEntryArrayErrorMessage, __LINE__);
        }

        if (null === $serviceEntry || (\is_array($serviceEntry) && empty($serviceEntry))) {
            unset($this->ServiceEntry);
        } else {
            $this->ServiceEntry = $serviceEntry;
        }
        return $this;
    }

    /**
     * Add item to ServiceEntry value
     *
     * @throws \InvalidArgumentException
     *
     * @return self
     */
    public function addToServiceEntry(\Scraper\ScraperDPD\StructType\ServiceEntry $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Scraper\ScraperDPD\StructType\ServiceEntry) {
            throw new \InvalidArgumentException(sprintf('The ServiceEntry property can only contain items of type \Scraper\ScraperDPD\StructType\ServiceEntry, %s given', \is_object($item) ? $item::class : (\is_array($item) ? implode(', ', $item) : \gettype($item))), __LINE__);
        }
        $this->ServiceEntry[] = $item;
        return $this;
    }

    /**
     * Returns the current element
     *
     * @see AbstractStructArrayBase::current()
     *
     * @return \Scraper\ScraperDPD\StructType\ServiceEntry|null
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
     * @return \Scraper\ScraperDPD\StructType\ServiceEntry|null
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
     * @return \Scraper\ScraperDPD\StructType\ServiceEntry|null
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
     * @return \Scraper\ScraperDPD\StructType\ServiceEntry|null
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
     * @return \Scraper\ScraperDPD\StructType\ServiceEntry|null
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
     * @return string ServiceEntry
     */
    public function getAttributeName()
    {
        return 'ServiceEntry';
    }
}
