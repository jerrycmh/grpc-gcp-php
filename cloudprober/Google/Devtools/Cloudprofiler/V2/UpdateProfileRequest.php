<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/cloudprofiler/v2/profiler.proto

namespace Google\Devtools\Cloudprofiler\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * UpdateProfileRequest contains the profile to update.
 *
 * Generated from protobuf message <code>google.devtools.cloudprofiler.v2.UpdateProfileRequest</code>
 */
class UpdateProfileRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Profile to update
     *
     * Generated from protobuf field <code>.google.devtools.cloudprofiler.v2.Profile profile = 1;</code>
     */
    private $profile = null;
    /**
     * Field mask used to specify the fields to be overwritten. Currently only
     * profile_bytes and labels fields are supported by UpdateProfile, so only
     * those fields can be specified in the mask. When no mask is provided, all
     * fields are overwritten.
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
     *     @type \Google\Devtools\Cloudprofiler\V2\Profile $profile
     *           Profile to update
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           Field mask used to specify the fields to be overwritten. Currently only
     *           profile_bytes and labels fields are supported by UpdateProfile, so only
     *           those fields can be specified in the mask. When no mask is provided, all
     *           fields are overwritten.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Devtools\Cloudprofiler\V2\Profiler::initOnce();
        parent::__construct($data);
    }

    /**
     * Profile to update
     *
     * Generated from protobuf field <code>.google.devtools.cloudprofiler.v2.Profile profile = 1;</code>
     * @return \Google\Devtools\Cloudprofiler\V2\Profile
     */
    public function getProfile()
    {
        return $this->profile;
    }

    /**
     * Profile to update
     *
     * Generated from protobuf field <code>.google.devtools.cloudprofiler.v2.Profile profile = 1;</code>
     * @param \Google\Devtools\Cloudprofiler\V2\Profile $var
     * @return $this
     */
    public function setProfile($var)
    {
        GPBUtil::checkMessage($var, \Google\Devtools\Cloudprofiler\V2\Profile::class);
        $this->profile = $var;

        return $this;
    }

    /**
     * Field mask used to specify the fields to be overwritten. Currently only
     * profile_bytes and labels fields are supported by UpdateProfile, so only
     * those fields can be specified in the mask. When no mask is provided, all
     * fields are overwritten.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
     * @return \Google\Protobuf\FieldMask
     */
    public function getUpdateMask()
    {
        return $this->update_mask;
    }

    /**
     * Field mask used to specify the fields to be overwritten. Currently only
     * profile_bytes and labels fields are supported by UpdateProfile, so only
     * those fields can be specified in the mask. When no mask is provided, all
     * fields are overwritten.
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

