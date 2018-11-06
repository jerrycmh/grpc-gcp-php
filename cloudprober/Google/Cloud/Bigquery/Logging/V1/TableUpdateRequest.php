<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/bigquery/logging/v1/audit_data.proto

namespace Google\Cloud\Bigquery\Logging\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Table update request.
 *
 * Generated from protobuf message <code>google.cloud.bigquery.logging.v1.TableUpdateRequest</code>
 */
class TableUpdateRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The table to be updated.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.logging.v1.Table resource = 1;</code>
     */
    private $resource = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Bigquery\Logging\V1\Table $resource
     *           The table to be updated.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Bigquery\Logging\V1\AuditData::initOnce();
        parent::__construct($data);
    }

    /**
     * The table to be updated.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.logging.v1.Table resource = 1;</code>
     * @return \Google\Cloud\Bigquery\Logging\V1\Table
     */
    public function getResource()
    {
        return $this->resource;
    }

    /**
     * The table to be updated.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.logging.v1.Table resource = 1;</code>
     * @param \Google\Cloud\Bigquery\Logging\V1\Table $var
     * @return $this
     */
    public function setResource($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Bigquery\Logging\V1\Table::class);
        $this->resource = $var;

        return $this;
    }

}

