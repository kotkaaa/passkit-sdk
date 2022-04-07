<?php
/**
 * FlightsConditionalItems
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
 * FlightsConditionalItems Class Doc Comment
 *
 * @category Class
 * @description Conditional items for the flight segment as described in IATA PSC Resolution 792.  Note: items supplied or derived through other objects (E.g. Frequent Flyer information) are not supplied here.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class FlightsConditionalItems implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'flightsConditionalItems';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'passenger_description' => '\Swagger\Client\Model\FlightsPassengerDescription',
'check_in_source' => '\Swagger\Client\Model\FlightsSource',
'boarding_pass_issuance_source' => '\Swagger\Client\Model\FlightsSource',
'boarding_pass_issue_date' => '\Swagger\Client\Model\IoDate',
'document_type' => '\Swagger\Client\Model\FlightsDocType',
'boarding_pass_issuer' => 'string',
'baggage_tag_number' => 'string[]',
'selectee_indicator' => '\Swagger\Client\Model\FlightsSelecteeIndicator',
'international_doc_verification' => '\Swagger\Client\Model\FlightsInternationalDocVerification',
'idad_indicator' => '\Swagger\Client\Model\FlightsIDADIndicator',
'fast_track' => '\Swagger\Client\Model\FlightsFastTrack'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'passenger_description' => null,
'check_in_source' => null,
'boarding_pass_issuance_source' => null,
'boarding_pass_issue_date' => null,
'document_type' => null,
'boarding_pass_issuer' => null,
'baggage_tag_number' => null,
'selectee_indicator' => null,
'international_doc_verification' => null,
'idad_indicator' => null,
'fast_track' => null    ];

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
        'passenger_description' => 'passengerDescription',
'check_in_source' => 'checkInSource',
'boarding_pass_issuance_source' => 'boardingPassIssuanceSource',
'boarding_pass_issue_date' => 'boardingPassIssueDate',
'document_type' => 'documentType',
'boarding_pass_issuer' => 'boardingPassIssuer',
'baggage_tag_number' => 'baggageTagNumber',
'selectee_indicator' => 'selecteeIndicator',
'international_doc_verification' => 'internationalDocVerification',
'idad_indicator' => 'idadIndicator',
'fast_track' => 'fastTrack'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'passenger_description' => 'setPassengerDescription',
'check_in_source' => 'setCheckInSource',
'boarding_pass_issuance_source' => 'setBoardingPassIssuanceSource',
'boarding_pass_issue_date' => 'setBoardingPassIssueDate',
'document_type' => 'setDocumentType',
'boarding_pass_issuer' => 'setBoardingPassIssuer',
'baggage_tag_number' => 'setBaggageTagNumber',
'selectee_indicator' => 'setSelecteeIndicator',
'international_doc_verification' => 'setInternationalDocVerification',
'idad_indicator' => 'setIdadIndicator',
'fast_track' => 'setFastTrack'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'passenger_description' => 'getPassengerDescription',
'check_in_source' => 'getCheckInSource',
'boarding_pass_issuance_source' => 'getBoardingPassIssuanceSource',
'boarding_pass_issue_date' => 'getBoardingPassIssueDate',
'document_type' => 'getDocumentType',
'boarding_pass_issuer' => 'getBoardingPassIssuer',
'baggage_tag_number' => 'getBaggageTagNumber',
'selectee_indicator' => 'getSelecteeIndicator',
'international_doc_verification' => 'getInternationalDocVerification',
'idad_indicator' => 'getIdadIndicator',
'fast_track' => 'getFastTrack'    ];

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
        $this->container['passenger_description'] = isset($data['passenger_description']) ? $data['passenger_description'] : null;
        $this->container['check_in_source'] = isset($data['check_in_source']) ? $data['check_in_source'] : null;
        $this->container['boarding_pass_issuance_source'] = isset($data['boarding_pass_issuance_source']) ? $data['boarding_pass_issuance_source'] : null;
        $this->container['boarding_pass_issue_date'] = isset($data['boarding_pass_issue_date']) ? $data['boarding_pass_issue_date'] : null;
        $this->container['document_type'] = isset($data['document_type']) ? $data['document_type'] : null;
        $this->container['boarding_pass_issuer'] = isset($data['boarding_pass_issuer']) ? $data['boarding_pass_issuer'] : null;
        $this->container['baggage_tag_number'] = isset($data['baggage_tag_number']) ? $data['baggage_tag_number'] : null;
        $this->container['selectee_indicator'] = isset($data['selectee_indicator']) ? $data['selectee_indicator'] : null;
        $this->container['international_doc_verification'] = isset($data['international_doc_verification']) ? $data['international_doc_verification'] : null;
        $this->container['idad_indicator'] = isset($data['idad_indicator']) ? $data['idad_indicator'] : null;
        $this->container['fast_track'] = isset($data['fast_track']) ? $data['fast_track'] : null;
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
     * Gets passenger_description
     *
     * @return \Swagger\Client\Model\FlightsPassengerDescription
     */
    public function getPassengerDescription()
    {
        return $this->container['passenger_description'];
    }

    /**
     * Sets passenger_description
     *
     * @param \Swagger\Client\Model\FlightsPassengerDescription $passenger_description passenger_description
     *
     * @return $this
     */
    public function setPassengerDescription($passenger_description)
    {
        $this->container['passenger_description'] = $passenger_description;

        return $this;
    }

    /**
     * Gets check_in_source
     *
     * @return \Swagger\Client\Model\FlightsSource
     */
    public function getCheckInSource()
    {
        return $this->container['check_in_source'];
    }

    /**
     * Sets check_in_source
     *
     * @param \Swagger\Client\Model\FlightsSource $check_in_source check_in_source
     *
     * @return $this
     */
    public function setCheckInSource($check_in_source)
    {
        $this->container['check_in_source'] = $check_in_source;

        return $this;
    }

    /**
     * Gets boarding_pass_issuance_source
     *
     * @return \Swagger\Client\Model\FlightsSource
     */
    public function getBoardingPassIssuanceSource()
    {
        return $this->container['boarding_pass_issuance_source'];
    }

    /**
     * Sets boarding_pass_issuance_source
     *
     * @param \Swagger\Client\Model\FlightsSource $boarding_pass_issuance_source boarding_pass_issuance_source
     *
     * @return $this
     */
    public function setBoardingPassIssuanceSource($boarding_pass_issuance_source)
    {
        $this->container['boarding_pass_issuance_source'] = $boarding_pass_issuance_source;

        return $this;
    }

    /**
     * Gets boarding_pass_issue_date
     *
     * @return \Swagger\Client\Model\IoDate
     */
    public function getBoardingPassIssueDate()
    {
        return $this->container['boarding_pass_issue_date'];
    }

    /**
     * Sets boarding_pass_issue_date
     *
     * @param \Swagger\Client\Model\IoDate $boarding_pass_issue_date boarding_pass_issue_date
     *
     * @return $this
     */
    public function setBoardingPassIssueDate($boarding_pass_issue_date)
    {
        $this->container['boarding_pass_issue_date'] = $boarding_pass_issue_date;

        return $this;
    }

    /**
     * Gets document_type
     *
     * @return \Swagger\Client\Model\FlightsDocType
     */
    public function getDocumentType()
    {
        return $this->container['document_type'];
    }

    /**
     * Sets document_type
     *
     * @param \Swagger\Client\Model\FlightsDocType $document_type document_type
     *
     * @return $this
     */
    public function setDocumentType($document_type)
    {
        $this->container['document_type'] = $document_type;

        return $this;
    }

    /**
     * Gets boarding_pass_issuer
     *
     * @return string
     */
    public function getBoardingPassIssuer()
    {
        return $this->container['boarding_pass_issuer'];
    }

    /**
     * Sets boarding_pass_issuer
     *
     * @param string $boarding_pass_issuer IATA or ICAO designator of boarding pass issuer.
     *
     * @return $this
     */
    public function setBoardingPassIssuer($boarding_pass_issuer)
    {
        $this->container['boarding_pass_issuer'] = $boarding_pass_issuer;

        return $this;
    }

    /**
     * Gets baggage_tag_number
     *
     * @return string[]
     */
    public function getBaggageTagNumber()
    {
        return $this->container['baggage_tag_number'];
    }

    /**
     * Sets baggage_tag_number
     *
     * @param string[] $baggage_tag_number This field allows carriers to populate baggage tag numbers and the number of consecutive bags. It contains 13 characters corresponding to the 10 digit bag tag number, as per IATA BCM specifications, Resolution 740 and 3 digits identifying the number of consecutive tags. 1: leading digit – 0 for interline tag, 1 for fall-back tag, 2 for interline rush tag. 2-4: carrier numeric code. 5-10: carrier initial tag number (leading zeros). 11-13: number of consecutive tags (allows for up to 999 tags). Up to 2 additional, non-consecutive tags can be added.
     *
     * @return $this
     */
    public function setBaggageTagNumber($baggage_tag_number)
    {
        $this->container['baggage_tag_number'] = $baggage_tag_number;

        return $this;
    }

    /**
     * Gets selectee_indicator
     *
     * @return \Swagger\Client\Model\FlightsSelecteeIndicator
     */
    public function getSelecteeIndicator()
    {
        return $this->container['selectee_indicator'];
    }

    /**
     * Sets selectee_indicator
     *
     * @param \Swagger\Client\Model\FlightsSelecteeIndicator $selectee_indicator selectee_indicator
     *
     * @return $this
     */
    public function setSelecteeIndicator($selectee_indicator)
    {
        $this->container['selectee_indicator'] = $selectee_indicator;

        return $this;
    }

    /**
     * Gets international_doc_verification
     *
     * @return \Swagger\Client\Model\FlightsInternationalDocVerification
     */
    public function getInternationalDocVerification()
    {
        return $this->container['international_doc_verification'];
    }

    /**
     * Sets international_doc_verification
     *
     * @param \Swagger\Client\Model\FlightsInternationalDocVerification $international_doc_verification international_doc_verification
     *
     * @return $this
     */
    public function setInternationalDocVerification($international_doc_verification)
    {
        $this->container['international_doc_verification'] = $international_doc_verification;

        return $this;
    }

    /**
     * Gets idad_indicator
     *
     * @return \Swagger\Client\Model\FlightsIDADIndicator
     */
    public function getIdadIndicator()
    {
        return $this->container['idad_indicator'];
    }

    /**
     * Sets idad_indicator
     *
     * @param \Swagger\Client\Model\FlightsIDADIndicator $idad_indicator idad_indicator
     *
     * @return $this
     */
    public function setIdadIndicator($idad_indicator)
    {
        $this->container['idad_indicator'] = $idad_indicator;

        return $this;
    }

    /**
     * Gets fast_track
     *
     * @return \Swagger\Client\Model\FlightsFastTrack
     */
    public function getFastTrack()
    {
        return $this->container['fast_track'];
    }

    /**
     * Sets fast_track
     *
     * @param \Swagger\Client\Model\FlightsFastTrack $fast_track fast_track
     *
     * @return $this
     */
    public function setFastTrack($fast_track)
    {
        $this->container['fast_track'] = $fast_track;

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