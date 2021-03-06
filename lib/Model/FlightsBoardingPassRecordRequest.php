<?php
/**
 * FlightsBoardingPassRecordRequest
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
 * FlightsBoardingPassRecordRequest Class Doc Comment
 *
 * @category Class
 * @description Used to request a digital boarding pass record by ticket number, index or pass id.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class FlightsBoardingPassRecordRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'flightsBoardingPassRecordRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'ticket_number' => '\Swagger\Client\Model\FlightsBoardingPassRecordRequestByTicketNumber',
'index' => '\Swagger\Client\Model\FlightsBoardingPassRecordRequestByIndex',
'pass_id' => '\Swagger\Client\Model\IoId'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'ticket_number' => null,
'index' => null,
'pass_id' => null    ];

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
        'ticket_number' => 'ticketNumber',
'index' => 'index',
'pass_id' => 'passId'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'ticket_number' => 'setTicketNumber',
'index' => 'setIndex',
'pass_id' => 'setPassId'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'ticket_number' => 'getTicketNumber',
'index' => 'getIndex',
'pass_id' => 'getPassId'    ];

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
        $this->container['ticket_number'] = isset($data['ticket_number']) ? $data['ticket_number'] : null;
        $this->container['index'] = isset($data['index']) ? $data['index'] : null;
        $this->container['pass_id'] = isset($data['pass_id']) ? $data['pass_id'] : null;
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
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets ticket_number
     *
     * @return \Swagger\Client\Model\FlightsBoardingPassRecordRequestByTicketNumber
     */
    public function getTicketNumber()
    {
        return $this->container['ticket_number'];
    }

    /**
     * Sets ticket_number
     *
     * @param \Swagger\Client\Model\FlightsBoardingPassRecordRequestByTicketNumber $ticket_number ticket_number
     *
     * @return $this
     */
    public function setTicketNumber($ticket_number)
    {
        $this->container['ticket_number'] = $ticket_number;

        return $this;
    }

    /**
     * Gets index
     *
     * @return \Swagger\Client\Model\FlightsBoardingPassRecordRequestByIndex
     */
    public function getIndex()
    {
        return $this->container['index'];
    }

    /**
     * Sets index
     *
     * @param \Swagger\Client\Model\FlightsBoardingPassRecordRequestByIndex $index index
     *
     * @return $this
     */
    public function setIndex($index)
    {
        $this->container['index'] = $index;

        return $this;
    }

    /**
     * Gets pass_id
     *
     * @return \Swagger\Client\Model\IoId
     */
    public function getPassId()
    {
        return $this->container['pass_id'];
    }

    /**
     * Sets pass_id
     *
     * @param \Swagger\Client\Model\IoId $pass_id pass_id
     *
     * @return $this
     */
    public function setPassId($pass_id)
    {
        $this->container['pass_id'] = $pass_id;

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
