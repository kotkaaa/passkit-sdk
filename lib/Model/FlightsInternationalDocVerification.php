<?php
/**
 * FlightsInternationalDocVerification
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
 * FlightsInternationalDocVerification Class Doc Comment
 *
 * @category Class
 * @description International Documentation Verification.   - NOT_REQUIRED: No travel document verification required  - REQUIRED: Travel document verification required before boarding  - COMPLETED: Travel document verification successfully completed
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class FlightsInternationalDocVerification
{
    /**
     * Possible values of this enum
     */
    const NOT_REQUIRED = 'NOT_REQUIRED';
const REQUIRED = 'REQUIRED';
const COMPLETED = 'COMPLETED';
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::NOT_REQUIRED,
self::REQUIRED,
self::COMPLETED,        ];
    }
}
