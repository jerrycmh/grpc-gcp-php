<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/support/v1alpha1/cloud_support.proto

namespace Google\Cloud\Support\V1alpha1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request message for `ListComments` method.
 *
 * Generated from protobuf message <code>google.cloud.support.v1alpha1.ListCommentsRequest</code>
 */
class ListCommentsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The resource name of case for which comments should be listed.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           The resource name of case for which comments should be listed.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Support\V1Alpha1\CloudSupport::initOnce();
        parent::__construct($data);
    }

    /**
     * The resource name of case for which comments should be listed.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The resource name of case for which comments should be listed.
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

}

