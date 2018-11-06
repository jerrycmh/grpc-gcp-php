<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/vision/v1p1beta1/image_annotator.proto

namespace Google\Cloud\Vision\V1p1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Set of dominant colors and their corresponding scores.
 *
 * Generated from protobuf message <code>google.cloud.vision.v1p1beta1.DominantColorsAnnotation</code>
 */
class DominantColorsAnnotation extends \Google\Protobuf\Internal\Message
{
    /**
     * RGB color values with their score and pixel fraction.
     *
     * Generated from protobuf field <code>repeated .google.cloud.vision.v1p1beta1.ColorInfo colors = 1;</code>
     */
    private $colors;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Vision\V1p1beta1\ColorInfo[]|\Google\Protobuf\Internal\RepeatedField $colors
     *           RGB color values with their score and pixel fraction.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Vision\V1P1Beta1\ImageAnnotator::initOnce();
        parent::__construct($data);
    }

    /**
     * RGB color values with their score and pixel fraction.
     *
     * Generated from protobuf field <code>repeated .google.cloud.vision.v1p1beta1.ColorInfo colors = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getColors()
    {
        return $this->colors;
    }

    /**
     * RGB color values with their score and pixel fraction.
     *
     * Generated from protobuf field <code>repeated .google.cloud.vision.v1p1beta1.ColorInfo colors = 1;</code>
     * @param \Google\Cloud\Vision\V1p1beta1\ColorInfo[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setColors($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Vision\V1p1beta1\ColorInfo::class);
        $this->colors = $arr;

        return $this;
    }

}

