<?php

namespace GoetasWebservices\SoapServices\SoapClient\WssWsSecurity\Utility;

/**
 * Class representing AttributedDateTimeType
 *
 * This type is for elements whose [children] is a psuedo-dateTime and can have
 * arbitrary attributes.
 * XSD Type: AttributedDateTime
 */
class AttributedDateTimeType
{

    /**
     * @property string $__value
     */
    private $__value = null;

    /**
     * @property string $id
     */
    private $id = null;

    /**
     * Construct
     *
     * @param string $value
     */
    public function __construct($value)
    {
        $this->value($value);
    }

    /**
     * Gets or sets the inner value
     *
     * @param string $value
     * @return string
     */
    public function value()
    {
        if ($args = func_get_args()) {
            $this->__value = $args[0];
        }
        return $this->__value;
    }

    /**
     * Gets a string value
     *
     * @return string
     */
    public function __toString()
    {
        return strval($this->__value);
    }

    /**
     * Gets as id
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets a new id
     *
     * @param string $id
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }


}
