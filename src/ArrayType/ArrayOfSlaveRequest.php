<?php

namespace Scraper\ScraperDPD\ArrayType;

use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfSlaveRequest ArrayType
 */
class ArrayOfSlaveRequest extends AbstractStructArrayBase
{
    /**
     * The SlaveRequest
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     *
     * @var array<\Scraper\ScraperDPD\StructType\SlaveRequest>
     */
    public $SlaveRequest;

    /**
     * Constructor method for ArrayOfSlaveRequest
     *
     * @uses ArrayOfSlaveRequest::setSlaveRequest()
     *
     * @param array<\Scraper\ScraperDPD\StructType\SlaveRequest> $slaveRequest
     */
    public function __construct(array $slaveRequest = [])
    {
        $this
            ->setSlaveRequest($slaveRequest)
        ;
    }

    /**
     * Get SlaveRequest value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return array<\Scraper\ScraperDPD\StructType\SlaveRequest>|null
     */
    public function getSlaveRequest()
    {
        return $this->SlaveRequest ?? null;
    }

    /**
     * This method is responsible for validating the values passed to the setSlaveRequest method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSlaveRequest method
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSlaveRequestForArrayConstraintsFromSetSlaveRequest(array $values = [])
    {
        $message = '';
        $invalidValues = [];

        foreach ($values as $arrayOfSlaveRequestSlaveRequestItem) {
            // validation for constraint: itemType
            if (!$arrayOfSlaveRequestSlaveRequestItem instanceof \Scraper\ScraperDPD\StructType\SlaveRequest) {
                $invalidValues[] = \is_object($arrayOfSlaveRequestSlaveRequestItem) ? $arrayOfSlaveRequestSlaveRequestItem::class : sprintf('%s(%s)', \gettype($arrayOfSlaveRequestSlaveRequestItem), var_export($arrayOfSlaveRequestSlaveRequestItem, true));
            }
        }

        if (!empty($invalidValues)) {
            $message = sprintf('The SlaveRequest property can only contain items of type \Scraper\ScraperDPD\StructType\SlaveRequest, %s given', \is_object($invalidValues) ? $invalidValues::class : (\is_array($invalidValues) ? implode(', ', $invalidValues) : \gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }

    /**
     * Set SlaveRequest value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param array<\Scraper\ScraperDPD\StructType\SlaveRequest> $slaveRequest
     *
     * @throws \InvalidArgumentException
     *
     * @return self
     */
    public function setSlaveRequest(array $slaveRequest = [])
    {
        // validation for constraint: array
        if ('' !== ($slaveRequestArrayErrorMessage = self::validateSlaveRequestForArrayConstraintsFromSetSlaveRequest($slaveRequest))) {
            throw new \InvalidArgumentException($slaveRequestArrayErrorMessage, __LINE__);
        }

        if (null === $slaveRequest || (\is_array($slaveRequest) && empty($slaveRequest))) {
            unset($this->SlaveRequest);
        } else {
            $this->SlaveRequest = $slaveRequest;
        }
        return $this;
    }

    /**
     * Add item to SlaveRequest value
     *
     * @throws \InvalidArgumentException
     *
     * @return self
     */
    public function addToSlaveRequest(\Scraper\ScraperDPD\StructType\SlaveRequest $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Scraper\ScraperDPD\StructType\SlaveRequest) {
            throw new \InvalidArgumentException(sprintf('The SlaveRequest property can only contain items of type \Scraper\ScraperDPD\StructType\SlaveRequest, %s given', \is_object($item) ? $item::class : (\is_array($item) ? implode(', ', $item) : \gettype($item))), __LINE__);
        }
        $this->SlaveRequest[] = $item;
        return $this;
    }

    /**
     * Returns the current element
     *
     * @see AbstractStructArrayBase::current()
     *
     * @return \Scraper\ScraperDPD\StructType\SlaveRequest|null
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
     * @return \Scraper\ScraperDPD\StructType\SlaveRequest|null
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
     * @return \Scraper\ScraperDPD\StructType\SlaveRequest|null
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
     * @return \Scraper\ScraperDPD\StructType\SlaveRequest|null
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
     * @return \Scraper\ScraperDPD\StructType\SlaveRequest|null
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
     * @return string SlaveRequest
     */
    public function getAttributeName()
    {
        return 'SlaveRequest';
    }
}
