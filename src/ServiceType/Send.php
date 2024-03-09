<?php

namespace Scraper\ScraperDPD\ServiceType;

use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Send ServiceType
 */
class Send extends AbstractSoapClientBase
{
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
     * Method to call the operation originally named SendCNOTData
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
     * @return \Scraper\ScraperDPD\StructType\SendCNOTDataResponse|bool
     */
    public function SendCNOTData(\Scraper\ScraperDPD\StructType\SendCNOTData $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->SendCNOTData($parameters));
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
     * @return \Scraper\ScraperDPD\StructType\SendCNOTDataResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
