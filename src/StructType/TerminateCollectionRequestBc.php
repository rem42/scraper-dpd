<?php

namespace Scraper\ScraperDPD\StructType;

/**
 * This class stands for TerminateCollectionRequestBc StructType
 */
class TerminateCollectionRequestBc extends TerminateCollectionRequestBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var self
     */
    public $request;
    /**
     * The barcode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $barcode;

    /**
     * Constructor method for TerminateCollectionRequestBc
     *
     * @uses TerminateCollectionRequestBc::setRequest()
     * @uses TerminateCollectionRequestBc::setBarcode()
     *
     * @param string $barcode
     */
    public function __construct(?self $request = null, $barcode = null)
    {
        $this
            ->setRequest($request)
            ->setBarcode($barcode)
        ;
    }

    /**
     * Get request value
     *
     * @return self|null
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * Set request value
     *
     * @return self
     */
    public function setRequest(?self $request = null)
    {
        $this->request = $request;
        return $this;
    }

    /**
     * Get barcode value
     *
     * @return string|null
     */
    public function getBarcode()
    {
        return $this->barcode;
    }

    /**
     * Set barcode value
     *
     * @param string $barcode
     *
     * @return self
     */
    public function setBarcode($barcode = null)
    {
        // validation for constraint: string
        if (null !== $barcode && !\is_string($barcode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($barcode, true), \gettype($barcode)), __LINE__);
        }
        $this->barcode = $barcode;
        return $this;
    }
}
