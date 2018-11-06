<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/bigtable/v1/bigtable_service_messages.proto

namespace Google\Bigtable\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for BigtableService.MutateRows.
 *
 * Generated from protobuf message <code>google.bigtable.v1.MutateRowsRequest</code>
 */
class MutateRowsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The unique name of the table to which the mutations should be applied.
     *
     * Generated from protobuf field <code>string table_name = 1;</code>
     */
    private $table_name = '';
    /**
     * The row keys/mutations to be applied in bulk.
     * Each entry is applied as an atomic mutation, but the entries may be
     * applied in arbitrary order (even between entries for the same row).
     * At least one entry must be specified, and in total the entries may
     * contain at most 100000 mutations.
     *
     * Generated from protobuf field <code>repeated .google.bigtable.v1.MutateRowsRequest.Entry entries = 2;</code>
     */
    private $entries;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $table_name
     *           The unique name of the table to which the mutations should be applied.
     *     @type \Google\Bigtable\V1\MutateRowsRequest\Entry[]|\Google\Protobuf\Internal\RepeatedField $entries
     *           The row keys/mutations to be applied in bulk.
     *           Each entry is applied as an atomic mutation, but the entries may be
     *           applied in arbitrary order (even between entries for the same row).
     *           At least one entry must be specified, and in total the entries may
     *           contain at most 100000 mutations.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Bigtable\V1\BigtableServiceMessages::initOnce();
        parent::__construct($data);
    }

    /**
     * The unique name of the table to which the mutations should be applied.
     *
     * Generated from protobuf field <code>string table_name = 1;</code>
     * @return string
     */
    public function getTableName()
    {
        return $this->table_name;
    }

    /**
     * The unique name of the table to which the mutations should be applied.
     *
     * Generated from protobuf field <code>string table_name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setTableName($var)
    {
        GPBUtil::checkString($var, True);
        $this->table_name = $var;

        return $this;
    }

    /**
     * The row keys/mutations to be applied in bulk.
     * Each entry is applied as an atomic mutation, but the entries may be
     * applied in arbitrary order (even between entries for the same row).
     * At least one entry must be specified, and in total the entries may
     * contain at most 100000 mutations.
     *
     * Generated from protobuf field <code>repeated .google.bigtable.v1.MutateRowsRequest.Entry entries = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getEntries()
    {
        return $this->entries;
    }

    /**
     * The row keys/mutations to be applied in bulk.
     * Each entry is applied as an atomic mutation, but the entries may be
     * applied in arbitrary order (even between entries for the same row).
     * At least one entry must be specified, and in total the entries may
     * contain at most 100000 mutations.
     *
     * Generated from protobuf field <code>repeated .google.bigtable.v1.MutateRowsRequest.Entry entries = 2;</code>
     * @param \Google\Bigtable\V1\MutateRowsRequest\Entry[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setEntries($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Bigtable\V1\MutateRowsRequest\Entry::class);
        $this->entries = $arr;

        return $this;
    }

}

