<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/support/v1alpha1/cloud_support.proto

namespace Google\Cloud\Support\V1alpha1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request message for `CreateComment` method.
 *
 * Generated from protobuf message <code>google.cloud.support.v1alpha1.CreateCommentRequest</code>
 */
class CreateCommentRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The resource name of case to which this comment should be added.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * The `Comment` to be added to this case.
     *
     * Generated from protobuf field <code>.google.cloud.support.common.Comment comment = 2;</code>
     */
    private $comment = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           The resource name of case to which this comment should be added.
     *     @type \Google\Cloud\Support\Common\Comment $comment
     *           The `Comment` to be added to this case.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Support\V1Alpha1\CloudSupport::initOnce();
        parent::__construct($data);
    }

    /**
     * The resource name of case to which this comment should be added.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The resource name of case to which this comment should be added.
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
     * The `Comment` to be added to this case.
     *
     * Generated from protobuf field <code>.google.cloud.support.common.Comment comment = 2;</code>
     * @return \Google\Cloud\Support\Common\Comment
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * The `Comment` to be added to this case.
     *
     * Generated from protobuf field <code>.google.cloud.support.common.Comment comment = 2;</code>
     * @param \Google\Cloud\Support\Common\Comment $var
     * @return $this
     */
    public function setComment($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Support\Common\Comment::class);
        $this->comment = $var;

        return $this;
    }

}

