<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/ml/v1/model_service.proto

namespace Google\Cloud\Ml\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for the SetDefaultVersion request.
 *
 * Generated from protobuf message <code>google.cloud.ml.v1.SetDefaultVersionRequest</code>
 */
class SetDefaultVersionRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the version to make the default for the model. You
     * can get the names of all the versions of a model by calling
     * [projects.models.versions.list](/ml/reference/rest/v1/projects.models.versions/list).
     * Authorization: requires `Editor` role on the parent project.
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
     *           Required. The name of the version to make the default for the model. You
     *           can get the names of all the versions of a model by calling
     *           [projects.models.versions.list](/ml/reference/rest/v1/projects.models.versions/list).
     *           Authorization: requires `Editor` role on the parent project.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Ml\V1\ModelService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the version to make the default for the model. You
     * can get the names of all the versions of a model by calling
     * [projects.models.versions.list](/ml/reference/rest/v1/projects.models.versions/list).
     * Authorization: requires `Editor` role on the parent project.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The name of the version to make the default for the model. You
     * can get the names of all the versions of a model by calling
     * [projects.models.versions.list](/ml/reference/rest/v1/projects.models.versions/list).
     * Authorization: requires `Editor` role on the parent project.
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

