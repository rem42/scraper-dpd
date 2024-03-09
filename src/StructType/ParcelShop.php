<?php

namespace Scraper\ScraperDPD\StructType;

/**
 * This class stands for ParcelShop StructType
 */
class ParcelShop extends DefaultService
{
    /**
     * The shopaddress
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var ShopAddress
     */
    public $shopaddress;

    /**
     * Constructor method for ParcelShop
     *
     * @uses ParcelShop::setShopaddress()
     */
    public function __construct(?ShopAddress $shopaddress = null)
    {
        $this
            ->setShopaddress($shopaddress)
        ;
    }

    /**
     * Get shopaddress value
     *
     * @return ShopAddress|null
     */
    public function getShopaddress()
    {
        return $this->shopaddress;
    }

    /**
     * Set shopaddress value
     *
     * @return self
     */
    public function setShopaddress(?ShopAddress $shopaddress = null)
    {
        $this->shopaddress = $shopaddress;
        return $this;
    }
}
