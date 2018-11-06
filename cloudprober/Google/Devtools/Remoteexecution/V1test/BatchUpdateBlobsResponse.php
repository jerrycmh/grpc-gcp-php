<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/remoteexecution/v1test/remote_execution.proto

namespace Google\Devtools\Remoteexecution\V1test;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A response message for
 * [ContentAddressableStorage.BatchUpdateBlobs][google.devtools.remoteexecution.v1test.ContentAddressableStorage.BatchUpdateBlobs].
 *
 * Generated from protobuf message <code>google.devtools.remoteexecution.v1test.BatchUpdateBlobsResponse</code>
 */
class BatchUpdateBlobsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The responses to the requests.
     *
     * Generated from protobuf field <code>repeated .google.devtools.remoteexecution.v1test.BatchUpdateBlobsResponse.Response responses = 1;</code>
     */
    private $responses;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Devtools\Remoteexecution\V1test\BatchUpdateBlobsResponse\Response[]|\Google\Protobuf\Internal\RepeatedField $responses
     *           The responses to the requests.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Devtools\Remoteexecution\V1Test\RemoteExecution::initOnce();
        parent::__construct($data);
    }

    /**
     * The responses to the requests.
     *
     * Generated from protobuf field <code>repeated .google.devtools.remoteexecution.v1test.BatchUpdateBlobsResponse.Response responses = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getResponses()
    {
        return $this->responses;
    }

    /**
     * The responses to the requests.
     *
     * Generated from protobuf field <code>repeated .google.devtools.remoteexecution.v1test.BatchUpdateBlobsResponse.Response responses = 1;</code>
     * @param \Google\Devtools\Remoteexecution\V1test\BatchUpdateBlobsResponse\Response[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setResponses($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Devtools\Remoteexecution\V1test\BatchUpdateBlobsResponse\Response::class);
        $this->responses = $arr;

        return $this;
    }

}

