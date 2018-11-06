<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/bigquery/logging/v1/audit_data.proto

namespace Google\Cloud\Bigquery\Logging\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Dataset update request.
 *
 * Generated from protobuf message <code>google.cloud.bigquery.logging.v1.DatasetUpdateRequest</code>
 */
class DatasetUpdateRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The dataset to be updated.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.logging.v1.Dataset resource = 1;</code>
     */
    private $resource = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Bigquery\Logging\V1\Dataset $resource
     *           The dataset to be updated.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Bigquery\Logging\V1\AuditData::initOnce();
        parent::__construct($data);
    }

    /**
     * The dataset to be updated.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.logging.v1.Dataset resource = 1;</code>
     * @return \Google\Cloud\Bigquery\Logging\V1\Dataset
     */
    public function getResource()
    {
        return $this->resource;
    }

    /**
     * The dataset to be updated.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.logging.v1.Dataset resource = 1;</code>
     * @param \Google\Cloud\Bigquery\Logging\V1\Dataset $var
     * @return $this
     */
    public function setResource($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Bigquery\Logging\V1\Dataset::class);
        $this->resource = $var;

        return $this;
    }

}

