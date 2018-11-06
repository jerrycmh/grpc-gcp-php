<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/ml/v1/model_service.proto

namespace Google\Cloud\Ml\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for the ListVersions method.
 *
 * Generated from protobuf message <code>google.cloud.ml.v1.ListVersionsRequest</code>
 */
class ListVersionsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the model for which to list the version.
     * Authorization: requires `Viewer` role on the parent project.
     *
     * Generated from protobuf field <code>string parent = 1;</code>
     */
    private $parent = '';
    /**
     * Optional. A page token to request the next page of results.
     * You get the token from the `next_page_token` field of the response from
     * the previous call.
     *
     * Generated from protobuf field <code>string page_token = 4;</code>
     */
    private $page_token = '';
    /**
     * Optional. The number of versions to retrieve per "page" of results. If
     * there are more remaining results than this number, the response message
     * will contain a valid value in the `next_page_token` field.
     * The default value is 20, and the maximum page size is 100.
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
     *     @type string $parent
     *           Required. The name of the model for which to list the version.
     *           Authorization: requires `Viewer` role on the parent project.
     *     @type string $page_token
     *           Optional. A page token to request the next page of results.
     *           You get the token from the `next_page_token` field of the response from
     *           the previous call.
     *     @type int $page_size
     *           Optional. The number of versions to retrieve per "page" of results. If
     *           there are more remaining results than this number, the response message
     *           will contain a valid value in the `next_page_token` field.
     *           The default value is 20, and the maximum page size is 100.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Ml\V1\ModelService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the model for which to list the version.
     * Authorization: requires `Viewer` role on the parent project.
     *
     * Generated from protobuf field <code>string parent = 1;</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The name of the model for which to list the version.
     * Authorization: requires `Viewer` role on the parent project.
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
     * Optional. A page token to request the next page of results.
     * You get the token from the `next_page_token` field of the response from
     * the previous call.
     *
     * Generated from protobuf field <code>string page_token = 4;</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * Optional. A page token to request the next page of results.
     * You get the token from the `next_page_token` field of the response from
     * the previous call.
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
     * Optional. The number of versions to retrieve per "page" of results. If
     * there are more remaining results than this number, the response message
     * will contain a valid value in the `next_page_token` field.
     * The default value is 20, and the maximum page size is 100.
     *
     * Generated from protobuf field <code>int32 page_size = 5;</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * Optional. The number of versions to retrieve per "page" of results. If
     * there are more remaining results than this number, the response message
     * will contain a valid value in the `next_page_token` field.
     * The default value is 20, and the maximum page size is 100.
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

