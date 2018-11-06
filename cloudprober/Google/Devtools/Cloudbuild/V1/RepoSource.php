<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/cloudbuild/v1/cloudbuild.proto

namespace Google\Devtools\Cloudbuild\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Location of the source in a Google Cloud Source Repository.
 *
 * Generated from protobuf message <code>google.devtools.cloudbuild.v1.RepoSource</code>
 */
class RepoSource extends \Google\Protobuf\Internal\Message
{
    /**
     * ID of the project that owns the Cloud Source Repository. If omitted, the
     * project ID requesting the build is assumed.
     *
     * Generated from protobuf field <code>string project_id = 1;</code>
     */
    private $project_id = '';
    /**
     * Name of the Cloud Source Repository. If omitted, the name "default" is
     * assumed.
     *
     * Generated from protobuf field <code>string repo_name = 2;</code>
     */
    private $repo_name = '';
    /**
     * Directory, relative to the source root, in which to run the build.
     * This must be a relative path. If a step's `dir` is specified and is an
     * absolute path, this value is ignored for that step's execution.
     *
     * Generated from protobuf field <code>string dir = 7;</code>
     */
    private $dir = '';
    protected $revision;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $project_id
     *           ID of the project that owns the Cloud Source Repository. If omitted, the
     *           project ID requesting the build is assumed.
     *     @type string $repo_name
     *           Name of the Cloud Source Repository. If omitted, the name "default" is
     *           assumed.
     *     @type string $branch_name
     *           Name of the branch to build.
     *     @type string $tag_name
     *           Name of the tag to build.
     *     @type string $commit_sha
     *           Explicit commit SHA to build.
     *     @type string $dir
     *           Directory, relative to the source root, in which to run the build.
     *           This must be a relative path. If a step's `dir` is specified and is an
     *           absolute path, this value is ignored for that step's execution.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Devtools\Cloudbuild\V1\Cloudbuild::initOnce();
        parent::__construct($data);
    }

    /**
     * ID of the project that owns the Cloud Source Repository. If omitted, the
     * project ID requesting the build is assumed.
     *
     * Generated from protobuf field <code>string project_id = 1;</code>
     * @return string
     */
    public function getProjectId()
    {
        return $this->project_id;
    }

    /**
     * ID of the project that owns the Cloud Source Repository. If omitted, the
     * project ID requesting the build is assumed.
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
     * Name of the Cloud Source Repository. If omitted, the name "default" is
     * assumed.
     *
     * Generated from protobuf field <code>string repo_name = 2;</code>
     * @return string
     */
    public function getRepoName()
    {
        return $this->repo_name;
    }

    /**
     * Name of the Cloud Source Repository. If omitted, the name "default" is
     * assumed.
     *
     * Generated from protobuf field <code>string repo_name = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setRepoName($var)
    {
        GPBUtil::checkString($var, True);
        $this->repo_name = $var;

        return $this;
    }

    /**
     * Name of the branch to build.
     *
     * Generated from protobuf field <code>string branch_name = 3;</code>
     * @return string
     */
    public function getBranchName()
    {
        return $this->readOneof(3);
    }

    /**
     * Name of the branch to build.
     *
     * Generated from protobuf field <code>string branch_name = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setBranchName($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * Name of the tag to build.
     *
     * Generated from protobuf field <code>string tag_name = 4;</code>
     * @return string
     */
    public function getTagName()
    {
        return $this->readOneof(4);
    }

    /**
     * Name of the tag to build.
     *
     * Generated from protobuf field <code>string tag_name = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setTagName($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * Explicit commit SHA to build.
     *
     * Generated from protobuf field <code>string commit_sha = 5;</code>
     * @return string
     */
    public function getCommitSha()
    {
        return $this->readOneof(5);
    }

    /**
     * Explicit commit SHA to build.
     *
     * Generated from protobuf field <code>string commit_sha = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setCommitSha($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * Directory, relative to the source root, in which to run the build.
     * This must be a relative path. If a step's `dir` is specified and is an
     * absolute path, this value is ignored for that step's execution.
     *
     * Generated from protobuf field <code>string dir = 7;</code>
     * @return string
     */
    public function getDir()
    {
        return $this->dir;
    }

    /**
     * Directory, relative to the source root, in which to run the build.
     * This must be a relative path. If a step's `dir` is specified and is an
     * absolute path, this value is ignored for that step's execution.
     *
     * Generated from protobuf field <code>string dir = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setDir($var)
    {
        GPBUtil::checkString($var, True);
        $this->dir = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getRevision()
    {
        return $this->whichOneof("revision");
    }

}

