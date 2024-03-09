<?php

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCustomerProfileResponse StructType
 */
class GetCustomerProfileResponse extends AbstractStructBase
{
    /**
     * The GetCustomerProfileResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var self
     */
    public $GetCustomerProfileResult;
    /**
     * The CustomerProfiles
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var \Scraper\ScraperDPD\ArrayType\ArrayOfCustomerProfile
     */
    public $CustomerProfiles;

    /**
     * Constructor method for GetCustomerProfileResponse
     *
     * @uses GetCustomerProfileResponse::setGetCustomerProfileResult()
     * @uses GetCustomerProfileResponse::setCustomerProfiles()
     */
    public function __construct(?self $getCustomerProfileResult = null, ?\Scraper\ScraperDPD\ArrayType\ArrayOfCustomerProfile $customerProfiles = null)
    {
        $this
            ->setGetCustomerProfileResult($getCustomerProfileResult)
            ->setCustomerProfiles($customerProfiles)
        ;
    }

    /**
     * Get GetCustomerProfileResult value
     *
     * @return self|null
     */
    public function getGetCustomerProfileResult()
    {
        return $this->GetCustomerProfileResult;
    }

    /**
     * Set GetCustomerProfileResult value
     *
     * @return self
     */
    public function setGetCustomerProfileResult(?self $getCustomerProfileResult = null)
    {
        $this->GetCustomerProfileResult = $getCustomerProfileResult;
        return $this;
    }

    /**
     * Get CustomerProfiles value
     *
     * @return \Scraper\ScraperDPD\ArrayType\ArrayOfCustomerProfile|null
     */
    public function getCustomerProfiles()
    {
        return $this->CustomerProfiles;
    }

    /**
     * Set CustomerProfiles value
     *
     * @return self
     */
    public function setCustomerProfiles(?\Scraper\ScraperDPD\ArrayType\ArrayOfCustomerProfile $customerProfiles = null)
    {
        $this->CustomerProfiles = $customerProfiles;
        return $this;
    }
}
