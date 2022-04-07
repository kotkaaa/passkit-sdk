<?php
/**
 * FlightsSeatClassPolicy
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
 * FlightsSeatClassPolicy Class Doc Comment
 *
 * @category Class
 * @description The Seat Class Policy is used to determine informational labels on the pass.   - CABIN_BASED: Seats groups are determined by cabin. \&quot;Cabin\&quot; will be used as the label on the pass.  - CLASS_BASED: Seats groups are determined by class of travel. \&quot;Class\&quot; will be used as the label on the pass.  - TIER_BASED: Seat groups are determined by tier. \&quot;Tier\&quot; will be used as the label on the pass.  - SEAT_CLASS_POLICY_OTHER: Another, or no seat policy is in place. No label will be used on the pass.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class FlightsSeatClassPolicy
{
    /**
     * Possible values of this enum
     */
    const SEAT_CLASS_POLICY_UNSPECIFIED = 'SEAT_CLASS_POLICY_UNSPECIFIED';
const CABIN_BASED = 'CABIN_BASED';
const CLASS_BASED = 'CLASS_BASED';
const TIER_BASED = 'TIER_BASED';
const SEAT_CLASS_POLICY_OTHER = 'SEAT_CLASS_POLICY_OTHER';
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::SEAT_CLASS_POLICY_UNSPECIFIED,
self::CABIN_BASED,
self::CLASS_BASED,
self::TIER_BASED,
self::SEAT_CLASS_POLICY_OTHER,        ];
    }
}
