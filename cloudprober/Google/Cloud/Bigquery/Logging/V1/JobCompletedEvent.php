<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/bigquery/logging/v1/audit_data.proto

namespace Google\Cloud\Bigquery\Logging\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Query job completed event.
 *
 * Generated from protobuf message <code>google.cloud.bigquery.logging.v1.JobCompletedEvent</code>
 */
class JobCompletedEvent extends \Google\Protobuf\Internal\Message
{
    /**
     * Name of the event.
     *
     * Generated from protobuf field <code>string event_name = 1;</code>
     */
    private $event_name = '';
    /**
     * Job information.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.logging.v1.Job job = 2;</code>
     */
    private $job = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $event_name
     *           Name of the event.
     *     @type \Google\Cloud\Bigquery\Logging\V1\Job $job
     *           Job information.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Bigquery\Logging\V1\AuditData::initOnce();
        parent::__construct($data);
    }

    /**
     * Name of the event.
     *
     * Generated from protobuf field <code>string event_name = 1;</code>
     * @return string
     */
    public function getEventName()
    {
        return $this->event_name;
    }

    /**
     * Name of the event.
     *
     * Generated from protobuf field <code>string event_name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setEventName($var)
    {
        GPBUtil::checkString($var, True);
        $this->event_name = $var;

        return $this;
    }

    /**
     * Job information.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.logging.v1.Job job = 2;</code>
     * @return \Google\Cloud\Bigquery\Logging\V1\Job
     */
    public function getJob()
    {
        return $this->job;
    }

    /**
     * Job information.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.logging.v1.Job job = 2;</code>
     * @param \Google\Cloud\Bigquery\Logging\V1\Job $var
     * @return $this
     */
    public function setJob($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Bigquery\Logging\V1\Job::class);
        $this->job = $var;

        return $this;
    }

}

