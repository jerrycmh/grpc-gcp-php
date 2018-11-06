<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/runtimeconfig/v1beta1/resources.proto

namespace Google\Cloud\RuntimeConfig\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The condition that a Waiter resource is waiting for.
 *
 * Generated from protobuf message <code>google.cloud.runtimeconfig.v1beta1.EndCondition</code>
 */
class EndCondition extends \Google\Protobuf\Internal\Message
{
    protected $condition;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\RuntimeConfig\V1beta1\EndCondition\Cardinality $cardinality
     *           The cardinality of the `EndCondition`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Runtimeconfig\V1Beta1\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * The cardinality of the `EndCondition`.
     *
     * Generated from protobuf field <code>.google.cloud.runtimeconfig.v1beta1.EndCondition.Cardinality cardinality = 1;</code>
     * @return \Google\Cloud\RuntimeConfig\V1beta1\EndCondition\Cardinality
     */
    public function getCardinality()
    {
        return $this->readOneof(1);
    }

    /**
     * The cardinality of the `EndCondition`.
     *
     * Generated from protobuf field <code>.google.cloud.runtimeconfig.v1beta1.EndCondition.Cardinality cardinality = 1;</code>
     * @param \Google\Cloud\RuntimeConfig\V1beta1\EndCondition\Cardinality $var
     * @return $this
     */
    public function setCardinality($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\RuntimeConfig\V1beta1\EndCondition_Cardinality::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getCondition()
    {
        return $this->whichOneof("condition");
    }

}

