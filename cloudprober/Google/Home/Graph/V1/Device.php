<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/home/graph/v1/device.proto

namespace Google\Home\Graph\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Third-party partner's device definition.
 *
 * Generated from protobuf message <code>google.home.graph.v1.Device</code>
 */
class Device extends \Google\Protobuf\Internal\Message
{
    /**
     * Third-party partner's device ID.
     *
     * Generated from protobuf field <code>string id = 1;</code>
     */
    private $id = '';
    /**
     * Hardware type of the device (e.g. light, outlet, etc).
     *
     * Generated from protobuf field <code>string type = 2;</code>
     */
    private $type = '';
    /**
     * Traits supported by the device.
     *
     * Generated from protobuf field <code>repeated string traits = 3;</code>
     */
    private $traits;
    /**
     * Name of the device given by the third party. This includes names given to
     * the device via third party device manufacturer's app, model names for the
     * device, etc.
     *
     * Generated from protobuf field <code>.google.home.graph.v1.DeviceNames name = 4;</code>
     */
    private $name = null;
    /**
     * Indicates whether the state of this device is being reported to Google
     * through ReportStateAndNotification call.
     *
     * Generated from protobuf field <code>bool will_report_state = 5;</code>
     */
    private $will_report_state = false;
    /**
     * If the third-party partner's cloud configuration includes placing devices
     * in rooms, the name of the room can be provided here.
     *
     * Generated from protobuf field <code>string room_hint = 6;</code>
     */
    private $room_hint = '';
    /**
     * As in roomHint, for structures that users set up in the partner's system.
     *
     * Generated from protobuf field <code>string structure_hint = 7;</code>
     */
    private $structure_hint = '';
    /**
     * Device manufacturer, model, hardware version, and software version.
     *
     * Generated from protobuf field <code>.google.home.graph.v1.DeviceInfo device_info = 8;</code>
     */
    private $device_info = null;
    /**
     * Attributes for the traits supported by the device.
     *
     * Generated from protobuf field <code>.google.protobuf.Struct attributes = 9;</code>
     */
    private $attributes = null;
    /**
     * Custom JSON data provided by the manufacturer and attached to QUERY and
     * EXECUTE requests in AoG.
     *
     * Generated from protobuf field <code>string custom_data = 10;</code>
     */
    private $custom_data = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *           Third-party partner's device ID.
     *     @type string $type
     *           Hardware type of the device (e.g. light, outlet, etc).
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $traits
     *           Traits supported by the device.
     *     @type \Google\Home\Graph\V1\DeviceNames $name
     *           Name of the device given by the third party. This includes names given to
     *           the device via third party device manufacturer's app, model names for the
     *           device, etc.
     *     @type bool $will_report_state
     *           Indicates whether the state of this device is being reported to Google
     *           through ReportStateAndNotification call.
     *     @type string $room_hint
     *           If the third-party partner's cloud configuration includes placing devices
     *           in rooms, the name of the room can be provided here.
     *     @type string $structure_hint
     *           As in roomHint, for structures that users set up in the partner's system.
     *     @type \Google\Home\Graph\V1\DeviceInfo $device_info
     *           Device manufacturer, model, hardware version, and software version.
     *     @type \Google\Protobuf\Struct $attributes
     *           Attributes for the traits supported by the device.
     *     @type string $custom_data
     *           Custom JSON data provided by the manufacturer and attached to QUERY and
     *           EXECUTE requests in AoG.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Home\Graph\V1\Device::initOnce();
        parent::__construct($data);
    }

    /**
     * Third-party partner's device ID.
     *
     * Generated from protobuf field <code>string id = 1;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Third-party partner's device ID.
     *
     * Generated from protobuf field <code>string id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, True);
        $this->id = $var;

        return $this;
    }

    /**
     * Hardware type of the device (e.g. light, outlet, etc).
     *
     * Generated from protobuf field <code>string type = 2;</code>
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Hardware type of the device (e.g. light, outlet, etc).
     *
     * Generated from protobuf field <code>string type = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkString($var, True);
        $this->type = $var;

        return $this;
    }

    /**
     * Traits supported by the device.
     *
     * Generated from protobuf field <code>repeated string traits = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTraits()
    {
        return $this->traits;
    }

    /**
     * Traits supported by the device.
     *
     * Generated from protobuf field <code>repeated string traits = 3;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTraits($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->traits = $arr;

        return $this;
    }

    /**
     * Name of the device given by the third party. This includes names given to
     * the device via third party device manufacturer's app, model names for the
     * device, etc.
     *
     * Generated from protobuf field <code>.google.home.graph.v1.DeviceNames name = 4;</code>
     * @return \Google\Home\Graph\V1\DeviceNames
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Name of the device given by the third party. This includes names given to
     * the device via third party device manufacturer's app, model names for the
     * device, etc.
     *
     * Generated from protobuf field <code>.google.home.graph.v1.DeviceNames name = 4;</code>
     * @param \Google\Home\Graph\V1\DeviceNames $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkMessage($var, \Google\Home\Graph\V1\DeviceNames::class);
        $this->name = $var;

        return $this;
    }

    /**
     * Indicates whether the state of this device is being reported to Google
     * through ReportStateAndNotification call.
     *
     * Generated from protobuf field <code>bool will_report_state = 5;</code>
     * @return bool
     */
    public function getWillReportState()
    {
        return $this->will_report_state;
    }

    /**
     * Indicates whether the state of this device is being reported to Google
     * through ReportStateAndNotification call.
     *
     * Generated from protobuf field <code>bool will_report_state = 5;</code>
     * @param bool $var
     * @return $this
     */
    public function setWillReportState($var)
    {
        GPBUtil::checkBool($var);
        $this->will_report_state = $var;

        return $this;
    }

    /**
     * If the third-party partner's cloud configuration includes placing devices
     * in rooms, the name of the room can be provided here.
     *
     * Generated from protobuf field <code>string room_hint = 6;</code>
     * @return string
     */
    public function getRoomHint()
    {
        return $this->room_hint;
    }

    /**
     * If the third-party partner's cloud configuration includes placing devices
     * in rooms, the name of the room can be provided here.
     *
     * Generated from protobuf field <code>string room_hint = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setRoomHint($var)
    {
        GPBUtil::checkString($var, True);
        $this->room_hint = $var;

        return $this;
    }

    /**
     * As in roomHint, for structures that users set up in the partner's system.
     *
     * Generated from protobuf field <code>string structure_hint = 7;</code>
     * @return string
     */
    public function getStructureHint()
    {
        return $this->structure_hint;
    }

    /**
     * As in roomHint, for structures that users set up in the partner's system.
     *
     * Generated from protobuf field <code>string structure_hint = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setStructureHint($var)
    {
        GPBUtil::checkString($var, True);
        $this->structure_hint = $var;

        return $this;
    }

    /**
     * Device manufacturer, model, hardware version, and software version.
     *
     * Generated from protobuf field <code>.google.home.graph.v1.DeviceInfo device_info = 8;</code>
     * @return \Google\Home\Graph\V1\DeviceInfo
     */
    public function getDeviceInfo()
    {
        return $this->device_info;
    }

    /**
     * Device manufacturer, model, hardware version, and software version.
     *
     * Generated from protobuf field <code>.google.home.graph.v1.DeviceInfo device_info = 8;</code>
     * @param \Google\Home\Graph\V1\DeviceInfo $var
     * @return $this
     */
    public function setDeviceInfo($var)
    {
        GPBUtil::checkMessage($var, \Google\Home\Graph\V1\DeviceInfo::class);
        $this->device_info = $var;

        return $this;
    }

    /**
     * Attributes for the traits supported by the device.
     *
     * Generated from protobuf field <code>.google.protobuf.Struct attributes = 9;</code>
     * @return \Google\Protobuf\Struct
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

    /**
     * Attributes for the traits supported by the device.
     *
     * Generated from protobuf field <code>.google.protobuf.Struct attributes = 9;</code>
     * @param \Google\Protobuf\Struct $var
     * @return $this
     */
    public function setAttributes($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Struct::class);
        $this->attributes = $var;

        return $this;
    }

    /**
     * Custom JSON data provided by the manufacturer and attached to QUERY and
     * EXECUTE requests in AoG.
     *
     * Generated from protobuf field <code>string custom_data = 10;</code>
     * @return string
     */
    public function getCustomData()
    {
        return $this->custom_data;
    }

    /**
     * Custom JSON data provided by the manufacturer and attached to QUERY and
     * EXECUTE requests in AoG.
     *
     * Generated from protobuf field <code>string custom_data = 10;</code>
     * @param string $var
     * @return $this
     */
    public function setCustomData($var)
    {
        GPBUtil::checkString($var, True);
        $this->custom_data = $var;

        return $this;
    }

}

