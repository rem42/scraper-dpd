<?php

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UserCredentials StructType
 * Meta information extracted from the WSDL
 * - type: tns:UserCredentials
 */
class UserCredentials extends AbstractStructBase
{
    /**
     * The userid
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $userid;
    /**
     * The password
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $password;

    /**
     * Constructor method for UserCredentials
     *
     * @uses UserCredentials::setUserid()
     * @uses UserCredentials::setPassword()
     *
     * @param string $userid
     * @param string $password
     */
    public function __construct($userid = null, $password = null)
    {
        $this
            ->setUserid($userid)
            ->setPassword($password)
        ;
    }

    /**
     * Get userid value
     *
     * @return string|null
     */
    public function getUserid()
    {
        return $this->userid;
    }

    /**
     * Set userid value
     *
     * @param string $userid
     *
     * @return self
     */
    public function setUserid($userid = null)
    {
        // validation for constraint: string
        if (null !== $userid && !\is_string($userid)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($userid, true), \gettype($userid)), __LINE__);
        }
        $this->userid = $userid;
        return $this;
    }

    /**
     * Get password value
     *
     * @return string|null
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set password value
     *
     * @param string $password
     *
     * @return self
     */
    public function setPassword($password = null)
    {
        // validation for constraint: string
        if (null !== $password && !\is_string($password)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($password, true), \gettype($password)), __LINE__);
        }
        $this->password = $password;
        return $this;
    }
}
