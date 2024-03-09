<?php

namespace Scraper\ScraperDPD;

/**
 * Class which returns the class map definition
 */
class ClassMap
{
    /**
     * Returns the mapping between the WSDL Structs and generated Structs' classes
     * This array is sent to the \SoapClient when calling the WS
     *
     * @return array<string>
     */
    final public static function get()
    {
        return [
            'isAlive' => '\\Scraper\\ScraperDPD\\StructType\\IsAlive',
            'isAliveResponse' => '\\Scraper\\ScraperDPD\\StructType\\IsAliveResponse',
            'setAlive' => '\\Scraper\\ScraperDPD\\StructType\\SetAlive',
            'setAliveResponse' => '\\Scraper\\ScraperDPD\\StructType\\SetAliveResponse',
            'UserCredentials' => '\\Scraper\\ScraperDPD\\StructType\\UserCredentials',
            'VerifyConfiguration' => '\\Scraper\\ScraperDPD\\StructType\\VerifyConfiguration',
            'VerifyConfigurationRequest' => '\\Scraper\\ScraperDPD\\StructType\\VerifyConfigurationRequest',
            'Customer' => '\\Scraper\\ScraperDPD\\StructType\\Customer',
            'CustomerSmall' => '\\Scraper\\ScraperDPD\\StructType\\CustomerSmall',
            'VerifyConfigurationResponse' => '\\Scraper\\ScraperDPD\\StructType\\VerifyConfigurationResponse',
            'VerifyUserCredentials' => '\\Scraper\\ScraperDPD\\StructType\\VerifyUserCredentials',
            'CreateShipment' => '\\Scraper\\ScraperDPD\\StructType\\CreateShipment',
            'StdShipmentRequest' => '\\Scraper\\ScraperDPD\\StructType\\StdShipmentRequest',
            'StdShipmentBaseRequest' => '\\Scraper\\ScraperDPD\\StructType\\StdShipmentBaseRequest',
            'ShipmentRequestDefaultData' => '\\Scraper\\ScraperDPD\\StructType\\ShipmentRequestDefaultData',
            'ShipmentRequestBase' => '\\Scraper\\ScraperDPD\\StructType\\ShipmentRequestBase',
            'Address' => '\\Scraper\\ScraperDPD\\StructType\\Address',
            'AddressMini' => '\\Scraper\\ScraperDPD\\StructType\\AddressMini',
            'ShopAddress' => '\\Scraper\\ScraperDPD\\StructType\\ShopAddress',
            'AddressInfo' => '\\Scraper\\ScraperDPD\\StructType\\AddressInfo',
            'StdServices' => '\\Scraper\\ScraperDPD\\StructType\\StdServices',
            'StdServicesBase' => '\\Scraper\\ScraperDPD\\StructType\\StdServicesBase',
            'ServiceBaseList' => '\\Scraper\\ScraperDPD\\StructType\\ServiceBaseList',
            'AppendOptionsBase' => '\\Scraper\\ScraperDPD\\StructType\\AppendOptionsBase',
            'Bic3' => '\\Scraper\\ScraperDPD\\StructType\\Bic3',
            'PickupData' => '\\Scraper\\ScraperDPD\\StructType\\PickupData',
            'ServiceBase' => '\\Scraper\\ScraperDPD\\StructType\\ServiceBase',
            'DefaultService' => '\\Scraper\\ScraperDPD\\StructType\\DefaultService',
            'NonService' => '\\Scraper\\ScraperDPD\\StructType\\NonService',
            'Marketing' => '\\Scraper\\ScraperDPD\\StructType\\Marketing',
            'Sameday' => '\\Scraper\\ScraperDPD\\StructType\\Sameday',
            'Consolidation' => '\\Scraper\\ScraperDPD\\StructType\\Consolidation',
            'AutoConsolidation' => '\\Scraper\\ScraperDPD\\StructType\\AutoConsolidation',
            'ReverseReturnBase' => '\\Scraper\\ScraperDPD\\StructType\\ReverseReturnBase',
            'ReverseBcReturn' => '\\Scraper\\ScraperDPD\\StructType\\ReverseBcReturn',
            'BcData' => '\\Scraper\\ScraperDPD\\StructType\\BcData',
            'ReverseInverseReturnBc' => '\\Scraper\\ScraperDPD\\StructType\\ReverseInverseReturnBc',
            'ReverseReturn' => '\\Scraper\\ScraperDPD\\StructType\\ReverseReturn',
            'Parcel' => '\\Scraper\\ScraperDPD\\StructType\\Parcel',
            'ReverseInverseReturn' => '\\Scraper\\ScraperDPD\\StructType\\ReverseInverseReturn',
            'Reverse' => '\\Scraper\\ScraperDPD\\StructType\\Reverse',
            'ParcelShop' => '\\Scraper\\ScraperDPD\\StructType\\ParcelShop',
            'Contact' => '\\Scraper\\ScraperDPD\\StructType\\Contact',
            'ExtraInsurance' => '\\Scraper\\ScraperDPD\\StructType\\ExtraInsurance',
            'CreateShipmentResponse' => '\\Scraper\\ScraperDPD\\StructType\\CreateShipmentResponse',
            'ArrayOfShipment' => '\\Scraper\\ScraperDPD\\ArrayType\\ArrayOfShipment',
            'Shipment' => '\\Scraper\\ScraperDPD\\StructType\\Shipment',
            'CreateShipmentBc' => '\\Scraper\\ScraperDPD\\StructType\\CreateShipmentBc',
            'CreateShipmentBcResponse' => '\\Scraper\\ScraperDPD\\StructType\\CreateShipmentBcResponse',
            'ArrayOfShipmentBc' => '\\Scraper\\ScraperDPD\\ArrayType\\ArrayOfShipmentBc',
            'ShipmentBc' => '\\Scraper\\ScraperDPD\\StructType\\ShipmentBc',
            'BcDataExt' => '\\Scraper\\ScraperDPD\\StructType\\BcDataExt',
            'CreateShipmentWithLabels' => '\\Scraper\\ScraperDPD\\StructType\\CreateShipmentWithLabels',
            'StdShipmentLabelRequest' => '\\Scraper\\ScraperDPD\\StructType\\StdShipmentLabelRequest',
            'StdShipmentLabelBaseRequest' => '\\Scraper\\ScraperDPD\\StructType\\StdShipmentLabelBaseRequest',
            'LabelType' => '\\Scraper\\ScraperDPD\\StructType\\LabelType',
            'Bic3LabelData' => '\\Scraper\\ScraperDPD\\StructType\\Bic3LabelData',
            'ReferenceInBarcode' => '\\Scraper\\ScraperDPD\\StructType\\ReferenceInBarcode',
            'CreateShipmentWithLabelsResponse' => '\\Scraper\\ScraperDPD\\StructType\\CreateShipmentWithLabelsResponse',
            'ShipmentsWithLabels' => '\\Scraper\\ScraperDPD\\StructType\\ShipmentsWithLabels',
            'ArrayOfLabel' => '\\Scraper\\ScraperDPD\\ArrayType\\ArrayOfLabel',
            'Label' => '\\Scraper\\ScraperDPD\\StructType\\Label',
            'CreateShipmentWithLabelsBc' => '\\Scraper\\ScraperDPD\\StructType\\CreateShipmentWithLabelsBc',
            'CreateShipmentWithLabelsBcResponse' => '\\Scraper\\ScraperDPD\\StructType\\CreateShipmentWithLabelsBcResponse',
            'ShipmentsWithLabelsBc' => '\\Scraper\\ScraperDPD\\StructType\\ShipmentsWithLabelsBc',
            'CreateMultiShipment' => '\\Scraper\\ScraperDPD\\StructType\\CreateMultiShipment',
            'MultiShipmentRequest' => '\\Scraper\\ScraperDPD\\StructType\\MultiShipmentRequest',
            'MultiServices' => '\\Scraper\\ScraperDPD\\StructType\\MultiServices',
            'ArrayOfSlaveRequest' => '\\Scraper\\ScraperDPD\\ArrayType\\ArrayOfSlaveRequest',
            'SlaveRequest' => '\\Scraper\\ScraperDPD\\StructType\\SlaveRequest',
            'SlaveServices' => '\\Scraper\\ScraperDPD\\StructType\\SlaveServices',
            'SlaveServicesBase' => '\\Scraper\\ScraperDPD\\StructType\\SlaveServicesBase',
            'CreateMultiShipmentResponse' => '\\Scraper\\ScraperDPD\\StructType\\CreateMultiShipmentResponse',
            'MultiShipment' => '\\Scraper\\ScraperDPD\\StructType\\MultiShipment',
            'CreateMultiShipmentBc' => '\\Scraper\\ScraperDPD\\StructType\\CreateMultiShipmentBc',
            'CreateMultiShipmentBcResponse' => '\\Scraper\\ScraperDPD\\StructType\\CreateMultiShipmentBcResponse',
            'MultiShipmentBc' => '\\Scraper\\ScraperDPD\\StructType\\MultiShipmentBc',
            'GetServiceNoticeAnswers' => '\\Scraper\\ScraperDPD\\StructType\\GetServiceNoticeAnswers',
            'ServiceNoticeAnswersRequest' => '\\Scraper\\ScraperDPD\\StructType\\ServiceNoticeAnswersRequest',
            'GetServiceNoticeAnswersResponse' => '\\Scraper\\ScraperDPD\\StructType\\GetServiceNoticeAnswersResponse',
            'ServiceNoticeAnswersResponse' => '\\Scraper\\ScraperDPD\\StructType\\ServiceNoticeAnswersResponse',
            'ArrayOfText' => '\\Scraper\\ScraperDPD\\ArrayType\\ArrayOfText',
            'Text' => '\\Scraper\\ScraperDPD\\StructType\\Text',
            'GetServiceNotices' => '\\Scraper\\ScraperDPD\\StructType\\GetServiceNotices',
            'ServiceNoticeRequest' => '\\Scraper\\ScraperDPD\\StructType\\ServiceNoticeRequest',
            'GetServiceNoticesResponse' => '\\Scraper\\ScraperDPD\\StructType\\GetServiceNoticesResponse',
            'ServiceNoticeResponse' => '\\Scraper\\ScraperDPD\\StructType\\ServiceNoticeResponse',
            'ArrayOfServiceNotice' => '\\Scraper\\ScraperDPD\\ArrayType\\ArrayOfServiceNotice',
            'ServiceNotice' => '\\Scraper\\ScraperDPD\\StructType\\ServiceNotice',
            'GetAllServiceNotices' => '\\Scraper\\ScraperDPD\\StructType\\GetAllServiceNotices',
            'GetAllServiceNoticesRequest' => '\\Scraper\\ScraperDPD\\StructType\\GetAllServiceNoticesRequest',
            'ArrayOfString' => '\\Scraper\\ScraperDPD\\ArrayType\\ArrayOfString',
            'GetAllServiceNoticesResponse' => '\\Scraper\\ScraperDPD\\StructType\\GetAllServiceNoticesResponse',
            'ArrayOfServiceNoticeEntry' => '\\Scraper\\ScraperDPD\\ArrayType\\ArrayOfServiceNoticeEntry',
            'ServiceNoticeEntry' => '\\Scraper\\ScraperDPD\\StructType\\ServiceNoticeEntry',
            'ArrayOfReason' => '\\Scraper\\ScraperDPD\\ArrayType\\ArrayOfReason',
            'Reason' => '\\Scraper\\ScraperDPD\\StructType\\Reason',
            'GetBic3' => '\\Scraper\\ScraperDPD\\StructType\\GetBic3',
            'GetBic3Request' => '\\Scraper\\ScraperDPD\\StructType\\GetBic3Request',
            'GetBic3Response' => '\\Scraper\\ScraperDPD\\StructType\\GetBic3Response',
            'GetBic3Routing' => '\\Scraper\\ScraperDPD\\StructType\\GetBic3Routing',
            'GetBic3RoutingRequest' => '\\Scraper\\ScraperDPD\\StructType\\GetBic3RoutingRequest',
            'GeoRoutingRequest' => '\\Scraper\\ScraperDPD\\StructType\\GeoRoutingRequest',
            'GeoRoutingBaseRequest' => '\\Scraper\\ScraperDPD\\StructType\\GeoRoutingBaseRequest',
            'GetBic3RoutingResponse' => '\\Scraper\\ScraperDPD\\StructType\\GetBic3RoutingResponse',
            'GeoRouting' => '\\Scraper\\ScraperDPD\\StructType\\GeoRouting',
            'GetGeoRouting' => '\\Scraper\\ScraperDPD\\StructType\\GetGeoRouting',
            'GetGeoRoutingResponse' => '\\Scraper\\ScraperDPD\\StructType\\GetGeoRoutingResponse',
            'GetGeoRoutingReverse' => '\\Scraper\\ScraperDPD\\StructType\\GetGeoRoutingReverse',
            'GeoRoutingReverseRequest' => '\\Scraper\\ScraperDPD\\StructType\\GeoRoutingReverseRequest',
            'GetGeoRoutingReverseResponse' => '\\Scraper\\ScraperDPD\\StructType\\GetGeoRoutingReverseResponse',
            'UpdateServiceNotice' => '\\Scraper\\ScraperDPD\\StructType\\UpdateServiceNotice',
            'UpdateServiceNoticeRequest' => '\\Scraper\\ScraperDPD\\StructType\\UpdateServiceNoticeRequest',
            'UpdateServiceNoticeRequestBase' => '\\Scraper\\ScraperDPD\\StructType\\UpdateServiceNoticeRequestBase',
            'UpdateServiceNoticeResponse' => '\\Scraper\\ScraperDPD\\StructType\\UpdateServiceNoticeResponse',
            'CancelServiceNotice' => '\\Scraper\\ScraperDPD\\StructType\\CancelServiceNotice',
            'CancelServiceNoticeRequest' => '\\Scraper\\ScraperDPD\\StructType\\CancelServiceNoticeRequest',
            'CancelServiceNoticeResponse' => '\\Scraper\\ScraperDPD\\StructType\\CancelServiceNoticeResponse',
            'GetRetourShipmentData' => '\\Scraper\\ScraperDPD\\StructType\\GetRetourShipmentData',
            'RetourShipmentRequest' => '\\Scraper\\ScraperDPD\\StructType\\RetourShipmentRequest',
            'RetourShipmentBaseRequest' => '\\Scraper\\ScraperDPD\\StructType\\RetourShipmentBaseRequest',
            'GetRetourShipmentDataResponse' => '\\Scraper\\ScraperDPD\\StructType\\GetRetourShipmentDataResponse',
            'RetourShipmentData' => '\\Scraper\\ScraperDPD\\StructType\\RetourShipmentData',
            'ShipmentData' => '\\Scraper\\ScraperDPD\\StructType\\ShipmentData',
            'ShipmentDataBase' => '\\Scraper\\ScraperDPD\\StructType\\ShipmentDataBase',
            'RetourServices' => '\\Scraper\\ScraperDPD\\StructType\\RetourServices',
            'GetRetourShipmentDataBc' => '\\Scraper\\ScraperDPD\\StructType\\GetRetourShipmentDataBc',
            'RetourShipmentBcRequest' => '\\Scraper\\ScraperDPD\\StructType\\RetourShipmentBcRequest',
            'GetRetourShipmentDataBcResponse' => '\\Scraper\\ScraperDPD\\StructType\\GetRetourShipmentDataBcResponse',
            'RetourShipmentDataBc' => '\\Scraper\\ScraperDPD\\StructType\\RetourShipmentDataBc',
            'ShipmentDataBc' => '\\Scraper\\ScraperDPD\\StructType\\ShipmentDataBc',
            'CreateReverseInverseShipment' => '\\Scraper\\ScraperDPD\\StructType\\CreateReverseInverseShipment',
            'ReverseShipmentRequest' => '\\Scraper\\ScraperDPD\\StructType\\ReverseShipmentRequest',
            'ReverseInverseServices' => '\\Scraper\\ScraperDPD\\StructType\\ReverseInverseServices',
            'CreateReverseInverseShipmentResponse' => '\\Scraper\\ScraperDPD\\StructType\\CreateReverseInverseShipmentResponse',
            'CreateReverseInverseShipmentBc' => '\\Scraper\\ScraperDPD\\StructType\\CreateReverseInverseShipmentBc',
            'CreateReverseInverseShipmentBcResponse' => '\\Scraper\\ScraperDPD\\StructType\\CreateReverseInverseShipmentBcResponse',
            'CreateReverseInverseShipmentWithLabels' => '\\Scraper\\ScraperDPD\\StructType\\CreateReverseInverseShipmentWithLabels',
            'ReverseShipmentLabelRequest' => '\\Scraper\\ScraperDPD\\StructType\\ReverseShipmentLabelRequest',
            'CreateReverseInverseShipmentWithLabelsResponse' => '\\Scraper\\ScraperDPD\\StructType\\CreateReverseInverseShipmentWithLabelsResponse',
            'ShipmentWithLabels' => '\\Scraper\\ScraperDPD\\StructType\\ShipmentWithLabels',
            'CreateReverseInverseShipmentWithLabelsBc' => '\\Scraper\\ScraperDPD\\StructType\\CreateReverseInverseShipmentWithLabelsBc',
            'CreateReverseInverseShipmentWithLabelsBcResponse' => '\\Scraper\\ScraperDPD\\StructType\\CreateReverseInverseShipmentWithLabelsBcResponse',
            'ShipmentWithLabelsBc' => '\\Scraper\\ScraperDPD\\StructType\\ShipmentWithLabelsBc',
            'GetLabel' => '\\Scraper\\ScraperDPD\\StructType\\GetLabel',
            'ReceiveLabelRequest' => '\\Scraper\\ScraperDPD\\StructType\\ReceiveLabelRequest',
            'ReceiveLabelRequestBase' => '\\Scraper\\ScraperDPD\\StructType\\ReceiveLabelRequestBase',
            'GetLabelResponse' => '\\Scraper\\ScraperDPD\\StructType\\GetLabelResponse',
            'LabelResponse' => '\\Scraper\\ScraperDPD\\StructType\\LabelResponse',
            'LabelBaseResponse' => '\\Scraper\\ScraperDPD\\StructType\\LabelBaseResponse',
            'GetLabelBc' => '\\Scraper\\ScraperDPD\\StructType\\GetLabelBc',
            'ReceiveLabelBcRequest' => '\\Scraper\\ScraperDPD\\StructType\\ReceiveLabelBcRequest',
            'GetLabelBcResponse' => '\\Scraper\\ScraperDPD\\StructType\\GetLabelBcResponse',
            'LabelBcResponse' => '\\Scraper\\ScraperDPD\\StructType\\LabelBcResponse',
            'GetLabelData' => '\\Scraper\\ScraperDPD\\StructType\\GetLabelData',
            'GetLabelDataRequest' => '\\Scraper\\ScraperDPD\\StructType\\GetLabelDataRequest',
            'ShipmentRequestBcBase' => '\\Scraper\\ScraperDPD\\StructType\\ShipmentRequestBcBase',
            'GetShipmentRequestBase' => '\\Scraper\\ScraperDPD\\StructType\\GetShipmentRequestBase',
            'GetLabelDataResponse' => '\\Scraper\\ScraperDPD\\StructType\\GetLabelDataResponse',
            'LabelData' => '\\Scraper\\ScraperDPD\\StructType\\LabelData',
            'LabelDataPn' => '\\Scraper\\ScraperDPD\\StructType\\LabelDataPn',
            'LabelDataBase' => '\\Scraper\\ScraperDPD\\StructType\\LabelDataBase',
            'ArrayOfBarcodeData' => '\\Scraper\\ScraperDPD\\ArrayType\\ArrayOfBarcodeData',
            'BarcodeData' => '\\Scraper\\ScraperDPD\\StructType\\BarcodeData',
            'GetRetourLabel' => '\\Scraper\\ScraperDPD\\StructType\\GetRetourLabel',
            'ReceiveRetourLabelRequest' => '\\Scraper\\ScraperDPD\\StructType\\ReceiveRetourLabelRequest',
            'ReceiveRetourLabelRequestBase' => '\\Scraper\\ScraperDPD\\StructType\\ReceiveRetourLabelRequestBase',
            'GetRetourLabelResponse' => '\\Scraper\\ScraperDPD\\StructType\\GetRetourLabelResponse',
            'GetRetourLabelBc' => '\\Scraper\\ScraperDPD\\StructType\\GetRetourLabelBc',
            'ReceiveRetourLabelBcRequest' => '\\Scraper\\ScraperDPD\\StructType\\ReceiveRetourLabelBcRequest',
            'GetRetourLabelBcResponse' => '\\Scraper\\ScraperDPD\\StructType\\GetRetourLabelBcResponse',
            'CreateCollectionRequest' => '\\Scraper\\ScraperDPD\\StructType\\CreateCollectionRequest',
            'CollectionRequestRequest' => '\\Scraper\\ScraperDPD\\StructType\\CollectionRequestRequest',
            'CollectionRequestRequestBase' => '\\Scraper\\ScraperDPD\\StructType\\CollectionRequestRequestBase',
            'CollectionRequestServices' => '\\Scraper\\ScraperDPD\\StructType\\CollectionRequestServices',
            'ContactCollectionRequest' => '\\Scraper\\ScraperDPD\\StructType\\ContactCollectionRequest',
            'CreateCollectionRequestResponse' => '\\Scraper\\ScraperDPD\\StructType\\CreateCollectionRequestResponse',
            'CreateCollectionRequestBc' => '\\Scraper\\ScraperDPD\\StructType\\CreateCollectionRequestBc',
            'CreateCollectionRequestBcResponse' => '\\Scraper\\ScraperDPD\\StructType\\CreateCollectionRequestBcResponse',
            'TerminateCollectionRequest' => '\\Scraper\\ScraperDPD\\StructType\\TerminateCollectionRequest',
            'TerminateCollectionRequestParcel' => '\\Scraper\\ScraperDPD\\StructType\\TerminateCollectionRequestParcel',
            'TerminateCollectionRequestBase' => '\\Scraper\\ScraperDPD\\StructType\\TerminateCollectionRequestBase',
            'TerminateCollectionRequestResponse' => '\\Scraper\\ScraperDPD\\StructType\\TerminateCollectionRequestResponse',
            'TerminateCollectionRequestBc' => '\\Scraper\\ScraperDPD\\StructType\\TerminateCollectionRequestBc',
            'TerminateCollectionRequestBcResponse' => '\\Scraper\\ScraperDPD\\StructType\\TerminateCollectionRequestBcResponse',
            'CreatePickupAtCustomer' => '\\Scraper\\ScraperDPD\\StructType\\CreatePickupAtCustomer',
            'PickupAtCustomerRequest' => '\\Scraper\\ScraperDPD\\StructType\\PickupAtCustomerRequest',
            'PickupAtCustomerRequestBase' => '\\Scraper\\ScraperDPD\\StructType\\PickupAtCustomerRequestBase',
            'ArrayOfParcel' => '\\Scraper\\ScraperDPD\\ArrayType\\ArrayOfParcel',
            'CreatePickupAtCustomerResponse' => '\\Scraper\\ScraperDPD\\StructType\\CreatePickupAtCustomerResponse',
            'CreatePickupAtCustomerBc' => '\\Scraper\\ScraperDPD\\StructType\\CreatePickupAtCustomerBc',
            'PickupAtCustomerBcRequest' => '\\Scraper\\ScraperDPD\\StructType\\PickupAtCustomerBcRequest',
            'CreatePickupAtCustomerBcResponse' => '\\Scraper\\ScraperDPD\\StructType\\CreatePickupAtCustomerBcResponse',
            'PickupAtCustomerResponse' => '\\Scraper\\ScraperDPD\\StructType\\PickupAtCustomerResponse',
            'GetShipment' => '\\Scraper\\ScraperDPD\\StructType\\GetShipment',
            'ShipmentRequest' => '\\Scraper\\ScraperDPD\\StructType\\ShipmentRequest',
            'GetShipmentResponse' => '\\Scraper\\ScraperDPD\\StructType\\GetShipmentResponse',
            'ShipmentDataExtended' => '\\Scraper\\ScraperDPD\\StructType\\ShipmentDataExtended',
            'ShipmentDataExtendedBase' => '\\Scraper\\ScraperDPD\\StructType\\ShipmentDataExtendedBase',
            'ParcelDimension' => '\\Scraper\\ScraperDPD\\StructType\\ParcelDimension',
            'GetShipmentBc' => '\\Scraper\\ScraperDPD\\StructType\\GetShipmentBc',
            'ShipmentRequestBc' => '\\Scraper\\ScraperDPD\\StructType\\ShipmentRequestBc',
            'GetShipmentBcResponse' => '\\Scraper\\ScraperDPD\\StructType\\GetShipmentBcResponse',
            'ShipmentDataExtendedBc' => '\\Scraper\\ScraperDPD\\StructType\\ShipmentDataExtendedBc',
            'ArrayOfServiceEntry' => '\\Scraper\\ScraperDPD\\ArrayType\\ArrayOfServiceEntry',
            'ServiceEntry' => '\\Scraper\\ScraperDPD\\StructType\\ServiceEntry',
            'GetShipmentBcMulti' => '\\Scraper\\ScraperDPD\\StructType\\GetShipmentBcMulti',
            'GetShipmentBcMultiRequest' => '\\Scraper\\ScraperDPD\\StructType\\GetShipmentBcMultiRequest',
            'GetShipmentBcMultiResponse' => '\\Scraper\\ScraperDPD\\StructType\\GetShipmentBcMultiResponse',
            'ArrayOfGetShipmentEntry' => '\\Scraper\\ScraperDPD\\ArrayType\\ArrayOfGetShipmentEntry',
            'GetShipmentEntry' => '\\Scraper\\ScraperDPD\\StructType\\GetShipmentEntry',
            'GetReverseOnDemandMode' => '\\Scraper\\ScraperDPD\\StructType\\GetReverseOnDemandMode',
            'GetReverseOnDemandModeResponse' => '\\Scraper\\ScraperDPD\\StructType\\GetReverseOnDemandModeResponse',
            'IsPickableOnDate' => '\\Scraper\\ScraperDPD\\StructType\\IsPickableOnDate',
            'IsPickableRequest' => '\\Scraper\\ScraperDPD\\StructType\\IsPickableRequest',
            'DayRequestBase' => '\\Scraper\\ScraperDPD\\StructType\\DayRequestBase',
            'IsPickableOnDateResponse' => '\\Scraper\\ScraperDPD\\StructType\\IsPickableOnDateResponse',
            'IsDeliverableOnDate' => '\\Scraper\\ScraperDPD\\StructType\\IsDeliverableOnDate',
            'IsDeliverableRequest' => '\\Scraper\\ScraperDPD\\StructType\\IsDeliverableRequest',
            'IsDeliverableOnDateResponse' => '\\Scraper\\ScraperDPD\\StructType\\IsDeliverableOnDateResponse',
            'GetLastNumber' => '\\Scraper\\ScraperDPD\\StructType\\GetLastNumber',
            'GetLastNumberRequest' => '\\Scraper\\ScraperDPD\\StructType\\GetLastNumberRequest',
            'ArrayOfEntry' => '\\Scraper\\ScraperDPD\\ArrayType\\ArrayOfEntry',
            'Entry' => '\\Scraper\\ScraperDPD\\StructType\\Entry',
            'GetLastNumberResponse' => '\\Scraper\\ScraperDPD\\StructType\\GetLastNumberResponse',
            'ArrayOfLong' => '\\Scraper\\ScraperDPD\\ArrayType\\ArrayOfLong',
            'GetNationalTransitTime' => '\\Scraper\\ScraperDPD\\StructType\\GetNationalTransitTime',
            'GetNationalTransitTimeRequest' => '\\Scraper\\ScraperDPD\\StructType\\GetNationalTransitTimeRequest',
            'GetNationalTransitTimeResponse' => '\\Scraper\\ScraperDPD\\StructType\\GetNationalTransitTimeResponse',
            'GetRdvShipmentData' => '\\Scraper\\ScraperDPD\\StructType\\GetRdvShipmentData',
            'GetRdvShipmentDataRequest' => '\\Scraper\\ScraperDPD\\StructType\\GetRdvShipmentDataRequest',
            'GetRdvShipmentDataResponse' => '\\Scraper\\ScraperDPD\\StructType\\GetRdvShipmentDataResponse',
            'ArrayOfRdvShipmentData' => '\\Scraper\\ScraperDPD\\ArrayType\\ArrayOfRdvShipmentData',
            'RdvShipmentData' => '\\Scraper\\ScraperDPD\\StructType\\RdvShipmentData',
            'RdvShipmentDataBase' => '\\Scraper\\ScraperDPD\\StructType\\RdvShipmentDataBase',
            'RdvAddress' => '\\Scraper\\ScraperDPD\\StructType\\RdvAddress',
            'RdvDeliveryInfo' => '\\Scraper\\ScraperDPD\\StructType\\RdvDeliveryInfo',
            'RdvDeliveryInfoSmall' => '\\Scraper\\ScraperDPD\\StructType\\RdvDeliveryInfoSmall',
            'ArrayOfRdvService' => '\\Scraper\\ScraperDPD\\ArrayType\\ArrayOfRdvService',
            'RdvService' => '\\Scraper\\ScraperDPD\\StructType\\RdvService',
            'ParcelInfoSin' => '\\Scraper\\ScraperDPD\\StructType\\ParcelInfoSin',
            'ParcelInfo' => '\\Scraper\\ScraperDPD\\StructType\\ParcelInfo',
            'UpdateRdvShipmentDataForShop' => '\\Scraper\\ScraperDPD\\StructType\\UpdateRdvShipmentDataForShop',
            'UpdateRdvShipmentDataForShopRequest' => '\\Scraper\\ScraperDPD\\StructType\\UpdateRdvShipmentDataForShopRequest',
            'UpdateRdvShipmentData' => '\\Scraper\\ScraperDPD\\StructType\\UpdateRdvShipmentData',
            'RdvEsnInfo' => '\\Scraper\\ScraperDPD\\StructType\\RdvEsnInfo',
            'UpdateRdvShipmentDataForShopResponse' => '\\Scraper\\ScraperDPD\\StructType\\UpdateRdvShipmentDataForShopResponse',
            'UpdateRdvShipmentDataForAgencyPickup' => '\\Scraper\\ScraperDPD\\StructType\\UpdateRdvShipmentDataForAgencyPickup',
            'UpdateRdvShipmentDataForAgencyPickupRequest' => '\\Scraper\\ScraperDPD\\StructType\\UpdateRdvShipmentDataForAgencyPickupRequest',
            'UpdateRdvShipmentDataForAgencyPickupResponse' => '\\Scraper\\ScraperDPD\\StructType\\UpdateRdvShipmentDataForAgencyPickupResponse',
            'UpdateRdvShipmentDataRequest' => '\\Scraper\\ScraperDPD\\StructType\\UpdateRdvShipmentDataRequest',
            'RdvData' => '\\Scraper\\ScraperDPD\\StructType\\RdvData',
            'UpdateRdvShipmentDataResponse' => '\\Scraper\\ScraperDPD\\StructType\\UpdateRdvShipmentDataResponse',
            'UpdateRdvShipmentDataForPredict' => '\\Scraper\\ScraperDPD\\StructType\\UpdateRdvShipmentDataForPredict',
            'UpdateRdvShipmentDataPredictRequest' => '\\Scraper\\ScraperDPD\\StructType\\UpdateRdvShipmentDataPredictRequest',
            'UpdateRdvShipmentDataForPredictResponse' => '\\Scraper\\ScraperDPD\\StructType\\UpdateRdvShipmentDataForPredictResponse',
            'UpdateRdvShipmentDataForSafePlace' => '\\Scraper\\ScraperDPD\\StructType\\UpdateRdvShipmentDataForSafePlace',
            'UpdateRdvShipmentDataForSafePlaceRequest' => '\\Scraper\\ScraperDPD\\StructType\\UpdateRdvShipmentDataForSafePlaceRequest',
            'UpdateRdvShipmentDataForSafePlaceResponse' => '\\Scraper\\ScraperDPD\\StructType\\UpdateRdvShipmentDataForSafePlaceResponse',
            'GetSafePlaceData' => '\\Scraper\\ScraperDPD\\StructType\\GetSafePlaceData',
            'GetSafePlaceDataRequest' => '\\Scraper\\ScraperDPD\\StructType\\GetSafePlaceDataRequest',
            'GetSafePlaceDataResponse' => '\\Scraper\\ScraperDPD\\StructType\\GetSafePlaceDataResponse',
            'ArrayOfBase64Binary' => '\\Scraper\\ScraperDPD\\ArrayType\\ArrayOfBase64Binary',
            'GetCustomerAddress' => '\\Scraper\\ScraperDPD\\StructType\\GetCustomerAddress',
            'GetCustomerAddressResponse' => '\\Scraper\\ScraperDPD\\StructType\\GetCustomerAddressResponse',
            'CustomerAddress' => '\\Scraper\\ScraperDPD\\StructType\\CustomerAddress',
            'IsCustomerBlocked' => '\\Scraper\\ScraperDPD\\StructType\\IsCustomerBlocked',
            'IsCustomerBlockedResponse' => '\\Scraper\\ScraperDPD\\StructType\\IsCustomerBlockedResponse',
            'GetNumberRange' => '\\Scraper\\ScraperDPD\\StructType\\GetNumberRange',
            'NumberRangeRequest' => '\\Scraper\\ScraperDPD\\StructType\\NumberRangeRequest',
            'NumberRangeBaseRequest' => '\\Scraper\\ScraperDPD\\StructType\\NumberRangeBaseRequest',
            'GetNumberRangeResponse' => '\\Scraper\\ScraperDPD\\StructType\\GetNumberRangeResponse',
            'NumberRangeResponse' => '\\Scraper\\ScraperDPD\\StructType\\NumberRangeResponse',
            'NumberRangeBaseResponse' => '\\Scraper\\ScraperDPD\\StructType\\NumberRangeBaseResponse',
            'GetNumberRangeBc' => '\\Scraper\\ScraperDPD\\StructType\\GetNumberRangeBc',
            'NumberRangeBcRequest' => '\\Scraper\\ScraperDPD\\StructType\\NumberRangeBcRequest',
            'NumberRangeBcBaseRequest' => '\\Scraper\\ScraperDPD\\StructType\\NumberRangeBcBaseRequest',
            'GetNumberRangeBcResponse' => '\\Scraper\\ScraperDPD\\StructType\\GetNumberRangeBcResponse',
            'NumberRangeBcResponse' => '\\Scraper\\ScraperDPD\\StructType\\NumberRangeBcResponse',
            'TerminateNumberRange' => '\\Scraper\\ScraperDPD\\StructType\\TerminateNumberRange',
            'TerminateNumberRangeRequest' => '\\Scraper\\ScraperDPD\\StructType\\TerminateNumberRangeRequest',
            'TerminateNumberRangeBaseRequest' => '\\Scraper\\ScraperDPD\\StructType\\TerminateNumberRangeBaseRequest',
            'TerminateNumberRangeResponse' => '\\Scraper\\ScraperDPD\\StructType\\TerminateNumberRangeResponse',
            'TerminateNumberRangeBc' => '\\Scraper\\ScraperDPD\\StructType\\TerminateNumberRangeBc',
            'TerminateNumberRangeBcRequest' => '\\Scraper\\ScraperDPD\\StructType\\TerminateNumberRangeBcRequest',
            'TerminateNumberRangeBcResponse' => '\\Scraper\\ScraperDPD\\StructType\\TerminateNumberRangeBcResponse',
            'TerminateShipment' => '\\Scraper\\ScraperDPD\\StructType\\TerminateShipment',
            'TerminateShipmentRequest' => '\\Scraper\\ScraperDPD\\StructType\\TerminateShipmentRequest',
            'TerminateShipmentResponse' => '\\Scraper\\ScraperDPD\\StructType\\TerminateShipmentResponse',
            'GetCustomerProfile' => '\\Scraper\\ScraperDPD\\StructType\\GetCustomerProfile',
            'GetCustomerProfileRequest' => '\\Scraper\\ScraperDPD\\StructType\\GetCustomerProfileRequest',
            'ArrayOfCustomer' => '\\Scraper\\ScraperDPD\\ArrayType\\ArrayOfCustomer',
            'GetCustomerProfileResponse' => '\\Scraper\\ScraperDPD\\StructType\\GetCustomerProfileResponse',
            'ArrayOfCustomerProfile' => '\\Scraper\\ScraperDPD\\ArrayType\\ArrayOfCustomerProfile',
            'CustomerProfile' => '\\Scraper\\ScraperDPD\\StructType\\CustomerProfile',
            'ArrayOfProfileAddress' => '\\Scraper\\ScraperDPD\\ArrayType\\ArrayOfProfileAddress',
            'ProfileAddress' => '\\Scraper\\ScraperDPD\\StructType\\ProfileAddress',
            'ArrayOfCustomerService' => '\\Scraper\\ScraperDPD\\ArrayType\\ArrayOfCustomerService',
            'CustomerService' => '\\Scraper\\ScraperDPD\\StructType\\CustomerService',
            'GetProperties' => '\\Scraper\\ScraperDPD\\StructType\\GetProperties',
            'GetPropertiesRequest' => '\\Scraper\\ScraperDPD\\StructType\\GetPropertiesRequest',
            'GetPropertiesResponse' => '\\Scraper\\ScraperDPD\\StructType\\GetPropertiesResponse',
            'ArrayOfPropertyDefinition' => '\\Scraper\\ScraperDPD\\ArrayType\\ArrayOfPropertyDefinition',
            'PropertyDefinition' => '\\Scraper\\ScraperDPD\\StructType\\PropertyDefinition',
            'PutProperties' => '\\Scraper\\ScraperDPD\\StructType\\PutProperties',
            'PutPropertiesRequest' => '\\Scraper\\ScraperDPD\\StructType\\PutPropertiesRequest',
            'ArrayOfPropertyEntry' => '\\Scraper\\ScraperDPD\\ArrayType\\ArrayOfPropertyEntry',
            'PropertyEntry' => '\\Scraper\\ScraperDPD\\StructType\\PropertyEntry',
            'PutPropertiesResponse' => '\\Scraper\\ScraperDPD\\StructType\\PutPropertiesResponse',
            'GetOptionValue' => '\\Scraper\\ScraperDPD\\StructType\\GetOptionValue',
            'GetOptionRequest' => '\\Scraper\\ScraperDPD\\StructType\\GetOptionRequest',
            'GetOptionValueResponse' => '\\Scraper\\ScraperDPD\\StructType\\GetOptionValueResponse',
            'GetOptionResponse' => '\\Scraper\\ScraperDPD\\StructType\\GetOptionResponse',
            'GetOptionValues' => '\\Scraper\\ScraperDPD\\StructType\\GetOptionValues',
            'GetOptionsRequest' => '\\Scraper\\ScraperDPD\\StructType\\GetOptionsRequest',
            'GetOptionValuesResponse' => '\\Scraper\\ScraperDPD\\StructType\\GetOptionValuesResponse',
            'GetOptionsResponse' => '\\Scraper\\ScraperDPD\\StructType\\GetOptionsResponse',
            'ArrayOfGetOptionResponse' => '\\Scraper\\ScraperDPD\\ArrayType\\ArrayOfGetOptionResponse',
            'SendCNOTData' => '\\Scraper\\ScraperDPD\\StructType\\SendCNOTData',
            'CNOTData' => '\\Scraper\\ScraperDPD\\StructType\\CNOTData',
            'ArrayOfTask' => '\\Scraper\\ScraperDPD\\ArrayType\\ArrayOfTask',
            'Task' => '\\Scraper\\ScraperDPD\\StructType\\Task',
            'ArrayOfCNOTParcel' => '\\Scraper\\ScraperDPD\\ArrayType\\ArrayOfCNOTParcel',
            'CNOTParcel' => '\\Scraper\\ScraperDPD\\StructType\\CNOTParcel',
            'Location' => '\\Scraper\\ScraperDPD\\StructType\\Location',
            'Rendezvous' => '\\Scraper\\ScraperDPD\\StructType\\Rendezvous',
            'ArrayOfPhoneCall' => '\\Scraper\\ScraperDPD\\ArrayType\\ArrayOfPhoneCall',
            'PhoneCall' => '\\Scraper\\ScraperDPD\\StructType\\PhoneCall',
            'ArrayOfLocation' => '\\Scraper\\ScraperDPD\\ArrayType\\ArrayOfLocation',
            'SendCNOTDataResponse' => '\\Scraper\\ScraperDPD\\StructType\\SendCNOTDataResponse',
            'CheckIfReverseInverseShipmentExists' => '\\Scraper\\ScraperDPD\\StructType\\CheckIfReverseInverseShipmentExists',
            'CheckIfReverseInverseShipmentExistsRequest' => '\\Scraper\\ScraperDPD\\StructType\\CheckIfReverseInverseShipmentExistsRequest',
            'ParcelBcIdRequest' => '\\Scraper\\ScraperDPD\\StructType\\ParcelBcIdRequest',
            'BcIdBaseRequest' => '\\Scraper\\ScraperDPD\\StructType\\BcIdBaseRequest',
            'CheckIfReverseInverseShipmentExistsResponse' => '\\Scraper\\ScraperDPD\\StructType\\CheckIfReverseInverseShipmentExistsResponse',
            'CheckIfReverseInverseShipmentExistsBcId' => '\\Scraper\\ScraperDPD\\StructType\\CheckIfReverseInverseShipmentExistsBcId',
            'CheckIfReverseInverseShipmentExistsBcIdRequest' => '\\Scraper\\ScraperDPD\\StructType\\CheckIfReverseInverseShipmentExistsBcIdRequest',
            'BcIdRequest' => '\\Scraper\\ScraperDPD\\StructType\\BcIdRequest',
            'CheckIfReverseInverseShipmentExistsBcIdResponse' => '\\Scraper\\ScraperDPD\\StructType\\CheckIfReverseInverseShipmentExistsBcIdResponse',
            'GetShipping' => '\\Scraper\\ScraperDPD\\StructType\\GetShipping',
            'GetShippingRequest' => '\\Scraper\\ScraperDPD\\StructType\\GetShippingRequest',
            'GetShippingResponse' => '\\Scraper\\ScraperDPD\\StructType\\GetShippingResponse',
            'ArrayOfShipping' => '\\Scraper\\ScraperDPD\\ArrayType\\ArrayOfShipping',
            'Shipping' => '\\Scraper\\ScraperDPD\\StructType\\Shipping',
            'AddressIso2Name' => '\\Scraper\\ScraperDPD\\StructType\\AddressIso2Name',
            'AddressName' => '\\Scraper\\ScraperDPD\\StructType\\AddressName',
            'getInfo' => '\\Scraper\\ScraperDPD\\StructType\\GetInfo',
            'getInfoResponse' => '\\Scraper\\ScraperDPD\\StructType\\GetInfoResponse',
            'VerifyClient' => '\\Scraper\\ScraperDPD\\StructType\\VerifyClient',
            'VerifyRequest' => '\\Scraper\\ScraperDPD\\StructType\\VerifyRequest',
            'VerifyClientResponse' => '\\Scraper\\ScraperDPD\\StructType\\VerifyClientResponse',
            'VerifyResponse' => '\\Scraper\\ScraperDPD\\StructType\\VerifyResponse',
            'runAction' => '\\Scraper\\ScraperDPD\\StructType\\RunAction',
            'RunActionRequest' => '\\Scraper\\ScraperDPD\\StructType\\RunActionRequest',
            'runActionResponse' => '\\Scraper\\ScraperDPD\\StructType\\RunActionResponse',
            'RunActionResponse' => '\\Scraper\\ScraperDPD\\StructType\\RunActionResponse_1',
        ];
    }
}