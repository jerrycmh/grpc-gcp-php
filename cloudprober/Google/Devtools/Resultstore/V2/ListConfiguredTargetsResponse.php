<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/resultstore/v2/resultstore_download.proto

namespace Google\Devtools\Resultstore\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response from calling ListConfiguredTargets
 *
 * Generated from protobuf message <code>google.devtools.resultstore.v2.ListConfiguredTargetsResponse</code>
 */
class ListConfiguredTargetsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * ConfiguredTargets matching the request,
     * possibly capped at request.page_size or a server limit.
     *
     * Generated from protobuf field <code>repeated .google.devtools.resultstore.v2.ConfiguredTarget configured_targets = 1;</code>
     */
    private $configured_targets;
    /**
     * Token to retrieve the next page of results, or empty if there are no
     * more results in the list.
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
     *     @type \Google\Devtools\Resultstore\V2\ConfiguredTarget[]|\Google\Protobuf\Internal\RepeatedField $configured_targets
     *           ConfiguredTargets matching the request,
     *           possibly capped at request.page_size or a server limit.
     *     @type string $next_page_token
     *           Token to retrieve the next page of results, or empty if there are no
     *           more results in the list.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Devtools\Resultstore\V2\ResultstoreDownload::initOnce();
        parent::__construct($data);
    }

    /**
     * ConfiguredTargets matching the request,
     * possibly capped at request.page_size or a server limit.
     *
     * Generated from protobuf field <code>repeated .google.devtools.resultstore.v2.ConfiguredTarget configured_targets = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getConfiguredTargets()
    {
        return $this->configured_targets;
    }

    /**
     * ConfiguredTargets matching the request,
     * possibly capped at request.page_size or a server limit.
     *
     * Generated from protobuf field <code>repeated .google.devtools.resultstore.v2.ConfiguredTarget configured_targets = 1;</code>
     * @param \Google\Devtools\Resultstore\V2\ConfiguredTarget[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setConfiguredTargets($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Devtools\Resultstore\V2\ConfiguredTarget::class);
        $this->configured_targets = $arr;

        return $this;
    }

    /**
     * Token to retrieve the next page of results, or empty if there are no
     * more results in the list.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * Token to retrieve the next page of results, or empty if there are no
     * more results in the list.
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

