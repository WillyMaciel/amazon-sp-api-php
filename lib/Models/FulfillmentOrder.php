<?php
/**
 * FulfillmentOrder.
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
 * FulfillmentOrder Class Doc Comment.
 *
 * @category Class
 * @description General information about a fulfillment order, including its status.
 *
 * @author   Swagger Codegen team
 *
 * @see     https://github.com/swagger-api/swagger-codegen
 */
class FulfillmentOrder implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'FulfillmentOrder';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'seller_fulfillment_order_id' => 'string',
'marketplace_id' => 'string',
'displayable_order_id' => 'string',
'displayable_order_date_time' => '\Swagger\Client\Models\Timestamp',
'displayable_order_comment' => 'string',
'shipping_speed_category' => '\Swagger\Client\Models\ShippingSpeedCategory',
'delivery_window' => '\Swagger\Client\Models\DeliveryWindow',
'destination_address' => '\Swagger\Client\Models\Address',
'fulfillment_action' => '\Swagger\Client\Models\FulfillmentAction',
'fulfillment_policy' => '\Swagger\Client\Models\FulfillmentPolicy',
'fulfillment_method' => 'string',
'cod_settings' => '\Swagger\Client\Models\CODSettings',
'received_date_time' => '\Swagger\Client\Models\Timestamp',
'fulfillment_order_status' => '\Swagger\Client\Models\FulfillmentOrderStatus',
'status_updated_date_time' => '\Swagger\Client\Models\Timestamp',
'notification_email_list' => '\Swagger\Client\Models\NotificationEmailList',    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'seller_fulfillment_order_id' => null,
'marketplace_id' => null,
'displayable_order_id' => null,
'displayable_order_date_time' => null,
'displayable_order_comment' => null,
'shipping_speed_category' => null,
'delivery_window' => null,
'destination_address' => null,
'fulfillment_action' => null,
'fulfillment_policy' => null,
'fulfillment_method' => null,
'cod_settings' => null,
'received_date_time' => null,
'fulfillment_order_status' => null,
'status_updated_date_time' => null,
'notification_email_list' => null,    ];

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
        'seller_fulfillment_order_id' => 'SellerFulfillmentOrderId',
'marketplace_id' => 'MarketplaceId',
'displayable_order_id' => 'DisplayableOrderId',
'displayable_order_date_time' => 'DisplayableOrderDateTime',
'displayable_order_comment' => 'DisplayableOrderComment',
'shipping_speed_category' => 'ShippingSpeedCategory',
'delivery_window' => 'DeliveryWindow',
'destination_address' => 'DestinationAddress',
'fulfillment_action' => 'FulfillmentAction',
'fulfillment_policy' => 'FulfillmentPolicy',
'fulfillment_method' => 'FulfillmentMethod',
'cod_settings' => 'CODSettings',
'received_date_time' => 'ReceivedDateTime',
'fulfillment_order_status' => 'FulfillmentOrderStatus',
'status_updated_date_time' => 'StatusUpdatedDateTime',
'notification_email_list' => 'NotificationEmailList',    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'seller_fulfillment_order_id' => 'setSellerFulfillmentOrderId',
'marketplace_id' => 'setMarketplaceId',
'displayable_order_id' => 'setDisplayableOrderId',
'displayable_order_date_time' => 'setDisplayableOrderDateTime',
'displayable_order_comment' => 'setDisplayableOrderComment',
'shipping_speed_category' => 'setShippingSpeedCategory',
'delivery_window' => 'setDeliveryWindow',
'destination_address' => 'setDestinationAddress',
'fulfillment_action' => 'setFulfillmentAction',
'fulfillment_policy' => 'setFulfillmentPolicy',
'fulfillment_method' => 'setFulfillmentMethod',
'cod_settings' => 'setCodSettings',
'received_date_time' => 'setReceivedDateTime',
'fulfillment_order_status' => 'setFulfillmentOrderStatus',
'status_updated_date_time' => 'setStatusUpdatedDateTime',
'notification_email_list' => 'setNotificationEmailList',    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'seller_fulfillment_order_id' => 'getSellerFulfillmentOrderId',
'marketplace_id' => 'getMarketplaceId',
'displayable_order_id' => 'getDisplayableOrderId',
'displayable_order_date_time' => 'getDisplayableOrderDateTime',
'displayable_order_comment' => 'getDisplayableOrderComment',
'shipping_speed_category' => 'getShippingSpeedCategory',
'delivery_window' => 'getDeliveryWindow',
'destination_address' => 'getDestinationAddress',
'fulfillment_action' => 'getFulfillmentAction',
'fulfillment_policy' => 'getFulfillmentPolicy',
'fulfillment_method' => 'getFulfillmentMethod',
'cod_settings' => 'getCodSettings',
'received_date_time' => 'getReceivedDateTime',
'fulfillment_order_status' => 'getFulfillmentOrderStatus',
'status_updated_date_time' => 'getStatusUpdatedDateTime',
'notification_email_list' => 'getNotificationEmailList',    ];

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
        $this->container['seller_fulfillment_order_id'] = isset($data['seller_fulfillment_order_id']) ? $data['seller_fulfillment_order_id'] : null;
        $this->container['marketplace_id'] = isset($data['marketplace_id']) ? $data['marketplace_id'] : null;
        $this->container['displayable_order_id'] = isset($data['displayable_order_id']) ? $data['displayable_order_id'] : null;
        $this->container['displayable_order_date_time'] = isset($data['displayable_order_date_time']) ? $data['displayable_order_date_time'] : null;
        $this->container['displayable_order_comment'] = isset($data['displayable_order_comment']) ? $data['displayable_order_comment'] : null;
        $this->container['shipping_speed_category'] = isset($data['shipping_speed_category']) ? $data['shipping_speed_category'] : null;
        $this->container['delivery_window'] = isset($data['delivery_window']) ? $data['delivery_window'] : null;
        $this->container['destination_address'] = isset($data['destination_address']) ? $data['destination_address'] : null;
        $this->container['fulfillment_action'] = isset($data['fulfillment_action']) ? $data['fulfillment_action'] : null;
        $this->container['fulfillment_policy'] = isset($data['fulfillment_policy']) ? $data['fulfillment_policy'] : null;
        $this->container['fulfillment_method'] = isset($data['fulfillment_method']) ? $data['fulfillment_method'] : null;
        $this->container['cod_settings'] = isset($data['cod_settings']) ? $data['cod_settings'] : null;
        $this->container['received_date_time'] = isset($data['received_date_time']) ? $data['received_date_time'] : null;
        $this->container['fulfillment_order_status'] = isset($data['fulfillment_order_status']) ? $data['fulfillment_order_status'] : null;
        $this->container['status_updated_date_time'] = isset($data['status_updated_date_time']) ? $data['status_updated_date_time'] : null;
        $this->container['notification_email_list'] = isset($data['notification_email_list']) ? $data['notification_email_list'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (null === $this->container['seller_fulfillment_order_id']) {
            $invalidProperties[] = "'seller_fulfillment_order_id' can't be null";
        }
        if (null === $this->container['marketplace_id']) {
            $invalidProperties[] = "'marketplace_id' can't be null";
        }
        if (null === $this->container['displayable_order_id']) {
            $invalidProperties[] = "'displayable_order_id' can't be null";
        }
        if (null === $this->container['displayable_order_date_time']) {
            $invalidProperties[] = "'displayable_order_date_time' can't be null";
        }
        if (null === $this->container['displayable_order_comment']) {
            $invalidProperties[] = "'displayable_order_comment' can't be null";
        }
        if (null === $this->container['shipping_speed_category']) {
            $invalidProperties[] = "'shipping_speed_category' can't be null";
        }
        if (null === $this->container['destination_address']) {
            $invalidProperties[] = "'destination_address' can't be null";
        }
        if (null === $this->container['received_date_time']) {
            $invalidProperties[] = "'received_date_time' can't be null";
        }
        if (null === $this->container['fulfillment_order_status']) {
            $invalidProperties[] = "'fulfillment_order_status' can't be null";
        }
        if (null === $this->container['status_updated_date_time']) {
            $invalidProperties[] = "'status_updated_date_time' can't be null";
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
     * Gets seller_fulfillment_order_id.
     *
     * @return string
     */
    public function getSellerFulfillmentOrderId()
    {
        return $this->container['seller_fulfillment_order_id'];
    }

    /**
     * Sets seller_fulfillment_order_id.
     *
     * @param string $seller_fulfillment_order_id The fulfillment order identifier submitted with the createFulfillmentOrder operation.
     *
     * @return $this
     */
    public function setSellerFulfillmentOrderId($seller_fulfillment_order_id)
    {
        $this->container['seller_fulfillment_order_id'] = $seller_fulfillment_order_id;

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
     * @param string $marketplace_id The identifier for the marketplace the fulfillment order is placed against.
     *
     * @return $this
     */
    public function setMarketplaceId($marketplace_id)
    {
        $this->container['marketplace_id'] = $marketplace_id;

        return $this;
    }

    /**
     * Gets displayable_order_id.
     *
     * @return string
     */
    public function getDisplayableOrderId()
    {
        return $this->container['displayable_order_id'];
    }

    /**
     * Sets displayable_order_id.
     *
     * @param string $displayable_order_id A fulfillment order identifier submitted with the createFulfillmentOrder operation. Displays as the order identifier in recipient-facing materials such as the packing slip.
     *
     * @return $this
     */
    public function setDisplayableOrderId($displayable_order_id)
    {
        $this->container['displayable_order_id'] = $displayable_order_id;

        return $this;
    }

    /**
     * Gets displayable_order_date_time.
     *
     * @return \Swagger\Client\Models\Timestamp
     */
    public function getDisplayableOrderDateTime()
    {
        return $this->container['displayable_order_date_time'];
    }

    /**
     * Sets displayable_order_date_time.
     *
     * @param \Swagger\Client\Models\Timestamp $displayable_order_date_time displayable_order_date_time
     *
     * @return $this
     */
    public function setDisplayableOrderDateTime($displayable_order_date_time)
    {
        $this->container['displayable_order_date_time'] = $displayable_order_date_time;

        return $this;
    }

    /**
     * Gets displayable_order_comment.
     *
     * @return string
     */
    public function getDisplayableOrderComment()
    {
        return $this->container['displayable_order_comment'];
    }

    /**
     * Sets displayable_order_comment.
     *
     * @param string $displayable_order_comment A text block submitted with the createFulfillmentOrder operation. Displays in recipient-facing materials such as the packing slip.
     *
     * @return $this
     */
    public function setDisplayableOrderComment($displayable_order_comment)
    {
        $this->container['displayable_order_comment'] = $displayable_order_comment;

        return $this;
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
     * Gets delivery_window.
     *
     * @return \Swagger\Client\Models\DeliveryWindow
     */
    public function getDeliveryWindow()
    {
        return $this->container['delivery_window'];
    }

    /**
     * Sets delivery_window.
     *
     * @param \Swagger\Client\Models\DeliveryWindow $delivery_window delivery_window
     *
     * @return $this
     */
    public function setDeliveryWindow($delivery_window)
    {
        $this->container['delivery_window'] = $delivery_window;

        return $this;
    }

    /**
     * Gets destination_address.
     *
     * @return \Swagger\Client\Models\Address
     */
    public function getDestinationAddress()
    {
        return $this->container['destination_address'];
    }

    /**
     * Sets destination_address.
     *
     * @param \Swagger\Client\Models\Address $destination_address destination_address
     *
     * @return $this
     */
    public function setDestinationAddress($destination_address)
    {
        $this->container['destination_address'] = $destination_address;

        return $this;
    }

    /**
     * Gets fulfillment_action.
     *
     * @return \Swagger\Client\Models\FulfillmentAction
     */
    public function getFulfillmentAction()
    {
        return $this->container['fulfillment_action'];
    }

    /**
     * Sets fulfillment_action.
     *
     * @param \Swagger\Client\Models\FulfillmentAction $fulfillment_action fulfillment_action
     *
     * @return $this
     */
    public function setFulfillmentAction($fulfillment_action)
    {
        $this->container['fulfillment_action'] = $fulfillment_action;

        return $this;
    }

    /**
     * Gets fulfillment_policy.
     *
     * @return \Swagger\Client\Models\FulfillmentPolicy
     */
    public function getFulfillmentPolicy()
    {
        return $this->container['fulfillment_policy'];
    }

    /**
     * Sets fulfillment_policy.
     *
     * @param \Swagger\Client\Models\FulfillmentPolicy $fulfillment_policy fulfillment_policy
     *
     * @return $this
     */
    public function setFulfillmentPolicy($fulfillment_policy)
    {
        $this->container['fulfillment_policy'] = $fulfillment_policy;

        return $this;
    }

    /**
     * Gets fulfillment_method.
     *
     * @return string
     */
    public function getFulfillmentMethod()
    {
        return $this->container['fulfillment_method'];
    }

    /**
     * Sets fulfillment_method.
     *
     * @param string $fulfillment_method Indicates the intended recipient channel for the order.
     *
     * @return $this
     */
    public function setFulfillmentMethod($fulfillment_method)
    {
        $this->container['fulfillment_method'] = $fulfillment_method;

        return $this;
    }

    /**
     * Gets cod_settings.
     *
     * @return \Swagger\Client\Models\CODSettings
     */
    public function getCodSettings()
    {
        return $this->container['cod_settings'];
    }

    /**
     * Sets cod_settings.
     *
     * @param \Swagger\Client\Models\CODSettings $cod_settings cod_settings
     *
     * @return $this
     */
    public function setCodSettings($cod_settings)
    {
        $this->container['cod_settings'] = $cod_settings;

        return $this;
    }

    /**
     * Gets received_date_time.
     *
     * @return \Swagger\Client\Models\Timestamp
     */
    public function getReceivedDateTime()
    {
        return $this->container['received_date_time'];
    }

    /**
     * Sets received_date_time.
     *
     * @param \Swagger\Client\Models\Timestamp $received_date_time received_date_time
     *
     * @return $this
     */
    public function setReceivedDateTime($received_date_time)
    {
        $this->container['received_date_time'] = $received_date_time;

        return $this;
    }

    /**
     * Gets fulfillment_order_status.
     *
     * @return \Swagger\Client\Models\FulfillmentOrderStatus
     */
    public function getFulfillmentOrderStatus()
    {
        return $this->container['fulfillment_order_status'];
    }

    /**
     * Sets fulfillment_order_status.
     *
     * @param \Swagger\Client\Models\FulfillmentOrderStatus $fulfillment_order_status fulfillment_order_status
     *
     * @return $this
     */
    public function setFulfillmentOrderStatus($fulfillment_order_status)
    {
        $this->container['fulfillment_order_status'] = $fulfillment_order_status;

        return $this;
    }

    /**
     * Gets status_updated_date_time.
     *
     * @return \Swagger\Client\Models\Timestamp
     */
    public function getStatusUpdatedDateTime()
    {
        return $this->container['status_updated_date_time'];
    }

    /**
     * Sets status_updated_date_time.
     *
     * @param \Swagger\Client\Models\Timestamp $status_updated_date_time status_updated_date_time
     *
     * @return $this
     */
    public function setStatusUpdatedDateTime($status_updated_date_time)
    {
        $this->container['status_updated_date_time'] = $status_updated_date_time;

        return $this;
    }

    /**
     * Gets notification_email_list.
     *
     * @return \Swagger\Client\Models\NotificationEmailList
     */
    public function getNotificationEmailList()
    {
        return $this->container['notification_email_list'];
    }

    /**
     * Sets notification_email_list.
     *
     * @param \Swagger\Client\Models\NotificationEmailList $notification_email_list notification_email_list
     *
     * @return $this
     */
    public function setNotificationEmailList($notification_email_list)
    {
        $this->container['notification_email_list'] = $notification_email_list;

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
