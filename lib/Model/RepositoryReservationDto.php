<?php
/**
 * RepositoryReservationDto
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
 * RepositoryReservationDto Class Doc Comment
 *
 * @category Class
 * @package  Hapi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RepositoryReservationDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'RepositoryReservationDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'created_date' => 'string',
'cancelled_date' => 'string',
'cancellation_number' => 'string',
'cancellation_comment' => 'string',
'modified_date' => 'string',
'children' => 'string',
'adults' => 'string',
'room_stays' => '\Hapi\Model\RoomStayDto[]',
'is_tax_and_fees_inclusive' => 'bool',
'reservation_number' => 'string',
'booking_confirmation_id' => 'string',
'arrival_date' => '\DateTime',
'departure_date' => '\DateTime',
'hotel' => '\Hapi\Model\HotelDto',
'status' => 'string',
'comments' => 'string[]',
'reservation_originator_code' => 'string',
'guests' => '\Hapi\Model\GuestDto[]',
'services' => '\Hapi\Model\ServiceDto[]',
'repository_record_created' => '\DateTime',
'repository_record_updated' => '\DateTime'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'created_date' => null,
'cancelled_date' => null,
'cancellation_number' => null,
'cancellation_comment' => null,
'modified_date' => null,
'children' => null,
'adults' => null,
'room_stays' => null,
'is_tax_and_fees_inclusive' => null,
'reservation_number' => null,
'booking_confirmation_id' => null,
'arrival_date' => 'date',
'departure_date' => 'date',
'hotel' => null,
'status' => null,
'comments' => null,
'reservation_originator_code' => null,
'guests' => null,
'services' => null,
'repository_record_created' => 'date-time',
'repository_record_updated' => 'date-time'    ];

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
        'created_date' => 'createdDate',
'cancelled_date' => 'cancelledDate',
'cancellation_number' => 'cancellationNumber',
'cancellation_comment' => 'cancellationComment',
'modified_date' => 'modifiedDate',
'children' => 'children',
'adults' => 'adults',
'room_stays' => 'roomStays',
'is_tax_and_fees_inclusive' => 'isTaxAndFeesInclusive',
'reservation_number' => 'reservationNumber',
'booking_confirmation_id' => 'bookingConfirmationId',
'arrival_date' => 'arrivalDate',
'departure_date' => 'departureDate',
'hotel' => 'hotel',
'status' => 'status',
'comments' => 'comments',
'reservation_originator_code' => 'reservationOriginatorCode',
'guests' => 'guests',
'services' => 'services',
'repository_record_created' => 'repositoryRecordCreated',
'repository_record_updated' => 'repositoryRecordUpdated'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'created_date' => 'setCreatedDate',
'cancelled_date' => 'setCancelledDate',
'cancellation_number' => 'setCancellationNumber',
'cancellation_comment' => 'setCancellationComment',
'modified_date' => 'setModifiedDate',
'children' => 'setChildren',
'adults' => 'setAdults',
'room_stays' => 'setRoomStays',
'is_tax_and_fees_inclusive' => 'setIsTaxAndFeesInclusive',
'reservation_number' => 'setReservationNumber',
'booking_confirmation_id' => 'setBookingConfirmationId',
'arrival_date' => 'setArrivalDate',
'departure_date' => 'setDepartureDate',
'hotel' => 'setHotel',
'status' => 'setStatus',
'comments' => 'setComments',
'reservation_originator_code' => 'setReservationOriginatorCode',
'guests' => 'setGuests',
'services' => 'setServices',
'repository_record_created' => 'setRepositoryRecordCreated',
'repository_record_updated' => 'setRepositoryRecordUpdated'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'created_date' => 'getCreatedDate',
'cancelled_date' => 'getCancelledDate',
'cancellation_number' => 'getCancellationNumber',
'cancellation_comment' => 'getCancellationComment',
'modified_date' => 'getModifiedDate',
'children' => 'getChildren',
'adults' => 'getAdults',
'room_stays' => 'getRoomStays',
'is_tax_and_fees_inclusive' => 'getIsTaxAndFeesInclusive',
'reservation_number' => 'getReservationNumber',
'booking_confirmation_id' => 'getBookingConfirmationId',
'arrival_date' => 'getArrivalDate',
'departure_date' => 'getDepartureDate',
'hotel' => 'getHotel',
'status' => 'getStatus',
'comments' => 'getComments',
'reservation_originator_code' => 'getReservationOriginatorCode',
'guests' => 'getGuests',
'services' => 'getServices',
'repository_record_created' => 'getRepositoryRecordCreated',
'repository_record_updated' => 'getRepositoryRecordUpdated'    ];

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
        $this->container['created_date'] = isset($data['created_date']) ? $data['created_date'] : null;
        $this->container['cancelled_date'] = isset($data['cancelled_date']) ? $data['cancelled_date'] : null;
        $this->container['cancellation_number'] = isset($data['cancellation_number']) ? $data['cancellation_number'] : null;
        $this->container['cancellation_comment'] = isset($data['cancellation_comment']) ? $data['cancellation_comment'] : null;
        $this->container['modified_date'] = isset($data['modified_date']) ? $data['modified_date'] : null;
        $this->container['children'] = isset($data['children']) ? $data['children'] : null;
        $this->container['adults'] = isset($data['adults']) ? $data['adults'] : null;
        $this->container['room_stays'] = isset($data['room_stays']) ? $data['room_stays'] : null;
        $this->container['is_tax_and_fees_inclusive'] = isset($data['is_tax_and_fees_inclusive']) ? $data['is_tax_and_fees_inclusive'] : null;
        $this->container['reservation_number'] = isset($data['reservation_number']) ? $data['reservation_number'] : null;
        $this->container['booking_confirmation_id'] = isset($data['booking_confirmation_id']) ? $data['booking_confirmation_id'] : null;
        $this->container['arrival_date'] = isset($data['arrival_date']) ? $data['arrival_date'] : null;
        $this->container['departure_date'] = isset($data['departure_date']) ? $data['departure_date'] : null;
        $this->container['hotel'] = isset($data['hotel']) ? $data['hotel'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['comments'] = isset($data['comments']) ? $data['comments'] : null;
        $this->container['reservation_originator_code'] = isset($data['reservation_originator_code']) ? $data['reservation_originator_code'] : null;
        $this->container['guests'] = isset($data['guests']) ? $data['guests'] : null;
        $this->container['services'] = isset($data['services']) ? $data['services'] : null;
        $this->container['repository_record_created'] = isset($data['repository_record_created']) ? $data['repository_record_created'] : null;
        $this->container['repository_record_updated'] = isset($data['repository_record_updated']) ? $data['repository_record_updated'] : null;
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
     * Gets created_date
     *
     * @return string
     */
    public function getCreatedDate()
    {
        return $this->container['created_date'];
    }

    /**
     * Sets created_date
     *
     * @param string $created_date Reservation create date in hotel, in YYYY-MM-DDThh:mm:ss.sss format
     *
     * @return $this
     */
    public function setCreatedDate($created_date)
    {
        $this->container['created_date'] = $created_date;

        return $this;
    }

    /**
     * Gets cancelled_date
     *
     * @return string
     */
    public function getCancelledDate()
    {
        return $this->container['cancelled_date'];
    }

    /**
     * Sets cancelled_date
     *
     * @param string $cancelled_date Reservation cancellation date in hotel, in YYYY-MM-DDThh:mm:ss.sss format
     *
     * @return $this
     */
    public function setCancelledDate($cancelled_date)
    {
        $this->container['cancelled_date'] = $cancelled_date;

        return $this;
    }

    /**
     * Gets cancellation_number
     *
     * @return string
     */
    public function getCancellationNumber()
    {
        return $this->container['cancellation_number'];
    }

    /**
     * Sets cancellation_number
     *
     * @param string $cancellation_number Cancellation number for reservation. may be supplied externally or returned from pms
     *
     * @return $this
     */
    public function setCancellationNumber($cancellation_number)
    {
        $this->container['cancellation_number'] = $cancellation_number;

        return $this;
    }

    /**
     * Gets cancellation_comment
     *
     * @return string
     */
    public function getCancellationComment()
    {
        return $this->container['cancellation_comment'];
    }

    /**
     * Sets cancellation_comment
     *
     * @param string $cancellation_comment Cancellation comment why reservation was cancelled
     *
     * @return $this
     */
    public function setCancellationComment($cancellation_comment)
    {
        $this->container['cancellation_comment'] = $cancellation_comment;

        return $this;
    }

    /**
     * Gets modified_date
     *
     * @return string
     */
    public function getModifiedDate()
    {
        return $this->container['modified_date'];
    }

    /**
     * Sets modified_date
     *
     * @param string $modified_date Date at which the record was last modified in the PMS, in YYYY-MM-DDThh:mm:ss.sss format
     *
     * @return $this
     */
    public function setModifiedDate($modified_date)
    {
        $this->container['modified_date'] = $modified_date;

        return $this;
    }

    /**
     * Gets children
     *
     * @return string
     */
    public function getChildren()
    {
        return $this->container['children'];
    }

    /**
     * Sets children
     *
     * @param string $children children
     *
     * @return $this
     */
    public function setChildren($children)
    {
        $this->container['children'] = $children;

        return $this;
    }

    /**
     * Gets adults
     *
     * @return string
     */
    public function getAdults()
    {
        return $this->container['adults'];
    }

    /**
     * Sets adults
     *
     * @param string $adults adults
     *
     * @return $this
     */
    public function setAdults($adults)
    {
        $this->container['adults'] = $adults;

        return $this;
    }

    /**
     * Gets room_stays
     *
     * @return \Hapi\Model\RoomStayDto[]
     */
    public function getRoomStays()
    {
        return $this->container['room_stays'];
    }

    /**
     * Sets room_stays
     *
     * @param \Hapi\Model\RoomStayDto[] $room_stays room_stays
     *
     * @return $this
     */
    public function setRoomStays($room_stays)
    {
        $this->container['room_stays'] = $room_stays;

        return $this;
    }

    /**
     * Gets is_tax_and_fees_inclusive
     *
     * @return bool
     */
    public function getIsTaxAndFeesInclusive()
    {
        return $this->container['is_tax_and_fees_inclusive'];
    }

    /**
     * Sets is_tax_and_fees_inclusive
     *
     * @param bool $is_tax_and_fees_inclusive Indicates if taxes and fees are included in room rate amount
     *
     * @return $this
     */
    public function setIsTaxAndFeesInclusive($is_tax_and_fees_inclusive)
    {
        $this->container['is_tax_and_fees_inclusive'] = $is_tax_and_fees_inclusive;

        return $this;
    }

    /**
     * Gets reservation_number
     *
     * @return string
     */
    public function getReservationNumber()
    {
        return $this->container['reservation_number'];
    }

    /**
     * Sets reservation_number
     *
     * @param string $reservation_number Unique reservation id within given hotel
     *
     * @return $this
     */
    public function setReservationNumber($reservation_number)
    {
        $this->container['reservation_number'] = $reservation_number;

        return $this;
    }

    /**
     * Gets booking_confirmation_id
     *
     * @return string
     */
    public function getBookingConfirmationId()
    {
        return $this->container['booking_confirmation_id'];
    }

    /**
     * Sets booking_confirmation_id
     *
     * @param string $booking_confirmation_id Unique confirmationId within given hotel
     *
     * @return $this
     */
    public function setBookingConfirmationId($booking_confirmation_id)
    {
        $this->container['booking_confirmation_id'] = $booking_confirmation_id;

        return $this;
    }

    /**
     * Gets arrival_date
     *
     * @return \DateTime
     */
    public function getArrivalDate()
    {
        return $this->container['arrival_date'];
    }

    /**
     * Sets arrival_date
     *
     * @param \DateTime $arrival_date Check-in date, in YYYY-MM-DD format
     *
     * @return $this
     */
    public function setArrivalDate($arrival_date)
    {
        $this->container['arrival_date'] = $arrival_date;

        return $this;
    }

    /**
     * Gets departure_date
     *
     * @return \DateTime
     */
    public function getDepartureDate()
    {
        return $this->container['departure_date'];
    }

    /**
     * Sets departure_date
     *
     * @param \DateTime $departure_date Check-out date, in YYYY-MM-DD format
     *
     * @return $this
     */
    public function setDepartureDate($departure_date)
    {
        $this->container['departure_date'] = $departure_date;

        return $this;
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
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets comments
     *
     * @return string[]
     */
    public function getComments()
    {
        return $this->container['comments'];
    }

    /**
     * Sets comments
     *
     * @param string[] $comments comments
     *
     * @return $this
     */
    public function setComments($comments)
    {
        $this->container['comments'] = $comments;

        return $this;
    }

    /**
     * Gets reservation_originator_code
     *
     * @return string
     */
    public function getReservationOriginatorCode()
    {
        return $this->container['reservation_originator_code'];
    }

    /**
     * Sets reservation_originator_code
     *
     * @param string $reservation_originator_code User or system that created reservation
     *
     * @return $this
     */
    public function setReservationOriginatorCode($reservation_originator_code)
    {
        $this->container['reservation_originator_code'] = $reservation_originator_code;

        return $this;
    }

    /**
     * Gets guests
     *
     * @return \Hapi\Model\GuestDto[]
     */
    public function getGuests()
    {
        return $this->container['guests'];
    }

    /**
     * Sets guests
     *
     * @param \Hapi\Model\GuestDto[] $guests guests
     *
     * @return $this
     */
    public function setGuests($guests)
    {
        $this->container['guests'] = $guests;

        return $this;
    }

    /**
     * Gets services
     *
     * @return \Hapi\Model\ServiceDto[]
     */
    public function getServices()
    {
        return $this->container['services'];
    }

    /**
     * Sets services
     *
     * @param \Hapi\Model\ServiceDto[] $services Services that related to reservation
     *
     * @return $this
     */
    public function setServices($services)
    {
        $this->container['services'] = $services;

        return $this;
    }

    /**
     * Gets repository_record_created
     *
     * @return \DateTime
     */
    public function getRepositoryRecordCreated()
    {
        return $this->container['repository_record_created'];
    }

    /**
     * Sets repository_record_created
     *
     * @param \DateTime $repository_record_created Record create date in repository, in YYYY-MM-DDThh:mm:ss.sss format
     *
     * @return $this
     */
    public function setRepositoryRecordCreated($repository_record_created)
    {
        $this->container['repository_record_created'] = $repository_record_created;

        return $this;
    }

    /**
     * Gets repository_record_updated
     *
     * @return \DateTime
     */
    public function getRepositoryRecordUpdated()
    {
        return $this->container['repository_record_updated'];
    }

    /**
     * Sets repository_record_updated
     *
     * @param \DateTime $repository_record_updated Record update date in repository, in YYYY-MM-DDThh:mm:ss.sss format
     *
     * @return $this
     */
    public function setRepositoryRecordUpdated($repository_record_updated)
    {
        $this->container['repository_record_updated'] = $repository_record_updated;

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