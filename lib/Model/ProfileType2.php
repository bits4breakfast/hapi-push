<?php
/**
 * ProfileType2
 *
 * PHP version 5
 *
 * @category Class
 * @package  Hapi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
* HAPI data model
 *
* No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
* OpenAPI spec version: v1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.4
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Hapi\Model;
use \Hapi\ObjectSerializer;

/**
 * ProfileType2 Class Doc Comment
 *
 * @category Class
 * @package  Hapi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ProfileType2
{
    /**
     * Possible values of this enum
     */
    const PERSON = 'PERSON';
const COMPANY = 'COMPANY';
const TRAVEL_AGENT = 'TRAVEL_AGENT';
const GROUP_PROFILE = 'GROUP_PROFILE';
const OTHER = 'OTHER';
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::PERSON,
self::COMPANY,
self::TRAVEL_AGENT,
self::GROUP_PROFILE,
self::OTHER,        ];
    }
}
