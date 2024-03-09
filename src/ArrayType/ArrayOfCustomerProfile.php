<?php

namespace Scraper\ScraperDPD\ArrayType;

use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfCustomerProfile ArrayType
 */
class ArrayOfCustomerProfile extends AbstractStructArrayBase
{
    /**
     * The CustomerProfile
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     *
     * @var array<\Scraper\ScraperDPD\StructType\CustomerProfile>
     */
    public $CustomerProfile;

    /**
     * Constructor method for ArrayOfCustomerProfile
     *
     * @uses ArrayOfCustomerProfile::setCustomerProfile()
     *
     * @param array<\Scraper\ScraperDPD\StructType\CustomerProfile> $customerProfile
     */
    public function __construct(array $customerProfile = [])
    {
        $this
            ->setCustomerProfile($customerProfile)
        ;
    }

    /**
     * Get CustomerProfile value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return array<\Scraper\ScraperDPD\StructType\CustomerProfile>|null
     */
    public function getCustomerProfile()
    {
        return $this->CustomerProfile ?? null;
    }

    /**
     * This method is responsible for validating the values passed to the setCustomerProfile method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCustomerProfile method
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCustomerProfileForArrayConstraintsFromSetCustomerProfile(array $values = [])
    {
        $message = '';
        $invalidValues = [];

        foreach ($values as $arrayOfCustomerProfileCustomerProfileItem) {
            // validation for constraint: itemType
            if (!$arrayOfCustomerProfileCustomerProfileItem instanceof \Scraper\ScraperDPD\StructType\CustomerProfile) {
                $invalidValues[] = \is_object($arrayOfCustomerProfileCustomerProfileItem) ? $arrayOfCustomerProfileCustomerProfileItem::class : sprintf('%s(%s)', \gettype($arrayOfCustomerProfileCustomerProfileItem), var_export($arrayOfCustomerProfileCustomerProfileItem, true));
            }
        }

        if (!empty($invalidValues)) {
            $message = sprintf('The CustomerProfile property can only contain items of type \Scraper\ScraperDPD\StructType\CustomerProfile, %s given', \is_object($invalidValues) ? $invalidValues::class : (\is_array($invalidValues) ? implode(', ', $invalidValues) : \gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }

    /**
     * Set CustomerProfile value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param array<\Scraper\ScraperDPD\StructType\CustomerProfile> $customerProfile
     *
     * @throws \InvalidArgumentException
     *
     * @return self
     */
    public function setCustomerProfile(array $customerProfile = [])
    {
        // validation for constraint: array
        if ('' !== ($customerProfileArrayErrorMessage = self::validateCustomerProfileForArrayConstraintsFromSetCustomerProfile($customerProfile))) {
            throw new \InvalidArgumentException($customerProfileArrayErrorMessage, __LINE__);
        }

        if (null === $customerProfile || (\is_array($customerProfile) && empty($customerProfile))) {
            unset($this->CustomerProfile);
        } else {
            $this->CustomerProfile = $customerProfile;
        }
        return $this;
    }

    /**
     * Add item to CustomerProfile value
     *
     * @throws \InvalidArgumentException
     *
     * @return self
     */
    public function addToCustomerProfile(\Scraper\ScraperDPD\StructType\CustomerProfile $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Scraper\ScraperDPD\StructType\CustomerProfile) {
            throw new \InvalidArgumentException(sprintf('The CustomerProfile property can only contain items of type \Scraper\ScraperDPD\StructType\CustomerProfile, %s given', \is_object($item) ? $item::class : (\is_array($item) ? implode(', ', $item) : \gettype($item))), __LINE__);
        }
        $this->CustomerProfile[] = $item;
        return $this;
    }

    /**
     * Returns the current element
     *
     * @see AbstractStructArrayBase::current()
     *
     * @return \Scraper\ScraperDPD\StructType\CustomerProfile|null
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
     * @return \Scraper\ScraperDPD\StructType\CustomerProfile|null
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
     * @return \Scraper\ScraperDPD\StructType\CustomerProfile|null
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
     * @return \Scraper\ScraperDPD\StructType\CustomerProfile|null
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
     * @return \Scraper\ScraperDPD\StructType\CustomerProfile|null
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
     * @return string CustomerProfile
     */
    public function getAttributeName()
    {
        return 'CustomerProfile';
    }
}
