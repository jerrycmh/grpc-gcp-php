<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/appengine/v1/appengine.proto

namespace Google\Appengine\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for `Instances.ListInstances`.
 *
 * Generated from protobuf message <code>google.appengine.v1.ListInstancesResponse</code>
 */
class ListInstancesResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The instances belonging to the requested version.
     *
     * Generated from protobuf field <code>repeated .google.appengine.v1.Instance instances = 1;</code>
     */
    private $instances;
    /**
     * Continuation token for fetching the next page of results.
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
     *     @type \Google\Appengine\V1\Instance[]|\Google\Protobuf\Internal\RepeatedField $instances
     *           The instances belonging to the requested version.
     *     @type string $next_page_token
     *           Continuation token for fetching the next page of results.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Appengine\V1\Appengine::initOnce();
        parent::__construct($data);
    }

    /**
     * The instances belonging to the requested version.
     *
     * Generated from protobuf field <code>repeated .google.appengine.v1.Instance instances = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getInstances()
    {
        return $this->instances;
    }

    /**
     * The instances belonging to the requested version.
     *
     * Generated from protobuf field <code>repeated .google.appengine.v1.Instance instances = 1;</code>
     * @param \Google\Appengine\V1\Instance[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setInstances($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Appengine\V1\Instance::class);
        $this->instances = $arr;

        return $this;
    }

    /**
     * Continuation token for fetching the next page of results.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * Continuation token for fetching the next page of results.
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

