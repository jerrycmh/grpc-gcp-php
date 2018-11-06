<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/genomics/v1/annotations.proto

namespace Google\Genomics\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * An annotation set is a logical grouping of annotations that share consistent
 * type information and provenance. Examples of annotation sets include 'all
 * genes from refseq', and 'all variant annotations from ClinVar'.
 *
 * Generated from protobuf message <code>google.genomics.v1.AnnotationSet</code>
 */
class AnnotationSet extends \Google\Protobuf\Internal\Message
{
    /**
     * The server-generated annotation set ID, unique across all annotation sets.
     *
     * Generated from protobuf field <code>string id = 1;</code>
     */
    private $id = '';
    /**
     * The dataset to which this annotation set belongs.
     *
     * Generated from protobuf field <code>string dataset_id = 2;</code>
     */
    private $dataset_id = '';
    /**
     * The ID of the reference set that defines the coordinate space for this
     * set's annotations.
     *
     * Generated from protobuf field <code>string reference_set_id = 3;</code>
     */
    private $reference_set_id = '';
    /**
     * The display name for this annotation set.
     *
     * Generated from protobuf field <code>string name = 4;</code>
     */
    private $name = '';
    /**
     * The source URI describing the file from which this annotation set was
     * generated, if any.
     *
     * Generated from protobuf field <code>string source_uri = 5;</code>
     */
    private $source_uri = '';
    /**
     * The type of annotations contained within this set.
     *
     * Generated from protobuf field <code>.google.genomics.v1.AnnotationType type = 6;</code>
     */
    private $type = 0;
    /**
     * A map of additional read alignment information. This must be of the form
     * map<string, string[]> (string key mapping to a list of string values).
     *
     * Generated from protobuf field <code>map<string, .google.protobuf.ListValue> info = 17;</code>
     */
    private $info;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *           The server-generated annotation set ID, unique across all annotation sets.
     *     @type string $dataset_id
     *           The dataset to which this annotation set belongs.
     *     @type string $reference_set_id
     *           The ID of the reference set that defines the coordinate space for this
     *           set's annotations.
     *     @type string $name
     *           The display name for this annotation set.
     *     @type string $source_uri
     *           The source URI describing the file from which this annotation set was
     *           generated, if any.
     *     @type int $type
     *           The type of annotations contained within this set.
     *     @type array|\Google\Protobuf\Internal\MapField $info
     *           A map of additional read alignment information. This must be of the form
     *           map<string, string[]> (string key mapping to a list of string values).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Genomics\V1\Annotations::initOnce();
        parent::__construct($data);
    }

    /**
     * The server-generated annotation set ID, unique across all annotation sets.
     *
     * Generated from protobuf field <code>string id = 1;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * The server-generated annotation set ID, unique across all annotation sets.
     *
     * Generated from protobuf field <code>string id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, True);
        $this->id = $var;

        return $this;
    }

    /**
     * The dataset to which this annotation set belongs.
     *
     * Generated from protobuf field <code>string dataset_id = 2;</code>
     * @return string
     */
    public function getDatasetId()
    {
        return $this->dataset_id;
    }

    /**
     * The dataset to which this annotation set belongs.
     *
     * Generated from protobuf field <code>string dataset_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setDatasetId($var)
    {
        GPBUtil::checkString($var, True);
        $this->dataset_id = $var;

        return $this;
    }

    /**
     * The ID of the reference set that defines the coordinate space for this
     * set's annotations.
     *
     * Generated from protobuf field <code>string reference_set_id = 3;</code>
     * @return string
     */
    public function getReferenceSetId()
    {
        return $this->reference_set_id;
    }

    /**
     * The ID of the reference set that defines the coordinate space for this
     * set's annotations.
     *
     * Generated from protobuf field <code>string reference_set_id = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setReferenceSetId($var)
    {
        GPBUtil::checkString($var, True);
        $this->reference_set_id = $var;

        return $this;
    }

    /**
     * The display name for this annotation set.
     *
     * Generated from protobuf field <code>string name = 4;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The display name for this annotation set.
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

    /**
     * The source URI describing the file from which this annotation set was
     * generated, if any.
     *
     * Generated from protobuf field <code>string source_uri = 5;</code>
     * @return string
     */
    public function getSourceUri()
    {
        return $this->source_uri;
    }

    /**
     * The source URI describing the file from which this annotation set was
     * generated, if any.
     *
     * Generated from protobuf field <code>string source_uri = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setSourceUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->source_uri = $var;

        return $this;
    }

    /**
     * The type of annotations contained within this set.
     *
     * Generated from protobuf field <code>.google.genomics.v1.AnnotationType type = 6;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * The type of annotations contained within this set.
     *
     * Generated from protobuf field <code>.google.genomics.v1.AnnotationType type = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Google\Genomics\V1\AnnotationType::class);
        $this->type = $var;

        return $this;
    }

    /**
     * A map of additional read alignment information. This must be of the form
     * map<string, string[]> (string key mapping to a list of string values).
     *
     * Generated from protobuf field <code>map<string, .google.protobuf.ListValue> info = 17;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getInfo()
    {
        return $this->info;
    }

    /**
     * A map of additional read alignment information. This must be of the form
     * map<string, string[]> (string key mapping to a list of string values).
     *
     * Generated from protobuf field <code>map<string, .google.protobuf.ListValue> info = 17;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setInfo($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Protobuf\ListValue::class);
        $this->info = $arr;

        return $this;
    }

}

