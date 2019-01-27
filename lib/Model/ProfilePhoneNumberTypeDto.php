<?php
/**
 * ProfilePhoneNumberTypeDto
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
 * ProfilePhoneNumberTypeDto Class Doc Comment
 *
 * @category Class
 * @package  Hapi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ProfilePhoneNumberTypeDto
{
    /**
     * Possible values of this enum
     */
    const _PRIVATE = 'PRIVATE';
const CORPORATE = 'CORPORATE';
const HOME = 'HOME';
const BUSINESS = 'BUSINESS';
const MOBILE = 'MOBILE';
const FAX = 'FAX';
const OTHER = 'OTHER';
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::_PRIVATE,
self::CORPORATE,
self::HOME,
self::BUSINESS,
self::MOBILE,
self::FAX,
self::OTHER,        ];
    }
}