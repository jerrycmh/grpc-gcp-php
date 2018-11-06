<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/streetview/publish/v1/rpcmessages.proto

namespace Google\Streetview\Publish\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request to update the metadata of a photo.
 * Updating the pixels of a photo is not supported.
 *
 * Generated from protobuf message <code>google.streetview.publish.v1.UpdatePhotoRequest</code>
 */
class UpdatePhotoRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Photo object containing the new metadata. Only the fields
     * specified in `update_mask` are used. If `update_mask` is not present, the
     * update applies to all fields.
     * **Note:** To update `pose.altitude`, `pose.latlngpair` has to be filled as
     * well. Otherwise, the request will fail.
     *
     * Generated from protobuf field <code>.google.streetview.publish.v1.Photo photo = 1;</code>
     */
    private $photo = null;
    /**
     * Mask that identifies fields on the photo metadata to update.
     * If not present, the old Photo metadata will be entirely replaced with the
     * new Photo metadata in this request. The update fails if invalid fields are
     * specified. Multiple fields can be specified in a comma-delimited list.
     * The following fields are valid:
     * * `pose.heading`
     * * `pose.latlngpair`
     * * `pose.pitch`
     * * `pose.roll`
     * * `pose.level`
     * * `pose.altitude`
     * * `connections`
     * * `places`
     * **Note:** Repeated fields in `update_mask` mean the entire set of repeated
     * values will be replaced with the new contents. For example, if
     * `UpdatePhotoRequest.photo.update_mask` contains `connections` and
     * `UpdatePhotoRequest.photo.connections` is empty, all connections will be
     * removed.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
     */
    private $update_mask = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Streetview\Publish\V1\Photo $photo
     *           Required. Photo object containing the new metadata. Only the fields
     *           specified in `update_mask` are used. If `update_mask` is not present, the
     *           update applies to all fields.
     *           **Note:** To update `pose.altitude`, `pose.latlngpair` has to be filled as
     *           well. Otherwise, the request will fail.
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           Mask that identifies fields on the photo metadata to update.
     *           If not present, the old Photo metadata will be entirely replaced with the
     *           new Photo metadata in this request. The update fails if invalid fields are
     *           specified. Multiple fields can be specified in a comma-delimited list.
     *           The following fields are valid:
     *           * `pose.heading`
     *           * `pose.latlngpair`
     *           * `pose.pitch`
     *           * `pose.roll`
     *           * `pose.level`
     *           * `pose.altitude`
     *           * `connections`
     *           * `places`
     *           **Note:** Repeated fields in `update_mask` mean the entire set of repeated
     *           values will be replaced with the new contents. For example, if
     *           `UpdatePhotoRequest.photo.update_mask` contains `connections` and
     *           `UpdatePhotoRequest.photo.connections` is empty, all connections will be
     *           removed.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Streetview\Publish\V1\Rpcmessages::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Photo object containing the new metadata. Only the fields
     * specified in `update_mask` are used. If `update_mask` is not present, the
     * update applies to all fields.
     * **Note:** To update `pose.altitude`, `pose.latlngpair` has to be filled as
     * well. Otherwise, the request will fail.
     *
     * Generated from protobuf field <code>.google.streetview.publish.v1.Photo photo = 1;</code>
     * @return \Google\Streetview\Publish\V1\Photo
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * Required. Photo object containing the new metadata. Only the fields
     * specified in `update_mask` are used. If `update_mask` is not present, the
     * update applies to all fields.
     * **Note:** To update `pose.altitude`, `pose.latlngpair` has to be filled as
     * well. Otherwise, the request will fail.
     *
     * Generated from protobuf field <code>.google.streetview.publish.v1.Photo photo = 1;</code>
     * @param \Google\Streetview\Publish\V1\Photo $var
     * @return $this
     */
    public function setPhoto($var)
    {
        GPBUtil::checkMessage($var, \Google\Streetview\Publish\V1\Photo::class);
        $this->photo = $var;

        return $this;
    }

    /**
     * Mask that identifies fields on the photo metadata to update.
     * If not present, the old Photo metadata will be entirely replaced with the
     * new Photo metadata in this request. The update fails if invalid fields are
     * specified. Multiple fields can be specified in a comma-delimited list.
     * The following fields are valid:
     * * `pose.heading`
     * * `pose.latlngpair`
     * * `pose.pitch`
     * * `pose.roll`
     * * `pose.level`
     * * `pose.altitude`
     * * `connections`
     * * `places`
     * **Note:** Repeated fields in `update_mask` mean the entire set of repeated
     * values will be replaced with the new contents. For example, if
     * `UpdatePhotoRequest.photo.update_mask` contains `connections` and
     * `UpdatePhotoRequest.photo.connections` is empty, all connections will be
     * removed.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
     * @return \Google\Protobuf\FieldMask
     */
    public function getUpdateMask()
    {
        return $this->update_mask;
    }

    /**
     * Mask that identifies fields on the photo metadata to update.
     * If not present, the old Photo metadata will be entirely replaced with the
     * new Photo metadata in this request. The update fails if invalid fields are
     * specified. Multiple fields can be specified in a comma-delimited list.
     * The following fields are valid:
     * * `pose.heading`
     * * `pose.latlngpair`
     * * `pose.pitch`
     * * `pose.roll`
     * * `pose.level`
     * * `pose.altitude`
     * * `connections`
     * * `places`
     * **Note:** Repeated fields in `update_mask` mean the entire set of repeated
     * values will be replaced with the new contents. For example, if
     * `UpdatePhotoRequest.photo.update_mask` contains `connections` and
     * `UpdatePhotoRequest.photo.connections` is empty, all connections will be
     * removed.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setUpdateMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->update_mask = $var;

        return $this;
    }

}

