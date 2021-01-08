<?php
/**
 * FulfillmentPreview.
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
 * Selling Partner API for Fulfillment Outbound.
 *
 * The Selling Partner API for Fulfillment Outbound lets you create applications that help a seller fulfill Multi-Channel Fulfillment orders using their inventory in Amazon's fulfillment network. You can get information on both potential and existing fulfillment orders.
 *
 * OpenAPI spec version: v0
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

use ArrayAccess;
use Swagger\Client\ObjectSerializer;

/**
 * FulfillmentPreview Class Doc Comment.
 *
 * @category Class
 * @description Information about a fulfillment order preview, including delivery and fee information based on shipping method.
 *
 * @author   Swagger Codegen team
 *
 * @see     https://github.com/swagger-api/swagger-codegen
 */
class FulfillmentPreview implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'FulfillmentPreview';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'shipping_speed_category' => '\Swagger\Client\Models\ShippingSpeedCategory',
'scheduled_delivery_info' => '\Swagger\Client\Models\ScheduledDeliveryInfo',
'is_fulfillable' => 'bool',
'is_cod_capable' => 'bool',
'estimated_shipping_weight' => '\Swagger\Client\Models\Weight',
'estimated_fees' => '\Swagger\Client\Models\FeeList',
'fulfillment_preview_shipments' => '\Swagger\Client\Models\FulfillmentPreviewShipmentList',
'unfulfillable_preview_items' => '\Swagger\Client\Models\UnfulfillablePreviewItemList',
'order_unfulfillable_reasons' => '\Swagger\Client\Models\StringList',
'marketplace_id' => 'string',    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'shipping_speed_category' => null,
'scheduled_delivery_info' => null,
'is_fulfillable' => null,
'is_cod_capable' => null,
'estimated_shipping_weight' => null,
'estimated_fees' => null,
'fulfillment_preview_shipments' => null,
'unfulfillable_preview_items' => null,
'order_unfulfillable_reasons' => null,
'marketplace_id' => null,    ];

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'shipping_speed_category' => 'ShippingSpeedCategory',
'scheduled_delivery_info' => 'ScheduledDeliveryInfo',
'is_fulfillable' => 'IsFulfillable',
'is_cod_capable' => 'IsCODCapable',
'estimated_shipping_weight' => 'EstimatedShippingWeight',
'estimated_fees' => 'EstimatedFees',
'fulfillment_preview_shipments' => 'FulfillmentPreviewShipments',
'unfulfillable_preview_items' => 'UnfulfillablePreviewItems',
'order_unfulfillable_reasons' => 'OrderUnfulfillableReasons',
'marketplace_id' => 'MarketplaceId',    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'shipping_speed_category' => 'setShippingSpeedCategory',
'scheduled_delivery_info' => 'setScheduledDeliveryInfo',
'is_fulfillable' => 'setIsFulfillable',
'is_cod_capable' => 'setIsCodCapable',
'estimated_shipping_weight' => 'setEstimatedShippingWeight',
'estimated_fees' => 'setEstimatedFees',
'fulfillment_preview_shipments' => 'setFulfillmentPreviewShipments',
'unfulfillable_preview_items' => 'setUnfulfillablePreviewItems',
'order_unfulfillable_reasons' => 'setOrderUnfulfillableReasons',
'marketplace_id' => 'setMarketplaceId',    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'shipping_speed_category' => 'getShippingSpeedCategory',
'scheduled_delivery_info' => 'getScheduledDeliveryInfo',
'is_fulfillable' => 'getIsFulfillable',
'is_cod_capable' => 'getIsCodCapable',
'estimated_shipping_weight' => 'getEstimatedShippingWeight',
'estimated_fees' => 'getEstimatedFees',
'fulfillment_preview_shipments' => 'getFulfillmentPreviewShipments',
'unfulfillable_preview_items' => 'getUnfulfillablePreviewItems',
'order_unfulfillable_reasons' => 'getOrderUnfulfillableReasons',
'marketplace_id' => 'getMarketplaceId',    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    /**
     * Associative array for storing property values.
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor.
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['shipping_speed_category'] = isset($data['shipping_speed_category']) ? $data['shipping_speed_category'] : null;
        $this->container['scheduled_delivery_info'] = isset($data['scheduled_delivery_info']) ? $data['scheduled_delivery_info'] : null;
        $this->container['is_fulfillable'] = isset($data['is_fulfillable']) ? $data['is_fulfillable'] : null;
        $this->container['is_cod_capable'] = isset($data['is_cod_capable']) ? $data['is_cod_capable'] : null;
        $this->container['estimated_shipping_weight'] = isset($data['estimated_shipping_weight']) ? $data['estimated_shipping_weight'] : null;
        $this->container['estimated_fees'] = isset($data['estimated_fees']) ? $data['estimated_fees'] : null;
        $this->container['fulfillment_preview_shipments'] = isset($data['fulfillment_preview_shipments']) ? $data['fulfillment_preview_shipments'] : null;
        $this->container['unfulfillable_preview_items'] = isset($data['unfulfillable_preview_items']) ? $data['unfulfillable_preview_items'] : null;
        $this->container['order_unfulfillable_reasons'] = isset($data['order_unfulfillable_reasons']) ? $data['order_unfulfillable_reasons'] : null;
        $this->container['marketplace_id'] = isset($data['marketplace_id']) ? $data['marketplace_id'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (null === $this->container['shipping_speed_category']) {
            $invalidProperties[] = "'shipping_speed_category' can't be null";
        }
        if (null === $this->container['is_fulfillable']) {
            $invalidProperties[] = "'is_fulfillable' can't be null";
        }
        if (null === $this->container['is_cod_capable']) {
            $invalidProperties[] = "'is_cod_capable' can't be null";
        }
        if (null === $this->container['marketplace_id']) {
            $invalidProperties[] = "'marketplace_id' can't be null";
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed.
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return 0 === count($this->listInvalidProperties());
    }

    /**
     * Gets shipping_speed_category.
     *
     * @return \Swagger\Client\Models\ShippingSpeedCategory
     */
    public function getShippingSpeedCategory()
    {
        return $this->container['shipping_speed_category'];
    }

    /**
     * Sets shipping_speed_category.
     *
     * @param \Swagger\Client\Models\ShippingSpeedCategory $shipping_speed_category shipping_speed_category
     *
     * @return $this
     */
    public function setShippingSpeedCategory($shipping_speed_category)
    {
        $this->container['shipping_speed_category'] = $shipping_speed_category;

        return $this;
    }

    /**
     * Gets scheduled_delivery_info.
     *
     * @return \Swagger\Client\Models\ScheduledDeliveryInfo
     */
    public function getScheduledDeliveryInfo()
    {
        return $this->container['scheduled_delivery_info'];
    }

    /**
     * Sets scheduled_delivery_info.
     *
     * @param \Swagger\Client\Models\ScheduledDeliveryInfo $scheduled_delivery_info scheduled_delivery_info
     *
     * @return $this
     */
    public function setScheduledDeliveryInfo($scheduled_delivery_info)
    {
        $this->container['scheduled_delivery_info'] = $scheduled_delivery_info;

        return $this;
    }

    /**
     * Gets is_fulfillable.
     *
     * @return bool
     */
    public function getIsFulfillable()
    {
        return $this->container['is_fulfillable'];
    }

    /**
     * Sets is_fulfillable.
     *
     * @param bool $is_fulfillable When true, this fulfillment order preview is fulfillable.
     *
     * @return $this
     */
    public function setIsFulfillable($is_fulfillable)
    {
        $this->container['is_fulfillable'] = $is_fulfillable;

        return $this;
    }

    /**
     * Gets is_cod_capable.
     *
     * @return bool
     */
    public function getIsCodCapable()
    {
        return $this->container['is_cod_capable'];
    }

    /**
     * Sets is_cod_capable.
     *
     * @param bool $is_cod_capable When true, this fulfillment order preview is for COD (Cash On Delivery).
     *
     * @return $this
     */
    public function setIsCodCapable($is_cod_capable)
    {
        $this->container['is_cod_capable'] = $is_cod_capable;

        return $this;
    }

    /**
     * Gets estimated_shipping_weight.
     *
     * @return \Swagger\Client\Models\Weight
     */
    public function getEstimatedShippingWeight()
    {
        return $this->container['estimated_shipping_weight'];
    }

    /**
     * Sets estimated_shipping_weight.
     *
     * @param \Swagger\Client\Models\Weight $estimated_shipping_weight estimated_shipping_weight
     *
     * @return $this
     */
    public function setEstimatedShippingWeight($estimated_shipping_weight)
    {
        $this->container['estimated_shipping_weight'] = $estimated_shipping_weight;

        return $this;
    }

    /**
     * Gets estimated_fees.
     *
     * @return \Swagger\Client\Models\FeeList
     */
    public function getEstimatedFees()
    {
        return $this->container['estimated_fees'];
    }

    /**
     * Sets estimated_fees.
     *
     * @param \Swagger\Client\Models\FeeList $estimated_fees estimated_fees
     *
     * @return $this
     */
    public function setEstimatedFees($estimated_fees)
    {
        $this->container['estimated_fees'] = $estimated_fees;

        return $this;
    }

    /**
     * Gets fulfillment_preview_shipments.
     *
     * @return \Swagger\Client\Models\FulfillmentPreviewShipmentList
     */
    public function getFulfillmentPreviewShipments()
    {
        return $this->container['fulfillment_preview_shipments'];
    }

    /**
     * Sets fulfillment_preview_shipments.
     *
     * @param \Swagger\Client\Models\FulfillmentPreviewShipmentList $fulfillment_preview_shipments fulfillment_preview_shipments
     *
     * @return $this
     */
    public function setFulfillmentPreviewShipments($fulfillment_preview_shipments)
    {
        $this->container['fulfillment_preview_shipments'] = $fulfillment_preview_shipments;

        return $this;
    }

    /**
     * Gets unfulfillable_preview_items.
     *
     * @return \Swagger\Client\Models\UnfulfillablePreviewItemList
     */
    public function getUnfulfillablePreviewItems()
    {
        return $this->container['unfulfillable_preview_items'];
    }

    /**
     * Sets unfulfillable_preview_items.
     *
     * @param \Swagger\Client\Models\UnfulfillablePreviewItemList $unfulfillable_preview_items unfulfillable_preview_items
     *
     * @return $this
     */
    public function setUnfulfillablePreviewItems($unfulfillable_preview_items)
    {
        $this->container['unfulfillable_preview_items'] = $unfulfillable_preview_items;

        return $this;
    }

    /**
     * Gets order_unfulfillable_reasons.
     *
     * @return \Swagger\Client\Models\StringList
     */
    public function getOrderUnfulfillableReasons()
    {
        return $this->container['order_unfulfillable_reasons'];
    }

    /**
     * Sets order_unfulfillable_reasons.
     *
     * @param \Swagger\Client\Models\StringList $order_unfulfillable_reasons order_unfulfillable_reasons
     *
     * @return $this
     */
    public function setOrderUnfulfillableReasons($order_unfulfillable_reasons)
    {
        $this->container['order_unfulfillable_reasons'] = $order_unfulfillable_reasons;

        return $this;
    }

    /**
     * Gets marketplace_id.
     *
     * @return string
     */
    public function getMarketplaceId()
    {
        return $this->container['marketplace_id'];
    }

    /**
     * Sets marketplace_id.
     *
     * @param string $marketplace_id The marketplace the fulfillment order is placed against.
     *
     * @return $this
     */
    public function setMarketplaceId($marketplace_id)
    {
        $this->container['marketplace_id'] = $marketplace_id;

        return $this;
    }

    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param int $offset Offset
     *
     * @return bool
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param int $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int   $offset Offset
     * @param mixed $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param int $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object.
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
