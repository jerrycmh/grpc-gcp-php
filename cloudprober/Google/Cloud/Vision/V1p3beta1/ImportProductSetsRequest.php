<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/vision/v1p3beta1/product_search_service.proto

namespace Google\Cloud\Vision\V1p3beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for the `ImportProductSets` method.
 *
 * Generated from protobuf message <code>google.cloud.vision.v1p3beta1.ImportProductSetsRequest</code>
 */
class ImportProductSetsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The project in which the ProductSets should be imported.
     * Format is `projects/PROJECT_ID/locations/LOC_ID`.
     *
     * Generated from protobuf field <code>string parent = 1;</code>
     */
    private $parent = '';
    /**
     * The input content for the list of requests.
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1p3beta1.ImportProductSetsInputConfig input_config = 2;</code>
     */
    private $input_config = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           The project in which the ProductSets should be imported.
     *           Format is `projects/PROJECT_ID/locations/LOC_ID`.
     *     @type \Google\Cloud\Vision\V1p3beta1\ImportProductSetsInputConfig $input_config
     *           The input content for the list of requests.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Vision\V1P3Beta1\ProductSearchService::initOnce();
        parent::__construct($data);
    }

    /**
     * The project in which the ProductSets should be imported.
     * Format is `projects/PROJECT_ID/locations/LOC_ID`.
     *
     * Generated from protobuf field <code>string parent = 1;</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * The project in which the ProductSets should be imported.
     * Format is `projects/PROJECT_ID/locations/LOC_ID`.
     *
     * Generated from protobuf field <code>string parent = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * The input content for the list of requests.
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1p3beta1.ImportProductSetsInputConfig input_config = 2;</code>
     * @return \Google\Cloud\Vision\V1p3beta1\ImportProductSetsInputConfig
     */
    public function getInputConfig()
    {
        return $this->input_config;
    }

    /**
     * The input content for the list of requests.
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1p3beta1.ImportProductSetsInputConfig input_config = 2;</code>
     * @param \Google\Cloud\Vision\V1p3beta1\ImportProductSetsInputConfig $var
     * @return $this
     */
    public function setInputConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Vision\V1p3beta1\ImportProductSetsInputConfig::class);
        $this->input_config = $var;

        return $this;
    }

}

