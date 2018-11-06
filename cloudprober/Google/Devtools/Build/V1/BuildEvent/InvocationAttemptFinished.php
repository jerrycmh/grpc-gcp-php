<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/build/v1/build_events.proto

namespace Google\Devtools\Build\V1\BuildEvent;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Notification that an invocation attempt has finished.
 *
 * Generated from protobuf message <code>google.devtools.build.v1.BuildEvent.InvocationAttemptFinished</code>
 */
class InvocationAttemptFinished extends \Google\Protobuf\Internal\Message
{
    /**
     * The exit code of the build tool.
     *
     * Generated from protobuf field <code>.google.protobuf.Int32Value exit_code = 2;</code>
     */
    private $exit_code = null;
    /**
     * Final status of the invocation.
     *
     * Generated from protobuf field <code>.google.devtools.build.v1.BuildStatus invocation_status = 3;</code>
     */
    private $invocation_status = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Int32Value $exit_code
     *           The exit code of the build tool.
     *     @type \Google\Devtools\Build\V1\BuildStatus $invocation_status
     *           Final status of the invocation.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Devtools\Build\V1\BuildEvents::initOnce();
        parent::__construct($data);
    }

    /**
     * The exit code of the build tool.
     *
     * Generated from protobuf field <code>.google.protobuf.Int32Value exit_code = 2;</code>
     * @return \Google\Protobuf\Int32Value
     */
    public function getExitCode()
    {
        return $this->exit_code;
    }

    /**
     * The exit code of the build tool.
     *
     * Generated from protobuf field <code>.google.protobuf.Int32Value exit_code = 2;</code>
     * @param \Google\Protobuf\Int32Value $var
     * @return $this
     */
    public function setExitCode($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int32Value::class);
        $this->exit_code = $var;

        return $this;
    }

    /**
     * Final status of the invocation.
     *
     * Generated from protobuf field <code>.google.devtools.build.v1.BuildStatus invocation_status = 3;</code>
     * @return \Google\Devtools\Build\V1\BuildStatus
     */
    public function getInvocationStatus()
    {
        return $this->invocation_status;
    }

    /**
     * Final status of the invocation.
     *
     * Generated from protobuf field <code>.google.devtools.build.v1.BuildStatus invocation_status = 3;</code>
     * @param \Google\Devtools\Build\V1\BuildStatus $var
     * @return $this
     */
    public function setInvocationStatus($var)
    {
        GPBUtil::checkMessage($var, \Google\Devtools\Build\V1\BuildStatus::class);
        $this->invocation_status = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(InvocationAttemptFinished::class, \Google\Devtools\Build\V1\BuildEvent_InvocationAttemptFinished::class);

