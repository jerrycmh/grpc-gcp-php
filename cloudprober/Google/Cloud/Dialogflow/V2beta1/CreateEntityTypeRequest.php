<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2beta1/entity_type.proto

namespace Google\Cloud\Dialogflow\V2beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request message for [EntityTypes.CreateEntityType][google.cloud.dialogflow.v2beta1.EntityTypes.CreateEntityType].
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.v2beta1.CreateEntityTypeRequest</code>
 */
class CreateEntityTypeRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The agent to create a entity type for.
     * Format: `projects/<Project ID>/agent`.
     *
     * Generated from protobuf field <code>string parent = 1;</code>
     */
    private $parent = '';
    /**
     * Required. The entity type to create.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2beta1.EntityType entity_type = 2;</code>
     */
    private $entity_type = null;
    /**
     * Optional. The language of entity synonyms defined in `entity_type`. If not
     * specified, the agent's default language is used.
     * [More than a dozen
     * languages](https://dialogflow.com/docs/reference/language) are supported.
     * Note: languages must be enabled in the agent, before they can be used.
     *
     * Generated from protobuf field <code>string language_code = 3;</code>
     */
    private $language_code = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The agent to create a entity type for.
     *           Format: `projects/<Project ID>/agent`.
     *     @type \Google\Cloud\Dialogflow\V2beta1\EntityType $entity_type
     *           Required. The entity type to create.
     *     @type string $language_code
     *           Optional. The language of entity synonyms defined in `entity_type`. If not
     *           specified, the agent's default language is used.
     *           [More than a dozen
     *           languages](https://dialogflow.com/docs/reference/language) are supported.
     *           Note: languages must be enabled in the agent, before they can be used.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\V2Beta1\EntityType::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The agent to create a entity type for.
     * Format: `projects/<Project ID>/agent`.
     *
     * Generated from protobuf field <code>string parent = 1;</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The agent to create a entity type for.
     * Format: `projects/<Project ID>/agent`.
     *
     * Generated from protobuf field <code>string parent = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Required. The entity type to create.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2beta1.EntityType entity_type = 2;</code>
     * @return \Google\Cloud\Dialogflow\V2beta1\EntityType
     */
    public function getEntityType()
    {
        return $this->entity_type;
    }

    /**
     * Required. The entity type to create.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2beta1.EntityType entity_type = 2;</code>
     * @param \Google\Cloud\Dialogflow\V2beta1\EntityType $var
     * @return $this
     */
    public function setEntityType($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dialogflow\V2beta1\EntityType::class);
        $this->entity_type = $var;

        return $this;
    }

    /**
     * Optional. The language of entity synonyms defined in `entity_type`. If not
     * specified, the agent's default language is used.
     * [More than a dozen
     * languages](https://dialogflow.com/docs/reference/language) are supported.
     * Note: languages must be enabled in the agent, before they can be used.
     *
     * Generated from protobuf field <code>string language_code = 3;</code>
     * @return string
     */
    public function getLanguageCode()
    {
        return $this->language_code;
    }

    /**
     * Optional. The language of entity synonyms defined in `entity_type`. If not
     * specified, the agent's default language is used.
     * [More than a dozen
     * languages](https://dialogflow.com/docs/reference/language) are supported.
     * Note: languages must be enabled in the agent, before they can be used.
     *
     * Generated from protobuf field <code>string language_code = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setLanguageCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->language_code = $var;

        return $this;
    }

}

