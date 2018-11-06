<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/datastore/v1beta3/entity.proto

namespace Google\Cloud\Datastore\V1beta3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A Datastore data object.
 * An entity is limited to 1 megabyte when stored. That _roughly_
 * corresponds to a limit of 1 megabyte for the serialized form of this
 * message.
 *
 * Generated from protobuf message <code>google.datastore.v1beta3.Entity</code>
 */
class Entity extends \Google\Protobuf\Internal\Message
{
    /**
     * The entity's key.
     * An entity must have a key, unless otherwise documented (for example,
     * an entity in `Value.entity_value` may have no key).
     * An entity's kind is its key path's last element's kind,
     * or null if it has no key.
     *
     * Generated from protobuf field <code>.google.datastore.v1beta3.Key key = 1;</code>
     */
    private $key = null;
    /**
     * The entity's properties.
     * The map's keys are property names.
     * A property name matching regex `__.*__` is reserved.
     * A reserved property name is forbidden in certain documented contexts.
     * The name must not contain more than 500 characters.
     * The name cannot be `""`.
     *
     * Generated from protobuf field <code>map<string, .google.datastore.v1beta3.Value> properties = 3;</code>
     */
    private $properties;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Datastore\V1beta3\Key $key
     *           The entity's key.
     *           An entity must have a key, unless otherwise documented (for example,
     *           an entity in `Value.entity_value` may have no key).
     *           An entity's kind is its key path's last element's kind,
     *           or null if it has no key.
     *     @type array|\Google\Protobuf\Internal\MapField $properties
     *           The entity's properties.
     *           The map's keys are property names.
     *           A property name matching regex `__.*__` is reserved.
     *           A reserved property name is forbidden in certain documented contexts.
     *           The name must not contain more than 500 characters.
     *           The name cannot be `""`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Datastore\V1Beta3\Entity::initOnce();
        parent::__construct($data);
    }

    /**
     * The entity's key.
     * An entity must have a key, unless otherwise documented (for example,
     * an entity in `Value.entity_value` may have no key).
     * An entity's kind is its key path's last element's kind,
     * or null if it has no key.
     *
     * Generated from protobuf field <code>.google.datastore.v1beta3.Key key = 1;</code>
     * @return \Google\Cloud\Datastore\V1beta3\Key
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * The entity's key.
     * An entity must have a key, unless otherwise documented (for example,
     * an entity in `Value.entity_value` may have no key).
     * An entity's kind is its key path's last element's kind,
     * or null if it has no key.
     *
     * Generated from protobuf field <code>.google.datastore.v1beta3.Key key = 1;</code>
     * @param \Google\Cloud\Datastore\V1beta3\Key $var
     * @return $this
     */
    public function setKey($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Datastore\V1beta3\Key::class);
        $this->key = $var;

        return $this;
    }

    /**
     * The entity's properties.
     * The map's keys are property names.
     * A property name matching regex `__.*__` is reserved.
     * A reserved property name is forbidden in certain documented contexts.
     * The name must not contain more than 500 characters.
     * The name cannot be `""`.
     *
     * Generated from protobuf field <code>map<string, .google.datastore.v1beta3.Value> properties = 3;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getProperties()
    {
        return $this->properties;
    }

    /**
     * The entity's properties.
     * The map's keys are property names.
     * A property name matching regex `__.*__` is reserved.
     * A reserved property name is forbidden in certain documented contexts.
     * The name must not contain more than 500 characters.
     * The name cannot be `""`.
     *
     * Generated from protobuf field <code>map<string, .google.datastore.v1beta3.Value> properties = 3;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setProperties($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Datastore\V1beta3\Value::class);
        $this->properties = $arr;

        return $this;
    }

}

