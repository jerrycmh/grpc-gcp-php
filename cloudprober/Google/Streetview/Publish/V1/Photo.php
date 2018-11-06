<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/streetview/publish/v1/resources.proto

namespace Google\Streetview\Publish\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Photo is used to store 360 photos along with photo metadata.
 *
 * Generated from protobuf message <code>google.streetview.publish.v1.Photo</code>
 */
class Photo extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. Identifier for the photo, which is unique among all photos in
     * Google.
     *
     * Generated from protobuf field <code>.google.streetview.publish.v1.PhotoId photo_id = 1;</code>
     */
    private $photo_id = null;
    /**
     * Required (when creating photo). Input only. The resource URL where the
     * photo bytes are uploaded to.
     *
     * Generated from protobuf field <code>.google.streetview.publish.v1.UploadRef upload_reference = 2;</code>
     */
    private $upload_reference = null;
    /**
     * Output only. The download URL for the photo bytes. This field is set only
     * when the `view` parameter in a `GetPhotoRequest` is set to
     * `INCLUDE_DOWNLOAD_URL`.
     *
     * Generated from protobuf field <code>string download_url = 3;</code>
     */
    private $download_url = '';
    /**
     * Output only. The thumbnail URL for showing a preview of the given photo.
     *
     * Generated from protobuf field <code>string thumbnail_url = 9;</code>
     */
    private $thumbnail_url = '';
    /**
     * Output only. The share link for the photo.
     *
     * Generated from protobuf field <code>string share_link = 11;</code>
     */
    private $share_link = '';
    /**
     * Pose of the photo.
     *
     * Generated from protobuf field <code>.google.streetview.publish.v1.Pose pose = 4;</code>
     */
    private $pose = null;
    /**
     * Connections to other photos. A connection represents the link from this
     * photo to another photo.
     *
     * Generated from protobuf field <code>repeated .google.streetview.publish.v1.Connection connections = 5;</code>
     */
    private $connections;
    /**
     * Absolute time when the photo was captured.
     * When the photo has no exif timestamp, this is used to set a timestamp in
     * the photo metadata.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp capture_time = 6;</code>
     */
    private $capture_time = null;
    /**
     * Places where this photo belongs.
     *
     * Generated from protobuf field <code>repeated .google.streetview.publish.v1.Place places = 7;</code>
     */
    private $places;
    /**
     * Output only. View count of the photo.
     *
     * Generated from protobuf field <code>int64 view_count = 10;</code>
     */
    private $view_count = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Streetview\Publish\V1\PhotoId $photo_id
     *           Output only. Identifier for the photo, which is unique among all photos in
     *           Google.
     *     @type \Google\Streetview\Publish\V1\UploadRef $upload_reference
     *           Required (when creating photo). Input only. The resource URL where the
     *           photo bytes are uploaded to.
     *     @type string $download_url
     *           Output only. The download URL for the photo bytes. This field is set only
     *           when the `view` parameter in a `GetPhotoRequest` is set to
     *           `INCLUDE_DOWNLOAD_URL`.
     *     @type string $thumbnail_url
     *           Output only. The thumbnail URL for showing a preview of the given photo.
     *     @type string $share_link
     *           Output only. The share link for the photo.
     *     @type \Google\Streetview\Publish\V1\Pose $pose
     *           Pose of the photo.
     *     @type \Google\Streetview\Publish\V1\Connection[]|\Google\Protobuf\Internal\RepeatedField $connections
     *           Connections to other photos. A connection represents the link from this
     *           photo to another photo.
     *     @type \Google\Protobuf\Timestamp $capture_time
     *           Absolute time when the photo was captured.
     *           When the photo has no exif timestamp, this is used to set a timestamp in
     *           the photo metadata.
     *     @type \Google\Streetview\Publish\V1\Place[]|\Google\Protobuf\Internal\RepeatedField $places
     *           Places where this photo belongs.
     *     @type int|string $view_count
     *           Output only. View count of the photo.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Streetview\Publish\V1\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. Identifier for the photo, which is unique among all photos in
     * Google.
     *
     * Generated from protobuf field <code>.google.streetview.publish.v1.PhotoId photo_id = 1;</code>
     * @return \Google\Streetview\Publish\V1\PhotoId
     */
    public function getPhotoId()
    {
        return $this->photo_id;
    }

    /**
     * Output only. Identifier for the photo, which is unique among all photos in
     * Google.
     *
     * Generated from protobuf field <code>.google.streetview.publish.v1.PhotoId photo_id = 1;</code>
     * @param \Google\Streetview\Publish\V1\PhotoId $var
     * @return $this
     */
    public function setPhotoId($var)
    {
        GPBUtil::checkMessage($var, \Google\Streetview\Publish\V1\PhotoId::class);
        $this->photo_id = $var;

        return $this;
    }

    /**
     * Required (when creating photo). Input only. The resource URL where the
     * photo bytes are uploaded to.
     *
     * Generated from protobuf field <code>.google.streetview.publish.v1.UploadRef upload_reference = 2;</code>
     * @return \Google\Streetview\Publish\V1\UploadRef
     */
    public function getUploadReference()
    {
        return $this->upload_reference;
    }

    /**
     * Required (when creating photo). Input only. The resource URL where the
     * photo bytes are uploaded to.
     *
     * Generated from protobuf field <code>.google.streetview.publish.v1.UploadRef upload_reference = 2;</code>
     * @param \Google\Streetview\Publish\V1\UploadRef $var
     * @return $this
     */
    public function setUploadReference($var)
    {
        GPBUtil::checkMessage($var, \Google\Streetview\Publish\V1\UploadRef::class);
        $this->upload_reference = $var;

        return $this;
    }

    /**
     * Output only. The download URL for the photo bytes. This field is set only
     * when the `view` parameter in a `GetPhotoRequest` is set to
     * `INCLUDE_DOWNLOAD_URL`.
     *
     * Generated from protobuf field <code>string download_url = 3;</code>
     * @return string
     */
    public function getDownloadUrl()
    {
        return $this->download_url;
    }

    /**
     * Output only. The download URL for the photo bytes. This field is set only
     * when the `view` parameter in a `GetPhotoRequest` is set to
     * `INCLUDE_DOWNLOAD_URL`.
     *
     * Generated from protobuf field <code>string download_url = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setDownloadUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->download_url = $var;

        return $this;
    }

    /**
     * Output only. The thumbnail URL for showing a preview of the given photo.
     *
     * Generated from protobuf field <code>string thumbnail_url = 9;</code>
     * @return string
     */
    public function getThumbnailUrl()
    {
        return $this->thumbnail_url;
    }

    /**
     * Output only. The thumbnail URL for showing a preview of the given photo.
     *
     * Generated from protobuf field <code>string thumbnail_url = 9;</code>
     * @param string $var
     * @return $this
     */
    public function setThumbnailUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->thumbnail_url = $var;

        return $this;
    }

    /**
     * Output only. The share link for the photo.
     *
     * Generated from protobuf field <code>string share_link = 11;</code>
     * @return string
     */
    public function getShareLink()
    {
        return $this->share_link;
    }

    /**
     * Output only. The share link for the photo.
     *
     * Generated from protobuf field <code>string share_link = 11;</code>
     * @param string $var
     * @return $this
     */
    public function setShareLink($var)
    {
        GPBUtil::checkString($var, True);
        $this->share_link = $var;

        return $this;
    }

    /**
     * Pose of the photo.
     *
     * Generated from protobuf field <code>.google.streetview.publish.v1.Pose pose = 4;</code>
     * @return \Google\Streetview\Publish\V1\Pose
     */
    public function getPose()
    {
        return $this->pose;
    }

    /**
     * Pose of the photo.
     *
     * Generated from protobuf field <code>.google.streetview.publish.v1.Pose pose = 4;</code>
     * @param \Google\Streetview\Publish\V1\Pose $var
     * @return $this
     */
    public function setPose($var)
    {
        GPBUtil::checkMessage($var, \Google\Streetview\Publish\V1\Pose::class);
        $this->pose = $var;

        return $this;
    }

    /**
     * Connections to other photos. A connection represents the link from this
     * photo to another photo.
     *
     * Generated from protobuf field <code>repeated .google.streetview.publish.v1.Connection connections = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getConnections()
    {
        return $this->connections;
    }

    /**
     * Connections to other photos. A connection represents the link from this
     * photo to another photo.
     *
     * Generated from protobuf field <code>repeated .google.streetview.publish.v1.Connection connections = 5;</code>
     * @param \Google\Streetview\Publish\V1\Connection[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setConnections($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Streetview\Publish\V1\Connection::class);
        $this->connections = $arr;

        return $this;
    }

    /**
     * Absolute time when the photo was captured.
     * When the photo has no exif timestamp, this is used to set a timestamp in
     * the photo metadata.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp capture_time = 6;</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getCaptureTime()
    {
        return $this->capture_time;
    }

    /**
     * Absolute time when the photo was captured.
     * When the photo has no exif timestamp, this is used to set a timestamp in
     * the photo metadata.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp capture_time = 6;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCaptureTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->capture_time = $var;

        return $this;
    }

    /**
     * Places where this photo belongs.
     *
     * Generated from protobuf field <code>repeated .google.streetview.publish.v1.Place places = 7;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPlaces()
    {
        return $this->places;
    }

    /**
     * Places where this photo belongs.
     *
     * Generated from protobuf field <code>repeated .google.streetview.publish.v1.Place places = 7;</code>
     * @param \Google\Streetview\Publish\V1\Place[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPlaces($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Streetview\Publish\V1\Place::class);
        $this->places = $arr;

        return $this;
    }

    /**
     * Output only. View count of the photo.
     *
     * Generated from protobuf field <code>int64 view_count = 10;</code>
     * @return int|string
     */
    public function getViewCount()
    {
        return $this->view_count;
    }

    /**
     * Output only. View count of the photo.
     *
     * Generated from protobuf field <code>int64 view_count = 10;</code>
     * @param int|string $var
     * @return $this
     */
    public function setViewCount($var)
    {
        GPBUtil::checkInt64($var);
        $this->view_count = $var;

        return $this;
    }

}

