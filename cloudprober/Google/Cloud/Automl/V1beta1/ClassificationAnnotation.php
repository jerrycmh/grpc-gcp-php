<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/automl/v1beta1/classification.proto

namespace Google\Cloud\Automl\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Contains annotation details specific to classification.
 *
 * Generated from protobuf message <code>google.cloud.automl.v1beta1.ClassificationAnnotation</code>
 */
class ClassificationAnnotation extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. A confidence estimate between 0.0 and 1.0. A higher value
     * means greater confidence that the annotation is positive. If a user
     * approves an annotation as negative or positive, the score value remains
     * unchanged. If a user creates an annotation, the score is 0 for negative or
     * 1 for positive.
     *
     * Generated from protobuf field <code>float score = 1;</code>
     */
    private $score = 0.0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type float $score
     *           Output only. A confidence estimate between 0.0 and 1.0. A higher value
     *           means greater confidence that the annotation is positive. If a user
     *           approves an annotation as negative or positive, the score value remains
     *           unchanged. If a user creates an annotation, the score is 0 for negative or
     *           1 for positive.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Automl\V1Beta1\Classification::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. A confidence estimate between 0.0 and 1.0. A higher value
     * means greater confidence that the annotation is positive. If a user
     * approves an annotation as negative or positive, the score value remains
     * unchanged. If a user creates an annotation, the score is 0 for negative or
     * 1 for positive.
     *
     * Generated from protobuf field <code>float score = 1;</code>
     * @return float
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * Output only. A confidence estimate between 0.0 and 1.0. A higher value
     * means greater confidence that the annotation is positive. If a user
     * approves an annotation as negative or positive, the score value remains
     * unchanged. If a user creates an annotation, the score is 0 for negative or
     * 1 for positive.
     *
     * Generated from protobuf field <code>float score = 1;</code>
     * @param float $var
     * @return $this
     */
    public function setScore($var)
    {
        GPBUtil::checkFloat($var);
        $this->score = $var;

        return $this;
    }

}

