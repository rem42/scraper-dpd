<?php

namespace Scraper\ScraperDPD\StructType;

/**
 * This class stands for Marketing StructType
 */
class Marketing extends NonService
{
    /**
     * The name
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $name;

    /**
     * Constructor method for Marketing
     *
     * @uses Marketing::setName()
     *
     * @param string $name
     */
    public function __construct($name = null)
    {
        $this
            ->setName($name)
        ;
    }

    /**
     * Get name value
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set name value
     *
     * @param string $name
     *
     * @return self
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (null !== $name && !\is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), \gettype($name)), __LINE__);
        }
        $this->name = $name;
        return $this;
    }
}
