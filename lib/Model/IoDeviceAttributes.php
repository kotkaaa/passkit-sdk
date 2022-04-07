<?php
/**
 * IoDeviceAttributes
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
 * IoDeviceAttributes Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class IoDeviceAttributes
{
    /**
     * Possible values of this enum
     */
    const NO_ATTRIBUTES = 'NoAttributes';
const IOS = 'Ios';
const ANDROID = 'Android';
const SUPPORT_WALLET = 'SupportWallet';
const WALLET_SCANNER = 'WalletScanner';
const WALLET_DAEMON = 'WalletDaemon';
const WALLET_PASSES = 'WalletPasses';
const WINDOWS = 'Windows';
const OSX = 'OSX';
const LINUX = 'Linux';
const MOBILE = 'Mobile';
const DESKTOP = 'Desktop';
const TABLET = 'Tablet';
const UNSUPPORTED_IOS = 'UnsupportedIos';
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::NO_ATTRIBUTES,
self::IOS,
self::ANDROID,
self::SUPPORT_WALLET,
self::WALLET_SCANNER,
self::WALLET_DAEMON,
self::WALLET_PASSES,
self::WINDOWS,
self::OSX,
self::LINUX,
self::MOBILE,
self::DESKTOP,
self::TABLET,
self::UNSUPPORTED_IOS,        ];
    }
}