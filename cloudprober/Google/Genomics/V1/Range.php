<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/genomics/v1/range.proto

namespace Google\Genomics\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A 0-based half-open genomic coordinate range for search requests.
 *
 * Generated from protobuf message <code>google.genomics.v1.Range</code>
 */
class Range extends \Google\Protobuf\Internal\Message
{
    /**
     * The reference sequence name, for example `chr1`,
     * `1`, or `chrX`.
     *
     * Generated from protobuf field <code>string reference_name = 1;</code>
     */
    private $reference_name = '';
    /**
     * The start position of the range on the reference, 0-based inclusive.
     *
     * Generated from protobuf field <code>int64 start = 2;</code>
     */
    private $start = 0;
    /**
     * The end position of the range on the reference, 0-based exclusive.
     *
     * Generated from protobuf field <code>int64 end = 3;</code>
     */
    private $end = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $reference_name
     *           The reference sequence name, for example `chr1`,
     *           `1`, or `chrX`.
     *     @type int|string $start
     *           The start position of the range on the reference, 0-based inclusive.
     *     @type int|string $end
     *           The end position of the range on the reference, 0-based exclusive.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Genomics\V1\Range::initOnce();
        parent::__construct($data);
    }

    /**
     * The reference sequence name, for example `chr1`,
     * `1`, or `chrX`.
     *
     * Generated from protobuf field <code>string reference_name = 1;</code>
     * @return string
     */
    public function getReferenceName()
    {
        return $this->reference_name;
    }

    /**
     * The reference sequence name, for example `chr1`,
     * `1`, or `chrX`.
     *
     * Generated from protobuf field <code>string reference_name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setReferenceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->reference_name = $var;

        return $this;
    }

    /**
     * The start position of the range on the reference, 0-based inclusive.
     *
     * Generated from protobuf field <code>int64 start = 2;</code>
     * @return int|string
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * The start position of the range on the reference, 0-based inclusive.
     *
     * Generated from protobuf field <code>int64 start = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setStart($var)
    {
        GPBUtil::checkInt64($var);
        $this->start = $var;

        return $this;
    }

    /**
     * The end position of the range on the reference, 0-based exclusive.
     *
     * Generated from protobuf field <code>int64 end = 3;</code>
     * @return int|string
     */
    public function getEnd()
    {
        return $this->end;
    }

    /**
     * The end position of the range on the reference, 0-based exclusive.
     *
     * Generated from protobuf field <code>int64 end = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setEnd($var)
    {
        GPBUtil::checkInt64($var);
        $this->end = $var;

        return $this;
    }

}

