<?php

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ServiceNoticeAnswersResponse StructType
 */
class ServiceNoticeAnswersResponse extends AbstractStructBase
{
    /**
     * The answers
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var \Scraper\ScraperDPD\ArrayType\ArrayOfText
     */
    public $answers;

    /**
     * Constructor method for ServiceNoticeAnswersResponse
     *
     * @uses ServiceNoticeAnswersResponse::setAnswers()
     */
    public function __construct(?\Scraper\ScraperDPD\ArrayType\ArrayOfText $answers = null)
    {
        $this
            ->setAnswers($answers)
        ;
    }

    /**
     * Get answers value
     *
     * @return \Scraper\ScraperDPD\ArrayType\ArrayOfText|null
     */
    public function getAnswers()
    {
        return $this->answers;
    }

    /**
     * Set answers value
     *
     * @return self
     */
    public function setAnswers(?\Scraper\ScraperDPD\ArrayType\ArrayOfText $answers = null)
    {
        $this->answers = $answers;
        return $this;
    }
}
