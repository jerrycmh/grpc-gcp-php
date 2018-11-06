<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/ml/v1/project_service.proto

namespace Google\Cloud\Ml\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Requests service account information associated with a project.
 *
 * Generated from protobuf message <code>google.cloud.ml.v1.GetConfigRequest</code>
 */
class GetConfigRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The project name.
     * Authorization: requires `Viewer` role on the specified project.
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
     *           Required. The project name.
     *           Authorization: requires `Viewer` role on the specified project.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Ml\V1\ProjectService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The project name.
     * Authorization: requires `Viewer` role on the specified project.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The project name.
     * Authorization: requires `Viewer` role on the specified project.
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

