<?php

namespace Scraper\ScraperDPD\ServiceType;

use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Get ServiceType
 */
class Get extends AbstractSoapClientBase
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
     * Method to call the operation originally named GetServiceNoticeAnswers
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
     * @return \Scraper\ScraperDPD\StructType\GetServiceNoticeAnswersResponse|bool
     */
    public function GetServiceNoticeAnswers(\Scraper\ScraperDPD\StructType\GetServiceNoticeAnswers $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetServiceNoticeAnswers($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }

    /**
     * Method to call the operation originally named GetServiceNotices
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
     * @return \Scraper\ScraperDPD\StructType\GetServiceNoticesResponse|bool
     */
    public function GetServiceNotices(\Scraper\ScraperDPD\StructType\GetServiceNotices $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetServiceNotices($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }

    /**
     * Method to call the operation originally named GetAllServiceNotices
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
     * @return \Scraper\ScraperDPD\StructType\GetAllServiceNoticesResponse|bool
     */
    public function GetAllServiceNotices(\Scraper\ScraperDPD\StructType\GetAllServiceNotices $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetAllServiceNotices($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }

    /**
     * Method to call the operation originally named GetBic3
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
     * @return \Scraper\ScraperDPD\StructType\GetBic3Response|bool
     */
    public function GetBic3(\Scraper\ScraperDPD\StructType\GetBic3 $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetBic3($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }

    /**
     * Method to call the operation originally named GetBic3Routing
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
     * @return \Scraper\ScraperDPD\StructType\GetBic3RoutingResponse|bool
     */
    public function GetBic3Routing(\Scraper\ScraperDPD\StructType\GetBic3Routing $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetBic3Routing($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }

    /**
     * Method to call the operation originally named GetGeoRouting
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
     * @return \Scraper\ScraperDPD\StructType\GetGeoRoutingResponse|bool
     */
    public function GetGeoRouting(\Scraper\ScraperDPD\StructType\GetGeoRouting $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetGeoRouting($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }

    /**
     * Method to call the operation originally named GetGeoRoutingReverse
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
     * @return \Scraper\ScraperDPD\StructType\GetGeoRoutingReverseResponse|bool
     */
    public function GetGeoRoutingReverse(\Scraper\ScraperDPD\StructType\GetGeoRoutingReverse $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetGeoRoutingReverse($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }

    /**
     * Method to call the operation originally named GetRetourShipmentData
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
     * @return \Scraper\ScraperDPD\StructType\GetRetourShipmentDataResponse|bool
     */
    public function GetRetourShipmentData(\Scraper\ScraperDPD\StructType\GetRetourShipmentData $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetRetourShipmentData($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }

    /**
     * Method to call the operation originally named GetRetourShipmentDataBc
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
     * @return \Scraper\ScraperDPD\StructType\GetRetourShipmentDataBcResponse|bool
     */
    public function GetRetourShipmentDataBc(\Scraper\ScraperDPD\StructType\GetRetourShipmentDataBc $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetRetourShipmentDataBc($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }

    /**
     * Method to call the operation originally named GetLabel
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
     * @return \Scraper\ScraperDPD\StructType\GetLabelResponse|bool
     */
    public function GetLabel(\Scraper\ScraperDPD\StructType\GetLabel $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetLabel($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }

    /**
     * Method to call the operation originally named GetLabelBc
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
     * @return \Scraper\ScraperDPD\StructType\GetLabelBcResponse|bool
     */
    public function GetLabelBc(\Scraper\ScraperDPD\StructType\GetLabelBc $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetLabelBc($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }

    /**
     * Method to call the operation originally named GetLabelData
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
     * @return \Scraper\ScraperDPD\StructType\GetLabelDataResponse|bool
     */
    public function GetLabelData(\Scraper\ScraperDPD\StructType\GetLabelData $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetLabelData($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }

    /**
     * Method to call the operation originally named GetRetourLabel
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
     * @return \Scraper\ScraperDPD\StructType\GetRetourLabelResponse|bool
     */
    public function GetRetourLabel(\Scraper\ScraperDPD\StructType\GetRetourLabel $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetRetourLabel($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }

    /**
     * Method to call the operation originally named GetRetourLabelBc
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
     * @return \Scraper\ScraperDPD\StructType\GetRetourLabelBcResponse|bool
     */
    public function GetRetourLabelBc(\Scraper\ScraperDPD\StructType\GetRetourLabelBc $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetRetourLabelBc($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }

    /**
     * Method to call the operation originally named GetShipment
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
     * @return \Scraper\ScraperDPD\StructType\GetShipmentResponse|bool
     */
    public function GetShipment(\Scraper\ScraperDPD\StructType\GetShipment $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetShipment($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }

    /**
     * Method to call the operation originally named GetShipmentBc
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
     * @return \Scraper\ScraperDPD\StructType\GetShipmentBcResponse|bool
     */
    public function GetShipmentBc(\Scraper\ScraperDPD\StructType\GetShipmentBc $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetShipmentBc($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }

    /**
     * Method to call the operation originally named GetShipmentBcMulti
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
     * @return \Scraper\ScraperDPD\StructType\GetShipmentBcMultiResponse|bool
     */
    public function GetShipmentBcMulti(\Scraper\ScraperDPD\StructType\GetShipmentBcMulti $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetShipmentBcMulti($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }

    /**
     * Method to call the operation originally named GetReverseOnDemandMode
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
     * @return \Scraper\ScraperDPD\StructType\GetReverseOnDemandModeResponse|bool
     */
    public function GetReverseOnDemandMode(\Scraper\ScraperDPD\StructType\GetReverseOnDemandMode $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetReverseOnDemandMode($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }

    /**
     * Method to call the operation originally named GetLastNumber
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
     * @return \Scraper\ScraperDPD\StructType\GetLastNumberResponse|bool
     */
    public function GetLastNumber(\Scraper\ScraperDPD\StructType\GetLastNumber $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetLastNumber($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }

    /**
     * Method to call the operation originally named GetNationalTransitTime
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
     * @return \Scraper\ScraperDPD\StructType\GetNationalTransitTimeResponse|bool
     */
    public function GetNationalTransitTime(\Scraper\ScraperDPD\StructType\GetNationalTransitTime $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetNationalTransitTime($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }

    /**
     * Method to call the operation originally named GetRdvShipmentData
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
     * @return \Scraper\ScraperDPD\StructType\GetRdvShipmentDataResponse|bool
     */
    public function GetRdvShipmentData(\Scraper\ScraperDPD\StructType\GetRdvShipmentData $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetRdvShipmentData($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }

    /**
     * Method to call the operation originally named GetSafePlaceData
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
     * @return \Scraper\ScraperDPD\StructType\GetSafePlaceDataResponse|bool
     */
    public function GetSafePlaceData(\Scraper\ScraperDPD\StructType\GetSafePlaceData $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetSafePlaceData($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }

    /**
     * Method to call the operation originally named GetCustomerAddress
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
     * @return \Scraper\ScraperDPD\StructType\GetCustomerAddressResponse|bool
     */
    public function GetCustomerAddress(\Scraper\ScraperDPD\StructType\GetCustomerAddress $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetCustomerAddress($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }

    /**
     * Method to call the operation originally named GetNumberRange
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
     * @return \Scraper\ScraperDPD\StructType\GetNumberRangeResponse|bool
     */
    public function GetNumberRange(\Scraper\ScraperDPD\StructType\GetNumberRange $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetNumberRange($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }

    /**
     * Method to call the operation originally named GetNumberRangeBc
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
     * @return \Scraper\ScraperDPD\StructType\GetNumberRangeBcResponse|bool
     */
    public function GetNumberRangeBc(\Scraper\ScraperDPD\StructType\GetNumberRangeBc $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetNumberRangeBc($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }

    /**
     * Method to call the operation originally named GetCustomerProfile
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
     * @return \Scraper\ScraperDPD\StructType\GetCustomerProfileResponse|bool
     */
    public function GetCustomerProfile(\Scraper\ScraperDPD\StructType\GetCustomerProfile $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetCustomerProfile($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }

    /**
     * Method to call the operation originally named GetProperties
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
     * @return \Scraper\ScraperDPD\StructType\GetPropertiesResponse|bool
     */
    public function GetProperties(\Scraper\ScraperDPD\StructType\GetProperties $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetProperties($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }

    /**
     * Method to call the operation originally named GetOptionValue
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
     * @return \Scraper\ScraperDPD\StructType\GetOptionValueResponse|bool
     */
    public function GetOptionValue(\Scraper\ScraperDPD\StructType\GetOptionValue $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetOptionValue($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }

    /**
     * Method to call the operation originally named GetOptionValues
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
     * @return \Scraper\ScraperDPD\StructType\GetOptionValuesResponse|bool
     */
    public function GetOptionValues(\Scraper\ScraperDPD\StructType\GetOptionValues $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetOptionValues($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }

    /**
     * Method to call the operation originally named GetShipping
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
     * @return \Scraper\ScraperDPD\StructType\GetShippingResponse|bool
     */
    public function GetShipping(\Scraper\ScraperDPD\StructType\GetShipping $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetShipping($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }

    /**
     * Method to call the operation originally named getInfo
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
     * @return \Scraper\ScraperDPD\StructType\GetInfoResponse|bool
     */
    public function getInfo(\Scraper\ScraperDPD\StructType\GetInfo $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getInfo($parameters));
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
     * @return \Scraper\ScraperDPD\StructType\GetAllServiceNoticesResponse|\Scraper\ScraperDPD\StructType\GetBic3Response|\Scraper\ScraperDPD\StructType\GetBic3RoutingResponse|\Scraper\ScraperDPD\StructType\GetCustomerAddressResponse|\Scraper\ScraperDPD\StructType\GetCustomerProfileResponse|\Scraper\ScraperDPD\StructType\GetGeoRoutingResponse|\Scraper\ScraperDPD\StructType\GetGeoRoutingReverseResponse|\Scraper\ScraperDPD\StructType\GetInfoResponse|\Scraper\ScraperDPD\StructType\GetLabelBcResponse|\Scraper\ScraperDPD\StructType\GetLabelDataResponse|\Scraper\ScraperDPD\StructType\GetLabelResponse|\Scraper\ScraperDPD\StructType\GetLastNumberResponse|\Scraper\ScraperDPD\StructType\GetNationalTransitTimeResponse|\Scraper\ScraperDPD\StructType\GetNumberRangeBcResponse|\Scraper\ScraperDPD\StructType\GetNumberRangeResponse|\Scraper\ScraperDPD\StructType\GetOptionValueResponse|\Scraper\ScraperDPD\StructType\GetOptionValuesResponse|\Scraper\ScraperDPD\StructType\GetPropertiesResponse|\Scraper\ScraperDPD\StructType\GetRdvShipmentDataResponse|\Scraper\ScraperDPD\StructType\GetRetourLabelBcResponse|\Scraper\ScraperDPD\StructType\GetRetourLabelResponse|\Scraper\ScraperDPD\StructType\GetRetourShipmentDataBcResponse|\Scraper\ScraperDPD\StructType\GetRetourShipmentDataResponse|\Scraper\ScraperDPD\StructType\GetReverseOnDemandModeResponse|\Scraper\ScraperDPD\StructType\GetSafePlaceDataResponse|\Scraper\ScraperDPD\StructType\GetServiceNoticeAnswersResponse|\Scraper\ScraperDPD\StructType\GetServiceNoticesResponse|\Scraper\ScraperDPD\StructType\GetShipmentBcMultiResponse|\Scraper\ScraperDPD\StructType\GetShipmentBcResponse|\Scraper\ScraperDPD\StructType\GetShipmentResponse|\Scraper\ScraperDPD\StructType\GetShippingResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
