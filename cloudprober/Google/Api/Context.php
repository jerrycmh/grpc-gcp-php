<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/context.proto

namespace Google\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * `Context` defines which contexts an API requests.
 * Example:
 *     context:
 *       rules:
 *       - selector: "*"
 *         requested:
 *         - google.rpc.context.ProjectContext
 *         - google.rpc.context.OriginContext
 * The above specifies that all methods in the API request
 * `google.rpc.context.ProjectContext` and
 * `google.rpc.context.OriginContext`.
 * Available context types are defined in package
 * `google.rpc.context`.
 * This also provides mechanism to whitelist any protobuf message extension that
 * can be sent in grpc metadata using “x-goog-ext-<extension_id>-bin” and
 * “x-goog-ext-<extension_id>-jspb” format. For example, list any service
 * specific protobuf types that can appear in grpc metadata as follows in your
 * yaml file:
 * Example:
 *     context:
 *       rules:
 *        - selector: "google.example.library.v1.LibraryService.CreateBook"
 *          allowed_request_extensions:
 *          - google.foo.v1.NewExtension
 *          allowed_response_extensions:
 *          - google.foo.v1.NewExtension
 * You can also specify extension ID instead of fully qualified extension name
 * here.
 *
 * Generated from protobuf message <code>google.api.Context</code>
 */
class Context extends \Google\Protobuf\Internal\Message
{
    /**
     * A list of RPC context rules that apply to individual API methods.
     * **NOTE:** All service configuration rules follow "last one wins" order.
     *
     * Generated from protobuf field <code>repeated .google.api.ContextRule rules = 1;</code>
     */
    private $rules;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Api\ContextRule[]|\Google\Protobuf\Internal\RepeatedField $rules
     *           A list of RPC context rules that apply to individual API methods.
     *           **NOTE:** All service configuration rules follow "last one wins" order.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Api\Context::initOnce();
        parent::__construct($data);
    }

    /**
     * A list of RPC context rules that apply to individual API methods.
     * **NOTE:** All service configuration rules follow "last one wins" order.
     *
     * Generated from protobuf field <code>repeated .google.api.ContextRule rules = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRules()
    {
        return $this->rules;
    }

    /**
     * A list of RPC context rules that apply to individual API methods.
     * **NOTE:** All service configuration rules follow "last one wins" order.
     *
     * Generated from protobuf field <code>repeated .google.api.ContextRule rules = 1;</code>
     * @param \Google\Api\ContextRule[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRules($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Api\ContextRule::class);
        $this->rules = $arr;

        return $this;
    }

}

