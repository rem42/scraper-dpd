<?php

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ParcelDimension StructType
 */
class ParcelDimension extends AbstractStructBase
{
    /**
     * The Length
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $Length;
    /**
     * The Width
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $Width;
    /**
     * The Height
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $Height;
    /**
     * The Girth
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $Girth;

    /**
     * Constructor method for ParcelDimension
     *
     * @uses ParcelDimension::setLength()
     * @uses ParcelDimension::setWidth()
     * @uses ParcelDimension::setHeight()
     * @uses ParcelDimension::setGirth()
     *
     * @param string $length
     * @param string $width
     * @param string $height
     * @param string $girth
     */
    public function __construct($length = null, $width = null, $height = null, $girth = null)
    {
        $this
            ->setLength($length)
            ->setWidth($width)
            ->setHeight($height)
            ->setGirth($girth)
        ;
    }

    /**
     * Get Length value
     *
     * @return string|null
     */
    public function getLength()
    {
        return $this->Length;
    }

    /**
     * Set Length value
     *
     * @param string $length
     *
     * @return self
     */
    public function setLength($length = null)
    {
        // validation for constraint: string
        if (null !== $length && !\is_string($length)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($length, true), \gettype($length)), __LINE__);
        }
        $this->Length = $length;
        return $this;
    }

    /**
     * Get Width value
     *
     * @return string|null
     */
    public function getWidth()
    {
        return $this->Width;
    }

    /**
     * Set Width value
     *
     * @param string $width
     *
     * @return self
     */
    public function setWidth($width = null)
    {
        // validation for constraint: string
        if (null !== $width && !\is_string($width)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($width, true), \gettype($width)), __LINE__);
        }
        $this->Width = $width;
        return $this;
    }

    /**
     * Get Height value
     *
     * @return string|null
     */
    public function getHeight()
    {
        return $this->Height;
    }

    /**
     * Set Height value
     *
     * @param string $height
     *
     * @return self
     */
    public function setHeight($height = null)
    {
        // validation for constraint: string
        if (null !== $height && !\is_string($height)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($height, true), \gettype($height)), __LINE__);
        }
        $this->Height = $height;
        return $this;
    }

    /**
     * Get Girth value
     *
     * @return string|null
     */
    public function getGirth()
    {
        return $this->Girth;
    }

    /**
     * Set Girth value
     *
     * @param string $girth
     *
     * @return self
     */
    public function setGirth($girth = null)
    {
        // validation for constraint: string
        if (null !== $girth && !\is_string($girth)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($girth, true), \gettype($girth)), __LINE__);
        }
        $this->Girth = $girth;
        return $this;
    }
}
