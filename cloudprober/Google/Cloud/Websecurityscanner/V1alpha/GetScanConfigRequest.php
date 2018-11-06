<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/websecurityscanner/v1alpha/web_security_scanner.proto

namespace Google\Cloud\Websecurityscanner\V1alpha;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request for the `GetScanConfig` method.
 *
 * Generated from protobuf message <code>google.cloud.websecurityscanner.v1alpha.GetScanConfigRequest</code>
 */
class GetScanConfigRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required.
     * The resource name of the ScanConfig to be returned. The name follows the
     * format of 'projects/{projectId}/scanConfigs/{scanConfigId}'.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required.
     *           The resource name of the ScanConfig to be returned. The name follows the
     *           format of 'projects/{projectId}/scanConfigs/{scanConfigId}'.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Websecurityscanner\V1Alpha\WebSecurityScanner::initOnce();
        parent::__construct($data);
    }

    /**
     * Required.
     * The resource name of the ScanConfig to be returned. The name follows the
     * format of 'projects/{projectId}/scanConfigs/{scanConfigId}'.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required.
     * The resource name of the ScanConfig to be returned. The name follows the
     * format of 'projects/{projectId}/scanConfigs/{scanConfigId}'.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

}

