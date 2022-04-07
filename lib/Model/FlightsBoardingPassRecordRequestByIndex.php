<?php
/**
 * FlightsBoardingPassRecordRequestByIndex
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * PassKit Flights API
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 0.1
 * Contact: support@passkit.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.33
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * FlightsBoardingPassRecordRequestByIndex Class Doc Comment
 *
 * @category Class
 * @description Used to access a single boarding pass or boarding pass record.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class FlightsBoardingPassRecordRequestByIndex implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'flightsBoardingPassRecordRequestByIndex';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'carrier_code' => 'string',
'flight_number' => 'string',
'departure_date' => '\Swagger\Client\Model\IoDate',
'boarding_point' => 'string',
'sequence_number' => 'int'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'carrier_code' => null,
'flight_number' => null,
'departure_date' => null,
'boarding_point' => null,
'sequence_number' => 'int32'    ];

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
        'carrier_code' => 'carrierCode',
'flight_number' => 'flightNumber',
'departure_date' => 'departureDate',
'boarding_point' => 'boardingPoint',
'sequence_number' => 'sequenceNumber'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'carrier_code' => 'setCarrierCode',
'flight_number' => 'setFlightNumber',
'departure_date' => 'setDepartureDate',
'boarding_point' => 'setBoardingPoint',
'sequence_number' => 'setSequenceNumber'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'carrier_code' => 'getCarrierCode',
'flight_number' => 'getFlightNumber',
'departure_date' => 'getDepartureDate',
'boarding_point' => 'getBoardingPoint',
'sequence_number' => 'getSequenceNumber'    ];

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
        $this->container['carrier_code'] = isset($data['carrier_code']) ? $data['carrier_code'] : null;
        $this->container['flight_number'] = isset($data['flight_number']) ? $data['flight_number'] : null;
        $this->container['departure_date'] = isset($data['departure_date']) ? $data['departure_date'] : null;
        $this->container['boarding_point'] = isset($data['boarding_point']) ? $data['boarding_point'] : null;
        $this->container['sequence_number'] = isset($data['sequence_number']) ? $data['sequence_number'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['carrier_code'] === null) {
            $invalidProperties[] = "'carrier_code' can't be null";
        }
        if ($this->container['flight_number'] === null) {
            $invalidProperties[] = "'flight_number' can't be null";
        }
        if ($this->container['departure_date'] === null) {
            $invalidProperties[] = "'departure_date' can't be null";
        }
        if ($this->container['boarding_point'] === null) {
            $invalidProperties[] = "'boarding_point' can't be null";
        }
        if ($this->container['sequence_number'] === null) {
            $invalidProperties[] = "'sequence_number' can't be null";
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
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets carrier_code
     *
     * @return string
     */
    public function getCarrierCode()
    {
        return $this->container['carrier_code'];
    }

    /**
     * Sets carrier_code
     *
     * @param string $carrier_code The two or three character airline code of the marketing carrier.
     *
     * @return $this
     */
    public function setCarrierCode($carrier_code)
    {
        $this->container['carrier_code'] = $carrier_code;

        return $this;
    }

    /**
     * Gets flight_number
     *
     * @return string
     */
    public function getFlightNumber()
    {
        return $this->container['flight_number'];
    }

    /**
     * Sets flight_number
     *
     * @param string $flight_number The flight number of the marketing character (excluding the carrier code).
     *
     * @return $this
     */
    public function setFlightNumber($flight_number)
    {
        $this->container['flight_number'] = $flight_number;

        return $this;
    }

    /**
     * Gets departure_date
     *
     * @return \Swagger\Client\Model\IoDate
     */
    public function getDepartureDate()
    {
        return $this->container['departure_date'];
    }

    /**
     * Sets departure_date
     *
     * @param \Swagger\Client\Model\IoDate $departure_date departure_date
     *
     * @return $this
     */
    public function setDepartureDate($departure_date)
    {
        $this->container['departure_date'] = $departure_date;

        return $this;
    }

    /**
     * Gets boarding_point
     *
     * @return string
     */
    public function getBoardingPoint()
    {
        return $this->container['boarding_point'];
    }

    /**
     * Sets boarding_point
     *
     * @param string $boarding_point 3 letter IATA code or 4 letter ICAO code of the passenger boarding point.
     *
     * @return $this
     */
    public function setBoardingPoint($boarding_point)
    {
        $this->container['boarding_point'] = $boarding_point;

        return $this;
    }

    /**
     * Gets sequence_number
     *
     * @return int
     */
    public function getSequenceNumber()
    {
        return $this->container['sequence_number'];
    }

    /**
     * Sets sequence_number
     *
     * @param int $sequence_number The check in sequence number.
     *
     * @return $this
     */
    public function setSequenceNumber($sequence_number)
    {
        $this->container['sequence_number'] = $sequence_number;

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
