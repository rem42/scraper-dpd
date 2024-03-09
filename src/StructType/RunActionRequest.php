<?php

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RunActionRequest StructType
 */
class RunActionRequest extends AbstractStructBase
{
    /**
     * The Action
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $Action;

    /**
     * Constructor method for RunActionRequest
     *
     * @uses RunActionRequest::setAction()
     *
     * @param string $action
     */
    public function __construct($action = null)
    {
        $this
            ->setAction($action)
        ;
    }

    /**
     * Get Action value
     *
     * @return string|null
     */
    public function getAction()
    {
        return $this->Action;
    }

    /**
     * Set Action value
     *
     * @param string $action
     *
     * @return self
     */
    public function setAction($action = null)
    {
        // validation for constraint: string
        if (null !== $action && !\is_string($action)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($action, true), \gettype($action)), __LINE__);
        }
        $this->Action = $action;
        return $this;
    }
}
