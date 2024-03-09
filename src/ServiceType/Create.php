<?php

namespace Scraper\ScraperDPD\ServiceType;

use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Create ServiceType
 */
class Create extends AbstractSoapClientBase
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
     * Method to call the operation originally named CreateShipment
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
     * @return \Scraper\ScraperDPD\StructType\CreateShipmentResponse|bool
     */
    public function CreateShipment(\Scraper\ScraperDPD\StructType\CreateShipment $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->CreateShipment($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }

    /**
     * Method to call the operation originally named CreateShipmentBc
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
     * @return \Scraper\ScraperDPD\StructType\CreateShipmentBcResponse|bool
     */
    public function CreateShipmentBc(\Scraper\ScraperDPD\StructType\CreateShipmentBc $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->CreateShipmentBc($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }

    /**
     * Method to call the operation originally named CreateShipmentWithLabels
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
     * @return \Scraper\ScraperDPD\StructType\CreateShipmentWithLabelsResponse|bool
     */
    public function CreateShipmentWithLabels(\Scraper\ScraperDPD\StructType\CreateShipmentWithLabels $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->CreateShipmentWithLabels($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }

    /**
     * Method to call the operation originally named CreateShipmentWithLabelsBc
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
     * @return \Scraper\ScraperDPD\StructType\CreateShipmentWithLabelsBcResponse|bool
     */
    public function CreateShipmentWithLabelsBc(\Scraper\ScraperDPD\StructType\CreateShipmentWithLabelsBc $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->CreateShipmentWithLabelsBc($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }

    /**
     * Method to call the operation originally named CreateMultiShipment
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
     * @return \Scraper\ScraperDPD\StructType\CreateMultiShipmentResponse|bool
     */
    public function CreateMultiShipment(\Scraper\ScraperDPD\StructType\CreateMultiShipment $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->CreateMultiShipment($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }

    /**
     * Method to call the operation originally named CreateMultiShipmentBc
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
     * @return \Scraper\ScraperDPD\StructType\CreateMultiShipmentBcResponse|bool
     */
    public function CreateMultiShipmentBc(\Scraper\ScraperDPD\StructType\CreateMultiShipmentBc $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->CreateMultiShipmentBc($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }

    /**
     * Method to call the operation originally named CreateReverseInverseShipment
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
     * @return \Scraper\ScraperDPD\StructType\CreateReverseInverseShipmentResponse|bool
     */
    public function CreateReverseInverseShipment(\Scraper\ScraperDPD\StructType\CreateReverseInverseShipment $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->CreateReverseInverseShipment($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }

    /**
     * Method to call the operation originally named CreateReverseInverseShipmentBc
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
     * @return \Scraper\ScraperDPD\StructType\CreateReverseInverseShipmentBcResponse|bool
     */
    public function CreateReverseInverseShipmentBc(\Scraper\ScraperDPD\StructType\CreateReverseInverseShipmentBc $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->CreateReverseInverseShipmentBc($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }

    /**
     * Method to call the operation originally named
     * CreateReverseInverseShipmentWithLabels
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
     * @return \Scraper\ScraperDPD\StructType\CreateReverseInverseShipmentWithLabelsResponse|bool
     */
    public function CreateReverseInverseShipmentWithLabels(\Scraper\ScraperDPD\StructType\CreateReverseInverseShipmentWithLabels $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->CreateReverseInverseShipmentWithLabels($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }

    /**
     * Method to call the operation originally named
     * CreateReverseInverseShipmentWithLabelsBc
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
     * @return \Scraper\ScraperDPD\StructType\CreateReverseInverseShipmentWithLabelsBcResponse|bool
     */
    public function CreateReverseInverseShipmentWithLabelsBc(\Scraper\ScraperDPD\StructType\CreateReverseInverseShipmentWithLabelsBc $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->CreateReverseInverseShipmentWithLabelsBc($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }

    /**
     * Method to call the operation originally named CreateCollectionRequest
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
     * @return \Scraper\ScraperDPD\StructType\CreateCollectionRequestResponse|bool
     */
    public function CreateCollectionRequest(\Scraper\ScraperDPD\StructType\CreateCollectionRequest $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->CreateCollectionRequest($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }

    /**
     * Method to call the operation originally named CreateCollectionRequestBc
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
     * @return \Scraper\ScraperDPD\StructType\CreateCollectionRequestBcResponse|bool
     */
    public function CreateCollectionRequestBc(\Scraper\ScraperDPD\StructType\CreateCollectionRequestBc $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->CreateCollectionRequestBc($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }

    /**
     * Method to call the operation originally named CreatePickupAtCustomer
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
     * @return \Scraper\ScraperDPD\StructType\CreatePickupAtCustomerResponse|bool
     */
    public function CreatePickupAtCustomer(\Scraper\ScraperDPD\StructType\CreatePickupAtCustomer $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->CreatePickupAtCustomer($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }

    /**
     * Method to call the operation originally named CreatePickupAtCustomerBc
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
     * @return \Scraper\ScraperDPD\StructType\CreatePickupAtCustomerBcResponse|bool
     */
    public function CreatePickupAtCustomerBc(\Scraper\ScraperDPD\StructType\CreatePickupAtCustomerBc $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->CreatePickupAtCustomerBc($parameters));
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
     * @return \Scraper\ScraperDPD\StructType\CreateCollectionRequestBcResponse|\Scraper\ScraperDPD\StructType\CreateCollectionRequestResponse|\Scraper\ScraperDPD\StructType\CreateMultiShipmentBcResponse|\Scraper\ScraperDPD\StructType\CreateMultiShipmentResponse|\Scraper\ScraperDPD\StructType\CreatePickupAtCustomerBcResponse|\Scraper\ScraperDPD\StructType\CreatePickupAtCustomerResponse|\Scraper\ScraperDPD\StructType\CreateReverseInverseShipmentBcResponse|\Scraper\ScraperDPD\StructType\CreateReverseInverseShipmentResponse|\Scraper\ScraperDPD\StructType\CreateReverseInverseShipmentWithLabelsBcResponse|\Scraper\ScraperDPD\StructType\CreateReverseInverseShipmentWithLabelsResponse|\Scraper\ScraperDPD\StructType\CreateShipmentBcResponse|\Scraper\ScraperDPD\StructType\CreateShipmentResponse|\Scraper\ScraperDPD\StructType\CreateShipmentWithLabelsBcResponse|\Scraper\ScraperDPD\StructType\CreateShipmentWithLabelsResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
