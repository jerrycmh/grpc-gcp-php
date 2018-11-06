<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/support/common.proto

namespace Google\Cloud\Support\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The comment text associated with a `Case`.
 *
 * Generated from protobuf message <code>google.cloud.support.common.Comment</code>
 */
class Comment extends \Google\Protobuf\Internal\Message
{
    /**
     * Text containing a maximum of 3000 characters.
     *
     * Generated from protobuf field <code>string text = 1;</code>
     */
    private $text = '';
    /**
     * Time when this update was created.
     * Output only.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 2;</code>
     */
    private $create_time = null;
    /**
     * The email address/name of user who created this comment.
     * Output only.
     *
     * Generated from protobuf field <code>string author = 3;</code>
     */
    private $author = '';
    /**
     * The resource name for this comment in format
     * `supportAccounts/{account_id}/cases/{case_id}/{comment_id}`.
     * Output only.
     *
     * Generated from protobuf field <code>string name = 4;</code>
     */
    private $name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $text
     *           Text containing a maximum of 3000 characters.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Time when this update was created.
     *           Output only.
     *     @type string $author
     *           The email address/name of user who created this comment.
     *           Output only.
     *     @type string $name
     *           The resource name for this comment in format
     *           `supportAccounts/{account_id}/cases/{case_id}/{comment_id}`.
     *           Output only.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Support\Common::initOnce();
        parent::__construct($data);
    }

    /**
     * Text containing a maximum of 3000 characters.
     *
     * Generated from protobuf field <code>string text = 1;</code>
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Text containing a maximum of 3000 characters.
     *
     * Generated from protobuf field <code>string text = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setText($var)
    {
        GPBUtil::checkString($var, True);
        $this->text = $var;

        return $this;
    }

    /**
     * Time when this update was created.
     * Output only.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 2;</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getCreateTime()
    {
        return $this->create_time;
    }

    /**
     * Time when this update was created.
     * Output only.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 2;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->create_time = $var;

        return $this;
    }

    /**
     * The email address/name of user who created this comment.
     * Output only.
     *
     * Generated from protobuf field <code>string author = 3;</code>
     * @return string
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * The email address/name of user who created this comment.
     * Output only.
     *
     * Generated from protobuf field <code>string author = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setAuthor($var)
    {
        GPBUtil::checkString($var, True);
        $this->author = $var;

        return $this;
    }

    /**
     * The resource name for this comment in format
     * `supportAccounts/{account_id}/cases/{case_id}/{comment_id}`.
     * Output only.
     *
     * Generated from protobuf field <code>string name = 4;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The resource name for this comment in format
     * `supportAccounts/{account_id}/cases/{case_id}/{comment_id}`.
     * Output only.
     *
     * Generated from protobuf field <code>string name = 4;</code>
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

