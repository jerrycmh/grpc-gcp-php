<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/resultstore/v2/action.proto

namespace Google\Devtools\Resultstore\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * File count and size information for the input files to a configured target.
 *
 * Generated from protobuf message <code>google.devtools.resultstore.v2.InputFileInfo</code>
 */
class InputFileInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * The number of input files (counting every file, even if a duplicate).
     *
     * Generated from protobuf field <code>int64 count = 1;</code>
     */
    private $count = 0;
    /**
     * The number of distinct input files.
     *
     * Generated from protobuf field <code>int64 distinct_count = 2;</code>
     */
    private $distinct_count = 0;
    /**
     * The max number of input files allowed by the build system (counting every
     * file, even if a duplicate).
     *
     * Generated from protobuf field <code>int64 count_limit = 3;</code>
     */
    private $count_limit = 0;
    /**
     * The total size of the distinct input files.
     *
     * Generated from protobuf field <code>int64 distinct_bytes = 4;</code>
     */
    private $distinct_bytes = 0;
    /**
     * The max allowed total size of the distinct input files.
     *
     * Generated from protobuf field <code>int64 distinct_byte_limit = 5;</code>
     */
    private $distinct_byte_limit = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $count
     *           The number of input files (counting every file, even if a duplicate).
     *     @type int|string $distinct_count
     *           The number of distinct input files.
     *     @type int|string $count_limit
     *           The max number of input files allowed by the build system (counting every
     *           file, even if a duplicate).
     *     @type int|string $distinct_bytes
     *           The total size of the distinct input files.
     *     @type int|string $distinct_byte_limit
     *           The max allowed total size of the distinct input files.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Devtools\Resultstore\V2\Action::initOnce();
        parent::__construct($data);
    }

    /**
     * The number of input files (counting every file, even if a duplicate).
     *
     * Generated from protobuf field <code>int64 count = 1;</code>
     * @return int|string
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * The number of input files (counting every file, even if a duplicate).
     *
     * Generated from protobuf field <code>int64 count = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setCount($var)
    {
        GPBUtil::checkInt64($var);
        $this->count = $var;

        return $this;
    }

    /**
     * The number of distinct input files.
     *
     * Generated from protobuf field <code>int64 distinct_count = 2;</code>
     * @return int|string
     */
    public function getDistinctCount()
    {
        return $this->distinct_count;
    }

    /**
     * The number of distinct input files.
     *
     * Generated from protobuf field <code>int64 distinct_count = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setDistinctCount($var)
    {
        GPBUtil::checkInt64($var);
        $this->distinct_count = $var;

        return $this;
    }

    /**
     * The max number of input files allowed by the build system (counting every
     * file, even if a duplicate).
     *
     * Generated from protobuf field <code>int64 count_limit = 3;</code>
     * @return int|string
     */
    public function getCountLimit()
    {
        return $this->count_limit;
    }

    /**
     * The max number of input files allowed by the build system (counting every
     * file, even if a duplicate).
     *
     * Generated from protobuf field <code>int64 count_limit = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setCountLimit($var)
    {
        GPBUtil::checkInt64($var);
        $this->count_limit = $var;

        return $this;
    }

    /**
     * The total size of the distinct input files.
     *
     * Generated from protobuf field <code>int64 distinct_bytes = 4;</code>
     * @return int|string
     */
    public function getDistinctBytes()
    {
        return $this->distinct_bytes;
    }

    /**
     * The total size of the distinct input files.
     *
     * Generated from protobuf field <code>int64 distinct_bytes = 4;</code>
     * @param int|string $var
     * @return $this
     */
    public function setDistinctBytes($var)
    {
        GPBUtil::checkInt64($var);
        $this->distinct_bytes = $var;

        return $this;
    }

    /**
     * The max allowed total size of the distinct input files.
     *
     * Generated from protobuf field <code>int64 distinct_byte_limit = 5;</code>
     * @return int|string
     */
    public function getDistinctByteLimit()
    {
        return $this->distinct_byte_limit;
    }

    /**
     * The max allowed total size of the distinct input files.
     *
     * Generated from protobuf field <code>int64 distinct_byte_limit = 5;</code>
     * @param int|string $var
     * @return $this
     */
    public function setDistinctByteLimit($var)
    {
        GPBUtil::checkInt64($var);
        $this->distinct_byte_limit = $var;

        return $this;
    }

}

