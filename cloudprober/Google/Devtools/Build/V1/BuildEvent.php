<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/build/v1/build_events.proto

namespace Google\Devtools\Build\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * An event representing some state change that occured in the build. This
 * message does not include field for uniquely identifying an event.
 *
 * Generated from protobuf message <code>google.devtools.build.v1.BuildEvent</code>
 */
class BuildEvent extends \Google\Protobuf\Internal\Message
{
    /**
     * The timestamp of this event.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp event_time = 1;</code>
     */
    private $event_time = null;
    protected $event;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Timestamp $event_time
     *           The timestamp of this event.
     *     @type \Google\Devtools\Build\V1\BuildEvent\InvocationAttemptStarted $invocation_attempt_started
     *           An invocation attempt has started.
     *     @type \Google\Devtools\Build\V1\BuildEvent\InvocationAttemptFinished $invocation_attempt_finished
     *           An invocation attempt has finished.
     *     @type \Google\Devtools\Build\V1\BuildEvent\BuildEnqueued $build_enqueued
     *           The build is enqueued (just inserted to the build queue or put back
     *           into the build queue due to a previous build failure).
     *     @type \Google\Devtools\Build\V1\BuildEvent\BuildFinished $build_finished
     *           The build has finished. Set when the build is terminated.
     *     @type \Google\Devtools\Build\V1\BuildEvent\ConsoleOutput $console_output
     *           An event containing printed text.
     *     @type \Google\Devtools\Build\V1\BuildEvent\BuildComponentStreamFinished $component_stream_finished
     *           Indicates the end of a build event stream (with the same StreamId) from
     *           a build component executing the requested build task.
     *           *** This field does not indicate the WatchBuild RPC is finished. ***
     *     @type \Google\Protobuf\Any $bazel_event
     *           Structured build event generated by Bazel about its execution progress.
     *     @type \Google\Protobuf\Any $build_execution_event
     *           An event that contains supplemental tool-specific information about
     *           build execution.
     *     @type \Google\Protobuf\Any $source_fetch_event
     *           An event that contains supplemental tool-specific information about
     *           source fetching.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Devtools\Build\V1\BuildEvents::initOnce();
        parent::__construct($data);
    }

    /**
     * The timestamp of this event.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp event_time = 1;</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getEventTime()
    {
        return $this->event_time;
    }

    /**
     * The timestamp of this event.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp event_time = 1;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setEventTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->event_time = $var;

        return $this;
    }

    /**
     * An invocation attempt has started.
     *
     * Generated from protobuf field <code>.google.devtools.build.v1.BuildEvent.InvocationAttemptStarted invocation_attempt_started = 51;</code>
     * @return \Google\Devtools\Build\V1\BuildEvent\InvocationAttemptStarted
     */
    public function getInvocationAttemptStarted()
    {
        return $this->readOneof(51);
    }

    /**
     * An invocation attempt has started.
     *
     * Generated from protobuf field <code>.google.devtools.build.v1.BuildEvent.InvocationAttemptStarted invocation_attempt_started = 51;</code>
     * @param \Google\Devtools\Build\V1\BuildEvent\InvocationAttemptStarted $var
     * @return $this
     */
    public function setInvocationAttemptStarted($var)
    {
        GPBUtil::checkMessage($var, \Google\Devtools\Build\V1\BuildEvent_InvocationAttemptStarted::class);
        $this->writeOneof(51, $var);

        return $this;
    }

    /**
     * An invocation attempt has finished.
     *
     * Generated from protobuf field <code>.google.devtools.build.v1.BuildEvent.InvocationAttemptFinished invocation_attempt_finished = 52;</code>
     * @return \Google\Devtools\Build\V1\BuildEvent\InvocationAttemptFinished
     */
    public function getInvocationAttemptFinished()
    {
        return $this->readOneof(52);
    }

    /**
     * An invocation attempt has finished.
     *
     * Generated from protobuf field <code>.google.devtools.build.v1.BuildEvent.InvocationAttemptFinished invocation_attempt_finished = 52;</code>
     * @param \Google\Devtools\Build\V1\BuildEvent\InvocationAttemptFinished $var
     * @return $this
     */
    public function setInvocationAttemptFinished($var)
    {
        GPBUtil::checkMessage($var, \Google\Devtools\Build\V1\BuildEvent_InvocationAttemptFinished::class);
        $this->writeOneof(52, $var);

        return $this;
    }

    /**
     * The build is enqueued (just inserted to the build queue or put back
     * into the build queue due to a previous build failure).
     *
     * Generated from protobuf field <code>.google.devtools.build.v1.BuildEvent.BuildEnqueued build_enqueued = 53;</code>
     * @return \Google\Devtools\Build\V1\BuildEvent\BuildEnqueued
     */
    public function getBuildEnqueued()
    {
        return $this->readOneof(53);
    }

    /**
     * The build is enqueued (just inserted to the build queue or put back
     * into the build queue due to a previous build failure).
     *
     * Generated from protobuf field <code>.google.devtools.build.v1.BuildEvent.BuildEnqueued build_enqueued = 53;</code>
     * @param \Google\Devtools\Build\V1\BuildEvent\BuildEnqueued $var
     * @return $this
     */
    public function setBuildEnqueued($var)
    {
        GPBUtil::checkMessage($var, \Google\Devtools\Build\V1\BuildEvent_BuildEnqueued::class);
        $this->writeOneof(53, $var);

        return $this;
    }

    /**
     * The build has finished. Set when the build is terminated.
     *
     * Generated from protobuf field <code>.google.devtools.build.v1.BuildEvent.BuildFinished build_finished = 55;</code>
     * @return \Google\Devtools\Build\V1\BuildEvent\BuildFinished
     */
    public function getBuildFinished()
    {
        return $this->readOneof(55);
    }

    /**
     * The build has finished. Set when the build is terminated.
     *
     * Generated from protobuf field <code>.google.devtools.build.v1.BuildEvent.BuildFinished build_finished = 55;</code>
     * @param \Google\Devtools\Build\V1\BuildEvent\BuildFinished $var
     * @return $this
     */
    public function setBuildFinished($var)
    {
        GPBUtil::checkMessage($var, \Google\Devtools\Build\V1\BuildEvent_BuildFinished::class);
        $this->writeOneof(55, $var);

        return $this;
    }

    /**
     * An event containing printed text.
     *
     * Generated from protobuf field <code>.google.devtools.build.v1.BuildEvent.ConsoleOutput console_output = 56;</code>
     * @return \Google\Devtools\Build\V1\BuildEvent\ConsoleOutput
     */
    public function getConsoleOutput()
    {
        return $this->readOneof(56);
    }

    /**
     * An event containing printed text.
     *
     * Generated from protobuf field <code>.google.devtools.build.v1.BuildEvent.ConsoleOutput console_output = 56;</code>
     * @param \Google\Devtools\Build\V1\BuildEvent\ConsoleOutput $var
     * @return $this
     */
    public function setConsoleOutput($var)
    {
        GPBUtil::checkMessage($var, \Google\Devtools\Build\V1\BuildEvent_ConsoleOutput::class);
        $this->writeOneof(56, $var);

        return $this;
    }

    /**
     * Indicates the end of a build event stream (with the same StreamId) from
     * a build component executing the requested build task.
     * *** This field does not indicate the WatchBuild RPC is finished. ***
     *
     * Generated from protobuf field <code>.google.devtools.build.v1.BuildEvent.BuildComponentStreamFinished component_stream_finished = 59;</code>
     * @return \Google\Devtools\Build\V1\BuildEvent\BuildComponentStreamFinished
     */
    public function getComponentStreamFinished()
    {
        return $this->readOneof(59);
    }

    /**
     * Indicates the end of a build event stream (with the same StreamId) from
     * a build component executing the requested build task.
     * *** This field does not indicate the WatchBuild RPC is finished. ***
     *
     * Generated from protobuf field <code>.google.devtools.build.v1.BuildEvent.BuildComponentStreamFinished component_stream_finished = 59;</code>
     * @param \Google\Devtools\Build\V1\BuildEvent\BuildComponentStreamFinished $var
     * @return $this
     */
    public function setComponentStreamFinished($var)
    {
        GPBUtil::checkMessage($var, \Google\Devtools\Build\V1\BuildEvent_BuildComponentStreamFinished::class);
        $this->writeOneof(59, $var);

        return $this;
    }

    /**
     * Structured build event generated by Bazel about its execution progress.
     *
     * Generated from protobuf field <code>.google.protobuf.Any bazel_event = 60;</code>
     * @return \Google\Protobuf\Any
     */
    public function getBazelEvent()
    {
        return $this->readOneof(60);
    }

    /**
     * Structured build event generated by Bazel about its execution progress.
     *
     * Generated from protobuf field <code>.google.protobuf.Any bazel_event = 60;</code>
     * @param \Google\Protobuf\Any $var
     * @return $this
     */
    public function setBazelEvent($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Any::class);
        $this->writeOneof(60, $var);

        return $this;
    }

    /**
     * An event that contains supplemental tool-specific information about
     * build execution.
     *
     * Generated from protobuf field <code>.google.protobuf.Any build_execution_event = 61;</code>
     * @return \Google\Protobuf\Any
     */
    public function getBuildExecutionEvent()
    {
        return $this->readOneof(61);
    }

    /**
     * An event that contains supplemental tool-specific information about
     * build execution.
     *
     * Generated from protobuf field <code>.google.protobuf.Any build_execution_event = 61;</code>
     * @param \Google\Protobuf\Any $var
     * @return $this
     */
    public function setBuildExecutionEvent($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Any::class);
        $this->writeOneof(61, $var);

        return $this;
    }

    /**
     * An event that contains supplemental tool-specific information about
     * source fetching.
     *
     * Generated from protobuf field <code>.google.protobuf.Any source_fetch_event = 62;</code>
     * @return \Google\Protobuf\Any
     */
    public function getSourceFetchEvent()
    {
        return $this->readOneof(62);
    }

    /**
     * An event that contains supplemental tool-specific information about
     * source fetching.
     *
     * Generated from protobuf field <code>.google.protobuf.Any source_fetch_event = 62;</code>
     * @param \Google\Protobuf\Any $var
     * @return $this
     */
    public function setSourceFetchEvent($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Any::class);
        $this->writeOneof(62, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getEvent()
    {
        return $this->whichOneof("event");
    }

}

