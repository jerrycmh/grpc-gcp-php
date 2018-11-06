<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/bigtable/admin/table/v1/bigtable_table_service_messages.proto

namespace Google\Bigtable\Admin\Table\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>google.bigtable.admin.table.v1.DeleteColumnFamilyRequest</code>
 */
class DeleteColumnFamilyRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The unique name of the column family to be deleted.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           The unique name of the column family to be deleted.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Bigtable\Admin\Table\V1\BigtableTableServiceMessages::initOnce();
        parent::__construct($data);
    }

    /**
     * The unique name of the column family to be deleted.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The unique name of the column family to be deleted.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

}

