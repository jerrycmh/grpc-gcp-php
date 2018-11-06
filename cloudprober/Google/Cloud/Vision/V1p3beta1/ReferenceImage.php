<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/vision/v1p3beta1/product_search_service.proto

namespace Google\Cloud\Vision\V1p3beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A `ReferenceImage` represents a product image and its associated metadata,
 * such as bounding boxes.
 *
 * Generated from protobuf message <code>google.cloud.vision.v1p3beta1.ReferenceImage</code>
 */
class ReferenceImage extends \Google\Protobuf\Internal\Message
{
    /**
     * The resource name of the reference image.
     * Format is:
     * `projects/PROJECT_ID/locations/LOC_ID/products/PRODUCT_ID/referenceImages/IMAGE_ID`.
     * This field is ignored when creating a reference image.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * The Google Cloud Storage URI of the reference image.
     * The URI must start with `gs://`.
     * Required.
     *
     * Generated from protobuf field <code>string uri = 2;</code>
     */
    private $uri = '';
    /**
     * Bounding polygons around the areas of interest in the reference image.
     * Optional. If this field is empty, the system will try to detect regions of
     * interest. At most 10 bounding polygons will be used.
     * The provided shape is converted into a non-rotated rectangle. Once
     * converted, the small edge of the rectangle must be greater than or equal
     * to 300 pixels. The aspect ratio must be 1:4 or less (i.e. 1:3 is ok; 1:5
     * is not).
     *
     * Generated from protobuf field <code>repeated .google.cloud.vision.v1p3beta1.BoundingPoly bounding_polys = 3;</code>
     */
    private $bounding_polys;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           The resource name of the reference image.
     *           Format is:
     *           `projects/PROJECT_ID/locations/LOC_ID/products/PRODUCT_ID/referenceImages/IMAGE_ID`.
     *           This field is ignored when creating a reference image.
     *     @type string $uri
     *           The Google Cloud Storage URI of the reference image.
     *           The URI must start with `gs://`.
     *           Required.
     *     @type \Google\Cloud\Vision\V1p3beta1\BoundingPoly[]|\Google\Protobuf\Internal\RepeatedField $bounding_polys
     *           Bounding polygons around the areas of interest in the reference image.
     *           Optional. If this field is empty, the system will try to detect regions of
     *           interest. At most 10 bounding polygons will be used.
     *           The provided shape is converted into a non-rotated rectangle. Once
     *           converted, the small edge of the rectangle must be greater than or equal
     *           to 300 pixels. The aspect ratio must be 1:4 or less (i.e. 1:3 is ok; 1:5
     *           is not).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Vision\V1P3Beta1\ProductSearchService::initOnce();
        parent::__construct($data);
    }

    /**
     * The resource name of the reference image.
     * Format is:
     * `projects/PROJECT_ID/locations/LOC_ID/products/PRODUCT_ID/referenceImages/IMAGE_ID`.
     * This field is ignored when creating a reference image.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The resource name of the reference image.
     * Format is:
     * `projects/PROJECT_ID/locations/LOC_ID/products/PRODUCT_ID/referenceImages/IMAGE_ID`.
     * This field is ignored when creating a reference image.
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

    /**
     * The Google Cloud Storage URI of the reference image.
     * The URI must start with `gs://`.
     * Required.
     *
     * Generated from protobuf field <code>string uri = 2;</code>
     * @return string
     */
    public function getUri()
    {
        return $this->uri;
    }

    /**
     * The Google Cloud Storage URI of the reference image.
     * The URI must start with `gs://`.
     * Required.
     *
     * Generated from protobuf field <code>string uri = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->uri = $var;

        return $this;
    }

    /**
     * Bounding polygons around the areas of interest in the reference image.
     * Optional. If this field is empty, the system will try to detect regions of
     * interest. At most 10 bounding polygons will be used.
     * The provided shape is converted into a non-rotated rectangle. Once
     * converted, the small edge of the rectangle must be greater than or equal
     * to 300 pixels. The aspect ratio must be 1:4 or less (i.e. 1:3 is ok; 1:5
     * is not).
     *
     * Generated from protobuf field <code>repeated .google.cloud.vision.v1p3beta1.BoundingPoly bounding_polys = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getBoundingPolys()
    {
        return $this->bounding_polys;
    }

    /**
     * Bounding polygons around the areas of interest in the reference image.
     * Optional. If this field is empty, the system will try to detect regions of
     * interest. At most 10 bounding polygons will be used.
     * The provided shape is converted into a non-rotated rectangle. Once
     * converted, the small edge of the rectangle must be greater than or equal
     * to 300 pixels. The aspect ratio must be 1:4 or less (i.e. 1:3 is ok; 1:5
     * is not).
     *
     * Generated from protobuf field <code>repeated .google.cloud.vision.v1p3beta1.BoundingPoly bounding_polys = 3;</code>
     * @param \Google\Cloud\Vision\V1p3beta1\BoundingPoly[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setBoundingPolys($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Vision\V1p3beta1\BoundingPoly::class);
        $this->bounding_polys = $arr;

        return $this;
    }

}

