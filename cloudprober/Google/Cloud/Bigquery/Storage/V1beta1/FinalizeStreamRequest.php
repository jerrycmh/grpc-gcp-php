<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/bigquery/storage/v1beta1/storage.proto

namespace Google\Cloud\Bigquery\Storage\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>google.cloud.bigquery.storage.v1beta1.FinalizeStreamRequest</code>
 */
class FinalizeStreamRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Stream to finalize.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.storage.v1beta1.Stream stream = 2;</code>
     */
    private $stream = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Bigquery\Storage\V1beta1\Stream $stream
     *           Stream to finalize.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Bigquery\Storage\V1Beta1\Storage::initOnce();
        parent::__construct($data);
    }

    /**
     * Stream to finalize.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.storage.v1beta1.Stream stream = 2;</code>
     * @return \Google\Cloud\Bigquery\Storage\V1beta1\Stream
     */
    public function getStream()
    {
        return $this->stream;
    }

    /**
     * Stream to finalize.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.storage.v1beta1.Stream stream = 2;</code>
     * @param \Google\Cloud\Bigquery\Storage\V1beta1\Stream $var
     * @return $this
     */
    public function setStream($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Bigquery\Storage\V1beta1\Stream::class);
        $this->stream = $var;

        return $this;
    }

}

