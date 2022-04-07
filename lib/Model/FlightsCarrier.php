<?php
/**
 * FlightsCarrier
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
 * FlightsCarrier Class Doc Comment
 *
 * @category Class
 * @description A carrier record contains details of the carrier.  The carrier will be the issuer of the boarding pass and may be used as a marketing or operating carrier.  All marketing and operating carriers require a Carrier record.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class FlightsCarrier implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'flightsCarrier';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'iata_carrier_code' => 'string',
'icao_carrier_code' => 'string',
'iata_accounting_code' => 'int',
'airline_name' => 'string',
'localized_airline_name' => '\Swagger\Client\Model\IoLocalizedString',
'pass_type_identifier' => 'string',
'private_key_id' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'iata_carrier_code' => null,
'icao_carrier_code' => null,
'iata_accounting_code' => 'int32',
'airline_name' => null,
'localized_airline_name' => null,
'pass_type_identifier' => null,
'private_key_id' => null    ];

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
        'iata_carrier_code' => 'iataCarrierCode',
'icao_carrier_code' => 'icaoCarrierCode',
'iata_accounting_code' => 'iataAccountingCode',
'airline_name' => 'airlineName',
'localized_airline_name' => 'localizedAirlineName',
'pass_type_identifier' => 'passTypeIdentifier',
'private_key_id' => 'privateKeyId'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'iata_carrier_code' => 'setIataCarrierCode',
'icao_carrier_code' => 'setIcaoCarrierCode',
'iata_accounting_code' => 'setIataAccountingCode',
'airline_name' => 'setAirlineName',
'localized_airline_name' => 'setLocalizedAirlineName',
'pass_type_identifier' => 'setPassTypeIdentifier',
'private_key_id' => 'setPrivateKeyId'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'iata_carrier_code' => 'getIataCarrierCode',
'icao_carrier_code' => 'getIcaoCarrierCode',
'iata_accounting_code' => 'getIataAccountingCode',
'airline_name' => 'getAirlineName',
'localized_airline_name' => 'getLocalizedAirlineName',
'pass_type_identifier' => 'getPassTypeIdentifier',
'private_key_id' => 'getPrivateKeyId'    ];

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
        $this->container['iata_carrier_code'] = isset($data['iata_carrier_code']) ? $data['iata_carrier_code'] : null;
        $this->container['icao_carrier_code'] = isset($data['icao_carrier_code']) ? $data['icao_carrier_code'] : null;
        $this->container['iata_accounting_code'] = isset($data['iata_accounting_code']) ? $data['iata_accounting_code'] : null;
        $this->container['airline_name'] = isset($data['airline_name']) ? $data['airline_name'] : null;
        $this->container['localized_airline_name'] = isset($data['localized_airline_name']) ? $data['localized_airline_name'] : null;
        $this->container['pass_type_identifier'] = isset($data['pass_type_identifier']) ? $data['pass_type_identifier'] : null;
        $this->container['private_key_id'] = isset($data['private_key_id']) ? $data['private_key_id'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['iata_carrier_code'] === null) {
            $invalidProperties[] = "'iata_carrier_code' can't be null";
        }
        if ($this->container['airline_name'] === null) {
            $invalidProperties[] = "'airline_name' can't be null";
        }
        if ($this->container['pass_type_identifier'] === null) {
            $invalidProperties[] = "'pass_type_identifier' can't be null";
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
     * Gets iata_carrier_code
     *
     * @return string
     */
    public function getIataCarrierCode()
    {
        return $this->container['iata_carrier_code'];
    }

    /**
     * Sets iata_carrier_code
     *
     * @param string $iata_carrier_code The IATA carrier code. If the carrier has not been issued an IATA carrier code or an ICAO carrier code, use YY.
     *
     * @return $this
     */
    public function setIataCarrierCode($iata_carrier_code)
    {
        $this->container['iata_carrier_code'] = $iata_carrier_code;

        return $this;
    }

    /**
     * Gets icao_carrier_code
     *
     * @return string
     */
    public function getIcaoCarrierCode()
    {
        return $this->container['icao_carrier_code'];
    }

    /**
     * Sets icao_carrier_code
     *
     * @param string $icao_carrier_code The ICAO carrier code. Required if an iataCarrierCode is not provided.
     *
     * @return $this
     */
    public function setIcaoCarrierCode($icao_carrier_code)
    {
        $this->container['icao_carrier_code'] = $icao_carrier_code;

        return $this;
    }

    /**
     * Gets iata_accounting_code
     *
     * @return int
     */
    public function getIataAccountingCode()
    {
        return $this->container['iata_accounting_code'];
    }

    /**
     * Sets iata_accounting_code
     *
     * @param int $iata_accounting_code The IATA accounting code / AWB prefix.  If no code has been allocated, enter zero.
     *
     * @return $this
     */
    public function setIataAccountingCode($iata_accounting_code)
    {
        $this->container['iata_accounting_code'] = $iata_accounting_code;

        return $this;
    }

    /**
     * Gets airline_name
     *
     * @return string
     */
    public function getAirlineName()
    {
        return $this->container['airline_name'];
    }

    /**
     * Sets airline_name
     *
     * @param string $airline_name The name of the airline. This will be printed below the logo on the Google Pay pass.
     *
     * @return $this
     */
    public function setAirlineName($airline_name)
    {
        $this->container['airline_name'] = $airline_name;

        return $this;
    }

    /**
     * Gets localized_airline_name
     *
     * @return \Swagger\Client\Model\IoLocalizedString
     */
    public function getLocalizedAirlineName()
    {
        return $this->container['localized_airline_name'];
    }

    /**
     * Sets localized_airline_name
     *
     * @param \Swagger\Client\Model\IoLocalizedString $localized_airline_name localized_airline_name
     *
     * @return $this
     */
    public function setLocalizedAirlineName($localized_airline_name)
    {
        $this->container['localized_airline_name'] = $localized_airline_name;

        return $this;
    }

    /**
     * Gets pass_type_identifier
     *
     * @return string
     */
    public function getPassTypeIdentifier()
    {
        return $this->container['pass_type_identifier'];
    }

    /**
     * Sets pass_type_identifier
     *
     * @param string $pass_type_identifier If the carrier will issue Apple Wallet passes, supply the certificate id (E.g. pass.com.passkitair). The certificate must have previously been uploaded.
     *
     * @return $this
     */
    public function setPassTypeIdentifier($pass_type_identifier)
    {
        $this->container['pass_type_identifier'] = $pass_type_identifier;

        return $this;
    }

    /**
     * Gets private_key_id
     *
     * @return string
     */
    public function getPrivateKeyId()
    {
        return $this->container['private_key_id'];
    }

    /**
     * Sets private_key_id
     *
     * @param string $private_key_id If PassKit are generating the boarding pass barcode, and the barcode needs signing, the ID of the private key used to sign the barcode payload.
     *
     * @return $this
     */
    public function setPrivateKeyId($private_key_id)
    {
        $this->container['private_key_id'] = $private_key_id;

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