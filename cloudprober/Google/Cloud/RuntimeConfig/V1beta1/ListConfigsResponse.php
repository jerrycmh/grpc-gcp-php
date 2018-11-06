<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/runtimeconfig/v1beta1/runtimeconfig.proto

namespace Google\Cloud\RuntimeConfig\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * `ListConfigs()` returns the following response. The order of returned
 * objects is arbitrary; that is, it is not ordered in any particular way.
 *
 * Generated from protobuf message <code>google.cloud.runtimeconfig.v1beta1.ListConfigsResponse</code>
 */
class ListConfigsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * A list of the configurations in the project. The order of returned
     * objects is arbitrary; that is, it is not ordered in any particular way.
     *
     * Generated from protobuf field <code>repeated .google.cloud.runtimeconfig.v1beta1.RuntimeConfig configs = 1;</code>
     */
    private $configs;
    /**
     * This token allows you to get the next page of results for list requests.
     * If the number of results is larger than `pageSize`, use the `nextPageToken`
     * as a value for the query parameter `pageToken` in the next list request.
     * Subsequent list requests will have their own `nextPageToken` to continue
     * paging through the results
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    private $next_page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\RuntimeConfig\V1beta1\RuntimeConfig[]|\Google\Protobuf\Internal\RepeatedField $configs
     *           A list of the configurations in the project. The order of returned
     *           objects is arbitrary; that is, it is not ordered in any particular way.
     *     @type string $next_page_token
     *           This token allows you to get the next page of results for list requests.
     *           If the number of results is larger than `pageSize`, use the `nextPageToken`
     *           as a value for the query parameter `pageToken` in the next list request.
     *           Subsequent list requests will have their own `nextPageToken` to continue
     *           paging through the results
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Runtimeconfig\V1Beta1\Runtimeconfig::initOnce();
        parent::__construct($data);
    }

    /**
     * A list of the configurations in the project. The order of returned
     * objects is arbitrary; that is, it is not ordered in any particular way.
     *
     * Generated from protobuf field <code>repeated .google.cloud.runtimeconfig.v1beta1.RuntimeConfig configs = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getConfigs()
    {
        return $this->configs;
    }

    /**
     * A list of the configurations in the project. The order of returned
     * objects is arbitrary; that is, it is not ordered in any particular way.
     *
     * Generated from protobuf field <code>repeated .google.cloud.runtimeconfig.v1beta1.RuntimeConfig configs = 1;</code>
     * @param \Google\Cloud\RuntimeConfig\V1beta1\RuntimeConfig[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setConfigs($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\RuntimeConfig\V1beta1\RuntimeConfig::class);
        $this->configs = $arr;

        return $this;
    }

    /**
     * This token allows you to get the next page of results for list requests.
     * If the number of results is larger than `pageSize`, use the `nextPageToken`
     * as a value for the query parameter `pageToken` in the next list request.
     * Subsequent list requests will have their own `nextPageToken` to continue
     * paging through the results
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * This token allows you to get the next page of results for list requests.
     * If the number of results is larger than `pageSize`, use the `nextPageToken`
     * as a value for the query parameter `pageToken` in the next list request.
     * Subsequent list requests will have their own `nextPageToken` to continue
     * paging through the results
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setNextPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_page_token = $var;

        return $this;
    }

}

