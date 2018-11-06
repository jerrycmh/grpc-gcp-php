<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/genomics/v1/reads.proto

namespace Google\Genomics\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The read group set export request.
 *
 * Generated from protobuf message <code>google.genomics.v1.ExportReadGroupSetRequest</code>
 */
class ExportReadGroupSetRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The Google Cloud project ID that owns this
     * export. The caller must have WRITE access to this project.
     *
     * Generated from protobuf field <code>string project_id = 1;</code>
     */
    private $project_id = '';
    /**
     * Required. A Google Cloud Storage URI for the exported BAM file.
     * The currently authenticated user must have write access to the new file.
     * An error will be returned if the URI already contains data.
     *
     * Generated from protobuf field <code>string export_uri = 2;</code>
     */
    private $export_uri = '';
    /**
     * Required. The ID of the read group set to export. The caller must have
     * READ access to this read group set.
     *
     * Generated from protobuf field <code>string read_group_set_id = 3;</code>
     */
    private $read_group_set_id = '';
    /**
     * The reference names to export. If this is not specified, all reference
     * sequences, including unmapped reads, are exported.
     * Use `*` to export only unmapped reads.
     *
     * Generated from protobuf field <code>repeated string reference_names = 4;</code>
     */
    private $reference_names;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $project_id
     *           Required. The Google Cloud project ID that owns this
     *           export. The caller must have WRITE access to this project.
     *     @type string $export_uri
     *           Required. A Google Cloud Storage URI for the exported BAM file.
     *           The currently authenticated user must have write access to the new file.
     *           An error will be returned if the URI already contains data.
     *     @type string $read_group_set_id
     *           Required. The ID of the read group set to export. The caller must have
     *           READ access to this read group set.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $reference_names
     *           The reference names to export. If this is not specified, all reference
     *           sequences, including unmapped reads, are exported.
     *           Use `*` to export only unmapped reads.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Genomics\V1\Reads::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The Google Cloud project ID that owns this
     * export. The caller must have WRITE access to this project.
     *
     * Generated from protobuf field <code>string project_id = 1;</code>
     * @return string
     */
    public function getProjectId()
    {
        return $this->project_id;
    }

    /**
     * Required. The Google Cloud project ID that owns this
     * export. The caller must have WRITE access to this project.
     *
     * Generated from protobuf field <code>string project_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setProjectId($var)
    {
        GPBUtil::checkString($var, True);
        $this->project_id = $var;

        return $this;
    }

    /**
     * Required. A Google Cloud Storage URI for the exported BAM file.
     * The currently authenticated user must have write access to the new file.
     * An error will be returned if the URI already contains data.
     *
     * Generated from protobuf field <code>string export_uri = 2;</code>
     * @return string
     */
    public function getExportUri()
    {
        return $this->export_uri;
    }

    /**
     * Required. A Google Cloud Storage URI for the exported BAM file.
     * The currently authenticated user must have write access to the new file.
     * An error will be returned if the URI already contains data.
     *
     * Generated from protobuf field <code>string export_uri = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setExportUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->export_uri = $var;

        return $this;
    }

    /**
     * Required. The ID of the read group set to export. The caller must have
     * READ access to this read group set.
     *
     * Generated from protobuf field <code>string read_group_set_id = 3;</code>
     * @return string
     */
    public function getReadGroupSetId()
    {
        return $this->read_group_set_id;
    }

    /**
     * Required. The ID of the read group set to export. The caller must have
     * READ access to this read group set.
     *
     * Generated from protobuf field <code>string read_group_set_id = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setReadGroupSetId($var)
    {
        GPBUtil::checkString($var, True);
        $this->read_group_set_id = $var;

        return $this;
    }

    /**
     * The reference names to export. If this is not specified, all reference
     * sequences, including unmapped reads, are exported.
     * Use `*` to export only unmapped reads.
     *
     * Generated from protobuf field <code>repeated string reference_names = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getReferenceNames()
    {
        return $this->reference_names;
    }

    /**
     * The reference names to export. If this is not specified, all reference
     * sequences, including unmapped reads, are exported.
     * Use `*` to export only unmapped reads.
     *
     * Generated from protobuf field <code>repeated string reference_names = 4;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setReferenceNames($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->reference_names = $arr;

        return $this;
    }

}

