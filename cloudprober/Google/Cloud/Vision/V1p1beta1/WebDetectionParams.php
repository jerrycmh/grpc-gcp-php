<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/vision/v1p1beta1/image_annotator.proto

namespace Google\Cloud\Vision\V1p1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Parameters for web detection request.
 *
 * Generated from protobuf message <code>google.cloud.vision.v1p1beta1.WebDetectionParams</code>
 */
class WebDetectionParams extends \Google\Protobuf\Internal\Message
{
    /**
     * Whether to include results derived from the geo information in the image.
     *
     * Generated from protobuf field <code>bool include_geo_results = 2;</code>
     */
    private $include_geo_results = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $include_geo_results
     *           Whether to include results derived from the geo information in the image.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Vision\V1P1Beta1\ImageAnnotator::initOnce();
        parent::__construct($data);
    }

    /**
     * Whether to include results derived from the geo information in the image.
     *
     * Generated from protobuf field <code>bool include_geo_results = 2;</code>
     * @return bool
     */
    public function getIncludeGeoResults()
    {
        return $this->include_geo_results;
    }

    /**
     * Whether to include results derived from the geo information in the image.
     *
     * Generated from protobuf field <code>bool include_geo_results = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setIncludeGeoResults($var)
    {
        GPBUtil::checkBool($var);
        $this->include_geo_results = $var;

        return $this;
    }

}

