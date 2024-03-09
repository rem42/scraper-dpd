<?php

namespace Scraper\ScraperDPD\StructType;

/**
 * This class stands for VerifyUserCredentials StructType
 * Meta information extracted from the WSDL
 * - type: tns:VerifyUserCredentials
 */
class VerifyUserCredentials extends UserCredentials
{
    /**
     * The Verify_userid
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $Verify_userid;
    /**
     * The Verify_password
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $Verify_password;

    /**
     * Constructor method for VerifyUserCredentials
     *
     * @uses VerifyUserCredentials::setVerify_userid()
     * @uses VerifyUserCredentials::setVerify_password()
     *
     * @param string $verify_userid
     * @param string $verify_password
     */
    public function __construct($verify_userid = null, $verify_password = null)
    {
        $this
            ->setVerify_userid($verify_userid)
            ->setVerify_password($verify_password)
        ;
    }

    /**
     * Get Verify_userid value
     *
     * @return string|null
     */
    public function getVerify_userid()
    {
        return $this->Verify_userid;
    }

    /**
     * Set Verify_userid value
     *
     * @param string $verify_userid
     *
     * @return self
     */
    public function setVerify_userid($verify_userid = null)
    {
        // validation for constraint: string
        if (null !== $verify_userid && !\is_string($verify_userid)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($verify_userid, true), \gettype($verify_userid)), __LINE__);
        }
        $this->Verify_userid = $verify_userid;
        return $this;
    }

    /**
     * Get Verify_password value
     *
     * @return string|null
     */
    public function getVerify_password()
    {
        return $this->Verify_password;
    }

    /**
     * Set Verify_password value
     *
     * @param string $verify_password
     *
     * @return self
     */
    public function setVerify_password($verify_password = null)
    {
        // validation for constraint: string
        if (null !== $verify_password && !\is_string($verify_password)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($verify_password, true), \gettype($verify_password)), __LINE__);
        }
        $this->Verify_password = $verify_password;
        return $this;
    }
}
