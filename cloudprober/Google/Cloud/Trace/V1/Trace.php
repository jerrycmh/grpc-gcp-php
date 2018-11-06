<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/cloudtrace/v1/trace.proto

namespace Google\Cloud\Trace\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A trace describes how long it takes for an application to perform an
 * operation. It consists of a set of spans, each of which represent a single
 * timed event within the operation.
 *
 * Generated from protobuf message <code>google.devtools.cloudtrace.v1.Trace</code>
 */
class Trace extends \Google\Protobuf\Internal\Message
{
    /**
     * Project ID of the Cloud project where the trace data is stored.
     *
     * Generated from protobuf field <code>string project_id = 1;</code>
     */
    private $project_id = '';
    /**
     * Globally unique identifier for the trace. This identifier is a 128-bit
     * numeric value formatted as a 32-byte hex string.
     *
     * Generated from protobuf field <code>string trace_id = 2;</code>
     */
    private $trace_id = '';
    /**
     * Collection of spans in the trace.
     *
     * Generated from protobuf field <code>repeated .google.devtools.cloudtrace.v1.TraceSpan spans = 3;</code>
     */
    private $spans;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $project_id
     *           Project ID of the Cloud project where the trace data is stored.
     *     @type string $trace_id
     *           Globally unique identifier for the trace. This identifier is a 128-bit
     *           numeric value formatted as a 32-byte hex string.
     *     @type \Google\Cloud\Trace\V1\TraceSpan[]|\Google\Protobuf\Internal\RepeatedField $spans
     *           Collection of spans in the trace.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Devtools\Cloudtrace\V1\Trace::initOnce();
        parent::__construct($data);
    }

    /**
     * Project ID of the Cloud project where the trace data is stored.
     *
     * Generated from protobuf field <code>string project_id = 1;</code>
     * @return string
     */
    public function getProjectId()
    {
        return $this->project_id;
    }

    /**
     * Project ID of the Cloud project where the trace data is stored.
     *
     * Generated from protobuf field <code>string project_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setProjectId($var)
    {
        GPBUtil::checkString($var, True);
        $this->project_id = $var;

        return $this;
    }

    /**
     * Globally unique identifier for the trace. This identifier is a 128-bit
     * numeric value formatted as a 32-byte hex string.
     *
     * Generated from protobuf field <code>string trace_id = 2;</code>
     * @return string
     */
    public function getTraceId()
    {
        return $this->trace_id;
    }

    /**
     * Globally unique identifier for the trace. This identifier is a 128-bit
     * numeric value formatted as a 32-byte hex string.
     *
     * Generated from protobuf field <code>string trace_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setTraceId($var)
    {
        GPBUtil::checkString($var, True);
        $this->trace_id = $var;

        return $this;
    }

    /**
     * Collection of spans in the trace.
     *
     * Generated from protobuf field <code>repeated .google.devtools.cloudtrace.v1.TraceSpan spans = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSpans()
    {
        return $this->spans;
    }

    /**
     * Collection of spans in the trace.
     *
     * Generated from protobuf field <code>repeated .google.devtools.cloudtrace.v1.TraceSpan spans = 3;</code>
     * @param \Google\Cloud\Trace\V1\TraceSpan[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSpans($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Trace\V1\TraceSpan::class);
        $this->spans = $arr;

        return $this;
    }

}

