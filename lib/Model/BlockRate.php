<?php
/**
 * BlockRate
 *
 * PHP version 5
 *
 * @category Class
 * @package  Hapi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
* HAPI Data Model
 *
* HAPI External Data Model
 *
* OpenAPI spec version: v2
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
 * BlockRate Class Doc Comment
 *
 * @category Class
 * @package  Hapi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BlockRate implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'BlockRate';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'guests' => 'int',
'occupancy_projected' => 'int',
'amount' => 'float',
'includes_tax' => 'bool'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'guests' => null,
'occupancy_projected' => null,
'amount' => null,
'includes_tax' => null    ];

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
        'guests' => 'guests',
'occupancy_projected' => 'occupancyProjected',
'amount' => 'amount',
'includes_tax' => 'includesTax'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'guests' => 'setGuests',
'occupancy_projected' => 'setOccupancyProjected',
'amount' => 'setAmount',
'includes_tax' => 'setIncludesTax'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'guests' => 'getGuests',
'occupancy_projected' => 'getOccupancyProjected',
'amount' => 'getAmount',
'includes_tax' => 'getIncludesTax'    ];

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
        $this->container['guests'] = isset($data['guests']) ? $data['guests'] : null;
        $this->container['occupancy_projected'] = isset($data['occupancy_projected']) ? $data['occupancy_projected'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['includes_tax'] = isset($data['includes_tax']) ? $data['includes_tax'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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

        return true;
    }


    /**
     * Gets guests
     *
     * @return int
     */
    public function getGuests()
    {
        return $this->container['guests'];
    }

    /**
     * Sets guests
     *
     * @param int $guests number of guests
     *
     * @return $this
     */
    public function setGuests($guests)
    {
        $this->container['guests'] = $guests;

        return $this;
    }

    /**
     * Gets occupancy_projected
     *
     * @return int
     */
    public function getOccupancyProjected()
    {
        return $this->container['occupancy_projected'];
    }

    /**
     * Sets occupancy_projected
     *
     * @param int $occupancy_projected projected occupancy for number of guests indicated
     *
     * @return $this
     */
    public function setOccupancyProjected($occupancy_projected)
    {
        $this->container['occupancy_projected'] = $occupancy_projected;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return float
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param float $amount rate amount
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets includes_tax
     *
     * @return bool
     */
    public function getIncludesTax()
    {
        return $this->container['includes_tax'];
    }

    /**
     * Sets includes_tax
     *
     * @param bool $includes_tax is indicated rate inclusive of tax
     *
     * @return $this
     */
    public function setIncludesTax($includes_tax)
    {
        $this->container['includes_tax'] = $includes_tax;

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
