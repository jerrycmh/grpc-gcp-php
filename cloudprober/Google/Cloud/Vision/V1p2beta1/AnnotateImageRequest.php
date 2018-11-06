<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/vision/v1p2beta1/image_annotator.proto

namespace Google\Cloud\Vision\V1p2beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request for performing Google Cloud Vision API tasks over a user-provided
 * image, with user-requested features.
 *
 * Generated from protobuf message <code>google.cloud.vision.v1p2beta1.AnnotateImageRequest</code>
 */
class AnnotateImageRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The image to be processed.
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1p2beta1.Image image = 1;</code>
     */
    private $image = null;
    /**
     * Requested features.
     *
     * Generated from protobuf field <code>repeated .google.cloud.vision.v1p2beta1.Feature features = 2;</code>
     */
    private $features;
    /**
     * Additional context that may accompany the image.
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1p2beta1.ImageContext image_context = 3;</code>
     */
    private $image_context = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Vision\V1p2beta1\Image $image
     *           The image to be processed.
     *     @type \Google\Cloud\Vision\V1p2beta1\Feature[]|\Google\Protobuf\Internal\RepeatedField $features
     *           Requested features.
     *     @type \Google\Cloud\Vision\V1p2beta1\ImageContext $image_context
     *           Additional context that may accompany the image.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Vision\V1P2Beta1\ImageAnnotator::initOnce();
        parent::__construct($data);
    }

    /**
     * The image to be processed.
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1p2beta1.Image image = 1;</code>
     * @return \Google\Cloud\Vision\V1p2beta1\Image
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * The image to be processed.
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1p2beta1.Image image = 1;</code>
     * @param \Google\Cloud\Vision\V1p2beta1\Image $var
     * @return $this
     */
    public function setImage($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Vision\V1p2beta1\Image::class);
        $this->image = $var;

        return $this;
    }

    /**
     * Requested features.
     *
     * Generated from protobuf field <code>repeated .google.cloud.vision.v1p2beta1.Feature features = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFeatures()
    {
        return $this->features;
    }

    /**
     * Requested features.
     *
     * Generated from protobuf field <code>repeated .google.cloud.vision.v1p2beta1.Feature features = 2;</code>
     * @param \Google\Cloud\Vision\V1p2beta1\Feature[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFeatures($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Vision\V1p2beta1\Feature::class);
        $this->features = $arr;

        return $this;
    }

    /**
     * Additional context that may accompany the image.
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1p2beta1.ImageContext image_context = 3;</code>
     * @return \Google\Cloud\Vision\V1p2beta1\ImageContext
     */
    public function getImageContext()
    {
        return $this->image_context;
    }

    /**
     * Additional context that may accompany the image.
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1p2beta1.ImageContext image_context = 3;</code>
     * @param \Google\Cloud\Vision\V1p2beta1\ImageContext $var
     * @return $this
     */
    public function setImageContext($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Vision\V1p2beta1\ImageContext::class);
        $this->image_context = $var;

        return $this;
    }

}

