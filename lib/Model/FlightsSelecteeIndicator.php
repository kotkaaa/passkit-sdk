<?php
/**
 * FlightsSelecteeIndicator
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
 * FlightsSelecteeIndicator Class Doc Comment
 *
 * @category Class
 * @description Passenger security status. Note: in practical terms, this is always likely to be NOT_SELECTEE or TSA_PRECHECK since current DHS Pre-Departure Regulations only allow on-site printing of boarding passes. It is mandatory when US travel is involved.   - NOT_SELECTEE: Not selected for special security screening  - SELECTEE: Selected for special security screening  - TSA_PRECHECK: Passenger eligible for TSA PreCheck®
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class FlightsSelecteeIndicator
{
    /**
     * Possible values of this enum
     */
    const NOT_SELECTEE = 'NOT_SELECTEE';
const SELECTEE = 'SELECTEE';
const TSA_PRECHECK = 'TSA_PRECHECK';
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::NOT_SELECTEE,
self::SELECTEE,
self::TSA_PRECHECK,        ];
    }
}
