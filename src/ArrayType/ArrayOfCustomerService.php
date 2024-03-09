<?php

namespace Scraper\ScraperDPD\ArrayType;

use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfCustomerService ArrayType
 */
class ArrayOfCustomerService extends AbstractStructArrayBase
{
    /**
     * The CustomerService
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     *
     * @var array<\Scraper\ScraperDPD\StructType\CustomerService>
     */
    public $CustomerService;

    /**
     * Constructor method for ArrayOfCustomerService
     *
     * @uses ArrayOfCustomerService::setCustomerService()
     *
     * @param array<\Scraper\ScraperDPD\StructType\CustomerService> $customerService
     */
    public function __construct(array $customerService = [])
    {
        $this
            ->setCustomerService($customerService)
        ;
    }

    /**
     * Get CustomerService value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return array<\Scraper\ScraperDPD\StructType\CustomerService>|null
     */
    public function getCustomerService()
    {
        return $this->CustomerService ?? null;
    }

    /**
     * This method is responsible for validating the values passed to the setCustomerService method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCustomerService method
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCustomerServiceForArrayConstraintsFromSetCustomerService(array $values = [])
    {
        $message = '';
        $invalidValues = [];

        foreach ($values as $arrayOfCustomerServiceCustomerServiceItem) {
            // validation for constraint: itemType
            if (!$arrayOfCustomerServiceCustomerServiceItem instanceof \Scraper\ScraperDPD\StructType\CustomerService) {
                $invalidValues[] = \is_object($arrayOfCustomerServiceCustomerServiceItem) ? $arrayOfCustomerServiceCustomerServiceItem::class : sprintf('%s(%s)', \gettype($arrayOfCustomerServiceCustomerServiceItem), var_export($arrayOfCustomerServiceCustomerServiceItem, true));
            }
        }

        if (!empty($invalidValues)) {
            $message = sprintf('The CustomerService property can only contain items of type \Scraper\ScraperDPD\StructType\CustomerService, %s given', \is_object($invalidValues) ? $invalidValues::class : (\is_array($invalidValues) ? implode(', ', $invalidValues) : \gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }

    /**
     * Set CustomerService value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param array<\Scraper\ScraperDPD\StructType\CustomerService> $customerService
     *
     * @throws \InvalidArgumentException
     *
     * @return self
     */
    public function setCustomerService(array $customerService = [])
    {
        // validation for constraint: array
        if ('' !== ($customerServiceArrayErrorMessage = self::validateCustomerServiceForArrayConstraintsFromSetCustomerService($customerService))) {
            throw new \InvalidArgumentException($customerServiceArrayErrorMessage, __LINE__);
        }

        if (null === $customerService || (\is_array($customerService) && empty($customerService))) {
            unset($this->CustomerService);
        } else {
            $this->CustomerService = $customerService;
        }
        return $this;
    }

    /**
     * Add item to CustomerService value
     *
     * @throws \InvalidArgumentException
     *
     * @return self
     */
    public function addToCustomerService(\Scraper\ScraperDPD\StructType\CustomerService $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Scraper\ScraperDPD\StructType\CustomerService) {
            throw new \InvalidArgumentException(sprintf('The CustomerService property can only contain items of type \Scraper\ScraperDPD\StructType\CustomerService, %s given', \is_object($item) ? $item::class : (\is_array($item) ? implode(', ', $item) : \gettype($item))), __LINE__);
        }
        $this->CustomerService[] = $item;
        return $this;
    }

    /**
     * Returns the current element
     *
     * @see AbstractStructArrayBase::current()
     *
     * @return \Scraper\ScraperDPD\StructType\CustomerService|null
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
     * @return \Scraper\ScraperDPD\StructType\CustomerService|null
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
     * @return \Scraper\ScraperDPD\StructType\CustomerService|null
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
     * @return \Scraper\ScraperDPD\StructType\CustomerService|null
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
     * @return \Scraper\ScraperDPD\StructType\CustomerService|null
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
     * @return string CustomerService
     */
    public function getAttributeName()
    {
        return 'CustomerService';
    }
}
