<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/build/v1/publish_build_event.proto

namespace Google\Devtools\Build\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Publishes 'lifecycle events' that update the high-level state of a build:
 * - BuildEnqueued: When a build is scheduled.
 * - InvocationAttemptStarted: When work for a build starts; there can be
 *     multiple invocations for a build (e.g. retries).
 * - InvocationAttemptCompleted: When work for a build finishes.
 * - BuildFinished: When a build is finished.
 *
 * Generated from protobuf message <code>google.devtools.build.v1.PublishLifecycleEventRequest</code>
 */
class PublishLifecycleEventRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The interactivity of this build.
     *
     * Generated from protobuf field <code>.google.devtools.build.v1.PublishLifecycleEventRequest.ServiceLevel service_level = 1;</code>
     */
    private $service_level = 0;
    /**
     * The lifecycle build event. If this is a build tool event, the RPC will fail
     * with INVALID_REQUEST.
     *
     * Generated from protobuf field <code>.google.devtools.build.v1.OrderedBuildEvent build_event = 2;</code>
     */
    private $build_event = null;
    /**
     * If the next event for this build or invocation (depending on the event
     * type) hasn't been published after this duration from when {build_event}
     * is written to BES, consider this stream expired. If this field is not set,
     * BES backend will use its own default value.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration stream_timeout = 3;</code>
     */
    private $stream_timeout = null;
    /**
     * Additional information about a build request. These are define by the event
     * publishers, and the Build Event Service does not validate or interpret
     * them. They are used while notifying internal systems of new builds and
     * invocations if the OrderedBuildEvent.event type is
     * BuildEnqueued/InvocationAttemptStarted.
     *
     * Generated from protobuf field <code>repeated string notification_keywords = 4;</code>
     */
    private $notification_keywords;
    /**
     * This field identifies which project (if any) the build is associated with.
     *
     * Generated from protobuf field <code>string project_id = 6;</code>
     */
    private $project_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $service_level
     *           The interactivity of this build.
     *     @type \Google\Devtools\Build\V1\OrderedBuildEvent $build_event
     *           The lifecycle build event. If this is a build tool event, the RPC will fail
     *           with INVALID_REQUEST.
     *     @type \Google\Protobuf\Duration $stream_timeout
     *           If the next event for this build or invocation (depending on the event
     *           type) hasn't been published after this duration from when {build_event}
     *           is written to BES, consider this stream expired. If this field is not set,
     *           BES backend will use its own default value.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $notification_keywords
     *           Additional information about a build request. These are define by the event
     *           publishers, and the Build Event Service does not validate or interpret
     *           them. They are used while notifying internal systems of new builds and
     *           invocations if the OrderedBuildEvent.event type is
     *           BuildEnqueued/InvocationAttemptStarted.
     *     @type string $project_id
     *           This field identifies which project (if any) the build is associated with.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Devtools\Build\V1\PublishBuildEvent::initOnce();
        parent::__construct($data);
    }

    /**
     * The interactivity of this build.
     *
     * Generated from protobuf field <code>.google.devtools.build.v1.PublishLifecycleEventRequest.ServiceLevel service_level = 1;</code>
     * @return int
     */
    public function getServiceLevel()
    {
        return $this->service_level;
    }

    /**
     * The interactivity of this build.
     *
     * Generated from protobuf field <code>.google.devtools.build.v1.PublishLifecycleEventRequest.ServiceLevel service_level = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setServiceLevel($var)
    {
        GPBUtil::checkEnum($var, \Google\Devtools\Build\V1\PublishLifecycleEventRequest_ServiceLevel::class);
        $this->service_level = $var;

        return $this;
    }

    /**
     * The lifecycle build event. If this is a build tool event, the RPC will fail
     * with INVALID_REQUEST.
     *
     * Generated from protobuf field <code>.google.devtools.build.v1.OrderedBuildEvent build_event = 2;</code>
     * @return \Google\Devtools\Build\V1\OrderedBuildEvent
     */
    public function getBuildEvent()
    {
        return $this->build_event;
    }

    /**
     * The lifecycle build event. If this is a build tool event, the RPC will fail
     * with INVALID_REQUEST.
     *
     * Generated from protobuf field <code>.google.devtools.build.v1.OrderedBuildEvent build_event = 2;</code>
     * @param \Google\Devtools\Build\V1\OrderedBuildEvent $var
     * @return $this
     */
    public function setBuildEvent($var)
    {
        GPBUtil::checkMessage($var, \Google\Devtools\Build\V1\OrderedBuildEvent::class);
        $this->build_event = $var;

        return $this;
    }

    /**
     * If the next event for this build or invocation (depending on the event
     * type) hasn't been published after this duration from when {build_event}
     * is written to BES, consider this stream expired. If this field is not set,
     * BES backend will use its own default value.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration stream_timeout = 3;</code>
     * @return \Google\Protobuf\Duration
     */
    public function getStreamTimeout()
    {
        return $this->stream_timeout;
    }

    /**
     * If the next event for this build or invocation (depending on the event
     * type) hasn't been published after this duration from when {build_event}
     * is written to BES, consider this stream expired. If this field is not set,
     * BES backend will use its own default value.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration stream_timeout = 3;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setStreamTimeout($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->stream_timeout = $var;

        return $this;
    }

    /**
     * Additional information about a build request. These are define by the event
     * publishers, and the Build Event Service does not validate or interpret
     * them. They are used while notifying internal systems of new builds and
     * invocations if the OrderedBuildEvent.event type is
     * BuildEnqueued/InvocationAttemptStarted.
     *
     * Generated from protobuf field <code>repeated string notification_keywords = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getNotificationKeywords()
    {
        return $this->notification_keywords;
    }

    /**
     * Additional information about a build request. These are define by the event
     * publishers, and the Build Event Service does not validate or interpret
     * them. They are used while notifying internal systems of new builds and
     * invocations if the OrderedBuildEvent.event type is
     * BuildEnqueued/InvocationAttemptStarted.
     *
     * Generated from protobuf field <code>repeated string notification_keywords = 4;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setNotificationKeywords($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->notification_keywords = $arr;

        return $this;
    }

    /**
     * This field identifies which project (if any) the build is associated with.
     *
     * Generated from protobuf field <code>string project_id = 6;</code>
     * @return string
     */
    public function getProjectId()
    {
        return $this->project_id;
    }

    /**
     * This field identifies which project (if any) the build is associated with.
     *
     * Generated from protobuf field <code>string project_id = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setProjectId($var)
    {
        GPBUtil::checkString($var, True);
        $this->project_id = $var;

        return $this;
    }

}

