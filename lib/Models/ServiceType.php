<?php
/**
 * ServiceType.
 *
 * PHP version 5
 *
 * @category Class
 *
 * @author   Swagger Codegen team
 *
 * @see     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Selling Partner API for Shipping.
 *
 * Provides programmatic access to Amazon Shipping APIs.
 *
 * OpenAPI spec version: v1
 *
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.20
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Models;

/**
 * ServiceType Class Doc Comment.
 *
 * @category Class
 * @description The type of shipping service that will be used for the service offering.
 *
 * @author   Swagger Codegen team
 *
 * @see     https://github.com/swagger-api/swagger-codegen
 */
class ServiceType
{
    /**
     * Possible values of this enum.
     */
    const GROUND = 'Amazon Shipping Ground';
    const STANDARD = 'Amazon Shipping Standard';
    const PREMIUM = 'Amazon Shipping Premium';

    /**
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::GROUND,
self::STANDARD,
self::PREMIUM,        ];
    }
}
