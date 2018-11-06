<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/firestore/admin/v1beta2/operation.proto

namespace Google\Firestore\Admin\V1beta2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Describes the progress of the operation.
 * Unit of work is generic and must be interpreted based on where [Progress][google.firestore.admin.v1beta2.Progress]
 * is used.
 *
 * Generated from protobuf message <code>google.firestore.admin.v1beta2.Progress</code>
 */
class Progress extends \Google\Protobuf\Internal\Message
{
    /**
     * The amount of work estimated.
     *
     * Generated from protobuf field <code>int64 estimated_work = 1;</code>
     */
    private $estimated_work = 0;
    /**
     * The amount of work completed.
     *
     * Generated from protobuf field <code>int64 completed_work = 2;</code>
     */
    private $completed_work = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $estimated_work
     *           The amount of work estimated.
     *     @type int|string $completed_work
     *           The amount of work completed.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Firestore\Admin\V1Beta2\Operation::initOnce();
        parent::__construct($data);
    }

    /**
     * The amount of work estimated.
     *
     * Generated from protobuf field <code>int64 estimated_work = 1;</code>
     * @return int|string
     */
    public function getEstimatedWork()
    {
        return $this->estimated_work;
    }

    /**
     * The amount of work estimated.
     *
     * Generated from protobuf field <code>int64 estimated_work = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setEstimatedWork($var)
    {
        GPBUtil::checkInt64($var);
        $this->estimated_work = $var;

        return $this;
    }

    /**
     * The amount of work completed.
     *
     * Generated from protobuf field <code>int64 completed_work = 2;</code>
     * @return int|string
     */
    public function getCompletedWork()
    {
        return $this->completed_work;
    }

    /**
     * The amount of work completed.
     *
     * Generated from protobuf field <code>int64 completed_work = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setCompletedWork($var)
    {
        GPBUtil::checkInt64($var);
        $this->completed_work = $var;

        return $this;
    }

}

