<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/home/graph/v1/device.proto

namespace Google\Home\Graph\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Device information.
 *
 * Generated from protobuf message <code>google.home.graph.v1.DeviceInfo</code>
 */
class DeviceInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Device manufacturer.
     *
     * Generated from protobuf field <code>string manufacturer = 1;</code>
     */
    private $manufacturer = '';
    /**
     * Device model.
     *
     * Generated from protobuf field <code>string model = 2;</code>
     */
    private $model = '';
    /**
     * Device hardware version.
     *
     * Generated from protobuf field <code>string hw_version = 3;</code>
     */
    private $hw_version = '';
    /**
     * Device software version.
     *
     * Generated from protobuf field <code>string sw_version = 4;</code>
     */
    private $sw_version = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $manufacturer
     *           Device manufacturer.
     *     @type string $model
     *           Device model.
     *     @type string $hw_version
     *           Device hardware version.
     *     @type string $sw_version
     *           Device software version.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Home\Graph\V1\Device::initOnce();
        parent::__construct($data);
    }

    /**
     * Device manufacturer.
     *
     * Generated from protobuf field <code>string manufacturer = 1;</code>
     * @return string
     */
    public function getManufacturer()
    {
        return $this->manufacturer;
    }

    /**
     * Device manufacturer.
     *
     * Generated from protobuf field <code>string manufacturer = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setManufacturer($var)
    {
        GPBUtil::checkString($var, True);
        $this->manufacturer = $var;

        return $this;
    }

    /**
     * Device model.
     *
     * Generated from protobuf field <code>string model = 2;</code>
     * @return string
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * Device model.
     *
     * Generated from protobuf field <code>string model = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setModel($var)
    {
        GPBUtil::checkString($var, True);
        $this->model = $var;

        return $this;
    }

    /**
     * Device hardware version.
     *
     * Generated from protobuf field <code>string hw_version = 3;</code>
     * @return string
     */
    public function getHwVersion()
    {
        return $this->hw_version;
    }

    /**
     * Device hardware version.
     *
     * Generated from protobuf field <code>string hw_version = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setHwVersion($var)
    {
        GPBUtil::checkString($var, True);
        $this->hw_version = $var;

        return $this;
    }

    /**
     * Device software version.
     *
     * Generated from protobuf field <code>string sw_version = 4;</code>
     * @return string
     */
    public function getSwVersion()
    {
        return $this->sw_version;
    }

    /**
     * Device software version.
     *
     * Generated from protobuf field <code>string sw_version = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setSwVersion($var)
    {
        GPBUtil::checkString($var, True);
        $this->sw_version = $var;

        return $this;
    }

}

