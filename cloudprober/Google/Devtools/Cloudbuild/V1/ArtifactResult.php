<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/cloudbuild/v1/cloudbuild.proto

namespace Google\Devtools\Cloudbuild\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * An artifact that was uploaded during a build. This
 * is a single record in the artifact manifest JSON file.
 *
 * Generated from protobuf message <code>google.devtools.cloudbuild.v1.ArtifactResult</code>
 */
class ArtifactResult extends \Google\Protobuf\Internal\Message
{
    /**
     * The path of an artifact in a Google Cloud Storage bucket, with the
     * generation number. For example,
     * `gs://mybucket/path/to/output.jar#generation`.
     *
     * Generated from protobuf field <code>string location = 1;</code>
     */
    private $location = '';
    /**
     * The file hash of the artifact.
     *
     * Generated from protobuf field <code>repeated .google.devtools.cloudbuild.v1.FileHashes file_hash = 2;</code>
     */
    private $file_hash;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $location
     *           The path of an artifact in a Google Cloud Storage bucket, with the
     *           generation number. For example,
     *           `gs://mybucket/path/to/output.jar#generation`.
     *     @type \Google\Devtools\Cloudbuild\V1\FileHashes[]|\Google\Protobuf\Internal\RepeatedField $file_hash
     *           The file hash of the artifact.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Devtools\Cloudbuild\V1\Cloudbuild::initOnce();
        parent::__construct($data);
    }

    /**
     * The path of an artifact in a Google Cloud Storage bucket, with the
     * generation number. For example,
     * `gs://mybucket/path/to/output.jar#generation`.
     *
     * Generated from protobuf field <code>string location = 1;</code>
     * @return string
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * The path of an artifact in a Google Cloud Storage bucket, with the
     * generation number. For example,
     * `gs://mybucket/path/to/output.jar#generation`.
     *
     * Generated from protobuf field <code>string location = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setLocation($var)
    {
        GPBUtil::checkString($var, True);
        $this->location = $var;

        return $this;
    }

    /**
     * The file hash of the artifact.
     *
     * Generated from protobuf field <code>repeated .google.devtools.cloudbuild.v1.FileHashes file_hash = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFileHash()
    {
        return $this->file_hash;
    }

    /**
     * The file hash of the artifact.
     *
     * Generated from protobuf field <code>repeated .google.devtools.cloudbuild.v1.FileHashes file_hash = 2;</code>
     * @param \Google\Devtools\Cloudbuild\V1\FileHashes[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFileHash($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Devtools\Cloudbuild\V1\FileHashes::class);
        $this->file_hash = $arr;

        return $this;
    }

}

