<?php
/**
 * FlightsFlightAlerts
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
use \Swagger\Client\ObjectSerializer;

/**
 * FlightsFlightAlerts Class Doc Comment
 *
 * @category Class
 * @description Flight alerts automatically update boarding passes as information becomes available or changes. Note that these services may incur additional usage charges.   - NO_ALERTS: Boarding passes will not automatically update.  - ALL_ALERTS: Boarding passes will automatically update whenever a change to the departure gate/time, arrival gate/time or baggage belt information is detected.  - DEPARTURE_GATE_ALERT: Boarding passes will automatically update whenever a change to the departure gate is detected.  - DEPARTURE_TIME_ALERT: Boarding passes will automatically update whenever a change to the estimated departure gate is detected.  - ARRIVAL_GATE_ALERT: Boarding passes will automatically update whenever a change to the arrival gate is detected.  - ARRIVAL_TIME_ALERT: Boarding passes will automatically update whenever a change to the estimated arrival time is detected.  - BAGGAGE_BELT_ALERT: Boarding passes will automatically update whenever the baggage collection belt or area is known or changes.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class FlightsFlightAlerts
{
    /**
     * Possible values of this enum
     */
    const NO_ALERTS = 'NO_ALERTS';
const ALL_ALERTS = 'ALL_ALERTS';
const DEPARTURE_GATE_ALERT = 'DEPARTURE_GATE_ALERT';
const DEPARTURE_TIME_ALERT = 'DEPARTURE_TIME_ALERT';
const ARRIVAL_GATE_ALERT = 'ARRIVAL_GATE_ALERT';
const ARRIVAL_TIME_ALERT = 'ARRIVAL_TIME_ALERT';
const BAGGAGE_BELT_ALERT = 'BAGGAGE_BELT_ALERT';
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::NO_ALERTS,
self::ALL_ALERTS,
self::DEPARTURE_GATE_ALERT,
self::DEPARTURE_TIME_ALERT,
self::ARRIVAL_GATE_ALERT,
self::ARRIVAL_TIME_ALERT,
self::BAGGAGE_BELT_ALERT,        ];
    }
}
