<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/resultstore/v2/resultstore_download.proto

namespace Google\Devtools\Resultstore\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request passed into GetConfiguredTarget
 *
 * Generated from protobuf message <code>google.devtools.resultstore.v2.GetConfiguredTargetRequest</code>
 */
class GetConfiguredTargetRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The name of the configured target to retrieve. It must match this format:
     * invocations/${INVOCATION_ID}/targets/${TARGET_ID}/configuredTargets/${CONFIGURATION_ID}
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
     *           The name of the configured target to retrieve. It must match this format:
     *           invocations/${INVOCATION_ID}/targets/${TARGET_ID}/configuredTargets/${CONFIGURATION_ID}
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Devtools\Resultstore\V2\ResultstoreDownload::initOnce();
        parent::__construct($data);
    }

    /**
     * The name of the configured target to retrieve. It must match this format:
     * invocations/${INVOCATION_ID}/targets/${TARGET_ID}/configuredTargets/${CONFIGURATION_ID}
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The name of the configured target to retrieve. It must match this format:
     * invocations/${INVOCATION_ID}/targets/${TARGET_ID}/configuredTargets/${CONFIGURATION_ID}
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

