<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/resultstore/v2/resultstore_upload.proto

namespace Google\Devtools\Resultstore\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request passed into CreateInvocation
 *
 * Generated from protobuf message <code>google.devtools.resultstore.v2.CreateInvocationRequest</code>
 */
class CreateInvocationRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * A unique identifier for this request. Must be set to a different value for
     * each request that affects a given resource (eg. a random UUID). Required
     * for the operation to be idempotent. This is achieved by ignoring this
     * request if the last successful operation on the resource had the same
     * request ID. If set, invocation_id must also be provided.
     * Restricted to 36 utf-8 bytes.
     *
     * Generated from protobuf field <code>string request_id = 1;</code>
     */
    private $request_id = '';
    /**
     * The invocation ID.  If left empty then a new unique ID will be
     * assigned by the server. If populated, a RFC 4122-compliant v4 UUID is
     * preferred, but v3 or v5 UUIDs are allowed too.
     *
     * Generated from protobuf field <code>string invocation_id = 2;</code>
     */
    private $invocation_id = '';
    /**
     * The invocation to create.  Its name field will be ignored, since the name
     * will be derived from the id field above and assigned by the server.
     *
     * Generated from protobuf field <code>.google.devtools.resultstore.v2.Invocation invocation = 3;</code>
     */
    private $invocation = null;
    /**
     * This is a token to authorize upload access to this invocation. It must be
     * set to a RFC 4122-compliant v3, v4, or v5 UUID. Once this is set in
     * CreateInvocation, all other upload RPCs for that Invocation and any of its
     * child resources must also include the exact same token, or they will be
     * rejected. The generated token should be unique to this invocation, and it
     * should be kept secret.
     * The purpose of this field is to prevent other users and tools from
     * clobbering your upload intentionally or accidentally. The standard way of
     * using this token is to create a second v4 UUID when the invocation_id is
     * created, and storing them together during the upload. Essentially, this is
     * a "password" to the invocation.
     *
     * Generated from protobuf field <code>string authorization_token = 4;</code>
     */
    private $authorization_token = '';
    /**
     * By default, Invocations are auto-finished if they are not modified for 24
     * hours. If you need auto-finish to happen sooner, set this field to the time
     * you'd like auto-finish to occur.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp auto_finish_time = 5;</code>
     */
    private $auto_finish_time = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $request_id
     *           A unique identifier for this request. Must be set to a different value for
     *           each request that affects a given resource (eg. a random UUID). Required
     *           for the operation to be idempotent. This is achieved by ignoring this
     *           request if the last successful operation on the resource had the same
     *           request ID. If set, invocation_id must also be provided.
     *           Restricted to 36 utf-8 bytes.
     *     @type string $invocation_id
     *           The invocation ID.  If left empty then a new unique ID will be
     *           assigned by the server. If populated, a RFC 4122-compliant v4 UUID is
     *           preferred, but v3 or v5 UUIDs are allowed too.
     *     @type \Google\Devtools\Resultstore\V2\Invocation $invocation
     *           The invocation to create.  Its name field will be ignored, since the name
     *           will be derived from the id field above and assigned by the server.
     *     @type string $authorization_token
     *           This is a token to authorize upload access to this invocation. It must be
     *           set to a RFC 4122-compliant v3, v4, or v5 UUID. Once this is set in
     *           CreateInvocation, all other upload RPCs for that Invocation and any of its
     *           child resources must also include the exact same token, or they will be
     *           rejected. The generated token should be unique to this invocation, and it
     *           should be kept secret.
     *           The purpose of this field is to prevent other users and tools from
     *           clobbering your upload intentionally or accidentally. The standard way of
     *           using this token is to create a second v4 UUID when the invocation_id is
     *           created, and storing them together during the upload. Essentially, this is
     *           a "password" to the invocation.
     *     @type \Google\Protobuf\Timestamp $auto_finish_time
     *           By default, Invocations are auto-finished if they are not modified for 24
     *           hours. If you need auto-finish to happen sooner, set this field to the time
     *           you'd like auto-finish to occur.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Devtools\Resultstore\V2\ResultstoreUpload::initOnce();
        parent::__construct($data);
    }

    /**
     * A unique identifier for this request. Must be set to a different value for
     * each request that affects a given resource (eg. a random UUID). Required
     * for the operation to be idempotent. This is achieved by ignoring this
     * request if the last successful operation on the resource had the same
     * request ID. If set, invocation_id must also be provided.
     * Restricted to 36 utf-8 bytes.
     *
     * Generated from protobuf field <code>string request_id = 1;</code>
     * @return string
     */
    public function getRequestId()
    {
        return $this->request_id;
    }

    /**
     * A unique identifier for this request. Must be set to a different value for
     * each request that affects a given resource (eg. a random UUID). Required
     * for the operation to be idempotent. This is achieved by ignoring this
     * request if the last successful operation on the resource had the same
     * request ID. If set, invocation_id must also be provided.
     * Restricted to 36 utf-8 bytes.
     *
     * Generated from protobuf field <code>string request_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setRequestId($var)
    {
        GPBUtil::checkString($var, True);
        $this->request_id = $var;

        return $this;
    }

    /**
     * The invocation ID.  If left empty then a new unique ID will be
     * assigned by the server. If populated, a RFC 4122-compliant v4 UUID is
     * preferred, but v3 or v5 UUIDs are allowed too.
     *
     * Generated from protobuf field <code>string invocation_id = 2;</code>
     * @return string
     */
    public function getInvocationId()
    {
        return $this->invocation_id;
    }

    /**
     * The invocation ID.  If left empty then a new unique ID will be
     * assigned by the server. If populated, a RFC 4122-compliant v4 UUID is
     * preferred, but v3 or v5 UUIDs are allowed too.
     *
     * Generated from protobuf field <code>string invocation_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setInvocationId($var)
    {
        GPBUtil::checkString($var, True);
        $this->invocation_id = $var;

        return $this;
    }

    /**
     * The invocation to create.  Its name field will be ignored, since the name
     * will be derived from the id field above and assigned by the server.
     *
     * Generated from protobuf field <code>.google.devtools.resultstore.v2.Invocation invocation = 3;</code>
     * @return \Google\Devtools\Resultstore\V2\Invocation
     */
    public function getInvocation()
    {
        return $this->invocation;
    }

    /**
     * The invocation to create.  Its name field will be ignored, since the name
     * will be derived from the id field above and assigned by the server.
     *
     * Generated from protobuf field <code>.google.devtools.resultstore.v2.Invocation invocation = 3;</code>
     * @param \Google\Devtools\Resultstore\V2\Invocation $var
     * @return $this
     */
    public function setInvocation($var)
    {
        GPBUtil::checkMessage($var, \Google\Devtools\Resultstore\V2\Invocation::class);
        $this->invocation = $var;

        return $this;
    }

    /**
     * This is a token to authorize upload access to this invocation. It must be
     * set to a RFC 4122-compliant v3, v4, or v5 UUID. Once this is set in
     * CreateInvocation, all other upload RPCs for that Invocation and any of its
     * child resources must also include the exact same token, or they will be
     * rejected. The generated token should be unique to this invocation, and it
     * should be kept secret.
     * The purpose of this field is to prevent other users and tools from
     * clobbering your upload intentionally or accidentally. The standard way of
     * using this token is to create a second v4 UUID when the invocation_id is
     * created, and storing them together during the upload. Essentially, this is
     * a "password" to the invocation.
     *
     * Generated from protobuf field <code>string authorization_token = 4;</code>
     * @return string
     */
    public function getAuthorizationToken()
    {
        return $this->authorization_token;
    }

    /**
     * This is a token to authorize upload access to this invocation. It must be
     * set to a RFC 4122-compliant v3, v4, or v5 UUID. Once this is set in
     * CreateInvocation, all other upload RPCs for that Invocation and any of its
     * child resources must also include the exact same token, or they will be
     * rejected. The generated token should be unique to this invocation, and it
     * should be kept secret.
     * The purpose of this field is to prevent other users and tools from
     * clobbering your upload intentionally or accidentally. The standard way of
     * using this token is to create a second v4 UUID when the invocation_id is
     * created, and storing them together during the upload. Essentially, this is
     * a "password" to the invocation.
     *
     * Generated from protobuf field <code>string authorization_token = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setAuthorizationToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->authorization_token = $var;

        return $this;
    }

    /**
     * By default, Invocations are auto-finished if they are not modified for 24
     * hours. If you need auto-finish to happen sooner, set this field to the time
     * you'd like auto-finish to occur.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp auto_finish_time = 5;</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getAutoFinishTime()
    {
        return $this->auto_finish_time;
    }

    /**
     * By default, Invocations are auto-finished if they are not modified for 24
     * hours. If you need auto-finish to happen sooner, set this field to the time
     * you'd like auto-finish to occur.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp auto_finish_time = 5;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setAutoFinishTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->auto_finish_time = $var;

        return $this;
    }

}

