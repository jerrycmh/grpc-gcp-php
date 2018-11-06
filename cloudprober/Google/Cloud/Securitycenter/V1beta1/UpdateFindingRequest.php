<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/securitycenter/v1beta1/securitycenter_service.proto

namespace Google\Cloud\Securitycenter\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for updating or creating a finding.
 *
 * Generated from protobuf message <code>google.cloud.securitycenter.v1beta1.UpdateFindingRequest</code>
 */
class UpdateFindingRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The finding resource to update or create if it does not already exist.
     * parent, security_marks, and update_time will be ignored.
     * In the case of creation, the finding id portion of the name must
     * alphanumeric and less than or equal to 32 characters and greater than 0
     * characters in length.
     *
     * Generated from protobuf field <code>.google.cloud.securitycenter.v1beta1.Finding finding = 1;</code>
     */
    private $finding = null;
    /**
     * The FieldMask to use when updating the finding resource. This field is
     * ignored if the finding does not already exist and the finding is created.
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
     *     @type \Google\Cloud\Securitycenter\V1beta1\Finding $finding
     *           The finding resource to update or create if it does not already exist.
     *           parent, security_marks, and update_time will be ignored.
     *           In the case of creation, the finding id portion of the name must
     *           alphanumeric and less than or equal to 32 characters and greater than 0
     *           characters in length.
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           The FieldMask to use when updating the finding resource. This field is
     *           ignored if the finding does not already exist and the finding is created.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Securitycenter\V1Beta1\SecuritycenterService::initOnce();
        parent::__construct($data);
    }

    /**
     * The finding resource to update or create if it does not already exist.
     * parent, security_marks, and update_time will be ignored.
     * In the case of creation, the finding id portion of the name must
     * alphanumeric and less than or equal to 32 characters and greater than 0
     * characters in length.
     *
     * Generated from protobuf field <code>.google.cloud.securitycenter.v1beta1.Finding finding = 1;</code>
     * @return \Google\Cloud\Securitycenter\V1beta1\Finding
     */
    public function getFinding()
    {
        return $this->finding;
    }

    /**
     * The finding resource to update or create if it does not already exist.
     * parent, security_marks, and update_time will be ignored.
     * In the case of creation, the finding id portion of the name must
     * alphanumeric and less than or equal to 32 characters and greater than 0
     * characters in length.
     *
     * Generated from protobuf field <code>.google.cloud.securitycenter.v1beta1.Finding finding = 1;</code>
     * @param \Google\Cloud\Securitycenter\V1beta1\Finding $var
     * @return $this
     */
    public function setFinding($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Securitycenter\V1beta1\Finding::class);
        $this->finding = $var;

        return $this;
    }

    /**
     * The FieldMask to use when updating the finding resource. This field is
     * ignored if the finding does not already exist and the finding is created.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
     * @return \Google\Protobuf\FieldMask
     */
    public function getUpdateMask()
    {
        return $this->update_mask;
    }

    /**
     * The FieldMask to use when updating the finding resource. This field is
     * ignored if the finding does not already exist and the finding is created.
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

