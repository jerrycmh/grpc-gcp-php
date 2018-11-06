<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/pubsub/v1beta2/pubsub.proto

namespace Google\Pubsub\V1beta2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A message data and its attributes.
 *
 * Generated from protobuf message <code>google.pubsub.v1beta2.PubsubMessage</code>
 */
class PubsubMessage extends \Google\Protobuf\Internal\Message
{
    /**
     * The message payload. For JSON requests, the value of this field must be
     * base64-encoded.
     *
     * Generated from protobuf field <code>bytes data = 1;</code>
     */
    private $data = '';
    /**
     * Optional attributes for this message.
     *
     * Generated from protobuf field <code>map<string, string> attributes = 2;</code>
     */
    private $attributes;
    /**
     * ID of this message assigned by the server at publication time. Guaranteed
     * to be unique within the topic. This value may be read by a subscriber
     * that receives a PubsubMessage via a Pull call or a push delivery. It must
     * not be populated by a publisher in a Publish call.
     *
     * Generated from protobuf field <code>string message_id = 3;</code>
     */
    private $message_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $data
     *           The message payload. For JSON requests, the value of this field must be
     *           base64-encoded.
     *     @type array|\Google\Protobuf\Internal\MapField $attributes
     *           Optional attributes for this message.
     *     @type string $message_id
     *           ID of this message assigned by the server at publication time. Guaranteed
     *           to be unique within the topic. This value may be read by a subscriber
     *           that receives a PubsubMessage via a Pull call or a push delivery. It must
     *           not be populated by a publisher in a Publish call.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Pubsub\V1Beta2\Pubsub::initOnce();
        parent::__construct($data);
    }

    /**
     * The message payload. For JSON requests, the value of this field must be
     * base64-encoded.
     *
     * Generated from protobuf field <code>bytes data = 1;</code>
     * @return string
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * The message payload. For JSON requests, the value of this field must be
     * base64-encoded.
     *
     * Generated from protobuf field <code>bytes data = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setData($var)
    {
        GPBUtil::checkString($var, False);
        $this->data = $var;

        return $this;
    }

    /**
     * Optional attributes for this message.
     *
     * Generated from protobuf field <code>map<string, string> attributes = 2;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

    /**
     * Optional attributes for this message.
     *
     * Generated from protobuf field <code>map<string, string> attributes = 2;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setAttributes($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->attributes = $arr;

        return $this;
    }

    /**
     * ID of this message assigned by the server at publication time. Guaranteed
     * to be unique within the topic. This value may be read by a subscriber
     * that receives a PubsubMessage via a Pull call or a push delivery. It must
     * not be populated by a publisher in a Publish call.
     *
     * Generated from protobuf field <code>string message_id = 3;</code>
     * @return string
     */
    public function getMessageId()
    {
        return $this->message_id;
    }

    /**
     * ID of this message assigned by the server at publication time. Guaranteed
     * to be unique within the topic. This value may be read by a subscriber
     * that receives a PubsubMessage via a Pull call or a push delivery. It must
     * not be populated by a publisher in a Publish call.
     *
     * Generated from protobuf field <code>string message_id = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setMessageId($var)
    {
        GPBUtil::checkString($var, True);
        $this->message_id = $var;

        return $this;
    }

}

