<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/bigtable/admin/table/v1/bigtable_table_service_messages.proto

namespace Google\Bigtable\Admin\Table\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>google.bigtable.admin.table.v1.BulkDeleteRowsRequest</code>
 */
class BulkDeleteRowsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The unique name of the table on which to perform the bulk delete
     *
     * Generated from protobuf field <code>string table_name = 1;</code>
     */
    private $table_name = '';
    protected $target;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $table_name
     *           The unique name of the table on which to perform the bulk delete
     *     @type string $row_key_prefix
     *           Delete all rows that start with this row key prefix. Prefix cannot be
     *           zero length.
     *     @type bool $delete_all_data_from_table
     *           Delete all rows in the table. Setting this to false is a no-op.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Bigtable\Admin\Table\V1\BigtableTableServiceMessages::initOnce();
        parent::__construct($data);
    }

    /**
     * The unique name of the table on which to perform the bulk delete
     *
     * Generated from protobuf field <code>string table_name = 1;</code>
     * @return string
     */
    public function getTableName()
    {
        return $this->table_name;
    }

    /**
     * The unique name of the table on which to perform the bulk delete
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
     * Delete all rows that start with this row key prefix. Prefix cannot be
     * zero length.
     *
     * Generated from protobuf field <code>bytes row_key_prefix = 2;</code>
     * @return string
     */
    public function getRowKeyPrefix()
    {
        return $this->readOneof(2);
    }

    /**
     * Delete all rows that start with this row key prefix. Prefix cannot be
     * zero length.
     *
     * Generated from protobuf field <code>bytes row_key_prefix = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setRowKeyPrefix($var)
    {
        GPBUtil::checkString($var, False);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Delete all rows in the table. Setting this to false is a no-op.
     *
     * Generated from protobuf field <code>bool delete_all_data_from_table = 3;</code>
     * @return bool
     */
    public function getDeleteAllDataFromTable()
    {
        return $this->readOneof(3);
    }

    /**
     * Delete all rows in the table. Setting this to false is a no-op.
     *
     * Generated from protobuf field <code>bool delete_all_data_from_table = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setDeleteAllDataFromTable($var)
    {
        GPBUtil::checkBool($var);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getTarget()
    {
        return $this->whichOneof("target");
    }

}

