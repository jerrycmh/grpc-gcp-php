<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/firestore/admin/v1beta1/firestore_admin.proto

namespace Google\Firestore\Admin\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The response for [FirestoreAdmin.ListIndexes][google.firestore.admin.v1beta1.FirestoreAdmin.ListIndexes].
 *
 * Generated from protobuf message <code>google.firestore.admin.v1beta1.ListIndexesResponse</code>
 */
class ListIndexesResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The indexes.
     *
     * Generated from protobuf field <code>repeated .google.firestore.admin.v1beta1.Index indexes = 1;</code>
     */
    private $indexes;
    /**
     * The standard List next-page token.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    private $next_page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Firestore\Admin\V1beta1\Index[]|\Google\Protobuf\Internal\RepeatedField $indexes
     *           The indexes.
     *     @type string $next_page_token
     *           The standard List next-page token.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Firestore\Admin\V1Beta1\FirestoreAdmin::initOnce();
        parent::__construct($data);
    }

    /**
     * The indexes.
     *
     * Generated from protobuf field <code>repeated .google.firestore.admin.v1beta1.Index indexes = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getIndexes()
    {
        return $this->indexes;
    }

    /**
     * The indexes.
     *
     * Generated from protobuf field <code>repeated .google.firestore.admin.v1beta1.Index indexes = 1;</code>
     * @param \Google\Firestore\Admin\V1beta1\Index[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setIndexes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Firestore\Admin\V1beta1\Index::class);
        $this->indexes = $arr;

        return $this;
    }

    /**
     * The standard List next-page token.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * The standard List next-page token.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setNextPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_page_token = $var;

        return $this;
    }

}

