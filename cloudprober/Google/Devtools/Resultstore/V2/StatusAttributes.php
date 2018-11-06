<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/resultstore/v2/common.proto

namespace Google\Devtools\Resultstore\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Describes the status of a resource in both enum and string form.
 * Only use description when conveying additional info not captured in the enum
 * name.
 *
 * Generated from protobuf message <code>google.devtools.resultstore.v2.StatusAttributes</code>
 */
class StatusAttributes extends \Google\Protobuf\Internal\Message
{
    /**
     * Enum representation of the status.
     *
     * Generated from protobuf field <code>.google.devtools.resultstore.v2.Status status = 1;</code>
     */
    private $status = 0;
    /**
     * A longer description about the status.
     *
     * Generated from protobuf field <code>string description = 2;</code>
     */
    private $description = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $status
     *           Enum representation of the status.
     *     @type string $description
     *           A longer description about the status.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Devtools\Resultstore\V2\Common::initOnce();
        parent::__construct($data);
    }

    /**
     * Enum representation of the status.
     *
     * Generated from protobuf field <code>.google.devtools.resultstore.v2.Status status = 1;</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Enum representation of the status.
     *
     * Generated from protobuf field <code>.google.devtools.resultstore.v2.Status status = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \Google\Devtools\Resultstore\V2\Status::class);
        $this->status = $var;

        return $this;
    }

    /**
     * A longer description about the status.
     *
     * Generated from protobuf field <code>string description = 2;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * A longer description about the status.
     *
     * Generated from protobuf field <code>string description = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

}

