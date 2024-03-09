<?php

namespace Scraper\ScraperDPD\ServiceType;

use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Verify ServiceType
 */
class Verify extends AbstractSoapClientBase
{
    /**
     * Sets the VerifyUserCredentials SoapHeader param
     *
     * @uses AbstractSoapClientBase::setSoapHeader()
     *
     * @param string $nameSpace
     * @param bool   $mustUnderstand
     * @param string $actor
     *
     * @return bool
     */
    public function setSoapHeaderVerifyUserCredentials(\Scraper\ScraperDPD\StructType\VerifyUserCredentials $verifyUserCredentials, $nameSpace = 'http://www.cargonet.software', $mustUnderstand = false, $actor = null)
    {
        return $this->setSoapHeader($nameSpace, 'VerifyUserCredentials', $verifyUserCredentials, $mustUnderstand, $actor);
    }

    /**
     * Sets the UserCredentials SoapHeader param
     *
     * @uses AbstractSoapClientBase::setSoapHeader()
     *
     * @param string $nameSpace
     * @param bool   $mustUnderstand
     * @param string $actor
     *
     * @return bool
     */
    public function setSoapHeaderUserCredentials(\Scraper\ScraperDPD\StructType\UserCredentials $userCredentials, $nameSpace = 'http://www.cargonet.software', $mustUnderstand = false, $actor = null)
    {
        return $this->setSoapHeader($nameSpace, 'UserCredentials', $userCredentials, $mustUnderstand, $actor);
    }

    /**
     * Method to call the operation originally named VerifyConfiguration
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: VerifyUserCredentials
     * - SOAPHeaderNamespaces: http://www.cargonet.software
     * - SOAPHeaderTypes: \Scraper\ScraperDPD\StructType\VerifyUserCredentials
     * - SOAPHeaders: required
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @return \Scraper\ScraperDPD\StructType\VerifyConfigurationResponse|bool
     */
    public function VerifyConfiguration(\Scraper\ScraperDPD\StructType\VerifyConfiguration $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->VerifyConfiguration($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }

    /**
     * Method to call the operation originally named VerifyClient
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: UserCredentials
     * - SOAPHeaderNamespaces: http://www.cargonet.software
     * - SOAPHeaderTypes: \Scraper\ScraperDPD\StructType\UserCredentials
     * - SOAPHeaders: required
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @return \Scraper\ScraperDPD\StructType\VerifyClientResponse|bool
     */
    public function VerifyClient(\Scraper\ScraperDPD\StructType\VerifyClient $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->VerifyClient($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }

    /**
     * Returns the result
     *
     * @see AbstractSoapClientBase::getResult()
     *
     * @return \Scraper\ScraperDPD\StructType\VerifyClientResponse|\Scraper\ScraperDPD\StructType\VerifyConfigurationResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
