<?php

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for runActionResponse StructType
 */
class RunActionResponse extends AbstractStructBase
{
    /**
     * The runActionResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var RunActionResponse_1
     */
    public $runActionResult;

    /**
     * Constructor method for runActionResponse
     *
     * @uses RunActionResponse::setRunActionResult()
     */
    public function __construct(?RunActionResponse_1 $runActionResult = null)
    {
        $this
            ->setRunActionResult($runActionResult)
        ;
    }

    /**
     * Get runActionResult value
     *
     * @return RunActionResponse_1|null
     */
    public function getRunActionResult()
    {
        return $this->runActionResult;
    }

    /**
     * Set runActionResult value
     *
     * @return self
     */
    public function setRunActionResult(?RunActionResponse_1 $runActionResult = null)
    {
        $this->runActionResult = $runActionResult;
        return $this;
    }
}
