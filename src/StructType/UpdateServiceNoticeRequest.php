<?php

namespace Scraper\ScraperDPD\StructType;

/**
 * This class stands for UpdateServiceNoticeRequest StructType
 */
class UpdateServiceNoticeRequest extends UpdateServiceNoticeRequestBase
{
    /**
     * The answerID
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     *
     * @var int
     */
    public $answerID;
    /**
     * The text
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $text;
    /**
     * The address
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var Address
     */
    public $address;

    /**
     * Constructor method for UpdateServiceNoticeRequest
     *
     * @uses UpdateServiceNoticeRequest::setAnswerID()
     * @uses UpdateServiceNoticeRequest::setText()
     * @uses UpdateServiceNoticeRequest::setAddress()
     *
     * @param int    $answerID
     * @param string $text
     */
    public function __construct($answerID = null, $text = null, ?Address $address = null)
    {
        $this
            ->setAnswerID($answerID)
            ->setText($text)
            ->setAddress($address)
        ;
    }

    /**
     * Get answerID value
     *
     * @return int
     */
    public function getAnswerID()
    {
        return $this->answerID;
    }

    /**
     * Set answerID value
     *
     * @param int $answerID
     *
     * @return self
     */
    public function setAnswerID($answerID = null)
    {
        // validation for constraint: int
        if (null !== $answerID && !(\is_int($answerID) || ctype_digit($answerID))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($answerID, true), \gettype($answerID)), __LINE__);
        }
        $this->answerID = $answerID;
        return $this;
    }

    /**
     * Get text value
     *
     * @return string|null
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Set text value
     *
     * @param string $text
     *
     * @return self
     */
    public function setText($text = null)
    {
        // validation for constraint: string
        if (null !== $text && !\is_string($text)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($text, true), \gettype($text)), __LINE__);
        }
        $this->text = $text;
        return $this;
    }

    /**
     * Get address value
     *
     * @return Address|null
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set address value
     *
     * @return self
     */
    public function setAddress(?Address $address = null)
    {
        $this->address = $address;
        return $this;
    }
}
