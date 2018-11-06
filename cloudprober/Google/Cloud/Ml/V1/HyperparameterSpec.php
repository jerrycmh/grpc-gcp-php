<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/ml/v1/job_service.proto

namespace Google\Cloud\Ml\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents a set of hyperparameters to optimize.
 *
 * Generated from protobuf message <code>google.cloud.ml.v1.HyperparameterSpec</code>
 */
class HyperparameterSpec extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The type of goal to use for tuning. Available types are
     * `MAXIMIZE` and `MINIMIZE`.
     * Defaults to `MAXIMIZE`.
     *
     * Generated from protobuf field <code>.google.cloud.ml.v1.HyperparameterSpec.GoalType goal = 1;</code>
     */
    private $goal = 0;
    /**
     * Required. The set of parameters to tune.
     *
     * Generated from protobuf field <code>repeated .google.cloud.ml.v1.ParameterSpec params = 2;</code>
     */
    private $params;
    /**
     * Optional. How many training trials should be attempted to optimize
     * the specified hyperparameters.
     * Defaults to one.
     *
     * Generated from protobuf field <code>int32 max_trials = 3;</code>
     */
    private $max_trials = 0;
    /**
     * Optional. The number of training trials to run concurrently.
     * You can reduce the time it takes to perform hyperparameter tuning by adding
     * trials in parallel. However, each trail only benefits from the information
     * gained in completed trials. That means that a trial does not get access to
     * the results of trials running at the same time, which could reduce the
     * quality of the overall optimization.
     * Each trial will use the same scale tier and machine types.
     * Defaults to one.
     *
     * Generated from protobuf field <code>int32 max_parallel_trials = 4;</code>
     */
    private $max_parallel_trials = 0;
    /**
     * Optional. The Tensorflow summary tag name to use for optimizing trials. For
     * current versions of Tensorflow, this tag name should exactly match what is
     * shown in Tensorboard, including all scopes.  For versions of Tensorflow
     * prior to 0.12, this should be only the tag passed to tf.Summary.
     * By default, "training/hptuning/metric" will be used.
     *
     * Generated from protobuf field <code>string hyperparameter_metric_tag = 5;</code>
     */
    private $hyperparameter_metric_tag = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $goal
     *           Required. The type of goal to use for tuning. Available types are
     *           `MAXIMIZE` and `MINIMIZE`.
     *           Defaults to `MAXIMIZE`.
     *     @type \Google\Cloud\Ml\V1\ParameterSpec[]|\Google\Protobuf\Internal\RepeatedField $params
     *           Required. The set of parameters to tune.
     *     @type int $max_trials
     *           Optional. How many training trials should be attempted to optimize
     *           the specified hyperparameters.
     *           Defaults to one.
     *     @type int $max_parallel_trials
     *           Optional. The number of training trials to run concurrently.
     *           You can reduce the time it takes to perform hyperparameter tuning by adding
     *           trials in parallel. However, each trail only benefits from the information
     *           gained in completed trials. That means that a trial does not get access to
     *           the results of trials running at the same time, which could reduce the
     *           quality of the overall optimization.
     *           Each trial will use the same scale tier and machine types.
     *           Defaults to one.
     *     @type string $hyperparameter_metric_tag
     *           Optional. The Tensorflow summary tag name to use for optimizing trials. For
     *           current versions of Tensorflow, this tag name should exactly match what is
     *           shown in Tensorboard, including all scopes.  For versions of Tensorflow
     *           prior to 0.12, this should be only the tag passed to tf.Summary.
     *           By default, "training/hptuning/metric" will be used.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Ml\V1\JobService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The type of goal to use for tuning. Available types are
     * `MAXIMIZE` and `MINIMIZE`.
     * Defaults to `MAXIMIZE`.
     *
     * Generated from protobuf field <code>.google.cloud.ml.v1.HyperparameterSpec.GoalType goal = 1;</code>
     * @return int
     */
    public function getGoal()
    {
        return $this->goal;
    }

    /**
     * Required. The type of goal to use for tuning. Available types are
     * `MAXIMIZE` and `MINIMIZE`.
     * Defaults to `MAXIMIZE`.
     *
     * Generated from protobuf field <code>.google.cloud.ml.v1.HyperparameterSpec.GoalType goal = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setGoal($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Ml\V1\HyperparameterSpec_GoalType::class);
        $this->goal = $var;

        return $this;
    }

    /**
     * Required. The set of parameters to tune.
     *
     * Generated from protobuf field <code>repeated .google.cloud.ml.v1.ParameterSpec params = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getParams()
    {
        return $this->params;
    }

    /**
     * Required. The set of parameters to tune.
     *
     * Generated from protobuf field <code>repeated .google.cloud.ml.v1.ParameterSpec params = 2;</code>
     * @param \Google\Cloud\Ml\V1\ParameterSpec[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setParams($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Ml\V1\ParameterSpec::class);
        $this->params = $arr;

        return $this;
    }

    /**
     * Optional. How many training trials should be attempted to optimize
     * the specified hyperparameters.
     * Defaults to one.
     *
     * Generated from protobuf field <code>int32 max_trials = 3;</code>
     * @return int
     */
    public function getMaxTrials()
    {
        return $this->max_trials;
    }

    /**
     * Optional. How many training trials should be attempted to optimize
     * the specified hyperparameters.
     * Defaults to one.
     *
     * Generated from protobuf field <code>int32 max_trials = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setMaxTrials($var)
    {
        GPBUtil::checkInt32($var);
        $this->max_trials = $var;

        return $this;
    }

    /**
     * Optional. The number of training trials to run concurrently.
     * You can reduce the time it takes to perform hyperparameter tuning by adding
     * trials in parallel. However, each trail only benefits from the information
     * gained in completed trials. That means that a trial does not get access to
     * the results of trials running at the same time, which could reduce the
     * quality of the overall optimization.
     * Each trial will use the same scale tier and machine types.
     * Defaults to one.
     *
     * Generated from protobuf field <code>int32 max_parallel_trials = 4;</code>
     * @return int
     */
    public function getMaxParallelTrials()
    {
        return $this->max_parallel_trials;
    }

    /**
     * Optional. The number of training trials to run concurrently.
     * You can reduce the time it takes to perform hyperparameter tuning by adding
     * trials in parallel. However, each trail only benefits from the information
     * gained in completed trials. That means that a trial does not get access to
     * the results of trials running at the same time, which could reduce the
     * quality of the overall optimization.
     * Each trial will use the same scale tier and machine types.
     * Defaults to one.
     *
     * Generated from protobuf field <code>int32 max_parallel_trials = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setMaxParallelTrials($var)
    {
        GPBUtil::checkInt32($var);
        $this->max_parallel_trials = $var;

        return $this;
    }

    /**
     * Optional. The Tensorflow summary tag name to use for optimizing trials. For
     * current versions of Tensorflow, this tag name should exactly match what is
     * shown in Tensorboard, including all scopes.  For versions of Tensorflow
     * prior to 0.12, this should be only the tag passed to tf.Summary.
     * By default, "training/hptuning/metric" will be used.
     *
     * Generated from protobuf field <code>string hyperparameter_metric_tag = 5;</code>
     * @return string
     */
    public function getHyperparameterMetricTag()
    {
        return $this->hyperparameter_metric_tag;
    }

    /**
     * Optional. The Tensorflow summary tag name to use for optimizing trials. For
     * current versions of Tensorflow, this tag name should exactly match what is
     * shown in Tensorboard, including all scopes.  For versions of Tensorflow
     * prior to 0.12, this should be only the tag passed to tf.Summary.
     * By default, "training/hptuning/metric" will be used.
     *
     * Generated from protobuf field <code>string hyperparameter_metric_tag = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setHyperparameterMetricTag($var)
    {
        GPBUtil::checkString($var, True);
        $this->hyperparameter_metric_tag = $var;

        return $this;
    }

}

