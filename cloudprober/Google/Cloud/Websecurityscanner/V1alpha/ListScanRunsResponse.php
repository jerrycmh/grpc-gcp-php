<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/websecurityscanner/v1alpha/web_security_scanner.proto

namespace Google\Cloud\Websecurityscanner\V1alpha;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response for the `ListScanRuns` method.
 *
 * Generated from protobuf message <code>google.cloud.websecurityscanner.v1alpha.ListScanRunsResponse</code>
 */
class ListScanRunsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The list of ScanRuns returned.
     *
     * Generated from protobuf field <code>repeated .google.cloud.websecurityscanner.v1alpha.ScanRun scan_runs = 1;</code>
     */
    private $scan_runs;
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
     *     @type \Google\Cloud\Websecurityscanner\V1alpha\ScanRun[]|\Google\Protobuf\Internal\RepeatedField $scan_runs
     *           The list of ScanRuns returned.
     *     @type string $next_page_token
     *           Token to retrieve the next page of results, or empty if there are no
     *           more results in the list.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Websecurityscanner\V1Alpha\WebSecurityScanner::initOnce();
        parent::__construct($data);
    }

    /**
     * The list of ScanRuns returned.
     *
     * Generated from protobuf field <code>repeated .google.cloud.websecurityscanner.v1alpha.ScanRun scan_runs = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getScanRuns()
    {
        return $this->scan_runs;
    }

    /**
     * The list of ScanRuns returned.
     *
     * Generated from protobuf field <code>repeated .google.cloud.websecurityscanner.v1alpha.ScanRun scan_runs = 1;</code>
     * @param \Google\Cloud\Websecurityscanner\V1alpha\ScanRun[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setScanRuns($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Websecurityscanner\V1alpha\ScanRun::class);
        $this->scan_runs = $arr;

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

