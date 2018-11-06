<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/videointelligence/v1beta1/video_intelligence.proto

namespace Google\Cloud\VideoIntelligence\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Safe search annotation (based on per-frame visual signals only).
 * If no unsafe content has been detected in a frame, no annotations
 * are present for that frame. If only some types of unsafe content
 * have been detected in a frame, the likelihood is set to `UNKNOWN`
 * for all other types of unsafe content.
 *
 * Generated from protobuf message <code>google.cloud.videointelligence.v1beta1.SafeSearchAnnotation</code>
 */
class SafeSearchAnnotation extends \Google\Protobuf\Internal\Message
{
    /**
     * Likelihood of adult content.
     *
     * Generated from protobuf field <code>.google.cloud.videointelligence.v1beta1.Likelihood adult = 1;</code>
     */
    private $adult = 0;
    /**
     * Likelihood that an obvious modification was made to the original
     * version to make it appear funny or offensive.
     *
     * Generated from protobuf field <code>.google.cloud.videointelligence.v1beta1.Likelihood spoof = 2;</code>
     */
    private $spoof = 0;
    /**
     * Likelihood of medical content.
     *
     * Generated from protobuf field <code>.google.cloud.videointelligence.v1beta1.Likelihood medical = 3;</code>
     */
    private $medical = 0;
    /**
     * Likelihood of violent content.
     *
     * Generated from protobuf field <code>.google.cloud.videointelligence.v1beta1.Likelihood violent = 4;</code>
     */
    private $violent = 0;
    /**
     * Likelihood of racy content.
     *
     * Generated from protobuf field <code>.google.cloud.videointelligence.v1beta1.Likelihood racy = 5;</code>
     */
    private $racy = 0;
    /**
     * Video time offset in microseconds.
     *
     * Generated from protobuf field <code>int64 time_offset = 6;</code>
     */
    private $time_offset = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $adult
     *           Likelihood of adult content.
     *     @type int $spoof
     *           Likelihood that an obvious modification was made to the original
     *           version to make it appear funny or offensive.
     *     @type int $medical
     *           Likelihood of medical content.
     *     @type int $violent
     *           Likelihood of violent content.
     *     @type int $racy
     *           Likelihood of racy content.
     *     @type int|string $time_offset
     *           Video time offset in microseconds.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Videointelligence\V1Beta1\VideoIntelligence::initOnce();
        parent::__construct($data);
    }

    /**
     * Likelihood of adult content.
     *
     * Generated from protobuf field <code>.google.cloud.videointelligence.v1beta1.Likelihood adult = 1;</code>
     * @return int
     */
    public function getAdult()
    {
        return $this->adult;
    }

    /**
     * Likelihood of adult content.
     *
     * Generated from protobuf field <code>.google.cloud.videointelligence.v1beta1.Likelihood adult = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setAdult($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\VideoIntelligence\V1beta1\Likelihood::class);
        $this->adult = $var;

        return $this;
    }

    /**
     * Likelihood that an obvious modification was made to the original
     * version to make it appear funny or offensive.
     *
     * Generated from protobuf field <code>.google.cloud.videointelligence.v1beta1.Likelihood spoof = 2;</code>
     * @return int
     */
    public function getSpoof()
    {
        return $this->spoof;
    }

    /**
     * Likelihood that an obvious modification was made to the original
     * version to make it appear funny or offensive.
     *
     * Generated from protobuf field <code>.google.cloud.videointelligence.v1beta1.Likelihood spoof = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setSpoof($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\VideoIntelligence\V1beta1\Likelihood::class);
        $this->spoof = $var;

        return $this;
    }

    /**
     * Likelihood of medical content.
     *
     * Generated from protobuf field <code>.google.cloud.videointelligence.v1beta1.Likelihood medical = 3;</code>
     * @return int
     */
    public function getMedical()
    {
        return $this->medical;
    }

    /**
     * Likelihood of medical content.
     *
     * Generated from protobuf field <code>.google.cloud.videointelligence.v1beta1.Likelihood medical = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setMedical($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\VideoIntelligence\V1beta1\Likelihood::class);
        $this->medical = $var;

        return $this;
    }

    /**
     * Likelihood of violent content.
     *
     * Generated from protobuf field <code>.google.cloud.videointelligence.v1beta1.Likelihood violent = 4;</code>
     * @return int
     */
    public function getViolent()
    {
        return $this->violent;
    }

    /**
     * Likelihood of violent content.
     *
     * Generated from protobuf field <code>.google.cloud.videointelligence.v1beta1.Likelihood violent = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setViolent($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\VideoIntelligence\V1beta1\Likelihood::class);
        $this->violent = $var;

        return $this;
    }

    /**
     * Likelihood of racy content.
     *
     * Generated from protobuf field <code>.google.cloud.videointelligence.v1beta1.Likelihood racy = 5;</code>
     * @return int
     */
    public function getRacy()
    {
        return $this->racy;
    }

    /**
     * Likelihood of racy content.
     *
     * Generated from protobuf field <code>.google.cloud.videointelligence.v1beta1.Likelihood racy = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setRacy($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\VideoIntelligence\V1beta1\Likelihood::class);
        $this->racy = $var;

        return $this;
    }

    /**
     * Video time offset in microseconds.
     *
     * Generated from protobuf field <code>int64 time_offset = 6;</code>
     * @return int|string
     */
    public function getTimeOffset()
    {
        return $this->time_offset;
    }

    /**
     * Video time offset in microseconds.
     *
     * Generated from protobuf field <code>int64 time_offset = 6;</code>
     * @param int|string $var
     * @return $this
     */
    public function setTimeOffset($var)
    {
        GPBUtil::checkInt64($var);
        $this->time_offset = $var;

        return $this;
    }

}

