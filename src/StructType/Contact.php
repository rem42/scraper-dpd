<?php

namespace Scraper\ScraperDPD\StructType;

/**
 * This class stands for Contact StructType
 */
class Contact extends DefaultService
{
    /**
     * The type
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     *
     * @var string
     */
    public $type;
    /**
     * The sms
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $sms;
    /**
     * The email
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $email;
    /**
     * The autoText
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $autoText;

    /**
     * Constructor method for Contact
     *
     * @uses Contact::setType()
     * @uses Contact::setSms()
     * @uses Contact::setEmail()
     * @uses Contact::setAutoText()
     *
     * @param string $type
     * @param string $sms
     * @param string $email
     * @param string $autoText
     */
    public function __construct($type = null, $sms = null, $email = null, $autoText = null)
    {
        $this
            ->setType($type)
            ->setSms($sms)
            ->setEmail($email)
            ->setAutoText($autoText)
        ;
    }

    /**
     * Get type value
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set type value
     *
     * @uses \Scraper\ScraperDPD\EnumType\EtypeContact::valueIsValid()
     * @uses \Scraper\ScraperDPD\EnumType\EtypeContact::getValidValues()
     *
     * @param string $type
     *
     * @throws \InvalidArgumentException
     *
     * @return self
     */
    public function setType($type = null)
    {
        // validation for constraint: enumeration
        if (!\Scraper\ScraperDPD\EnumType\EtypeContact::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Scraper\ScraperDPD\EnumType\EtypeContact', \is_array($type) ? implode(', ', $type) : var_export($type, true), implode(', ', \Scraper\ScraperDPD\EnumType\EtypeContact::getValidValues())), __LINE__);
        }
        $this->type = $type;
        return $this;
    }

    /**
     * Get sms value
     *
     * @return string|null
     */
    public function getSms()
    {
        return $this->sms;
    }

    /**
     * Set sms value
     *
     * @param string $sms
     *
     * @return self
     */
    public function setSms($sms = null)
    {
        // validation for constraint: string
        if (null !== $sms && !\is_string($sms)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sms, true), \gettype($sms)), __LINE__);
        }
        $this->sms = $sms;
        return $this;
    }

    /**
     * Get email value
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set email value
     *
     * @param string $email
     *
     * @return self
     */
    public function setEmail($email = null)
    {
        // validation for constraint: string
        if (null !== $email && !\is_string($email)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($email, true), \gettype($email)), __LINE__);
        }
        $this->email = $email;
        return $this;
    }

    /**
     * Get autoText value
     *
     * @return string|null
     */
    public function getAutoText()
    {
        return $this->autoText;
    }

    /**
     * Set autoText value
     *
     * @param string $autoText
     *
     * @return self
     */
    public function setAutoText($autoText = null)
    {
        // validation for constraint: string
        if (null !== $autoText && !\is_string($autoText)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($autoText, true), \gettype($autoText)), __LINE__);
        }
        $this->autoText = $autoText;
        return $this;
    }
}
