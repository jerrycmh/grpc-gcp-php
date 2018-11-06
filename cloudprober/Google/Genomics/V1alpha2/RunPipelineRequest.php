<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/genomics/v1alpha2/pipelines.proto

namespace Google\Genomics\V1alpha2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request to run a pipeline. If `pipelineId` is specified, it
 * refers to a saved pipeline created with CreatePipeline and set as
 * the `pipelineId` of the returned Pipeline object. If
 * `ephemeralPipeline` is specified, that pipeline is run once
 * with the given args and not saved. It is an error to specify both
 * `pipelineId` and `ephemeralPipeline`. `pipelineArgs`
 * must be specified.
 *
 * Generated from protobuf message <code>google.genomics.v1alpha2.RunPipelineRequest</code>
 */
class RunPipelineRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The arguments to use when running this pipeline.
     *
     * Generated from protobuf field <code>.google.genomics.v1alpha2.RunPipelineArgs pipeline_args = 3;</code>
     */
    private $pipeline_args = null;
    protected $pipeline;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $pipeline_id
     *           The already created pipeline to run.
     *     @type \Google\Genomics\V1alpha2\Pipeline $ephemeral_pipeline
     *           A new pipeline object to run once and then delete.
     *     @type \Google\Genomics\V1alpha2\RunPipelineArgs $pipeline_args
     *           The arguments to use when running this pipeline.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Genomics\V1Alpha2\Pipelines::initOnce();
        parent::__construct($data);
    }

    /**
     * The already created pipeline to run.
     *
     * Generated from protobuf field <code>string pipeline_id = 1;</code>
     * @return string
     */
    public function getPipelineId()
    {
        return $this->readOneof(1);
    }

    /**
     * The already created pipeline to run.
     *
     * Generated from protobuf field <code>string pipeline_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setPipelineId($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * A new pipeline object to run once and then delete.
     *
     * Generated from protobuf field <code>.google.genomics.v1alpha2.Pipeline ephemeral_pipeline = 2;</code>
     * @return \Google\Genomics\V1alpha2\Pipeline
     */
    public function getEphemeralPipeline()
    {
        return $this->readOneof(2);
    }

    /**
     * A new pipeline object to run once and then delete.
     *
     * Generated from protobuf field <code>.google.genomics.v1alpha2.Pipeline ephemeral_pipeline = 2;</code>
     * @param \Google\Genomics\V1alpha2\Pipeline $var
     * @return $this
     */
    public function setEphemeralPipeline($var)
    {
        GPBUtil::checkMessage($var, \Google\Genomics\V1alpha2\Pipeline::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * The arguments to use when running this pipeline.
     *
     * Generated from protobuf field <code>.google.genomics.v1alpha2.RunPipelineArgs pipeline_args = 3;</code>
     * @return \Google\Genomics\V1alpha2\RunPipelineArgs
     */
    public function getPipelineArgs()
    {
        return $this->pipeline_args;
    }

    /**
     * The arguments to use when running this pipeline.
     *
     * Generated from protobuf field <code>.google.genomics.v1alpha2.RunPipelineArgs pipeline_args = 3;</code>
     * @param \Google\Genomics\V1alpha2\RunPipelineArgs $var
     * @return $this
     */
    public function setPipelineArgs($var)
    {
        GPBUtil::checkMessage($var, \Google\Genomics\V1alpha2\RunPipelineArgs::class);
        $this->pipeline_args = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getPipeline()
    {
        return $this->whichOneof("pipeline");
    }

}

