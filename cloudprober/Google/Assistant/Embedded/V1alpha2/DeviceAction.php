<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/assistant/embedded/v1alpha2/embedded_assistant.proto

namespace Google\Assistant\Embedded\V1alpha2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The response returned to the device if the user has triggered a Device
 * Action. For example, a device which supports the query *Turn on the light*
 * would receive a `DeviceAction` with a JSON payload containing the semantics
 * of the request.
 *
 * Generated from protobuf message <code>google.assistant.embedded.v1alpha2.DeviceAction</code>
 */
class DeviceAction extends \Google\Protobuf\Internal\Message
{
    /**
     * JSON containing the device command response generated from the triggered
     * Device Action grammar. The format is given by the
     * `action.devices.EXECUTE` intent for a given
     * [trait](https://developers.google.com/assistant/sdk/reference/traits/).
     *
     * Generated from protobuf field <code>string device_request_json = 1;</code>
     */
    private $device_request_json = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $device_request_json
     *           JSON containing the device command response generated from the triggered
     *           Device Action grammar. The format is given by the
     *           `action.devices.EXECUTE` intent for a given
     *           [trait](https://developers.google.com/assistant/sdk/reference/traits/).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Assistant\Embedded\V1Alpha2\EmbeddedAssistant::initOnce();
        parent::__construct($data);
    }

    /**
     * JSON containing the device command response generated from the triggered
     * Device Action grammar. The format is given by the
     * `action.devices.EXECUTE` intent for a given
     * [trait](https://developers.google.com/assistant/sdk/reference/traits/).
     *
     * Generated from protobuf field <code>string device_request_json = 1;</code>
     * @return string
     */
    public function getDeviceRequestJson()
    {
        return $this->device_request_json;
    }

    /**
     * JSON containing the device command response generated from the triggered
     * Device Action grammar. The format is given by the
     * `action.devices.EXECUTE` intent for a given
     * [trait](https://developers.google.com/assistant/sdk/reference/traits/).
     *
     * Generated from protobuf field <code>string device_request_json = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setDeviceRequestJson($var)
    {
        GPBUtil::checkString($var, True);
        $this->device_request_json = $var;

        return $this;
    }

}

