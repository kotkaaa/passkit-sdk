<?php
/**
 * CabinCodesCompartmentCode
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
 * CabinCodesCompartmentCode Class Doc Comment
 *
 * @category Class
 * @description Compartment Code descriptions represent most frequently used classes. Airlines have discretion on how they use these codes.   - NONE: Compartment code not provided  - R: First class suite (previously supersonic)  - P: First class premium  - F: First class  - A: First class discounted  - J: Business class premium  - C: Business class  - D: Business class discounted  - I: Business class discounted  - Z: Business class discounted  - W: Premium economy  - E: Premium economy discounted  - S: Economy  - Y: Economy  - B: Economy discounted  - H: Economy discounted  - K: Economy discounted  - L: Economy discounted  - M: Economy discounted  - N: Economy discounted  - O: Economy discounted  - Q: Economy discounted  - T: Premium economy discounted / Economy discounted  - V: Economy discounted  - X: Economy discounted  - G: Conditional reservation  - U: Shuttle service
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CabinCodesCompartmentCode
{
    /**
     * Possible values of this enum
     */
    const NONE = 'NONE';
const R = 'R';
const P = 'P';
const F = 'F';
const A = 'A';
const J = 'J';
const C = 'C';
const D = 'D';
const I = 'I';
const Z = 'Z';
const W = 'W';
const E = 'E';
const S = 'S';
const Y = 'Y';
const B = 'B';
const H = 'H';
const K = 'K';
const L = 'L';
const M = 'M';
const N = 'N';
const O = 'O';
const Q = 'Q';
const T = 'T';
const V = 'V';
const X = 'X';
const G = 'G';
const U = 'U';
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::NONE,
self::R,
self::P,
self::F,
self::A,
self::J,
self::C,
self::D,
self::I,
self::Z,
self::W,
self::E,
self::S,
self::Y,
self::B,
self::H,
self::K,
self::L,
self::M,
self::N,
self::O,
self::Q,
self::T,
self::V,
self::X,
self::G,
self::U,        ];
    }
}
