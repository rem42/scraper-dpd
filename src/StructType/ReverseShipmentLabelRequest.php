<?php

namespace Scraper\ScraperDPD\StructType;

/**
 * This class stands for ReverseShipmentLabelRequest StructType
 */
class ReverseShipmentLabelRequest extends ReverseShipmentRequest
{
    /**
     * The refasbarcode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     *
     * @var bool
     */
    public $refasbarcode;
    /**
     * The receiver_contact_name
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $receiver_contact_name;
    /**
     * The customLabelText
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $customLabelText;
    /**
     * The labelType
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var LabelType
     */
    public $labelType;

    /**
     * Constructor method for ReverseShipmentLabelRequest
     *
     * @uses ReverseShipmentLabelRequest::setRefasbarcode()
     * @uses ReverseShipmentLabelRequest::setReceiver_contact_name()
     * @uses ReverseShipmentLabelRequest::setCustomLabelText()
     * @uses ReverseShipmentLabelRequest::setLabelType()
     *
     * @param bool   $refasbarcode
     * @param string $receiver_contact_name
     * @param string $customLabelText
     */
    public function __construct($refasbarcode = null, $receiver_contact_name = null, $customLabelText = null, ?LabelType $labelType = null)
    {
        $this
            ->setRefasbarcode($refasbarcode)
            ->setReceiver_contact_name($receiver_contact_name)
            ->setCustomLabelText($customLabelText)
            ->setLabelType($labelType)
        ;
    }

    /**
     * Get refasbarcode value
     *
     * @return bool
     */
    public function getRefasbarcode()
    {
        return $this->refasbarcode;
    }

    /**
     * Set refasbarcode value
     *
     * @param bool $refasbarcode
     *
     * @return self
     */
    public function setRefasbarcode($refasbarcode = null)
    {
        // validation for constraint: boolean
        if (null !== $refasbarcode && !\is_bool($refasbarcode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($refasbarcode, true), \gettype($refasbarcode)), __LINE__);
        }
        $this->refasbarcode = $refasbarcode;
        return $this;
    }

    /**
     * Get receiver_contact_name value
     *
     * @return string|null
     */
    public function getReceiver_contact_name()
    {
        return $this->receiver_contact_name;
    }

    /**
     * Set receiver_contact_name value
     *
     * @param string $receiver_contact_name
     *
     * @return self
     */
    public function setReceiver_contact_name($receiver_contact_name = null)
    {
        // validation for constraint: string
        if (null !== $receiver_contact_name && !\is_string($receiver_contact_name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($receiver_contact_name, true), \gettype($receiver_contact_name)), __LINE__);
        }
        $this->receiver_contact_name = $receiver_contact_name;
        return $this;
    }

    /**
     * Get customLabelText value
     *
     * @return string|null
     */
    public function getCustomLabelText()
    {
        return $this->customLabelText;
    }

    /**
     * Set customLabelText value
     *
     * @param string $customLabelText
     *
     * @return self
     */
    public function setCustomLabelText($customLabelText = null)
    {
        // validation for constraint: string
        if (null !== $customLabelText && !\is_string($customLabelText)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customLabelText, true), \gettype($customLabelText)), __LINE__);
        }
        $this->customLabelText = $customLabelText;
        return $this;
    }

    /**
     * Get labelType value
     *
     * @return LabelType|null
     */
    public function getLabelType()
    {
        return $this->labelType;
    }

    /**
     * Set labelType value
     *
     * @return self
     */
    public function setLabelType(?LabelType $labelType = null)
    {
        $this->labelType = $labelType;
        return $this;
    }
}
