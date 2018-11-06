<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/datastore/v1beta3/query.proto

namespace Google\Cloud\Datastore\V1beta3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A [GQL query](https://cloud.google.com/datastore/docs/apis/gql/gql_reference).
 *
 * Generated from protobuf message <code>google.datastore.v1beta3.GqlQuery</code>
 */
class GqlQuery extends \Google\Protobuf\Internal\Message
{
    /**
     * A string of the format described
     * [here](https://cloud.google.com/datastore/docs/apis/gql/gql_reference).
     *
     * Generated from protobuf field <code>string query_string = 1;</code>
     */
    private $query_string = '';
    /**
     * When false, the query string must not contain any literals and instead must
     * bind all values. For example,
     * `SELECT * FROM Kind WHERE a = 'string literal'` is not allowed, while
     * `SELECT * FROM Kind WHERE a = &#64;value` is.
     *
     * Generated from protobuf field <code>bool allow_literals = 2;</code>
     */
    private $allow_literals = false;
    /**
     * For each non-reserved named binding site in the query string, there must be
     * a named parameter with that name, but not necessarily the inverse.
     * Key must match regex `[A-Za-z_$][A-Za-z_$0-9]*`, must not match regex
     * `__.*__`, and must not be `""`.
     *
     * Generated from protobuf field <code>map<string, .google.datastore.v1beta3.GqlQueryParameter> named_bindings = 5;</code>
     */
    private $named_bindings;
    /**
     * Numbered binding site &#64;1 references the first numbered parameter,
     * effectively using 1-based indexing, rather than the usual 0.
     * For each binding site numbered i in `query_string`, there must be an i-th
     * numbered parameter. The inverse must also be true.
     *
     * Generated from protobuf field <code>repeated .google.datastore.v1beta3.GqlQueryParameter positional_bindings = 4;</code>
     */
    private $positional_bindings;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $query_string
     *           A string of the format described
     *           [here](https://cloud.google.com/datastore/docs/apis/gql/gql_reference).
     *     @type bool $allow_literals
     *           When false, the query string must not contain any literals and instead must
     *           bind all values. For example,
     *           `SELECT * FROM Kind WHERE a = 'string literal'` is not allowed, while
     *           `SELECT * FROM Kind WHERE a = &#64;value` is.
     *     @type array|\Google\Protobuf\Internal\MapField $named_bindings
     *           For each non-reserved named binding site in the query string, there must be
     *           a named parameter with that name, but not necessarily the inverse.
     *           Key must match regex `[A-Za-z_$][A-Za-z_$0-9]*`, must not match regex
     *           `__.*__`, and must not be `""`.
     *     @type \Google\Cloud\Datastore\V1beta3\GqlQueryParameter[]|\Google\Protobuf\Internal\RepeatedField $positional_bindings
     *           Numbered binding site &#64;1 references the first numbered parameter,
     *           effectively using 1-based indexing, rather than the usual 0.
     *           For each binding site numbered i in `query_string`, there must be an i-th
     *           numbered parameter. The inverse must also be true.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Datastore\V1Beta3\Query::initOnce();
        parent::__construct($data);
    }

    /**
     * A string of the format described
     * [here](https://cloud.google.com/datastore/docs/apis/gql/gql_reference).
     *
     * Generated from protobuf field <code>string query_string = 1;</code>
     * @return string
     */
    public function getQueryString()
    {
        return $this->query_string;
    }

    /**
     * A string of the format described
     * [here](https://cloud.google.com/datastore/docs/apis/gql/gql_reference).
     *
     * Generated from protobuf field <code>string query_string = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setQueryString($var)
    {
        GPBUtil::checkString($var, True);
        $this->query_string = $var;

        return $this;
    }

    /**
     * When false, the query string must not contain any literals and instead must
     * bind all values. For example,
     * `SELECT * FROM Kind WHERE a = 'string literal'` is not allowed, while
     * `SELECT * FROM Kind WHERE a = &#64;value` is.
     *
     * Generated from protobuf field <code>bool allow_literals = 2;</code>
     * @return bool
     */
    public function getAllowLiterals()
    {
        return $this->allow_literals;
    }

    /**
     * When false, the query string must not contain any literals and instead must
     * bind all values. For example,
     * `SELECT * FROM Kind WHERE a = 'string literal'` is not allowed, while
     * `SELECT * FROM Kind WHERE a = &#64;value` is.
     *
     * Generated from protobuf field <code>bool allow_literals = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setAllowLiterals($var)
    {
        GPBUtil::checkBool($var);
        $this->allow_literals = $var;

        return $this;
    }

    /**
     * For each non-reserved named binding site in the query string, there must be
     * a named parameter with that name, but not necessarily the inverse.
     * Key must match regex `[A-Za-z_$][A-Za-z_$0-9]*`, must not match regex
     * `__.*__`, and must not be `""`.
     *
     * Generated from protobuf field <code>map<string, .google.datastore.v1beta3.GqlQueryParameter> named_bindings = 5;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getNamedBindings()
    {
        return $this->named_bindings;
    }

    /**
     * For each non-reserved named binding site in the query string, there must be
     * a named parameter with that name, but not necessarily the inverse.
     * Key must match regex `[A-Za-z_$][A-Za-z_$0-9]*`, must not match regex
     * `__.*__`, and must not be `""`.
     *
     * Generated from protobuf field <code>map<string, .google.datastore.v1beta3.GqlQueryParameter> named_bindings = 5;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setNamedBindings($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Datastore\V1beta3\GqlQueryParameter::class);
        $this->named_bindings = $arr;

        return $this;
    }

    /**
     * Numbered binding site &#64;1 references the first numbered parameter,
     * effectively using 1-based indexing, rather than the usual 0.
     * For each binding site numbered i in `query_string`, there must be an i-th
     * numbered parameter. The inverse must also be true.
     *
     * Generated from protobuf field <code>repeated .google.datastore.v1beta3.GqlQueryParameter positional_bindings = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPositionalBindings()
    {
        return $this->positional_bindings;
    }

    /**
     * Numbered binding site &#64;1 references the first numbered parameter,
     * effectively using 1-based indexing, rather than the usual 0.
     * For each binding site numbered i in `query_string`, there must be an i-th
     * numbered parameter. The inverse must also be true.
     *
     * Generated from protobuf field <code>repeated .google.datastore.v1beta3.GqlQueryParameter positional_bindings = 4;</code>
     * @param \Google\Cloud\Datastore\V1beta3\GqlQueryParameter[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPositionalBindings($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Datastore\V1beta3\GqlQueryParameter::class);
        $this->positional_bindings = $arr;

        return $this;
    }

}

