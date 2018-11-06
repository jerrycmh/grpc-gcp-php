<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/genomics/v1/readgroupset.proto

namespace Google\Genomics\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A read group set is a logical collection of read groups, which are
 * collections of reads produced by a sequencer. A read group set typically
 * models reads corresponding to one sample, sequenced one way, and aligned one
 * way.
 * * A read group set belongs to one dataset.
 * * A read group belongs to one read group set.
 * * A read belongs to one read group.
 * For more genomics resource definitions, see [Fundamentals of Google
 * Genomics](https://cloud.google.com/genomics/fundamentals-of-google-genomics)
 *
 * Generated from protobuf message <code>google.genomics.v1.ReadGroupSet</code>
 */
class ReadGroupSet extends \Google\Protobuf\Internal\Message
{
    /**
     * The server-generated read group set ID, unique for all read group sets.
     *
     * Generated from protobuf field <code>string id = 1;</code>
     */
    private $id = '';
    /**
     * The dataset to which this read group set belongs.
     *
     * Generated from protobuf field <code>string dataset_id = 2;</code>
     */
    private $dataset_id = '';
    /**
     * The reference set to which the reads in this read group set are aligned.
     *
     * Generated from protobuf field <code>string reference_set_id = 3;</code>
     */
    private $reference_set_id = '';
    /**
     * The read group set name. By default this will be initialized to the sample
     * name of the sequenced data contained in this set.
     *
     * Generated from protobuf field <code>string name = 4;</code>
     */
    private $name = '';
    /**
     * The filename of the original source file for this read group set, if any.
     *
     * Generated from protobuf field <code>string filename = 5;</code>
     */
    private $filename = '';
    /**
     * The read groups in this set. There are typically 1-10 read groups in a read
     * group set.
     *
     * Generated from protobuf field <code>repeated .google.genomics.v1.ReadGroup read_groups = 6;</code>
     */
    private $read_groups;
    /**
     * A map of additional read group set information.
     *
     * Generated from protobuf field <code>map<string, .google.protobuf.ListValue> info = 7;</code>
     */
    private $info;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *           The server-generated read group set ID, unique for all read group sets.
     *     @type string $dataset_id
     *           The dataset to which this read group set belongs.
     *     @type string $reference_set_id
     *           The reference set to which the reads in this read group set are aligned.
     *     @type string $name
     *           The read group set name. By default this will be initialized to the sample
     *           name of the sequenced data contained in this set.
     *     @type string $filename
     *           The filename of the original source file for this read group set, if any.
     *     @type \Google\Genomics\V1\ReadGroup[]|\Google\Protobuf\Internal\RepeatedField $read_groups
     *           The read groups in this set. There are typically 1-10 read groups in a read
     *           group set.
     *     @type array|\Google\Protobuf\Internal\MapField $info
     *           A map of additional read group set information.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Genomics\V1\Readgroupset::initOnce();
        parent::__construct($data);
    }

    /**
     * The server-generated read group set ID, unique for all read group sets.
     *
     * Generated from protobuf field <code>string id = 1;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * The server-generated read group set ID, unique for all read group sets.
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
     * The dataset to which this read group set belongs.
     *
     * Generated from protobuf field <code>string dataset_id = 2;</code>
     * @return string
     */
    public function getDatasetId()
    {
        return $this->dataset_id;
    }

    /**
     * The dataset to which this read group set belongs.
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
     * The reference set to which the reads in this read group set are aligned.
     *
     * Generated from protobuf field <code>string reference_set_id = 3;</code>
     * @return string
     */
    public function getReferenceSetId()
    {
        return $this->reference_set_id;
    }

    /**
     * The reference set to which the reads in this read group set are aligned.
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
     * The read group set name. By default this will be initialized to the sample
     * name of the sequenced data contained in this set.
     *
     * Generated from protobuf field <code>string name = 4;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The read group set name. By default this will be initialized to the sample
     * name of the sequenced data contained in this set.
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
     * The filename of the original source file for this read group set, if any.
     *
     * Generated from protobuf field <code>string filename = 5;</code>
     * @return string
     */
    public function getFilename()
    {
        return $this->filename;
    }

    /**
     * The filename of the original source file for this read group set, if any.
     *
     * Generated from protobuf field <code>string filename = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setFilename($var)
    {
        GPBUtil::checkString($var, True);
        $this->filename = $var;

        return $this;
    }

    /**
     * The read groups in this set. There are typically 1-10 read groups in a read
     * group set.
     *
     * Generated from protobuf field <code>repeated .google.genomics.v1.ReadGroup read_groups = 6;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getReadGroups()
    {
        return $this->read_groups;
    }

    /**
     * The read groups in this set. There are typically 1-10 read groups in a read
     * group set.
     *
     * Generated from protobuf field <code>repeated .google.genomics.v1.ReadGroup read_groups = 6;</code>
     * @param \Google\Genomics\V1\ReadGroup[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setReadGroups($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Genomics\V1\ReadGroup::class);
        $this->read_groups = $arr;

        return $this;
    }

    /**
     * A map of additional read group set information.
     *
     * Generated from protobuf field <code>map<string, .google.protobuf.ListValue> info = 7;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getInfo()
    {
        return $this->info;
    }

    /**
     * A map of additional read group set information.
     *
     * Generated from protobuf field <code>map<string, .google.protobuf.ListValue> info = 7;</code>
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

