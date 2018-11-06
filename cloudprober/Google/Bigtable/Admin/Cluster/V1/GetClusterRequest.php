<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/bigtable/admin/cluster/v1/bigtable_cluster_service_messages.proto

namespace Google\Bigtable\Admin\Cluster\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for BigtableClusterService.GetCluster.
 *
 * Generated from protobuf message <code>google.bigtable.admin.cluster.v1.GetClusterRequest</code>
 */
class GetClusterRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The unique name of the requested cluster.
     * Values are of the form projects/<project>/zones/<zone>/clusters/<cluster>
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
     *           The unique name of the requested cluster.
     *           Values are of the form projects/<project>/zones/<zone>/clusters/<cluster>
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Bigtable\Admin\Cluster\V1\BigtableClusterServiceMessages::initOnce();
        parent::__construct($data);
    }

    /**
     * The unique name of the requested cluster.
     * Values are of the form projects/<project>/zones/<zone>/clusters/<cluster>
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The unique name of the requested cluster.
     * Values are of the form projects/<project>/zones/<zone>/clusters/<cluster>
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

