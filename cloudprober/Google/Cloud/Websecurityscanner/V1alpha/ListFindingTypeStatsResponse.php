<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/websecurityscanner/v1alpha/web_security_scanner.proto

namespace Google\Cloud\Websecurityscanner\V1alpha;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response for the `ListFindingTypeStats` method.
 *
 * Generated from protobuf message <code>google.cloud.websecurityscanner.v1alpha.ListFindingTypeStatsResponse</code>
 */
class ListFindingTypeStatsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The list of FindingTypeStats returned.
     *
     * Generated from protobuf field <code>repeated .google.cloud.websecurityscanner.v1alpha.FindingTypeStats finding_type_stats = 1;</code>
     */
    private $finding_type_stats;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Websecurityscanner\V1alpha\FindingTypeStats[]|\Google\Protobuf\Internal\RepeatedField $finding_type_stats
     *           The list of FindingTypeStats returned.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Websecurityscanner\V1Alpha\WebSecurityScanner::initOnce();
        parent::__construct($data);
    }

    /**
     * The list of FindingTypeStats returned.
     *
     * Generated from protobuf field <code>repeated .google.cloud.websecurityscanner.v1alpha.FindingTypeStats finding_type_stats = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFindingTypeStats()
    {
        return $this->finding_type_stats;
    }

    /**
     * The list of FindingTypeStats returned.
     *
     * Generated from protobuf field <code>repeated .google.cloud.websecurityscanner.v1alpha.FindingTypeStats finding_type_stats = 1;</code>
     * @param \Google\Cloud\Websecurityscanner\V1alpha\FindingTypeStats[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFindingTypeStats($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Websecurityscanner\V1alpha\FindingTypeStats::class);
        $this->finding_type_stats = $arr;

        return $this;
    }

}

