<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/genomics/v1/references.proto

namespace Google\Genomics\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>google.genomics.v1.ListBasesRequest</code>
 */
class ListBasesRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The ID of the reference.
     *
     * Generated from protobuf field <code>string reference_id = 1;</code>
     */
    private $reference_id = '';
    /**
     * The start position (0-based) of this query. Defaults to 0.
     *
     * Generated from protobuf field <code>int64 start = 2;</code>
     */
    private $start = 0;
    /**
     * The end position (0-based, exclusive) of this query. Defaults to the length
     * of this reference.
     *
     * Generated from protobuf field <code>int64 end = 3;</code>
     */
    private $end = 0;
    /**
     * The continuation token, which is used to page through large result sets.
     * To get the next page of results, set this parameter to the value of
     * `nextPageToken` from the previous response.
     *
     * Generated from protobuf field <code>string page_token = 4;</code>
     */
    private $page_token = '';
    /**
     * The maximum number of bases to return in a single page. If unspecified,
     * defaults to 200Kbp (kilo base pairs). The maximum value is 10Mbp (mega base
     * pairs).
     *
     * Generated from protobuf field <code>int32 page_size = 5;</code>
     */
    private $page_size = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $reference_id
     *           The ID of the reference.
     *     @type int|string $start
     *           The start position (0-based) of this query. Defaults to 0.
     *     @type int|string $end
     *           The end position (0-based, exclusive) of this query. Defaults to the length
     *           of this reference.
     *     @type string $page_token
     *           The continuation token, which is used to page through large result sets.
     *           To get the next page of results, set this parameter to the value of
     *           `nextPageToken` from the previous response.
     *     @type int $page_size
     *           The maximum number of bases to return in a single page. If unspecified,
     *           defaults to 200Kbp (kilo base pairs). The maximum value is 10Mbp (mega base
     *           pairs).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Genomics\V1\References::initOnce();
        parent::__construct($data);
    }

    /**
     * The ID of the reference.
     *
     * Generated from protobuf field <code>string reference_id = 1;</code>
     * @return string
     */
    public function getReferenceId()
    {
        return $this->reference_id;
    }

    /**
     * The ID of the reference.
     *
     * Generated from protobuf field <code>string reference_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setReferenceId($var)
    {
        GPBUtil::checkString($var, True);
        $this->reference_id = $var;

        return $this;
    }

    /**
     * The start position (0-based) of this query. Defaults to 0.
     *
     * Generated from protobuf field <code>int64 start = 2;</code>
     * @return int|string
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * The start position (0-based) of this query. Defaults to 0.
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
     * The end position (0-based, exclusive) of this query. Defaults to the length
     * of this reference.
     *
     * Generated from protobuf field <code>int64 end = 3;</code>
     * @return int|string
     */
    public function getEnd()
    {
        return $this->end;
    }

    /**
     * The end position (0-based, exclusive) of this query. Defaults to the length
     * of this reference.
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

    /**
     * The continuation token, which is used to page through large result sets.
     * To get the next page of results, set this parameter to the value of
     * `nextPageToken` from the previous response.
     *
     * Generated from protobuf field <code>string page_token = 4;</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * The continuation token, which is used to page through large result sets.
     * To get the next page of results, set this parameter to the value of
     * `nextPageToken` from the previous response.
     *
     * Generated from protobuf field <code>string page_token = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;

        return $this;
    }

    /**
     * The maximum number of bases to return in a single page. If unspecified,
     * defaults to 200Kbp (kilo base pairs). The maximum value is 10Mbp (mega base
     * pairs).
     *
     * Generated from protobuf field <code>int32 page_size = 5;</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * The maximum number of bases to return in a single page. If unspecified,
     * defaults to 200Kbp (kilo base pairs). The maximum value is 10Mbp (mega base
     * pairs).
     *
     * Generated from protobuf field <code>int32 page_size = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;

        return $this;
    }

}

