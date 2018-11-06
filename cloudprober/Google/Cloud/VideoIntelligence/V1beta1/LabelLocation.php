<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/videointelligence/v1beta1/video_intelligence.proto

namespace Google\Cloud\VideoIntelligence\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Label location.
 *
 * Generated from protobuf message <code>google.cloud.videointelligence.v1beta1.LabelLocation</code>
 */
class LabelLocation extends \Google\Protobuf\Internal\Message
{
    /**
     * Video segment. Set to [-1, -1] for video-level labels.
     * Set to [timestamp, timestamp] for frame-level labels.
     * Otherwise, corresponds to one of `AnnotateSpec.segments`
     * (if specified) or to shot boundaries (if requested).
     *
     * Generated from protobuf field <code>.google.cloud.videointelligence.v1beta1.VideoSegment segment = 1;</code>
     */
    private $segment = null;
    /**
     * Confidence that the label is accurate. Range: [0, 1].
     *
     * Generated from protobuf field <code>float confidence = 2;</code>
     */
    private $confidence = 0.0;
    /**
     * Label level.
     *
     * Generated from protobuf field <code>.google.cloud.videointelligence.v1beta1.LabelLevel level = 3;</code>
     */
    private $level = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\VideoIntelligence\V1beta1\VideoSegment $segment
     *           Video segment. Set to [-1, -1] for video-level labels.
     *           Set to [timestamp, timestamp] for frame-level labels.
     *           Otherwise, corresponds to one of `AnnotateSpec.segments`
     *           (if specified) or to shot boundaries (if requested).
     *     @type float $confidence
     *           Confidence that the label is accurate. Range: [0, 1].
     *     @type int $level
     *           Label level.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Videointelligence\V1Beta1\VideoIntelligence::initOnce();
        parent::__construct($data);
    }

    /**
     * Video segment. Set to [-1, -1] for video-level labels.
     * Set to [timestamp, timestamp] for frame-level labels.
     * Otherwise, corresponds to one of `AnnotateSpec.segments`
     * (if specified) or to shot boundaries (if requested).
     *
     * Generated from protobuf field <code>.google.cloud.videointelligence.v1beta1.VideoSegment segment = 1;</code>
     * @return \Google\Cloud\VideoIntelligence\V1beta1\VideoSegment
     */
    public function getSegment()
    {
        return $this->segment;
    }

    /**
     * Video segment. Set to [-1, -1] for video-level labels.
     * Set to [timestamp, timestamp] for frame-level labels.
     * Otherwise, corresponds to one of `AnnotateSpec.segments`
     * (if specified) or to shot boundaries (if requested).
     *
     * Generated from protobuf field <code>.google.cloud.videointelligence.v1beta1.VideoSegment segment = 1;</code>
     * @param \Google\Cloud\VideoIntelligence\V1beta1\VideoSegment $var
     * @return $this
     */
    public function setSegment($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\VideoIntelligence\V1beta1\VideoSegment::class);
        $this->segment = $var;

        return $this;
    }

    /**
     * Confidence that the label is accurate. Range: [0, 1].
     *
     * Generated from protobuf field <code>float confidence = 2;</code>
     * @return float
     */
    public function getConfidence()
    {
        return $this->confidence;
    }

    /**
     * Confidence that the label is accurate. Range: [0, 1].
     *
     * Generated from protobuf field <code>float confidence = 2;</code>
     * @param float $var
     * @return $this
     */
    public function setConfidence($var)
    {
        GPBUtil::checkFloat($var);
        $this->confidence = $var;

        return $this;
    }

    /**
     * Label level.
     *
     * Generated from protobuf field <code>.google.cloud.videointelligence.v1beta1.LabelLevel level = 3;</code>
     * @return int
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Label level.
     *
     * Generated from protobuf field <code>.google.cloud.videointelligence.v1beta1.LabelLevel level = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setLevel($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\VideoIntelligence\V1beta1\LabelLevel::class);
        $this->level = $var;

        return $this;
    }

}

