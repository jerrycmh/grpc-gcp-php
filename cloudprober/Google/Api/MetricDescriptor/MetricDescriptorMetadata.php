<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/metric.proto

namespace Google\Api\MetricDescriptor;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Additional annotations that can be used to guide the usage of a metric.
 *
 * Generated from protobuf message <code>google.api.MetricDescriptor.MetricDescriptorMetadata</code>
 */
class MetricDescriptorMetadata extends \Google\Protobuf\Internal\Message
{
    /**
     * The launch stage of the metric definition.
     *
     * Generated from protobuf field <code>.google.api.LaunchStage launch_stage = 1;</code>
     */
    private $launch_stage = 0;
    /**
     * The sampling period of metric data points. For metrics which are written
     * periodically, consecutive data points are stored at this time interval,
     * excluding data loss due to errors. Metrics with a higher granularity have
     * a smaller sampling period.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration sample_period = 2;</code>
     */
    private $sample_period = null;
    /**
     * The delay of data points caused by ingestion. Data points older than this
     * age are guaranteed to be ingested and available to be read, excluding
     * data loss due to errors.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration ingest_delay = 3;</code>
     */
    private $ingest_delay = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $launch_stage
     *           The launch stage of the metric definition.
     *     @type \Google\Protobuf\Duration $sample_period
     *           The sampling period of metric data points. For metrics which are written
     *           periodically, consecutive data points are stored at this time interval,
     *           excluding data loss due to errors. Metrics with a higher granularity have
     *           a smaller sampling period.
     *     @type \Google\Protobuf\Duration $ingest_delay
     *           The delay of data points caused by ingestion. Data points older than this
     *           age are guaranteed to be ingested and available to be read, excluding
     *           data loss due to errors.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Api\Metric::initOnce();
        parent::__construct($data);
    }

    /**
     * The launch stage of the metric definition.
     *
     * Generated from protobuf field <code>.google.api.LaunchStage launch_stage = 1;</code>
     * @return int
     */
    public function getLaunchStage()
    {
        return $this->launch_stage;
    }

    /**
     * The launch stage of the metric definition.
     *
     * Generated from protobuf field <code>.google.api.LaunchStage launch_stage = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setLaunchStage($var)
    {
        GPBUtil::checkEnum($var, \Google\Api\LaunchStage::class);
        $this->launch_stage = $var;

        return $this;
    }

    /**
     * The sampling period of metric data points. For metrics which are written
     * periodically, consecutive data points are stored at this time interval,
     * excluding data loss due to errors. Metrics with a higher granularity have
     * a smaller sampling period.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration sample_period = 2;</code>
     * @return \Google\Protobuf\Duration
     */
    public function getSamplePeriod()
    {
        return $this->sample_period;
    }

    /**
     * The sampling period of metric data points. For metrics which are written
     * periodically, consecutive data points are stored at this time interval,
     * excluding data loss due to errors. Metrics with a higher granularity have
     * a smaller sampling period.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration sample_period = 2;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setSamplePeriod($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->sample_period = $var;

        return $this;
    }

    /**
     * The delay of data points caused by ingestion. Data points older than this
     * age are guaranteed to be ingested and available to be read, excluding
     * data loss due to errors.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration ingest_delay = 3;</code>
     * @return \Google\Protobuf\Duration
     */
    public function getIngestDelay()
    {
        return $this->ingest_delay;
    }

    /**
     * The delay of data points caused by ingestion. Data points older than this
     * age are guaranteed to be ingested and available to be read, excluding
     * data loss due to errors.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration ingest_delay = 3;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setIngestDelay($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->ingest_delay = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(MetricDescriptorMetadata::class, \Google\Api\MetricDescriptor_MetricDescriptorMetadata::class);

