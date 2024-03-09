<?php

namespace Scraper\ScraperDPD\ArrayType;

use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfServiceNotice ArrayType
 */
class ArrayOfServiceNotice extends AbstractStructArrayBase
{
    /**
     * The ServiceNotice
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     *
     * @var array<\Scraper\ScraperDPD\StructType\ServiceNotice>
     */
    public $ServiceNotice;

    /**
     * Constructor method for ArrayOfServiceNotice
     *
     * @uses ArrayOfServiceNotice::setServiceNotice()
     *
     * @param array<\Scraper\ScraperDPD\StructType\ServiceNotice> $serviceNotice
     */
    public function __construct(array $serviceNotice = [])
    {
        $this
            ->setServiceNotice($serviceNotice)
        ;
    }

    /**
     * Get ServiceNotice value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return array<\Scraper\ScraperDPD\StructType\ServiceNotice>|null
     */
    public function getServiceNotice()
    {
        return $this->ServiceNotice ?? null;
    }

    /**
     * This method is responsible for validating the values passed to the setServiceNotice method
     * This method is willingly generated in order to preserve the one-line inline validation within the setServiceNotice method
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateServiceNoticeForArrayConstraintsFromSetServiceNotice(array $values = [])
    {
        $message = '';
        $invalidValues = [];

        foreach ($values as $arrayOfServiceNoticeServiceNoticeItem) {
            // validation for constraint: itemType
            if (!$arrayOfServiceNoticeServiceNoticeItem instanceof \Scraper\ScraperDPD\StructType\ServiceNotice) {
                $invalidValues[] = \is_object($arrayOfServiceNoticeServiceNoticeItem) ? $arrayOfServiceNoticeServiceNoticeItem::class : sprintf('%s(%s)', \gettype($arrayOfServiceNoticeServiceNoticeItem), var_export($arrayOfServiceNoticeServiceNoticeItem, true));
            }
        }

        if (!empty($invalidValues)) {
            $message = sprintf('The ServiceNotice property can only contain items of type \Scraper\ScraperDPD\StructType\ServiceNotice, %s given', \is_object($invalidValues) ? $invalidValues::class : (\is_array($invalidValues) ? implode(', ', $invalidValues) : \gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }

    /**
     * Set ServiceNotice value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param array<\Scraper\ScraperDPD\StructType\ServiceNotice> $serviceNotice
     *
     * @throws \InvalidArgumentException
     *
     * @return self
     */
    public function setServiceNotice(array $serviceNotice = [])
    {
        // validation for constraint: array
        if ('' !== ($serviceNoticeArrayErrorMessage = self::validateServiceNoticeForArrayConstraintsFromSetServiceNotice($serviceNotice))) {
            throw new \InvalidArgumentException($serviceNoticeArrayErrorMessage, __LINE__);
        }

        if (null === $serviceNotice || (\is_array($serviceNotice) && empty($serviceNotice))) {
            unset($this->ServiceNotice);
        } else {
            $this->ServiceNotice = $serviceNotice;
        }
        return $this;
    }

    /**
     * Add item to ServiceNotice value
     *
     * @throws \InvalidArgumentException
     *
     * @return self
     */
    public function addToServiceNotice(\Scraper\ScraperDPD\StructType\ServiceNotice $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Scraper\ScraperDPD\StructType\ServiceNotice) {
            throw new \InvalidArgumentException(sprintf('The ServiceNotice property can only contain items of type \Scraper\ScraperDPD\StructType\ServiceNotice, %s given', \is_object($item) ? $item::class : (\is_array($item) ? implode(', ', $item) : \gettype($item))), __LINE__);
        }
        $this->ServiceNotice[] = $item;
        return $this;
    }

    /**
     * Returns the current element
     *
     * @see AbstractStructArrayBase::current()
     *
     * @return \Scraper\ScraperDPD\StructType\ServiceNotice|null
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
     * @return \Scraper\ScraperDPD\StructType\ServiceNotice|null
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
     * @return \Scraper\ScraperDPD\StructType\ServiceNotice|null
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
     * @return \Scraper\ScraperDPD\StructType\ServiceNotice|null
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
     * @return \Scraper\ScraperDPD\StructType\ServiceNotice|null
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
     * @return string ServiceNotice
     */
    public function getAttributeName()
    {
        return 'ServiceNotice';
    }
}
