<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/genomics/v1alpha2/pipelines.proto

namespace Google\Genomics\V1alpha2\PipelineResources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A Google Compute Engine disk resource specification.
 *
 * Generated from protobuf message <code>google.genomics.v1alpha2.PipelineResources.Disk</code>
 */
class Disk extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the disk that can be used in the pipeline
     * parameters. Must be 1 - 63 characters.
     * The name "boot" is reserved for system use.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * Required. The type of the disk to create.
     *
     * Generated from protobuf field <code>.google.genomics.v1alpha2.PipelineResources.Disk.Type type = 2;</code>
     */
    private $type = 0;
    /**
     * The size of the disk. Defaults to 500 (GB).
     * This field is not applicable for local SSD.
     *
     * Generated from protobuf field <code>int32 size_gb = 3;</code>
     */
    private $size_gb = 0;
    /**
     * The full or partial URL of the persistent disk to attach. See
     * https://cloud.google.com/compute/docs/reference/latest/instances#resource
     * and
     * https://cloud.google.com/compute/docs/disks/persistent-disks#snapshots
     * for more details.
     *
     * Generated from protobuf field <code>string source = 4;</code>
     */
    private $source = '';
    /**
     * Deprecated. Disks created by the Pipelines API will be deleted at the end
     * of the pipeline run, regardless of what this field is set to.
     *
     * Generated from protobuf field <code>bool auto_delete = 6;</code>
     */
    private $auto_delete = false;
    /**
     * Required at create time and cannot be overridden at run time.
     * Specifies the path in the docker container where files on
     * this disk should be located. For example, if `mountPoint`
     * is `/mnt/disk`, and the parameter has `localPath`
     * `inputs/file.txt`, the docker container can access the data at
     * `/mnt/disk/inputs/file.txt`.
     *
     * Generated from protobuf field <code>string mount_point = 8;</code>
     */
    private $mount_point = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The name of the disk that can be used in the pipeline
     *           parameters. Must be 1 - 63 characters.
     *           The name "boot" is reserved for system use.
     *     @type int $type
     *           Required. The type of the disk to create.
     *     @type int $size_gb
     *           The size of the disk. Defaults to 500 (GB).
     *           This field is not applicable for local SSD.
     *     @type string $source
     *           The full or partial URL of the persistent disk to attach. See
     *           https://cloud.google.com/compute/docs/reference/latest/instances#resource
     *           and
     *           https://cloud.google.com/compute/docs/disks/persistent-disks#snapshots
     *           for more details.
     *     @type bool $auto_delete
     *           Deprecated. Disks created by the Pipelines API will be deleted at the end
     *           of the pipeline run, regardless of what this field is set to.
     *     @type string $mount_point
     *           Required at create time and cannot be overridden at run time.
     *           Specifies the path in the docker container where files on
     *           this disk should be located. For example, if `mountPoint`
     *           is `/mnt/disk`, and the parameter has `localPath`
     *           `inputs/file.txt`, the docker container can access the data at
     *           `/mnt/disk/inputs/file.txt`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Genomics\V1Alpha2\Pipelines::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the disk that can be used in the pipeline
     * parameters. Must be 1 - 63 characters.
     * The name "boot" is reserved for system use.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The name of the disk that can be used in the pipeline
     * parameters. Must be 1 - 63 characters.
     * The name "boot" is reserved for system use.
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

    /**
     * Required. The type of the disk to create.
     *
     * Generated from protobuf field <code>.google.genomics.v1alpha2.PipelineResources.Disk.Type type = 2;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Required. The type of the disk to create.
     *
     * Generated from protobuf field <code>.google.genomics.v1alpha2.PipelineResources.Disk.Type type = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Google\Genomics\V1alpha2\PipelineResources_Disk_Type::class);
        $this->type = $var;

        return $this;
    }

    /**
     * The size of the disk. Defaults to 500 (GB).
     * This field is not applicable for local SSD.
     *
     * Generated from protobuf field <code>int32 size_gb = 3;</code>
     * @return int
     */
    public function getSizeGb()
    {
        return $this->size_gb;
    }

    /**
     * The size of the disk. Defaults to 500 (GB).
     * This field is not applicable for local SSD.
     *
     * Generated from protobuf field <code>int32 size_gb = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setSizeGb($var)
    {
        GPBUtil::checkInt32($var);
        $this->size_gb = $var;

        return $this;
    }

    /**
     * The full or partial URL of the persistent disk to attach. See
     * https://cloud.google.com/compute/docs/reference/latest/instances#resource
     * and
     * https://cloud.google.com/compute/docs/disks/persistent-disks#snapshots
     * for more details.
     *
     * Generated from protobuf field <code>string source = 4;</code>
     * @return string
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * The full or partial URL of the persistent disk to attach. See
     * https://cloud.google.com/compute/docs/reference/latest/instances#resource
     * and
     * https://cloud.google.com/compute/docs/disks/persistent-disks#snapshots
     * for more details.
     *
     * Generated from protobuf field <code>string source = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setSource($var)
    {
        GPBUtil::checkString($var, True);
        $this->source = $var;

        return $this;
    }

    /**
     * Deprecated. Disks created by the Pipelines API will be deleted at the end
     * of the pipeline run, regardless of what this field is set to.
     *
     * Generated from protobuf field <code>bool auto_delete = 6;</code>
     * @return bool
     */
    public function getAutoDelete()
    {
        return $this->auto_delete;
    }

    /**
     * Deprecated. Disks created by the Pipelines API will be deleted at the end
     * of the pipeline run, regardless of what this field is set to.
     *
     * Generated from protobuf field <code>bool auto_delete = 6;</code>
     * @param bool $var
     * @return $this
     */
    public function setAutoDelete($var)
    {
        GPBUtil::checkBool($var);
        $this->auto_delete = $var;

        return $this;
    }

    /**
     * Required at create time and cannot be overridden at run time.
     * Specifies the path in the docker container where files on
     * this disk should be located. For example, if `mountPoint`
     * is `/mnt/disk`, and the parameter has `localPath`
     * `inputs/file.txt`, the docker container can access the data at
     * `/mnt/disk/inputs/file.txt`.
     *
     * Generated from protobuf field <code>string mount_point = 8;</code>
     * @return string
     */
    public function getMountPoint()
    {
        return $this->mount_point;
    }

    /**
     * Required at create time and cannot be overridden at run time.
     * Specifies the path in the docker container where files on
     * this disk should be located. For example, if `mountPoint`
     * is `/mnt/disk`, and the parameter has `localPath`
     * `inputs/file.txt`, the docker container can access the data at
     * `/mnt/disk/inputs/file.txt`.
     *
     * Generated from protobuf field <code>string mount_point = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setMountPoint($var)
    {
        GPBUtil::checkString($var, True);
        $this->mount_point = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Disk::class, \Google\Genomics\V1alpha2\PipelineResources_Disk::class);

