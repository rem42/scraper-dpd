<?php

namespace Scraper\ScraperDPD\ServiceType;

use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Update ServiceType
 */
class Update extends AbstractSoapClientBase
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
     * Method to call the operation originally named UpdateServiceNotice
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
     * @return \Scraper\ScraperDPD\StructType\UpdateServiceNoticeResponse|bool
     */
    public function UpdateServiceNotice(\Scraper\ScraperDPD\StructType\UpdateServiceNotice $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->UpdateServiceNotice($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }

    /**
     * Method to call the operation originally named UpdateRdvShipmentDataForShop
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
     * @return \Scraper\ScraperDPD\StructType\UpdateRdvShipmentDataForShopResponse|bool
     */
    public function UpdateRdvShipmentDataForShop(\Scraper\ScraperDPD\StructType\UpdateRdvShipmentDataForShop $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->UpdateRdvShipmentDataForShop($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }

    /**
     * Method to call the operation originally named
     * UpdateRdvShipmentDataForAgencyPickup
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
     * @return \Scraper\ScraperDPD\StructType\UpdateRdvShipmentDataForAgencyPickupResponse|bool
     */
    public function UpdateRdvShipmentDataForAgencyPickup(\Scraper\ScraperDPD\StructType\UpdateRdvShipmentDataForAgencyPickup $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->UpdateRdvShipmentDataForAgencyPickup($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }

    /**
     * Method to call the operation originally named UpdateRdvShipmentData
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
     * @return \Scraper\ScraperDPD\StructType\UpdateRdvShipmentDataResponse|bool
     */
    public function UpdateRdvShipmentData(\Scraper\ScraperDPD\StructType\UpdateRdvShipmentData $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->UpdateRdvShipmentData($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }

    /**
     * Method to call the operation originally named UpdateRdvShipmentDataForPredict
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
     * @return \Scraper\ScraperDPD\StructType\UpdateRdvShipmentDataForPredictResponse|bool
     */
    public function UpdateRdvShipmentDataForPredict(\Scraper\ScraperDPD\StructType\UpdateRdvShipmentDataForPredict $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->UpdateRdvShipmentDataForPredict($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }

    /**
     * Method to call the operation originally named UpdateRdvShipmentDataForSafePlace
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
     * @return \Scraper\ScraperDPD\StructType\UpdateRdvShipmentDataForSafePlaceResponse|bool
     */
    public function UpdateRdvShipmentDataForSafePlace(\Scraper\ScraperDPD\StructType\UpdateRdvShipmentDataForSafePlace $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->UpdateRdvShipmentDataForSafePlace($parameters));
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
     * @return \Scraper\ScraperDPD\StructType\UpdateRdvShipmentDataForAgencyPickupResponse|\Scraper\ScraperDPD\StructType\UpdateRdvShipmentDataForPredictResponse|\Scraper\ScraperDPD\StructType\UpdateRdvShipmentDataForSafePlaceResponse|\Scraper\ScraperDPD\StructType\UpdateRdvShipmentDataForShopResponse|\Scraper\ScraperDPD\StructType\UpdateRdvShipmentDataResponse|\Scraper\ScraperDPD\StructType\UpdateServiceNoticeResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
