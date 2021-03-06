<?php
/**
 * FlightsFlight
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
 * FlightsFlight Class Doc Comment
 *
 * @category Class
 * @description A flight record describes data that is relevant to a single flight on a given date.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class FlightsFlight implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'flightsFlight';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'carrier_code' => 'string',
'flight_number' => 'string',
'boarding_point' => 'string',
'deplaning_point' => 'string',
'departure_date' => '\Swagger\Client\Model\IoDate',
'departure_terminal' => 'string',
'arrival_terminal' => 'string',
'departure_gate' => 'string',
'arrival_gate' => 'string',
'scheduled_departure_time' => '\Swagger\Client\Model\IoLocalDateTime',
'estimated_departure_time' => '\Swagger\Client\Model\IoLocalDateTime',
'boarding_time' => '\Swagger\Client\Model\IoLocalDateTime',
'gate_closing_time' => '\Swagger\Client\Model\IoLocalDateTime',
'scheduled_arrival_time' => '\Swagger\Client\Model\IoLocalDateTime',
'estimated_arrival_time' => '\Swagger\Client\Model\IoLocalDateTime',
'operating_carrier_code' => 'string',
'operating_flight_number' => 'string',
'code_share_flight_numbers' => 'string[]',
'pass_template_id' => 'string',
'baggage_belt' => 'string',
'auto_invalidate_after' => 'int',
'auto_invalidate_cancelled_passes' => 'bool',
'location_messages' => '\Swagger\Client\Model\IoGPSLocation[]',
'beacon_messages' => '\Swagger\Client\Model\IoBeacon[]',
'links' => '\Swagger\Client\Model\IoLink[]',
'suspend_automatic_updates' => 'bool',
'boarding_policy' => '\Swagger\Client\Model\FlightsBoardingPolicy',
'seating_policy' => '\Swagger\Client\Model\FlightsSeatClassPolicy',
'status' => '\Swagger\Client\Model\FlightsFlightStatus',
'conditional_items' => 'bool',
'barcode_additional_data' => 'string',
'metrics' => '\Swagger\Client\Model\IoMetrics',
'create_method' => '\Swagger\Client\Model\FlightsFlightCreateMode',
'designator_id' => 'string',
'invalidate_cancelled_passes' => '\Swagger\Client\Model\IoToggle'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'carrier_code' => null,
'flight_number' => null,
'boarding_point' => null,
'deplaning_point' => null,
'departure_date' => null,
'departure_terminal' => null,
'arrival_terminal' => null,
'departure_gate' => null,
'arrival_gate' => null,
'scheduled_departure_time' => null,
'estimated_departure_time' => null,
'boarding_time' => null,
'gate_closing_time' => null,
'scheduled_arrival_time' => null,
'estimated_arrival_time' => null,
'operating_carrier_code' => null,
'operating_flight_number' => null,
'code_share_flight_numbers' => null,
'pass_template_id' => null,
'baggage_belt' => null,
'auto_invalidate_after' => 'int64',
'auto_invalidate_cancelled_passes' => null,
'location_messages' => null,
'beacon_messages' => null,
'links' => null,
'suspend_automatic_updates' => null,
'boarding_policy' => null,
'seating_policy' => null,
'status' => null,
'conditional_items' => null,
'barcode_additional_data' => null,
'metrics' => null,
'create_method' => null,
'designator_id' => null,
'invalidate_cancelled_passes' => null    ];

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
'boarding_point' => 'boardingPoint',
'deplaning_point' => 'deplaningPoint',
'departure_date' => 'departureDate',
'departure_terminal' => 'departureTerminal',
'arrival_terminal' => 'arrivalTerminal',
'departure_gate' => 'departureGate',
'arrival_gate' => 'arrivalGate',
'scheduled_departure_time' => 'scheduledDepartureTime',
'estimated_departure_time' => 'estimatedDepartureTime',
'boarding_time' => 'boardingTime',
'gate_closing_time' => 'gateClosingTime',
'scheduled_arrival_time' => 'scheduledArrivalTime',
'estimated_arrival_time' => 'estimatedArrivalTime',
'operating_carrier_code' => 'operatingCarrierCode',
'operating_flight_number' => 'operatingFlightNumber',
'code_share_flight_numbers' => 'codeShareFlightNumbers',
'pass_template_id' => 'passTemplateId',
'baggage_belt' => 'baggageBelt',
'auto_invalidate_after' => 'autoInvalidateAfter',
'auto_invalidate_cancelled_passes' => 'autoInvalidateCancelledPasses',
'location_messages' => 'locationMessages',
'beacon_messages' => 'beaconMessages',
'links' => 'links',
'suspend_automatic_updates' => 'suspendAutomaticUpdates',
'boarding_policy' => 'boardingPolicy',
'seating_policy' => 'seatingPolicy',
'status' => 'status',
'conditional_items' => 'ConditionalItems',
'barcode_additional_data' => 'BarcodeAdditionalData',
'metrics' => 'metrics',
'create_method' => 'createMethod',
'designator_id' => 'designatorId',
'invalidate_cancelled_passes' => 'invalidateCancelledPasses'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'carrier_code' => 'setCarrierCode',
'flight_number' => 'setFlightNumber',
'boarding_point' => 'setBoardingPoint',
'deplaning_point' => 'setDeplaningPoint',
'departure_date' => 'setDepartureDate',
'departure_terminal' => 'setDepartureTerminal',
'arrival_terminal' => 'setArrivalTerminal',
'departure_gate' => 'setDepartureGate',
'arrival_gate' => 'setArrivalGate',
'scheduled_departure_time' => 'setScheduledDepartureTime',
'estimated_departure_time' => 'setEstimatedDepartureTime',
'boarding_time' => 'setBoardingTime',
'gate_closing_time' => 'setGateClosingTime',
'scheduled_arrival_time' => 'setScheduledArrivalTime',
'estimated_arrival_time' => 'setEstimatedArrivalTime',
'operating_carrier_code' => 'setOperatingCarrierCode',
'operating_flight_number' => 'setOperatingFlightNumber',
'code_share_flight_numbers' => 'setCodeShareFlightNumbers',
'pass_template_id' => 'setPassTemplateId',
'baggage_belt' => 'setBaggageBelt',
'auto_invalidate_after' => 'setAutoInvalidateAfter',
'auto_invalidate_cancelled_passes' => 'setAutoInvalidateCancelledPasses',
'location_messages' => 'setLocationMessages',
'beacon_messages' => 'setBeaconMessages',
'links' => 'setLinks',
'suspend_automatic_updates' => 'setSuspendAutomaticUpdates',
'boarding_policy' => 'setBoardingPolicy',
'seating_policy' => 'setSeatingPolicy',
'status' => 'setStatus',
'conditional_items' => 'setConditionalItems',
'barcode_additional_data' => 'setBarcodeAdditionalData',
'metrics' => 'setMetrics',
'create_method' => 'setCreateMethod',
'designator_id' => 'setDesignatorId',
'invalidate_cancelled_passes' => 'setInvalidateCancelledPasses'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'carrier_code' => 'getCarrierCode',
'flight_number' => 'getFlightNumber',
'boarding_point' => 'getBoardingPoint',
'deplaning_point' => 'getDeplaningPoint',
'departure_date' => 'getDepartureDate',
'departure_terminal' => 'getDepartureTerminal',
'arrival_terminal' => 'getArrivalTerminal',
'departure_gate' => 'getDepartureGate',
'arrival_gate' => 'getArrivalGate',
'scheduled_departure_time' => 'getScheduledDepartureTime',
'estimated_departure_time' => 'getEstimatedDepartureTime',
'boarding_time' => 'getBoardingTime',
'gate_closing_time' => 'getGateClosingTime',
'scheduled_arrival_time' => 'getScheduledArrivalTime',
'estimated_arrival_time' => 'getEstimatedArrivalTime',
'operating_carrier_code' => 'getOperatingCarrierCode',
'operating_flight_number' => 'getOperatingFlightNumber',
'code_share_flight_numbers' => 'getCodeShareFlightNumbers',
'pass_template_id' => 'getPassTemplateId',
'baggage_belt' => 'getBaggageBelt',
'auto_invalidate_after' => 'getAutoInvalidateAfter',
'auto_invalidate_cancelled_passes' => 'getAutoInvalidateCancelledPasses',
'location_messages' => 'getLocationMessages',
'beacon_messages' => 'getBeaconMessages',
'links' => 'getLinks',
'suspend_automatic_updates' => 'getSuspendAutomaticUpdates',
'boarding_policy' => 'getBoardingPolicy',
'seating_policy' => 'getSeatingPolicy',
'status' => 'getStatus',
'conditional_items' => 'getConditionalItems',
'barcode_additional_data' => 'getBarcodeAdditionalData',
'metrics' => 'getMetrics',
'create_method' => 'getCreateMethod',
'designator_id' => 'getDesignatorId',
'invalidate_cancelled_passes' => 'getInvalidateCancelledPasses'    ];

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
        $this->container['boarding_point'] = isset($data['boarding_point']) ? $data['boarding_point'] : null;
        $this->container['deplaning_point'] = isset($data['deplaning_point']) ? $data['deplaning_point'] : null;
        $this->container['departure_date'] = isset($data['departure_date']) ? $data['departure_date'] : null;
        $this->container['departure_terminal'] = isset($data['departure_terminal']) ? $data['departure_terminal'] : null;
        $this->container['arrival_terminal'] = isset($data['arrival_terminal']) ? $data['arrival_terminal'] : null;
        $this->container['departure_gate'] = isset($data['departure_gate']) ? $data['departure_gate'] : null;
        $this->container['arrival_gate'] = isset($data['arrival_gate']) ? $data['arrival_gate'] : null;
        $this->container['scheduled_departure_time'] = isset($data['scheduled_departure_time']) ? $data['scheduled_departure_time'] : null;
        $this->container['estimated_departure_time'] = isset($data['estimated_departure_time']) ? $data['estimated_departure_time'] : null;
        $this->container['boarding_time'] = isset($data['boarding_time']) ? $data['boarding_time'] : null;
        $this->container['gate_closing_time'] = isset($data['gate_closing_time']) ? $data['gate_closing_time'] : null;
        $this->container['scheduled_arrival_time'] = isset($data['scheduled_arrival_time']) ? $data['scheduled_arrival_time'] : null;
        $this->container['estimated_arrival_time'] = isset($data['estimated_arrival_time']) ? $data['estimated_arrival_time'] : null;
        $this->container['operating_carrier_code'] = isset($data['operating_carrier_code']) ? $data['operating_carrier_code'] : null;
        $this->container['operating_flight_number'] = isset($data['operating_flight_number']) ? $data['operating_flight_number'] : null;
        $this->container['code_share_flight_numbers'] = isset($data['code_share_flight_numbers']) ? $data['code_share_flight_numbers'] : null;
        $this->container['pass_template_id'] = isset($data['pass_template_id']) ? $data['pass_template_id'] : null;
        $this->container['baggage_belt'] = isset($data['baggage_belt']) ? $data['baggage_belt'] : null;
        $this->container['auto_invalidate_after'] = isset($data['auto_invalidate_after']) ? $data['auto_invalidate_after'] : 2880;
        $this->container['auto_invalidate_cancelled_passes'] = isset($data['auto_invalidate_cancelled_passes']) ? $data['auto_invalidate_cancelled_passes'] : null;
        $this->container['location_messages'] = isset($data['location_messages']) ? $data['location_messages'] : null;
        $this->container['beacon_messages'] = isset($data['beacon_messages']) ? $data['beacon_messages'] : null;
        $this->container['links'] = isset($data['links']) ? $data['links'] : null;
        $this->container['suspend_automatic_updates'] = isset($data['suspend_automatic_updates']) ? $data['suspend_automatic_updates'] : null;
        $this->container['boarding_policy'] = isset($data['boarding_policy']) ? $data['boarding_policy'] : null;
        $this->container['seating_policy'] = isset($data['seating_policy']) ? $data['seating_policy'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['conditional_items'] = isset($data['conditional_items']) ? $data['conditional_items'] : null;
        $this->container['barcode_additional_data'] = isset($data['barcode_additional_data']) ? $data['barcode_additional_data'] : null;
        $this->container['metrics'] = isset($data['metrics']) ? $data['metrics'] : null;
        $this->container['create_method'] = isset($data['create_method']) ? $data['create_method'] : null;
        $this->container['designator_id'] = isset($data['designator_id']) ? $data['designator_id'] : null;
        $this->container['invalidate_cancelled_passes'] = isset($data['invalidate_cancelled_passes']) ? $data['invalidate_cancelled_passes'] : null;
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
        if ($this->container['boarding_point'] === null) {
            $invalidProperties[] = "'boarding_point' can't be null";
        }
        if ($this->container['deplaning_point'] === null) {
            $invalidProperties[] = "'deplaning_point' can't be null";
        }
        if ($this->container['departure_date'] === null) {
            $invalidProperties[] = "'departure_date' can't be null";
        }
        if ($this->container['scheduled_departure_time'] === null) {
            $invalidProperties[] = "'scheduled_departure_time' can't be null";
        }
        if ($this->container['pass_template_id'] === null) {
            $invalidProperties[] = "'pass_template_id' can't be null";
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
     * @param string $carrier_code The IATA or ICAO carrier code for the flight. In the case of a code-share, this should be the carrier code that you wish to present to the customer. This could be the marketing code, or the operating airline code. A carrier record for this code must exist.
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
     * @param string $flight_number The flight number.
     *
     * @return $this
     */
    public function setFlightNumber($flight_number)
    {
        $this->container['flight_number'] = $flight_number;

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
     * @param string $boarding_point The IATA airport code of the boarding point. Only required is segment is not provided.
     *
     * @return $this
     */
    public function setBoardingPoint($boarding_point)
    {
        $this->container['boarding_point'] = $boarding_point;

        return $this;
    }

    /**
     * Gets deplaning_point
     *
     * @return string
     */
    public function getDeplaningPoint()
    {
        return $this->container['deplaning_point'];
    }

    /**
     * Sets deplaning_point
     *
     * @param string $deplaning_point The IATA airport code of the deplaning point.
     *
     * @return $this
     */
    public function setDeplaningPoint($deplaning_point)
    {
        $this->container['deplaning_point'] = $deplaning_point;

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
     * Gets departure_terminal
     *
     * @return string
     */
    public function getDepartureTerminal()
    {
        return $this->container['departure_terminal'];
    }

    /**
     * Sets departure_terminal
     *
     * @param string $departure_terminal Departure Terminal.
     *
     * @return $this
     */
    public function setDepartureTerminal($departure_terminal)
    {
        $this->container['departure_terminal'] = $departure_terminal;

        return $this;
    }

    /**
     * Gets arrival_terminal
     *
     * @return string
     */
    public function getArrivalTerminal()
    {
        return $this->container['arrival_terminal'];
    }

    /**
     * Sets arrival_terminal
     *
     * @param string $arrival_terminal Arrival Terminal.
     *
     * @return $this
     */
    public function setArrivalTerminal($arrival_terminal)
    {
        $this->container['arrival_terminal'] = $arrival_terminal;

        return $this;
    }

    /**
     * Gets departure_gate
     *
     * @return string
     */
    public function getDepartureGate()
    {
        return $this->container['departure_gate'];
    }

    /**
     * Sets departure_gate
     *
     * @param string $departure_gate Departure Gate.
     *
     * @return $this
     */
    public function setDepartureGate($departure_gate)
    {
        $this->container['departure_gate'] = $departure_gate;

        return $this;
    }

    /**
     * Gets arrival_gate
     *
     * @return string
     */
    public function getArrivalGate()
    {
        return $this->container['arrival_gate'];
    }

    /**
     * Sets arrival_gate
     *
     * @param string $arrival_gate Arrival Gate.
     *
     * @return $this
     */
    public function setArrivalGate($arrival_gate)
    {
        $this->container['arrival_gate'] = $arrival_gate;

        return $this;
    }

    /**
     * Gets scheduled_departure_time
     *
     * @return \Swagger\Client\Model\IoLocalDateTime
     */
    public function getScheduledDepartureTime()
    {
        return $this->container['scheduled_departure_time'];
    }

    /**
     * Sets scheduled_departure_time
     *
     * @param \Swagger\Client\Model\IoLocalDateTime $scheduled_departure_time scheduled_departure_time
     *
     * @return $this
     */
    public function setScheduledDepartureTime($scheduled_departure_time)
    {
        $this->container['scheduled_departure_time'] = $scheduled_departure_time;

        return $this;
    }

    /**
     * Gets estimated_departure_time
     *
     * @return \Swagger\Client\Model\IoLocalDateTime
     */
    public function getEstimatedDepartureTime()
    {
        return $this->container['estimated_departure_time'];
    }

    /**
     * Sets estimated_departure_time
     *
     * @param \Swagger\Client\Model\IoLocalDateTime $estimated_departure_time estimated_departure_time
     *
     * @return $this
     */
    public function setEstimatedDepartureTime($estimated_departure_time)
    {
        $this->container['estimated_departure_time'] = $estimated_departure_time;

        return $this;
    }

    /**
     * Gets boarding_time
     *
     * @return \Swagger\Client\Model\IoLocalDateTime
     */
    public function getBoardingTime()
    {
        return $this->container['boarding_time'];
    }

    /**
     * Sets boarding_time
     *
     * @param \Swagger\Client\Model\IoLocalDateTime $boarding_time boarding_time
     *
     * @return $this
     */
    public function setBoardingTime($boarding_time)
    {
        $this->container['boarding_time'] = $boarding_time;

        return $this;
    }

    /**
     * Gets gate_closing_time
     *
     * @return \Swagger\Client\Model\IoLocalDateTime
     */
    public function getGateClosingTime()
    {
        return $this->container['gate_closing_time'];
    }

    /**
     * Sets gate_closing_time
     *
     * @param \Swagger\Client\Model\IoLocalDateTime $gate_closing_time gate_closing_time
     *
     * @return $this
     */
    public function setGateClosingTime($gate_closing_time)
    {
        $this->container['gate_closing_time'] = $gate_closing_time;

        return $this;
    }

    /**
     * Gets scheduled_arrival_time
     *
     * @return \Swagger\Client\Model\IoLocalDateTime
     */
    public function getScheduledArrivalTime()
    {
        return $this->container['scheduled_arrival_time'];
    }

    /**
     * Sets scheduled_arrival_time
     *
     * @param \Swagger\Client\Model\IoLocalDateTime $scheduled_arrival_time scheduled_arrival_time
     *
     * @return $this
     */
    public function setScheduledArrivalTime($scheduled_arrival_time)
    {
        $this->container['scheduled_arrival_time'] = $scheduled_arrival_time;

        return $this;
    }

    /**
     * Gets estimated_arrival_time
     *
     * @return \Swagger\Client\Model\IoLocalDateTime
     */
    public function getEstimatedArrivalTime()
    {
        return $this->container['estimated_arrival_time'];
    }

    /**
     * Sets estimated_arrival_time
     *
     * @param \Swagger\Client\Model\IoLocalDateTime $estimated_arrival_time estimated_arrival_time
     *
     * @return $this
     */
    public function setEstimatedArrivalTime($estimated_arrival_time)
    {
        $this->container['estimated_arrival_time'] = $estimated_arrival_time;

        return $this;
    }

    /**
     * Gets operating_carrier_code
     *
     * @return string
     */
    public function getOperatingCarrierCode()
    {
        return $this->container['operating_carrier_code'];
    }

    /**
     * Sets operating_carrier_code
     *
     * @param string $operating_carrier_code If the flight is operated by a carrier other than the carrierCode supplied, provide the IATA or ICAO carrier code for the operating carrier.  A carrier record must exist.
     *
     * @return $this
     */
    public function setOperatingCarrierCode($operating_carrier_code)
    {
        $this->container['operating_carrier_code'] = $operating_carrier_code;

        return $this;
    }

    /**
     * Gets operating_flight_number
     *
     * @return string
     */
    public function getOperatingFlightNumber()
    {
        return $this->container['operating_flight_number'];
    }

    /**
     * Sets operating_flight_number
     *
     * @param string $operating_flight_number If the flight is operated by a carrier other than the carrierCode supplied, provide the flight number for the operating carrier.
     *
     * @return $this
     */
    public function setOperatingFlightNumber($operating_flight_number)
    {
        $this->container['operating_flight_number'] = $operating_flight_number;

        return $this;
    }

    /**
     * Gets code_share_flight_numbers
     *
     * @return string[]
     */
    public function getCodeShareFlightNumbers()
    {
        return $this->container['code_share_flight_numbers'];
    }

    /**
     * Sets code_share_flight_numbers
     *
     * @param string[] $code_share_flight_numbers If the flight has code shares, then enter the carrier code and flight number. If there is an operating carrier, then do not include this in the list. Code share carriers will not be validated.
     *
     * @return $this
     */
    public function setCodeShareFlightNumbers($code_share_flight_numbers)
    {
        $this->container['code_share_flight_numbers'] = $code_share_flight_numbers;

        return $this;
    }

    /**
     * Gets pass_template_id
     *
     * @return string
     */
    public function getPassTemplateId()
    {
        return $this->container['pass_template_id'];
    }

    /**
     * Sets pass_template_id
     *
     * @param string $pass_template_id The pass template id.
     *
     * @return $this
     */
    public function setPassTemplateId($pass_template_id)
    {
        $this->container['pass_template_id'] = $pass_template_id;

        return $this;
    }

    /**
     * Gets baggage_belt
     *
     * @return string
     */
    public function getBaggageBelt()
    {
        return $this->container['baggage_belt'];
    }

    /**
     * Sets baggage_belt
     *
     * @param string $baggage_belt The baggage belt at the destination.
     *
     * @return $this
     */
    public function setBaggageBelt($baggage_belt)
    {
        $this->container['baggage_belt'] = $baggage_belt;

        return $this;
    }

    /**
     * Gets auto_invalidate_after
     *
     * @return int
     */
    public function getAutoInvalidateAfter()
    {
        return $this->container['auto_invalidate_after'];
    }

    /**
     * Sets auto_invalidate_after
     *
     * @param int $auto_invalidate_after Minutes after estimated or scheduled arrival to automatically invalidate the pass. Enter a value of 9999999 or greater if the pass should not auto invalidate. Default is 48 hours.
     *
     * @return $this
     */
    public function setAutoInvalidateAfter($auto_invalidate_after)
    {
        $this->container['auto_invalidate_after'] = $auto_invalidate_after;

        return $this;
    }

    /**
     * Gets auto_invalidate_cancelled_passes
     *
     * @return bool
     */
    public function getAutoInvalidateCancelledPasses()
    {
        return $this->container['auto_invalidate_cancelled_passes'];
    }

    /**
     * Sets auto_invalidate_cancelled_passes
     *
     * @param bool $auto_invalidate_cancelled_passes Deprecated: Use InvalidateCancelledPasses.
     *
     * @return $this
     */
    public function setAutoInvalidateCancelledPasses($auto_invalidate_cancelled_passes)
    {
        $this->container['auto_invalidate_cancelled_passes'] = $auto_invalidate_cancelled_passes;

        return $this;
    }

    /**
     * Gets location_messages
     *
     * @return \Swagger\Client\Model\IoGPSLocation[]
     */
    public function getLocationMessages()
    {
        return $this->container['location_messages'];
    }

    /**
     * Sets location_messages
     *
     * @param \Swagger\Client\Model\IoGPSLocation[] $location_messages A list of up to 10 GPS locations where this boarding pass should be presented on the lock-screen. Values here will override the designated defaults.
     *
     * @return $this
     */
    public function setLocationMessages($location_messages)
    {
        $this->container['location_messages'] = $location_messages;

        return $this;
    }

    /**
     * Gets beacon_messages
     *
     * @return \Swagger\Client\Model\IoBeacon[]
     */
    public function getBeaconMessages()
    {
        return $this->container['beacon_messages'];
    }

    /**
     * Sets beacon_messages
     *
     * @param \Swagger\Client\Model\IoBeacon[] $beacon_messages A list of up to 10 Beacon UUIDs that should trigger the boarding pass to be presented on the lock-screen. Values here will override the designated defaults.
     *
     * @return $this
     */
    public function setBeaconMessages($beacon_messages)
    {
        $this->container['beacon_messages'] = $beacon_messages;

        return $this;
    }

    /**
     * Gets links
     *
     * @return \Swagger\Client\Model\IoLink[]
     */
    public function getLinks()
    {
        return $this->container['links'];
    }

    /**
     * Sets links
     *
     * @param \Swagger\Client\Model\IoLink[] $links A list of links to be appended to the end of each boarding pass.
     *
     * @return $this
     */
    public function setLinks($links)
    {
        $this->container['links'] = $links;

        return $this;
    }

    /**
     * Gets suspend_automatic_updates
     *
     * @return bool
     */
    public function getSuspendAutomaticUpdates()
    {
        return $this->container['suspend_automatic_updates'];
    }

    /**
     * Sets suspend_automatic_updates
     *
     * @param bool $suspend_automatic_updates Suspend automatic updates to all boarding passes for this flight.
     *
     * @return $this
     */
    public function setSuspendAutomaticUpdates($suspend_automatic_updates)
    {
        $this->container['suspend_automatic_updates'] = $suspend_automatic_updates;

        return $this;
    }

    /**
     * Gets boarding_policy
     *
     * @return \Swagger\Client\Model\FlightsBoardingPolicy
     */
    public function getBoardingPolicy()
    {
        return $this->container['boarding_policy'];
    }

    /**
     * Sets boarding_policy
     *
     * @param \Swagger\Client\Model\FlightsBoardingPolicy $boarding_policy boarding_policy
     *
     * @return $this
     */
    public function setBoardingPolicy($boarding_policy)
    {
        $this->container['boarding_policy'] = $boarding_policy;

        return $this;
    }

    /**
     * Gets seating_policy
     *
     * @return \Swagger\Client\Model\FlightsSeatClassPolicy
     */
    public function getSeatingPolicy()
    {
        return $this->container['seating_policy'];
    }

    /**
     * Sets seating_policy
     *
     * @param \Swagger\Client\Model\FlightsSeatClassPolicy $seating_policy seating_policy
     *
     * @return $this
     */
    public function setSeatingPolicy($seating_policy)
    {
        $this->container['seating_policy'] = $seating_policy;

        return $this;
    }

    /**
     * Gets status
     *
     * @return \Swagger\Client\Model\FlightsFlightStatus
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \Swagger\Client\Model\FlightsFlightStatus $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets conditional_items
     *
     * @return bool
     */
    public function getConditionalItems()
    {
        return $this->container['conditional_items'];
    }

    /**
     * Sets conditional_items
     *
     * @param bool $conditional_items If PassKit are generating barcodes, include conditional items. Default false.
     *
     * @return $this
     */
    public function setConditionalItems($conditional_items)
    {
        $this->container['conditional_items'] = $conditional_items;

        return $this;
    }

    /**
     * Gets barcode_additional_data
     *
     * @return string
     */
    public function getBarcodeAdditionalData()
    {
        return $this->container['barcode_additional_data'];
    }

    /**
     * Sets barcode_additional_data
     *
     * @param string $barcode_additional_data If PassKit are generating barcodes, default airline use data (IATA item 4). This can be overwritten at the flight and boarding pass level.
     *
     * @return $this
     */
    public function setBarcodeAdditionalData($barcode_additional_data)
    {
        $this->container['barcode_additional_data'] = $barcode_additional_data;

        return $this;
    }

    /**
     * Gets metrics
     *
     * @return \Swagger\Client\Model\IoMetrics
     */
    public function getMetrics()
    {
        return $this->container['metrics'];
    }

    /**
     * Sets metrics
     *
     * @param \Swagger\Client\Model\IoMetrics $metrics metrics
     *
     * @return $this
     */
    public function setMetrics($metrics)
    {
        $this->container['metrics'] = $metrics;

        return $this;
    }

    /**
     * Gets create_method
     *
     * @return \Swagger\Client\Model\FlightsFlightCreateMode
     */
    public function getCreateMethod()
    {
        return $this->container['create_method'];
    }

    /**
     * Sets create_method
     *
     * @param \Swagger\Client\Model\FlightsFlightCreateMode $create_method create_method
     *
     * @return $this
     */
    public function setCreateMethod($create_method)
    {
        $this->container['create_method'] = $create_method;

        return $this;
    }

    /**
     * Gets designator_id
     *
     * @return string
     */
    public function getDesignatorId()
    {
        return $this->container['designator_id'];
    }

    /**
     * Sets designator_id
     *
     * @param string $designator_id For automatically created flights, shows the ID of the designator that bootstrapped the flight record.
     *
     * @return $this
     */
    public function setDesignatorId($designator_id)
    {
        $this->container['designator_id'] = $designator_id;

        return $this;
    }

    /**
     * Gets invalidate_cancelled_passes
     *
     * @return \Swagger\Client\Model\IoToggle
     */
    public function getInvalidateCancelledPasses()
    {
        return $this->container['invalidate_cancelled_passes'];
    }

    /**
     * Sets invalidate_cancelled_passes
     *
     * @param \Swagger\Client\Model\IoToggle $invalidate_cancelled_passes invalidate_cancelled_passes
     *
     * @return $this
     */
    public function setInvalidateCancelledPasses($invalidate_cancelled_passes)
    {
        $this->container['invalidate_cancelled_passes'] = $invalidate_cancelled_passes;

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
