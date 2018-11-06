<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/videointelligence/v1beta1/video_intelligence.proto

namespace Google\Cloud\VideoIntelligence\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Video annotation request.
 *
 * Generated from protobuf message <code>google.cloud.videointelligence.v1beta1.AnnotateVideoRequest</code>
 */
class AnnotateVideoRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Input video location. Currently, only
     * [Google Cloud Storage](https://cloud.google.com/storage/) URIs are
     * supported, which must be specified in the following format:
     * `gs://bucket-id/object-id` (other URI formats return
     * [google.rpc.Code.INVALID_ARGUMENT][google.rpc.Code.INVALID_ARGUMENT]). For more information, see
     * [Request URIs](/storage/docs/reference-uris).
     * A video URI may include wildcards in `object-id`, and thus identify
     * multiple videos. Supported wildcards: '*' to match 0 or more characters;
     * '?' to match 1 character. If unset, the input video should be embedded
     * in the request as `input_content`. If set, `input_content` should be unset.
     *
     * Generated from protobuf field <code>string input_uri = 1;</code>
     */
    private $input_uri = '';
    /**
     * The video data bytes. Encoding: base64. If unset, the input video(s)
     * should be specified via `input_uri`. If set, `input_uri` should be unset.
     *
     * Generated from protobuf field <code>string input_content = 6;</code>
     */
    private $input_content = '';
    /**
     * Requested video annotation features.
     *
     * Generated from protobuf field <code>repeated .google.cloud.videointelligence.v1beta1.Feature features = 2;</code>
     */
    private $features;
    /**
     * Additional video context and/or feature-specific parameters.
     *
     * Generated from protobuf field <code>.google.cloud.videointelligence.v1beta1.VideoContext video_context = 3;</code>
     */
    private $video_context = null;
    /**
     * Optional location where the output (in JSON format) should be stored.
     * Currently, only [Google Cloud Storage](https://cloud.google.com/storage/)
     * URIs are supported, which must be specified in the following format:
     * `gs://bucket-id/object-id` (other URI formats return
     * [google.rpc.Code.INVALID_ARGUMENT][google.rpc.Code.INVALID_ARGUMENT]). For more information, see
     * [Request URIs](/storage/docs/reference-uris).
     *
     * Generated from protobuf field <code>string output_uri = 4;</code>
     */
    private $output_uri = '';
    /**
     * Optional cloud region where annotation should take place. Supported cloud
     * regions: `us-east1`, `us-west1`, `europe-west1`, `asia-east1`. If no region
     * is specified, a region will be determined based on video file location.
     *
     * Generated from protobuf field <code>string location_id = 5;</code>
     */
    private $location_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $input_uri
     *           Input video location. Currently, only
     *           [Google Cloud Storage](https://cloud.google.com/storage/) URIs are
     *           supported, which must be specified in the following format:
     *           `gs://bucket-id/object-id` (other URI formats return
     *           [google.rpc.Code.INVALID_ARGUMENT][google.rpc.Code.INVALID_ARGUMENT]). For more information, see
     *           [Request URIs](/storage/docs/reference-uris).
     *           A video URI may include wildcards in `object-id`, and thus identify
     *           multiple videos. Supported wildcards: '*' to match 0 or more characters;
     *           '?' to match 1 character. If unset, the input video should be embedded
     *           in the request as `input_content`. If set, `input_content` should be unset.
     *     @type string $input_content
     *           The video data bytes. Encoding: base64. If unset, the input video(s)
     *           should be specified via `input_uri`. If set, `input_uri` should be unset.
     *     @type int[]|\Google\Protobuf\Internal\RepeatedField $features
     *           Requested video annotation features.
     *     @type \Google\Cloud\VideoIntelligence\V1beta1\VideoContext $video_context
     *           Additional video context and/or feature-specific parameters.
     *     @type string $output_uri
     *           Optional location where the output (in JSON format) should be stored.
     *           Currently, only [Google Cloud Storage](https://cloud.google.com/storage/)
     *           URIs are supported, which must be specified in the following format:
     *           `gs://bucket-id/object-id` (other URI formats return
     *           [google.rpc.Code.INVALID_ARGUMENT][google.rpc.Code.INVALID_ARGUMENT]). For more information, see
     *           [Request URIs](/storage/docs/reference-uris).
     *     @type string $location_id
     *           Optional cloud region where annotation should take place. Supported cloud
     *           regions: `us-east1`, `us-west1`, `europe-west1`, `asia-east1`. If no region
     *           is specified, a region will be determined based on video file location.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Videointelligence\V1Beta1\VideoIntelligence::initOnce();
        parent::__construct($data);
    }

    /**
     * Input video location. Currently, only
     * [Google Cloud Storage](https://cloud.google.com/storage/) URIs are
     * supported, which must be specified in the following format:
     * `gs://bucket-id/object-id` (other URI formats return
     * [google.rpc.Code.INVALID_ARGUMENT][google.rpc.Code.INVALID_ARGUMENT]). For more information, see
     * [Request URIs](/storage/docs/reference-uris).
     * A video URI may include wildcards in `object-id`, and thus identify
     * multiple videos. Supported wildcards: '*' to match 0 or more characters;
     * '?' to match 1 character. If unset, the input video should be embedded
     * in the request as `input_content`. If set, `input_content` should be unset.
     *
     * Generated from protobuf field <code>string input_uri = 1;</code>
     * @return string
     */
    public function getInputUri()
    {
        return $this->input_uri;
    }

    /**
     * Input video location. Currently, only
     * [Google Cloud Storage](https://cloud.google.com/storage/) URIs are
     * supported, which must be specified in the following format:
     * `gs://bucket-id/object-id` (other URI formats return
     * [google.rpc.Code.INVALID_ARGUMENT][google.rpc.Code.INVALID_ARGUMENT]). For more information, see
     * [Request URIs](/storage/docs/reference-uris).
     * A video URI may include wildcards in `object-id`, and thus identify
     * multiple videos. Supported wildcards: '*' to match 0 or more characters;
     * '?' to match 1 character. If unset, the input video should be embedded
     * in the request as `input_content`. If set, `input_content` should be unset.
     *
     * Generated from protobuf field <code>string input_uri = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setInputUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->input_uri = $var;

        return $this;
    }

    /**
     * The video data bytes. Encoding: base64. If unset, the input video(s)
     * should be specified via `input_uri`. If set, `input_uri` should be unset.
     *
     * Generated from protobuf field <code>string input_content = 6;</code>
     * @return string
     */
    public function getInputContent()
    {
        return $this->input_content;
    }

    /**
     * The video data bytes. Encoding: base64. If unset, the input video(s)
     * should be specified via `input_uri`. If set, `input_uri` should be unset.
     *
     * Generated from protobuf field <code>string input_content = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setInputContent($var)
    {
        GPBUtil::checkString($var, True);
        $this->input_content = $var;

        return $this;
    }

    /**
     * Requested video annotation features.
     *
     * Generated from protobuf field <code>repeated .google.cloud.videointelligence.v1beta1.Feature features = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFeatures()
    {
        return $this->features;
    }

    /**
     * Requested video annotation features.
     *
     * Generated from protobuf field <code>repeated .google.cloud.videointelligence.v1beta1.Feature features = 2;</code>
     * @param int[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFeatures($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \Google\Cloud\VideoIntelligence\V1beta1\Feature::class);
        $this->features = $arr;

        return $this;
    }

    /**
     * Additional video context and/or feature-specific parameters.
     *
     * Generated from protobuf field <code>.google.cloud.videointelligence.v1beta1.VideoContext video_context = 3;</code>
     * @return \Google\Cloud\VideoIntelligence\V1beta1\VideoContext
     */
    public function getVideoContext()
    {
        return $this->video_context;
    }

    /**
     * Additional video context and/or feature-specific parameters.
     *
     * Generated from protobuf field <code>.google.cloud.videointelligence.v1beta1.VideoContext video_context = 3;</code>
     * @param \Google\Cloud\VideoIntelligence\V1beta1\VideoContext $var
     * @return $this
     */
    public function setVideoContext($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\VideoIntelligence\V1beta1\VideoContext::class);
        $this->video_context = $var;

        return $this;
    }

    /**
     * Optional location where the output (in JSON format) should be stored.
     * Currently, only [Google Cloud Storage](https://cloud.google.com/storage/)
     * URIs are supported, which must be specified in the following format:
     * `gs://bucket-id/object-id` (other URI formats return
     * [google.rpc.Code.INVALID_ARGUMENT][google.rpc.Code.INVALID_ARGUMENT]). For more information, see
     * [Request URIs](/storage/docs/reference-uris).
     *
     * Generated from protobuf field <code>string output_uri = 4;</code>
     * @return string
     */
    public function getOutputUri()
    {
        return $this->output_uri;
    }

    /**
     * Optional location where the output (in JSON format) should be stored.
     * Currently, only [Google Cloud Storage](https://cloud.google.com/storage/)
     * URIs are supported, which must be specified in the following format:
     * `gs://bucket-id/object-id` (other URI formats return
     * [google.rpc.Code.INVALID_ARGUMENT][google.rpc.Code.INVALID_ARGUMENT]). For more information, see
     * [Request URIs](/storage/docs/reference-uris).
     *
     * Generated from protobuf field <code>string output_uri = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setOutputUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->output_uri = $var;

        return $this;
    }

    /**
     * Optional cloud region where annotation should take place. Supported cloud
     * regions: `us-east1`, `us-west1`, `europe-west1`, `asia-east1`. If no region
     * is specified, a region will be determined based on video file location.
     *
     * Generated from protobuf field <code>string location_id = 5;</code>
     * @return string
     */
    public function getLocationId()
    {
        return $this->location_id;
    }

    /**
     * Optional cloud region where annotation should take place. Supported cloud
     * regions: `us-east1`, `us-west1`, `europe-west1`, `asia-east1`. If no region
     * is specified, a region will be determined based on video file location.
     *
     * Generated from protobuf field <code>string location_id = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setLocationId($var)
    {
        GPBUtil::checkString($var, True);
        $this->location_id = $var;

        return $this;
    }

}

