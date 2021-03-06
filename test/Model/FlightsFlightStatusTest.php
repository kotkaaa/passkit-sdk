<?php
/**
 * FlightsFlightStatusTest
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
 * Please update the test case below to test the model.
 */

namespace Swagger\Client;

/**
 * FlightsFlightStatusTest Class Doc Comment
 *
 * @category    Class
 * @description For customers subscribing to automatic updates, the flight status will be automatically updated. Status is also writable for manual updates.   - UNKNOWN: No status is known, or flight is not yet scheduled.  - SCHEDULED: Flight is scheduled to depart.  - DEPARTED: Flight has left the departure gate, but may not be airborne yet.  - INAIR: Flight is airborne.  - LANDED: Flight has landed, but may not yet be at the arrival gate.  - ARRIVED: Flight has arrived at the destination gate.  - CANCELLED: Flight has been cancelled.  - DELAYED: Flight is delayed to depart by at least 15 minutes.  - DEPARTED_DIVERTED: Flight has been diverted from its scheduled destination and has left the departure gate.  - INAIR_DIVERTED: Flight has been diverted from its scheduled destination and is airborne.  - ARRIVED_DIVERTED: Flight has arrived at a location different to its scheduled destination.  - DEPARTED_RECOVERY: Flight has left its diverted destination en-route to its original destination.  - INAIR_RECOVERY: Flight has left its diverted destination airborne en-route to its original destination.  - ARRIVED_RECOVERY: Flight has landed at is original scheduled destination.
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class FlightsFlightStatusTest extends \PHPUnit_Framework_TestCase
{

    /**
     * Setup before running any test case
     */
    public static function setUpBeforeClass()
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp()
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown()
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass()
    {
    }

    /**
     * Test "FlightsFlightStatus"
     */
    public function testFlightsFlightStatus()
    {
    }
}
