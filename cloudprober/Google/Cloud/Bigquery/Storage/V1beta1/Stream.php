<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/bigquery/storage/v1beta1/storage.proto

namespace Google\Cloud\Bigquery\Storage\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>google.cloud.bigquery.storage.v1beta1.Stream</code>
 */
class Stream extends \Google\Protobuf\Internal\Message
{
    /**
     * Name of the stream. In the form
     * `/projects/{project_id}/stream/{stream_id}`
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * Rows in the stream.
     *
     * Generated from protobuf field <code>int64 row_count = 2;</code>
     */
    private $row_count = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Name of the stream. In the form
     *           `/projects/{project_id}/stream/{stream_id}`
     *     @type int|string $row_count
     *           Rows in the stream.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Bigquery\Storage\V1Beta1\Storage::initOnce();
        parent::__construct($data);
    }

    /**
     * Name of the stream. In the form
     * `/projects/{project_id}/stream/{stream_id}`
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Name of the stream. In the form
     * `/projects/{project_id}/stream/{stream_id}`
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Rows in the stream.
     *
     * Generated from protobuf field <code>int64 row_count = 2;</code>
     * @return int|string
     */
    public function getRowCount()
    {
        return $this->row_count;
    }

    /**
     * Rows in the stream.
     *
     * Generated from protobuf field <code>int64 row_count = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setRowCount($var)
    {
        GPBUtil::checkInt64($var);
        $this->row_count = $var;

        return $this;
    }

}

