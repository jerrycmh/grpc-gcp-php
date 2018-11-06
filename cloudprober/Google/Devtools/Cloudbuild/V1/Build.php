<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/cloudbuild/v1/cloudbuild.proto

namespace Google\Devtools\Cloudbuild\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A build resource in the Cloud Build API.
 * At a high level, a `Build` describes where to find source code, how to build
 * it (for example, the builder image to run on the source), and where to store
 * the built artifacts.
 * Fields can include the following variables, which will be expanded when the
 * build is created:
 * - $PROJECT_ID: the project ID of the build.
 * - $BUILD_ID: the autogenerated ID of the build.
 * - $REPO_NAME: the source repository name specified by RepoSource.
 * - $BRANCH_NAME: the branch name specified by RepoSource.
 * - $TAG_NAME: the tag name specified by RepoSource.
 * - $REVISION_ID or $COMMIT_SHA: the commit SHA specified by RepoSource or
 *   resolved from the specified branch or tag.
 * - $SHORT_SHA: first 7 characters of $REVISION_ID or $COMMIT_SHA.
 *
 * Generated from protobuf message <code>google.devtools.cloudbuild.v1.Build</code>
 */
class Build extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. Unique identifier of the build.
     *
     * Generated from protobuf field <code>string id = 1;</code>
     */
    private $id = '';
    /**
     * Output only. ID of the project.
     *
     * Generated from protobuf field <code>string project_id = 16;</code>
     */
    private $project_id = '';
    /**
     * Output only. Status of the build.
     *
     * Generated from protobuf field <code>.google.devtools.cloudbuild.v1.Build.Status status = 2;</code>
     */
    private $status = 0;
    /**
     * Output only. Customer-readable message about the current status.
     *
     * Generated from protobuf field <code>string status_detail = 24;</code>
     */
    private $status_detail = '';
    /**
     * The location of the source files to build.
     *
     * Generated from protobuf field <code>.google.devtools.cloudbuild.v1.Source source = 3;</code>
     */
    private $source = null;
    /**
     * Required. The operations to be performed on the workspace.
     *
     * Generated from protobuf field <code>repeated .google.devtools.cloudbuild.v1.BuildStep steps = 11;</code>
     */
    private $steps;
    /**
     * Output only. Results of the build.
     *
     * Generated from protobuf field <code>.google.devtools.cloudbuild.v1.Results results = 10;</code>
     */
    private $results = null;
    /**
     * Output only. Time at which the request to create the build was received.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 6;</code>
     */
    private $create_time = null;
    /**
     * Output only. Time at which execution of the build was started.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 7;</code>
     */
    private $start_time = null;
    /**
     * Output only. Time at which execution of the build was finished.
     * The difference between finish_time and start_time is the duration of the
     * build's execution.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp finish_time = 8;</code>
     */
    private $finish_time = null;
    /**
     * Amount of time that this build should be allowed to run, to second
     * granularity. If this amount of time elapses, work on the build will cease
     * and the build status will be `TIMEOUT`.
     * Default time is ten minutes.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration timeout = 12;</code>
     */
    private $timeout = null;
    /**
     * A list of images to be pushed upon the successful completion of all build
     * steps.
     * The images are pushed using the builder service account's credentials.
     * The digests of the pushed images will be stored in the `Build` resource's
     * results field.
     * If any of the images fail to be pushed, the build status is marked
     * `FAILURE`.
     *
     * Generated from protobuf field <code>repeated string images = 13;</code>
     */
    private $images;
    /**
     * Artifacts produced by the build that should be uploaded upon
     * successful completion of all build steps.
     *
     * Generated from protobuf field <code>.google.devtools.cloudbuild.v1.Artifacts artifacts = 37;</code>
     */
    private $artifacts = null;
    /**
     * Google Cloud Storage bucket where logs should be written (see
     * [Bucket Name
     * Requirements](https://cloud.google.com/storage/docs/bucket-naming#requirements)).
     * Logs file names will be of the format `${logs_bucket}/log-${build_id}.txt`.
     *
     * Generated from protobuf field <code>string logs_bucket = 19;</code>
     */
    private $logs_bucket = '';
    /**
     * Output only. A permanent fixed identifier for source.
     *
     * Generated from protobuf field <code>.google.devtools.cloudbuild.v1.SourceProvenance source_provenance = 21;</code>
     */
    private $source_provenance = null;
    /**
     * Output only. The ID of the `BuildTrigger` that triggered this build, if it
     * was triggered automatically.
     *
     * Generated from protobuf field <code>string build_trigger_id = 22;</code>
     */
    private $build_trigger_id = '';
    /**
     * Special options for this build.
     *
     * Generated from protobuf field <code>.google.devtools.cloudbuild.v1.BuildOptions options = 23;</code>
     */
    private $options = null;
    /**
     * Output only. URL to logs for this build in Google Cloud Console.
     *
     * Generated from protobuf field <code>string log_url = 25;</code>
     */
    private $log_url = '';
    /**
     * Substitutions data for `Build` resource.
     *
     * Generated from protobuf field <code>map<string, string> substitutions = 29;</code>
     */
    private $substitutions;
    /**
     * Tags for annotation of a `Build`. These are not docker tags.
     *
     * Generated from protobuf field <code>repeated string tags = 31;</code>
     */
    private $tags;
    /**
     * Secrets to decrypt using Cloud Key Management Service.
     *
     * Generated from protobuf field <code>repeated .google.devtools.cloudbuild.v1.Secret secrets = 32;</code>
     */
    private $secrets;
    /**
     * Output only. Stores timing information for phases of the build. Valid keys
     * are:
     * * BUILD: time to execute all build steps
     * * PUSH: time to push all specified images.
     * * FETCHSOURCE: time to fetch source.
     * If the build does not specify source or images,
     * these keys will not be included.
     *
     * Generated from protobuf field <code>map<string, .google.devtools.cloudbuild.v1.TimeSpan> timing = 33;</code>
     */
    private $timing;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *           Output only. Unique identifier of the build.
     *     @type string $project_id
     *           Output only. ID of the project.
     *     @type int $status
     *           Output only. Status of the build.
     *     @type string $status_detail
     *           Output only. Customer-readable message about the current status.
     *     @type \Google\Devtools\Cloudbuild\V1\Source $source
     *           The location of the source files to build.
     *     @type \Google\Devtools\Cloudbuild\V1\BuildStep[]|\Google\Protobuf\Internal\RepeatedField $steps
     *           Required. The operations to be performed on the workspace.
     *     @type \Google\Devtools\Cloudbuild\V1\Results $results
     *           Output only. Results of the build.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. Time at which the request to create the build was received.
     *     @type \Google\Protobuf\Timestamp $start_time
     *           Output only. Time at which execution of the build was started.
     *     @type \Google\Protobuf\Timestamp $finish_time
     *           Output only. Time at which execution of the build was finished.
     *           The difference between finish_time and start_time is the duration of the
     *           build's execution.
     *     @type \Google\Protobuf\Duration $timeout
     *           Amount of time that this build should be allowed to run, to second
     *           granularity. If this amount of time elapses, work on the build will cease
     *           and the build status will be `TIMEOUT`.
     *           Default time is ten minutes.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $images
     *           A list of images to be pushed upon the successful completion of all build
     *           steps.
     *           The images are pushed using the builder service account's credentials.
     *           The digests of the pushed images will be stored in the `Build` resource's
     *           results field.
     *           If any of the images fail to be pushed, the build status is marked
     *           `FAILURE`.
     *     @type \Google\Devtools\Cloudbuild\V1\Artifacts $artifacts
     *           Artifacts produced by the build that should be uploaded upon
     *           successful completion of all build steps.
     *     @type string $logs_bucket
     *           Google Cloud Storage bucket where logs should be written (see
     *           [Bucket Name
     *           Requirements](https://cloud.google.com/storage/docs/bucket-naming#requirements)).
     *           Logs file names will be of the format `${logs_bucket}/log-${build_id}.txt`.
     *     @type \Google\Devtools\Cloudbuild\V1\SourceProvenance $source_provenance
     *           Output only. A permanent fixed identifier for source.
     *     @type string $build_trigger_id
     *           Output only. The ID of the `BuildTrigger` that triggered this build, if it
     *           was triggered automatically.
     *     @type \Google\Devtools\Cloudbuild\V1\BuildOptions $options
     *           Special options for this build.
     *     @type string $log_url
     *           Output only. URL to logs for this build in Google Cloud Console.
     *     @type array|\Google\Protobuf\Internal\MapField $substitutions
     *           Substitutions data for `Build` resource.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $tags
     *           Tags for annotation of a `Build`. These are not docker tags.
     *     @type \Google\Devtools\Cloudbuild\V1\Secret[]|\Google\Protobuf\Internal\RepeatedField $secrets
     *           Secrets to decrypt using Cloud Key Management Service.
     *     @type array|\Google\Protobuf\Internal\MapField $timing
     *           Output only. Stores timing information for phases of the build. Valid keys
     *           are:
     *           * BUILD: time to execute all build steps
     *           * PUSH: time to push all specified images.
     *           * FETCHSOURCE: time to fetch source.
     *           If the build does not specify source or images,
     *           these keys will not be included.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Devtools\Cloudbuild\V1\Cloudbuild::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. Unique identifier of the build.
     *
     * Generated from protobuf field <code>string id = 1;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Output only. Unique identifier of the build.
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
     * Output only. ID of the project.
     *
     * Generated from protobuf field <code>string project_id = 16;</code>
     * @return string
     */
    public function getProjectId()
    {
        return $this->project_id;
    }

    /**
     * Output only. ID of the project.
     *
     * Generated from protobuf field <code>string project_id = 16;</code>
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
     * Output only. Status of the build.
     *
     * Generated from protobuf field <code>.google.devtools.cloudbuild.v1.Build.Status status = 2;</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Output only. Status of the build.
     *
     * Generated from protobuf field <code>.google.devtools.cloudbuild.v1.Build.Status status = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \Google\Devtools\Cloudbuild\V1\Build_Status::class);
        $this->status = $var;

        return $this;
    }

    /**
     * Output only. Customer-readable message about the current status.
     *
     * Generated from protobuf field <code>string status_detail = 24;</code>
     * @return string
     */
    public function getStatusDetail()
    {
        return $this->status_detail;
    }

    /**
     * Output only. Customer-readable message about the current status.
     *
     * Generated from protobuf field <code>string status_detail = 24;</code>
     * @param string $var
     * @return $this
     */
    public function setStatusDetail($var)
    {
        GPBUtil::checkString($var, True);
        $this->status_detail = $var;

        return $this;
    }

    /**
     * The location of the source files to build.
     *
     * Generated from protobuf field <code>.google.devtools.cloudbuild.v1.Source source = 3;</code>
     * @return \Google\Devtools\Cloudbuild\V1\Source
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * The location of the source files to build.
     *
     * Generated from protobuf field <code>.google.devtools.cloudbuild.v1.Source source = 3;</code>
     * @param \Google\Devtools\Cloudbuild\V1\Source $var
     * @return $this
     */
    public function setSource($var)
    {
        GPBUtil::checkMessage($var, \Google\Devtools\Cloudbuild\V1\Source::class);
        $this->source = $var;

        return $this;
    }

    /**
     * Required. The operations to be performed on the workspace.
     *
     * Generated from protobuf field <code>repeated .google.devtools.cloudbuild.v1.BuildStep steps = 11;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSteps()
    {
        return $this->steps;
    }

    /**
     * Required. The operations to be performed on the workspace.
     *
     * Generated from protobuf field <code>repeated .google.devtools.cloudbuild.v1.BuildStep steps = 11;</code>
     * @param \Google\Devtools\Cloudbuild\V1\BuildStep[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSteps($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Devtools\Cloudbuild\V1\BuildStep::class);
        $this->steps = $arr;

        return $this;
    }

    /**
     * Output only. Results of the build.
     *
     * Generated from protobuf field <code>.google.devtools.cloudbuild.v1.Results results = 10;</code>
     * @return \Google\Devtools\Cloudbuild\V1\Results
     */
    public function getResults()
    {
        return $this->results;
    }

    /**
     * Output only. Results of the build.
     *
     * Generated from protobuf field <code>.google.devtools.cloudbuild.v1.Results results = 10;</code>
     * @param \Google\Devtools\Cloudbuild\V1\Results $var
     * @return $this
     */
    public function setResults($var)
    {
        GPBUtil::checkMessage($var, \Google\Devtools\Cloudbuild\V1\Results::class);
        $this->results = $var;

        return $this;
    }

    /**
     * Output only. Time at which the request to create the build was received.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 6;</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getCreateTime()
    {
        return $this->create_time;
    }

    /**
     * Output only. Time at which the request to create the build was received.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 6;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->create_time = $var;

        return $this;
    }

    /**
     * Output only. Time at which execution of the build was started.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 7;</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getStartTime()
    {
        return $this->start_time;
    }

    /**
     * Output only. Time at which execution of the build was started.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 7;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setStartTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->start_time = $var;

        return $this;
    }

    /**
     * Output only. Time at which execution of the build was finished.
     * The difference between finish_time and start_time is the duration of the
     * build's execution.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp finish_time = 8;</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getFinishTime()
    {
        return $this->finish_time;
    }

    /**
     * Output only. Time at which execution of the build was finished.
     * The difference between finish_time and start_time is the duration of the
     * build's execution.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp finish_time = 8;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setFinishTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->finish_time = $var;

        return $this;
    }

    /**
     * Amount of time that this build should be allowed to run, to second
     * granularity. If this amount of time elapses, work on the build will cease
     * and the build status will be `TIMEOUT`.
     * Default time is ten minutes.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration timeout = 12;</code>
     * @return \Google\Protobuf\Duration
     */
    public function getTimeout()
    {
        return $this->timeout;
    }

    /**
     * Amount of time that this build should be allowed to run, to second
     * granularity. If this amount of time elapses, work on the build will cease
     * and the build status will be `TIMEOUT`.
     * Default time is ten minutes.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration timeout = 12;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setTimeout($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->timeout = $var;

        return $this;
    }

    /**
     * A list of images to be pushed upon the successful completion of all build
     * steps.
     * The images are pushed using the builder service account's credentials.
     * The digests of the pushed images will be stored in the `Build` resource's
     * results field.
     * If any of the images fail to be pushed, the build status is marked
     * `FAILURE`.
     *
     * Generated from protobuf field <code>repeated string images = 13;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getImages()
    {
        return $this->images;
    }

    /**
     * A list of images to be pushed upon the successful completion of all build
     * steps.
     * The images are pushed using the builder service account's credentials.
     * The digests of the pushed images will be stored in the `Build` resource's
     * results field.
     * If any of the images fail to be pushed, the build status is marked
     * `FAILURE`.
     *
     * Generated from protobuf field <code>repeated string images = 13;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setImages($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->images = $arr;

        return $this;
    }

    /**
     * Artifacts produced by the build that should be uploaded upon
     * successful completion of all build steps.
     *
     * Generated from protobuf field <code>.google.devtools.cloudbuild.v1.Artifacts artifacts = 37;</code>
     * @return \Google\Devtools\Cloudbuild\V1\Artifacts
     */
    public function getArtifacts()
    {
        return $this->artifacts;
    }

    /**
     * Artifacts produced by the build that should be uploaded upon
     * successful completion of all build steps.
     *
     * Generated from protobuf field <code>.google.devtools.cloudbuild.v1.Artifacts artifacts = 37;</code>
     * @param \Google\Devtools\Cloudbuild\V1\Artifacts $var
     * @return $this
     */
    public function setArtifacts($var)
    {
        GPBUtil::checkMessage($var, \Google\Devtools\Cloudbuild\V1\Artifacts::class);
        $this->artifacts = $var;

        return $this;
    }

    /**
     * Google Cloud Storage bucket where logs should be written (see
     * [Bucket Name
     * Requirements](https://cloud.google.com/storage/docs/bucket-naming#requirements)).
     * Logs file names will be of the format `${logs_bucket}/log-${build_id}.txt`.
     *
     * Generated from protobuf field <code>string logs_bucket = 19;</code>
     * @return string
     */
    public function getLogsBucket()
    {
        return $this->logs_bucket;
    }

    /**
     * Google Cloud Storage bucket where logs should be written (see
     * [Bucket Name
     * Requirements](https://cloud.google.com/storage/docs/bucket-naming#requirements)).
     * Logs file names will be of the format `${logs_bucket}/log-${build_id}.txt`.
     *
     * Generated from protobuf field <code>string logs_bucket = 19;</code>
     * @param string $var
     * @return $this
     */
    public function setLogsBucket($var)
    {
        GPBUtil::checkString($var, True);
        $this->logs_bucket = $var;

        return $this;
    }

    /**
     * Output only. A permanent fixed identifier for source.
     *
     * Generated from protobuf field <code>.google.devtools.cloudbuild.v1.SourceProvenance source_provenance = 21;</code>
     * @return \Google\Devtools\Cloudbuild\V1\SourceProvenance
     */
    public function getSourceProvenance()
    {
        return $this->source_provenance;
    }

    /**
     * Output only. A permanent fixed identifier for source.
     *
     * Generated from protobuf field <code>.google.devtools.cloudbuild.v1.SourceProvenance source_provenance = 21;</code>
     * @param \Google\Devtools\Cloudbuild\V1\SourceProvenance $var
     * @return $this
     */
    public function setSourceProvenance($var)
    {
        GPBUtil::checkMessage($var, \Google\Devtools\Cloudbuild\V1\SourceProvenance::class);
        $this->source_provenance = $var;

        return $this;
    }

    /**
     * Output only. The ID of the `BuildTrigger` that triggered this build, if it
     * was triggered automatically.
     *
     * Generated from protobuf field <code>string build_trigger_id = 22;</code>
     * @return string
     */
    public function getBuildTriggerId()
    {
        return $this->build_trigger_id;
    }

    /**
     * Output only. The ID of the `BuildTrigger` that triggered this build, if it
     * was triggered automatically.
     *
     * Generated from protobuf field <code>string build_trigger_id = 22;</code>
     * @param string $var
     * @return $this
     */
    public function setBuildTriggerId($var)
    {
        GPBUtil::checkString($var, True);
        $this->build_trigger_id = $var;

        return $this;
    }

    /**
     * Special options for this build.
     *
     * Generated from protobuf field <code>.google.devtools.cloudbuild.v1.BuildOptions options = 23;</code>
     * @return \Google\Devtools\Cloudbuild\V1\BuildOptions
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * Special options for this build.
     *
     * Generated from protobuf field <code>.google.devtools.cloudbuild.v1.BuildOptions options = 23;</code>
     * @param \Google\Devtools\Cloudbuild\V1\BuildOptions $var
     * @return $this
     */
    public function setOptions($var)
    {
        GPBUtil::checkMessage($var, \Google\Devtools\Cloudbuild\V1\BuildOptions::class);
        $this->options = $var;

        return $this;
    }

    /**
     * Output only. URL to logs for this build in Google Cloud Console.
     *
     * Generated from protobuf field <code>string log_url = 25;</code>
     * @return string
     */
    public function getLogUrl()
    {
        return $this->log_url;
    }

    /**
     * Output only. URL to logs for this build in Google Cloud Console.
     *
     * Generated from protobuf field <code>string log_url = 25;</code>
     * @param string $var
     * @return $this
     */
    public function setLogUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->log_url = $var;

        return $this;
    }

    /**
     * Substitutions data for `Build` resource.
     *
     * Generated from protobuf field <code>map<string, string> substitutions = 29;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getSubstitutions()
    {
        return $this->substitutions;
    }

    /**
     * Substitutions data for `Build` resource.
     *
     * Generated from protobuf field <code>map<string, string> substitutions = 29;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setSubstitutions($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->substitutions = $arr;

        return $this;
    }

    /**
     * Tags for annotation of a `Build`. These are not docker tags.
     *
     * Generated from protobuf field <code>repeated string tags = 31;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * Tags for annotation of a `Build`. These are not docker tags.
     *
     * Generated from protobuf field <code>repeated string tags = 31;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTags($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->tags = $arr;

        return $this;
    }

    /**
     * Secrets to decrypt using Cloud Key Management Service.
     *
     * Generated from protobuf field <code>repeated .google.devtools.cloudbuild.v1.Secret secrets = 32;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSecrets()
    {
        return $this->secrets;
    }

    /**
     * Secrets to decrypt using Cloud Key Management Service.
     *
     * Generated from protobuf field <code>repeated .google.devtools.cloudbuild.v1.Secret secrets = 32;</code>
     * @param \Google\Devtools\Cloudbuild\V1\Secret[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSecrets($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Devtools\Cloudbuild\V1\Secret::class);
        $this->secrets = $arr;

        return $this;
    }

    /**
     * Output only. Stores timing information for phases of the build. Valid keys
     * are:
     * * BUILD: time to execute all build steps
     * * PUSH: time to push all specified images.
     * * FETCHSOURCE: time to fetch source.
     * If the build does not specify source or images,
     * these keys will not be included.
     *
     * Generated from protobuf field <code>map<string, .google.devtools.cloudbuild.v1.TimeSpan> timing = 33;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getTiming()
    {
        return $this->timing;
    }

    /**
     * Output only. Stores timing information for phases of the build. Valid keys
     * are:
     * * BUILD: time to execute all build steps
     * * PUSH: time to push all specified images.
     * * FETCHSOURCE: time to fetch source.
     * If the build does not specify source or images,
     * these keys will not be included.
     *
     * Generated from protobuf field <code>map<string, .google.devtools.cloudbuild.v1.TimeSpan> timing = 33;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setTiming($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Devtools\Cloudbuild\V1\TimeSpan::class);
        $this->timing = $arr;

        return $this;
    }

}

