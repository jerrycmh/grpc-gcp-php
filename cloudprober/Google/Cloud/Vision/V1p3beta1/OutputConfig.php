<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/vision/v1p3beta1/image_annotator.proto

namespace Google\Cloud\Vision\V1p3beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The desired output location and metadata.
 *
 * Generated from protobuf message <code>google.cloud.vision.v1p3beta1.OutputConfig</code>
 */
class OutputConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * The Google Cloud Storage location to write the output(s) to.
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1p3beta1.GcsDestination gcs_destination = 1;</code>
     */
    private $gcs_destination = null;
    /**
     * The max number of response protos to put into each output JSON file on
     * Google Cloud Storage.
     * The valid range is [1, 100]. If not specified, the default value is 20.
     * For example, for one pdf file with 100 pages, 100 response protos will
     * be generated. If `batch_size` = 20, then 5 json files each
     * containing 20 response protos will be written under the prefix
     * `gcs_destination`.`uri`.
     * Currently, batch_size only applies to GcsDestination, with potential future
     * support for other output configurations.
     *
     * Generated from protobuf field <code>int32 batch_size = 2;</code>
     */
    private $batch_size = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Vision\V1p3beta1\GcsDestination $gcs_destination
     *           The Google Cloud Storage location to write the output(s) to.
     *     @type int $batch_size
     *           The max number of response protos to put into each output JSON file on
     *           Google Cloud Storage.
     *           The valid range is [1, 100]. If not specified, the default value is 20.
     *           For example, for one pdf file with 100 pages, 100 response protos will
     *           be generated. If `batch_size` = 20, then 5 json files each
     *           containing 20 response protos will be written under the prefix
     *           `gcs_destination`.`uri`.
     *           Currently, batch_size only applies to GcsDestination, with potential future
     *           support for other output configurations.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Vision\V1P3Beta1\ImageAnnotator::initOnce();
        parent::__construct($data);
    }

    /**
     * The Google Cloud Storage location to write the output(s) to.
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1p3beta1.GcsDestination gcs_destination = 1;</code>
     * @return \Google\Cloud\Vision\V1p3beta1\GcsDestination
     */
    public function getGcsDestination()
    {
        return $this->gcs_destination;
    }

    /**
     * The Google Cloud Storage location to write the output(s) to.
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1p3beta1.GcsDestination gcs_destination = 1;</code>
     * @param \Google\Cloud\Vision\V1p3beta1\GcsDestination $var
     * @return $this
     */
    public function setGcsDestination($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Vision\V1p3beta1\GcsDestination::class);
        $this->gcs_destination = $var;

        return $this;
    }

    /**
     * The max number of response protos to put into each output JSON file on
     * Google Cloud Storage.
     * The valid range is [1, 100]. If not specified, the default value is 20.
     * For example, for one pdf file with 100 pages, 100 response protos will
     * be generated. If `batch_size` = 20, then 5 json files each
     * containing 20 response protos will be written under the prefix
     * `gcs_destination`.`uri`.
     * Currently, batch_size only applies to GcsDestination, with potential future
     * support for other output configurations.
     *
     * Generated from protobuf field <code>int32 batch_size = 2;</code>
     * @return int
     */
    public function getBatchSize()
    {
        return $this->batch_size;
    }

    /**
     * The max number of response protos to put into each output JSON file on
     * Google Cloud Storage.
     * The valid range is [1, 100]. If not specified, the default value is 20.
     * For example, for one pdf file with 100 pages, 100 response protos will
     * be generated. If `batch_size` = 20, then 5 json files each
     * containing 20 response protos will be written under the prefix
     * `gcs_destination`.`uri`.
     * Currently, batch_size only applies to GcsDestination, with potential future
     * support for other output configurations.
     *
     * Generated from protobuf field <code>int32 batch_size = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setBatchSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->batch_size = $var;

        return $this;
    }

}

