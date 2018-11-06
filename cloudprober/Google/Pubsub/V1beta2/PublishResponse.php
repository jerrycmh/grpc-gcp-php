<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/pubsub/v1beta2/pubsub.proto

namespace Google\Pubsub\V1beta2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response for the Publish method.
 *
 * Generated from protobuf message <code>google.pubsub.v1beta2.PublishResponse</code>
 */
class PublishResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The server-assigned ID of each published message, in the same order as
     * the messages in the request. IDs are guaranteed to be unique within
     * the topic.
     *
     * Generated from protobuf field <code>repeated string message_ids = 1;</code>
     */
    private $message_ids;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $message_ids
     *           The server-assigned ID of each published message, in the same order as
     *           the messages in the request. IDs are guaranteed to be unique within
     *           the topic.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Pubsub\V1Beta2\Pubsub::initOnce();
        parent::__construct($data);
    }

    /**
     * The server-assigned ID of each published message, in the same order as
     * the messages in the request. IDs are guaranteed to be unique within
     * the topic.
     *
     * Generated from protobuf field <code>repeated string message_ids = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMessageIds()
    {
        return $this->message_ids;
    }

    /**
     * The server-assigned ID of each published message, in the same order as
     * the messages in the request. IDs are guaranteed to be unique within
     * the topic.
     *
     * Generated from protobuf field <code>repeated string message_ids = 1;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMessageIds($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->message_ids = $arr;

        return $this;
    }

}

