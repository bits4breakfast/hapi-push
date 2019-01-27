<?php
/**
 * BindingCodeRequest
 *
 * PHP version 5
 *
 * @category Class
 * @package  Hapi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
* HAPI data model
 *
* No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
* OpenAPI spec version: v1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.4
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Hapi\Model;

use \ArrayAccess;
use \Hapi\ObjectSerializer;

/**
 * BindingCodeRequest Class Doc Comment
 *
 * @category Class
 * @package  Hapi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BindingCodeRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'BindingCodeRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'oob_code' => 'string',
'binding_code' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'oob_code' => null,
'binding_code' => null    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'oob_code' => 'oobCode',
'binding_code' => 'bindingCode'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'oob_code' => 'setOobCode',
'binding_code' => 'setBindingCode'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'oob_code' => 'getOobCode',
'binding_code' => 'getBindingCode'    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['oob_code'] = isset($data['oob_code']) ? $data['oob_code'] : null;
        $this->container['binding_code'] = isset($data['binding_code']) ? $data['binding_code'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['oob_code'] === null) {
            $invalidProperties[] = "'oob_code' can't be null";
        }
        if ($this->container['binding_code'] === null) {
            $invalidProperties[] = "'binding_code' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        if ($this->container['oob_code'] === null) {
            return false;
        }
        if ($this->container['binding_code'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets oob_code
     *
     * @return string
     */
    public function getOobCode()
    {
        return $this->container['oob_code'];
    }

    /**
     * Sets oob_code
     *
     * @param string $oob_code Literal code in response from Single Sign On service as a first part of multifactor authentication flow
     *
     * @return $this
     */
    public function setOobCode($oob_code)
    {
        $this->container['oob_code'] = $oob_code;

        return $this;
    }

    /**
     * Gets binding_code
     *
     * @return string
     */
    public function getBindingCode()
    {
        return $this->container['binding_code'];
    }

    /**
     * Sets binding_code
     *
     * @param string $binding_code Digital code from SMS message from user mobile phone as a second part of multifactor authentication flow
     *
     * @return $this
     */
    public function setBindingCode($binding_code)
    {
        $this->container['binding_code'] = $binding_code;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
