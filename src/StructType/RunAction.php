<?php

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for runAction StructType
 */
class RunAction extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var RunActionRequest
     */
    public $request;

    /**
     * Constructor method for runAction
     *
     * @uses RunAction::setRequest()
     */
    public function __construct(?RunActionRequest $request = null)
    {
        $this
            ->setRequest($request)
        ;
    }

    /**
     * Get request value
     *
     * @return RunActionRequest|null
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * Set request value
     *
     * @return self
     */
    public function setRequest(?RunActionRequest $request = null)
    {
        $this->request = $request;
        return $this;
    }
}
