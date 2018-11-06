<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/resultstore/v2/target.proto

namespace Google\Devtools\Resultstore\V2\Target;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The resource ID components that identify the Target.
 *
 * Generated from protobuf message <code>google.devtools.resultstore.v2.Target.Id</code>
 */
class Id extends \Google\Protobuf\Internal\Message
{
    /**
     * The Invocation ID.
     *
     * Generated from protobuf field <code>string invocation_id = 1;</code>
     */
    private $invocation_id = '';
    /**
     * The Target ID.
     *
     * Generated from protobuf field <code>string target_id = 2;</code>
     */
    private $target_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $invocation_id
     *           The Invocation ID.
     *     @type string $target_id
     *           The Target ID.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Devtools\Resultstore\V2\Target::initOnce();
        parent::__construct($data);
    }

    /**
     * The Invocation ID.
     *
     * Generated from protobuf field <code>string invocation_id = 1;</code>
     * @return string
     */
    public function getInvocationId()
    {
        return $this->invocation_id;
    }

    /**
     * The Invocation ID.
     *
     * Generated from protobuf field <code>string invocation_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setInvocationId($var)
    {
        GPBUtil::checkString($var, True);
        $this->invocation_id = $var;

        return $this;
    }

    /**
     * The Target ID.
     *
     * Generated from protobuf field <code>string target_id = 2;</code>
     * @return string
     */
    public function getTargetId()
    {
        return $this->target_id;
    }

    /**
     * The Target ID.
     *
     * Generated from protobuf field <code>string target_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setTargetId($var)
    {
        GPBUtil::checkString($var, True);
        $this->target_id = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Id::class, \Google\Devtools\Resultstore\V2\Target_Id::class);

