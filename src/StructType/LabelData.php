<?php

namespace Scraper\ScraperDPD\StructType;

/**
 * This class stands for LabelData StructType
 */
class LabelData extends LabelDataPn
{
    /**
     * The Bic3Depot
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $Bic3Depot;
    /**
     * The Bic3Number
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $Bic3Number;
    /**
     * The Bic3Checkdigit
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $Bic3Checkdigit;

    /**
     * Constructor method for LabelData
     *
     * @uses LabelData::setBic3Depot()
     * @uses LabelData::setBic3Number()
     * @uses LabelData::setBic3Checkdigit()
     *
     * @param string $bic3Depot
     * @param string $bic3Number
     * @param string $bic3Checkdigit
     */
    public function __construct($bic3Depot = null, $bic3Number = null, $bic3Checkdigit = null)
    {
        $this
            ->setBic3Depot($bic3Depot)
            ->setBic3Number($bic3Number)
            ->setBic3Checkdigit($bic3Checkdigit)
        ;
    }

    /**
     * Get Bic3Depot value
     *
     * @return string|null
     */
    public function getBic3Depot()
    {
        return $this->Bic3Depot;
    }

    /**
     * Set Bic3Depot value
     *
     * @param string $bic3Depot
     *
     * @return self
     */
    public function setBic3Depot($bic3Depot = null)
    {
        // validation for constraint: string
        if (null !== $bic3Depot && !\is_string($bic3Depot)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bic3Depot, true), \gettype($bic3Depot)), __LINE__);
        }
        $this->Bic3Depot = $bic3Depot;
        return $this;
    }

    /**
     * Get Bic3Number value
     *
     * @return string|null
     */
    public function getBic3Number()
    {
        return $this->Bic3Number;
    }

    /**
     * Set Bic3Number value
     *
     * @param string $bic3Number
     *
     * @return self
     */
    public function setBic3Number($bic3Number = null)
    {
        // validation for constraint: string
        if (null !== $bic3Number && !\is_string($bic3Number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bic3Number, true), \gettype($bic3Number)), __LINE__);
        }
        $this->Bic3Number = $bic3Number;
        return $this;
    }

    /**
     * Get Bic3Checkdigit value
     *
     * @return string|null
     */
    public function getBic3Checkdigit()
    {
        return $this->Bic3Checkdigit;
    }

    /**
     * Set Bic3Checkdigit value
     *
     * @param string $bic3Checkdigit
     *
     * @return self
     */
    public function setBic3Checkdigit($bic3Checkdigit = null)
    {
        // validation for constraint: string
        if (null !== $bic3Checkdigit && !\is_string($bic3Checkdigit)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bic3Checkdigit, true), \gettype($bic3Checkdigit)), __LINE__);
        }
        $this->Bic3Checkdigit = $bic3Checkdigit;
        return $this;
    }
}
