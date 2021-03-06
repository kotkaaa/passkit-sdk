<?php
/**
 * IoStatus
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
 * IoStatus Class Doc Comment
 *
 * @category Class
 * @description Status is the best determined status of the pass.   - PASS_ISSUED: Pass has been issued.  - PASS_INSTALLED: Pass has been installed in a wallet.  - PASS_UNINSTALLED: Pass has been uninstalled (possibly deleted) from a wallet.  - PASS_INVALIDATED: Pass has been invalidated.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class IoStatus
{
    /**
     * Possible values of this enum
     */
    const ISSUED = 'PASS_ISSUED';
const INSTALLED = 'PASS_INSTALLED';
const UNINSTALLED = 'PASS_UNINSTALLED';
const INVALIDATED = 'PASS_INVALIDATED';
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ISSUED,
self::INSTALLED,
self::UNINSTALLED,
self::INVALIDATED,        ];
    }
}
