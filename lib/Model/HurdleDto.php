<?php
/**
 * HurdleDto
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
 * HurdleDto Class Doc Comment
 *
 * @category Class
 * @package  Hapi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class HurdleDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'HurdleDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'hotel' => '\Hapi\Model\HotelDto',
'dates' => '\Hapi\Model\TimeSpanDto',
'yield_category' => 'string',
'hurdle_amount' => 'BigDecimal',
'delta_amount' => 'BigDecimal',
'currency_code' => 'string',
'ceiling' => 'int',
'sell_limit' => 'int',
'rooms_sold' => 'int',
'length_of_stay' => 'int'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'hotel' => null,
'dates' => null,
'yield_category' => null,
'hurdle_amount' => null,
'delta_amount' => null,
'currency_code' => null,
'ceiling' => null,
'sell_limit' => null,
'rooms_sold' => null,
'length_of_stay' => null    ];

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
        'hotel' => 'hotel',
'dates' => 'dates',
'yield_category' => 'yieldCategory',
'hurdle_amount' => 'hurdleAmount',
'delta_amount' => 'deltaAmount',
'currency_code' => 'currencyCode',
'ceiling' => 'ceiling',
'sell_limit' => 'sellLimit',
'rooms_sold' => 'roomsSold',
'length_of_stay' => 'lengthOfStay'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'hotel' => 'setHotel',
'dates' => 'setDates',
'yield_category' => 'setYieldCategory',
'hurdle_amount' => 'setHurdleAmount',
'delta_amount' => 'setDeltaAmount',
'currency_code' => 'setCurrencyCode',
'ceiling' => 'setCeiling',
'sell_limit' => 'setSellLimit',
'rooms_sold' => 'setRoomsSold',
'length_of_stay' => 'setLengthOfStay'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'hotel' => 'getHotel',
'dates' => 'getDates',
'yield_category' => 'getYieldCategory',
'hurdle_amount' => 'getHurdleAmount',
'delta_amount' => 'getDeltaAmount',
'currency_code' => 'getCurrencyCode',
'ceiling' => 'getCeiling',
'sell_limit' => 'getSellLimit',
'rooms_sold' => 'getRoomsSold',
'length_of_stay' => 'getLengthOfStay'    ];

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
        $this->container['hotel'] = isset($data['hotel']) ? $data['hotel'] : null;
        $this->container['dates'] = isset($data['dates']) ? $data['dates'] : null;
        $this->container['yield_category'] = isset($data['yield_category']) ? $data['yield_category'] : null;
        $this->container['hurdle_amount'] = isset($data['hurdle_amount']) ? $data['hurdle_amount'] : null;
        $this->container['delta_amount'] = isset($data['delta_amount']) ? $data['delta_amount'] : null;
        $this->container['currency_code'] = isset($data['currency_code']) ? $data['currency_code'] : null;
        $this->container['ceiling'] = isset($data['ceiling']) ? $data['ceiling'] : null;
        $this->container['sell_limit'] = isset($data['sell_limit']) ? $data['sell_limit'] : null;
        $this->container['rooms_sold'] = isset($data['rooms_sold']) ? $data['rooms_sold'] : null;
        $this->container['length_of_stay'] = isset($data['length_of_stay']) ? $data['length_of_stay'] : null;
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
     * Gets hotel
     *
     * @return \Hapi\Model\HotelDto
     */
    public function getHotel()
    {
        return $this->container['hotel'];
    }

    /**
     * Sets hotel
     *
     * @param \Hapi\Model\HotelDto $hotel hotel
     *
     * @return $this
     */
    public function setHotel($hotel)
    {
        $this->container['hotel'] = $hotel;

        return $this;
    }

    /**
     * Gets dates
     *
     * @return \Hapi\Model\TimeSpanDto
     */
    public function getDates()
    {
        return $this->container['dates'];
    }

    /**
     * Sets dates
     *
     * @param \Hapi\Model\TimeSpanDto $dates dates
     *
     * @return $this
     */
    public function setDates($dates)
    {
        $this->container['dates'] = $dates;

        return $this;
    }

    /**
     * Gets yield_category
     *
     * @return string
     */
    public function getYieldCategory()
    {
        return $this->container['yield_category'];
    }

    /**
     * Sets yield_category
     *
     * @param string $yield_category represents the yield management category
     *
     * @return $this
     */
    public function setYieldCategory($yield_category)
    {
        $this->container['yield_category'] = $yield_category;

        return $this;
    }

    /**
     * Gets hurdle_amount
     *
     * @return BigDecimal
     */
    public function getHurdleAmount()
    {
        return $this->container['hurdle_amount'];
    }

    /**
     * Sets hurdle_amount
     *
     * @param BigDecimal $hurdle_amount Base rate amount for hurdle
     *
     * @return $this
     */
    public function setHurdleAmount($hurdle_amount)
    {
        $this->container['hurdle_amount'] = $hurdle_amount;

        return $this;
    }

    /**
     * Gets delta_amount
     *
     * @return BigDecimal
     */
    public function getDeltaAmount()
    {
        return $this->container['delta_amount'];
    }

    /**
     * Sets delta_amount
     *
     * @param BigDecimal $delta_amount monetary value added to the hurdle rate for each additional room sold up to the ceiling
     *
     * @return $this
     */
    public function setDeltaAmount($delta_amount)
    {
        $this->container['delta_amount'] = $delta_amount;

        return $this;
    }

    /**
     * Gets currency_code
     *
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->container['currency_code'];
    }

    /**
     * Sets currency_code
     *
     * @param string $currency_code currency code indicating in which currency the rate amounts are displayed
     *
     * @return $this
     */
    public function setCurrencyCode($currency_code)
    {
        $this->container['currency_code'] = $currency_code;

        return $this;
    }

    /**
     * Gets ceiling
     *
     * @return int
     */
    public function getCeiling()
    {
        return $this->container['ceiling'];
    }

    /**
     * Sets ceiling
     *
     * @param int $ceiling number of rooms to be sold to which the delta value should be added
     *
     * @return $this
     */
    public function setCeiling($ceiling)
    {
        $this->container['ceiling'] = $ceiling;

        return $this;
    }

    /**
     * Gets sell_limit
     *
     * @return int
     */
    public function getSellLimit()
    {
        return $this->container['sell_limit'];
    }

    /**
     * Sets sell_limit
     *
     * @param int $sell_limit maximum number of rooms to be sold in the room types linked to the yield category
     *
     * @return $this
     */
    public function setSellLimit($sell_limit)
    {
        $this->container['sell_limit'] = $sell_limit;

        return $this;
    }

    /**
     * Gets rooms_sold
     *
     * @return int
     */
    public function getRoomsSold()
    {
        return $this->container['rooms_sold'];
    }

    /**
     * Sets rooms_sold
     *
     * @param int $rooms_sold number of rooms sold in the room types linked to the YIELD CATEGORY since the last update
     *
     * @return $this
     */
    public function setRoomsSold($rooms_sold)
    {
        $this->container['rooms_sold'] = $rooms_sold;

        return $this;
    }

    /**
     * Gets length_of_stay
     *
     * @return int
     */
    public function getLengthOfStay()
    {
        return $this->container['length_of_stay'];
    }

    /**
     * Sets length_of_stay
     *
     * @param int $length_of_stay length of stay for this hurdle rate
     *
     * @return $this
     */
    public function setLengthOfStay($length_of_stay)
    {
        $this->container['length_of_stay'] = $length_of_stay;

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
