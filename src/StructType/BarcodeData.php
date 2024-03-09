<?php

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BarcodeData StructType
 */
class BarcodeData extends AbstractStructBase
{
    /**
     * The Identifier
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     *
     * @var string
     */
    public $Identifier;
    /**
     * The BarcodeValue
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $BarcodeValue;
    /**
     * The BarcodeText
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $BarcodeText;
    /**
     * The bcImage
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $bcImage;

    /**
     * Constructor method for BarcodeData
     *
     * @uses BarcodeData::setIdentifier()
     * @uses BarcodeData::setBarcodeValue()
     * @uses BarcodeData::setBarcodeText()
     * @uses BarcodeData::setBcImage()
     *
     * @param string $identifier
     * @param string $barcodeValue
     * @param string $barcodeText
     * @param string $bcImage
     */
    public function __construct($identifier = null, $barcodeValue = null, $barcodeText = null, $bcImage = null)
    {
        $this
            ->setIdentifier($identifier)
            ->setBarcodeValue($barcodeValue)
            ->setBarcodeText($barcodeText)
            ->setBcImage($bcImage)
        ;
    }

    /**
     * Get Identifier value
     *
     * @return string
     */
    public function getIdentifier()
    {
        return $this->Identifier;
    }

    /**
     * Set Identifier value
     *
     * @uses \Scraper\ScraperDPD\EnumType\BcIdentifier::valueIsValid()
     * @uses \Scraper\ScraperDPD\EnumType\BcIdentifier::getValidValues()
     *
     * @param string $identifier
     *
     * @throws \InvalidArgumentException
     *
     * @return self
     */
    public function setIdentifier($identifier = null)
    {
        // validation for constraint: enumeration
        if (!\Scraper\ScraperDPD\EnumType\BcIdentifier::valueIsValid($identifier)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Scraper\ScraperDPD\EnumType\BcIdentifier', \is_array($identifier) ? implode(', ', $identifier) : var_export($identifier, true), implode(', ', \Scraper\ScraperDPD\EnumType\BcIdentifier::getValidValues())), __LINE__);
        }
        $this->Identifier = $identifier;
        return $this;
    }

    /**
     * Get BarcodeValue value
     *
     * @return string|null
     */
    public function getBarcodeValue()
    {
        return $this->BarcodeValue;
    }

    /**
     * Set BarcodeValue value
     *
     * @param string $barcodeValue
     *
     * @return self
     */
    public function setBarcodeValue($barcodeValue = null)
    {
        // validation for constraint: string
        if (null !== $barcodeValue && !\is_string($barcodeValue)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($barcodeValue, true), \gettype($barcodeValue)), __LINE__);
        }
        $this->BarcodeValue = $barcodeValue;
        return $this;
    }

    /**
     * Get BarcodeText value
     *
     * @return string|null
     */
    public function getBarcodeText()
    {
        return $this->BarcodeText;
    }

    /**
     * Set BarcodeText value
     *
     * @param string $barcodeText
     *
     * @return self
     */
    public function setBarcodeText($barcodeText = null)
    {
        // validation for constraint: string
        if (null !== $barcodeText && !\is_string($barcodeText)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($barcodeText, true), \gettype($barcodeText)), __LINE__);
        }
        $this->BarcodeText = $barcodeText;
        return $this;
    }

    /**
     * Get bcImage value
     *
     * @return string|null
     */
    public function getBcImage()
    {
        return $this->bcImage;
    }

    /**
     * Set bcImage value
     *
     * @param string $bcImage
     *
     * @return self
     */
    public function setBcImage($bcImage = null)
    {
        // validation for constraint: string
        if (null !== $bcImage && !\is_string($bcImage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bcImage, true), \gettype($bcImage)), __LINE__);
        }
        $this->bcImage = $bcImage;
        return $this;
    }
}
