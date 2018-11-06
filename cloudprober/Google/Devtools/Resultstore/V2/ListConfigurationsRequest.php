<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/resultstore/v2/resultstore_download.proto

namespace Google\Devtools\Resultstore\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request passed into ListConfigurations
 *
 * Generated from protobuf message <code>google.devtools.resultstore.v2.ListConfigurationsRequest</code>
 */
class ListConfigurationsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The invocation name of the configurations to retrieve.
     * It must match this format: invocations/${INVOCATION_ID}
     *
     * Generated from protobuf field <code>string parent = 1;</code>
     */
    private $parent = '';
    /**
     * The maximum number of items to return.
     * Zero means all, but may be capped by the server.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     */
    private $page_size = 0;
    protected $page_start;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           The invocation name of the configurations to retrieve.
     *           It must match this format: invocations/${INVOCATION_ID}
     *     @type int $page_size
     *           The maximum number of items to return.
     *           Zero means all, but may be capped by the server.
     *     @type string $page_token
     *           The next_page_token value returned from a previous List request, if any.
     *     @type int|string $offset
     *           Absolute number of results to skip.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Devtools\Resultstore\V2\ResultstoreDownload::initOnce();
        parent::__construct($data);
    }

    /**
     * The invocation name of the configurations to retrieve.
     * It must match this format: invocations/${INVOCATION_ID}
     *
     * Generated from protobuf field <code>string parent = 1;</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * The invocation name of the configurations to retrieve.
     * It must match this format: invocations/${INVOCATION_ID}
     *
     * Generated from protobuf field <code>string parent = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * The maximum number of items to return.
     * Zero means all, but may be capped by the server.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * The maximum number of items to return.
     * Zero means all, but may be capped by the server.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;

        return $this;
    }

    /**
     * The next_page_token value returned from a previous List request, if any.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->readOneof(3);
    }

    /**
     * The next_page_token value returned from a previous List request, if any.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * Absolute number of results to skip.
     *
     * Generated from protobuf field <code>int64 offset = 4;</code>
     * @return int|string
     */
    public function getOffset()
    {
        return $this->readOneof(4);
    }

    /**
     * Absolute number of results to skip.
     *
     * Generated from protobuf field <code>int64 offset = 4;</code>
     * @param int|string $var
     * @return $this
     */
    public function setOffset($var)
    {
        GPBUtil::checkInt64($var);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getPageStart()
    {
        return $this->whichOneof("page_start");
    }

}

