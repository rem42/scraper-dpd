<?php

namespace Scraper\ScraperDPD\ArrayType;

use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfCustomer ArrayType
 */
class ArrayOfCustomer extends AbstractStructArrayBase
{
    /**
     * The Customer
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     *
     * @var array<\Scraper\ScraperDPD\StructType\Customer>
     */
    public $Customer;

    /**
     * Constructor method for ArrayOfCustomer
     *
     * @uses ArrayOfCustomer::setCustomer()
     *
     * @param array<\Scraper\ScraperDPD\StructType\Customer> $customer
     */
    public function __construct(array $customer = [])
    {
        $this
            ->setCustomer($customer)
        ;
    }

    /**
     * Get Customer value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return array<\Scraper\ScraperDPD\StructType\Customer>|null
     */
    public function getCustomer()
    {
        return $this->Customer ?? null;
    }

    /**
     * This method is responsible for validating the values passed to the setCustomer method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCustomer method
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCustomerForArrayConstraintsFromSetCustomer(array $values = [])
    {
        $message = '';
        $invalidValues = [];

        foreach ($values as $arrayOfCustomerCustomerItem) {
            // validation for constraint: itemType
            if (!$arrayOfCustomerCustomerItem instanceof \Scraper\ScraperDPD\StructType\Customer) {
                $invalidValues[] = \is_object($arrayOfCustomerCustomerItem) ? $arrayOfCustomerCustomerItem::class : sprintf('%s(%s)', \gettype($arrayOfCustomerCustomerItem), var_export($arrayOfCustomerCustomerItem, true));
            }
        }

        if (!empty($invalidValues)) {
            $message = sprintf('The Customer property can only contain items of type \Scraper\ScraperDPD\StructType\Customer, %s given', \is_object($invalidValues) ? $invalidValues::class : (\is_array($invalidValues) ? implode(', ', $invalidValues) : \gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }

    /**
     * Set Customer value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param array<\Scraper\ScraperDPD\StructType\Customer> $customer
     *
     * @throws \InvalidArgumentException
     *
     * @return self
     */
    public function setCustomer(array $customer = [])
    {
        // validation for constraint: array
        if ('' !== ($customerArrayErrorMessage = self::validateCustomerForArrayConstraintsFromSetCustomer($customer))) {
            throw new \InvalidArgumentException($customerArrayErrorMessage, __LINE__);
        }

        if (null === $customer || (\is_array($customer) && empty($customer))) {
            unset($this->Customer);
        } else {
            $this->Customer = $customer;
        }
        return $this;
    }

    /**
     * Add item to Customer value
     *
     * @throws \InvalidArgumentException
     *
     * @return self
     */
    public function addToCustomer(\Scraper\ScraperDPD\StructType\Customer $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Scraper\ScraperDPD\StructType\Customer) {
            throw new \InvalidArgumentException(sprintf('The Customer property can only contain items of type \Scraper\ScraperDPD\StructType\Customer, %s given', \is_object($item) ? $item::class : (\is_array($item) ? implode(', ', $item) : \gettype($item))), __LINE__);
        }
        $this->Customer[] = $item;
        return $this;
    }

    /**
     * Returns the current element
     *
     * @see AbstractStructArrayBase::current()
     *
     * @return \Scraper\ScraperDPD\StructType\Customer|null
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
     * @return \Scraper\ScraperDPD\StructType\Customer|null
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
     * @return \Scraper\ScraperDPD\StructType\Customer|null
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
     * @return \Scraper\ScraperDPD\StructType\Customer|null
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
     * @return \Scraper\ScraperDPD\StructType\Customer|null
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
     * @return string Customer
     */
    public function getAttributeName()
    {
        return 'Customer';
    }
}
