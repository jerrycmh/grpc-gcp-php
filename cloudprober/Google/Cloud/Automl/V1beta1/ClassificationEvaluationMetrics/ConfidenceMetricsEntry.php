<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/automl/v1beta1/classification.proto

namespace Google\Cloud\Automl\V1beta1\ClassificationEvaluationMetrics;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Metrics for a single confidence threshold.
 *
 * Generated from protobuf message <code>google.cloud.automl.v1beta1.ClassificationEvaluationMetrics.ConfidenceMetricsEntry</code>
 */
class ConfidenceMetricsEntry extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The confidence threshold value used to compute the metrics.
     *
     * Generated from protobuf field <code>float confidence_threshold = 1;</code>
     */
    private $confidence_threshold = 0.0;
    /**
     * Output only. Recall under the given confidence threshold.
     *
     * Generated from protobuf field <code>float recall = 2;</code>
     */
    private $recall = 0.0;
    /**
     * Output only. Precision under the given confidence threshold.
     *
     * Generated from protobuf field <code>float precision = 3;</code>
     */
    private $precision = 0.0;
    /**
     * Output only. The harmonic mean of recall and precision.
     *
     * Generated from protobuf field <code>float f1_score = 4;</code>
     */
    private $f1_score = 0.0;
    /**
     * Output only. The recall when only considering the label that has the
     * highest prediction score and not below the confidence threshold for each
     * example.
     *
     * Generated from protobuf field <code>float recall_at1 = 5;</code>
     */
    private $recall_at1 = 0.0;
    /**
     * Output only. The precision when only considering the label that has the
     * highest predictionscore and not below the confidence threshold for each
     * example.
     *
     * Generated from protobuf field <code>float precision_at1 = 6;</code>
     */
    private $precision_at1 = 0.0;
    /**
     * Output only. The harmonic mean of [recall_at1][google.cloud.automl.v1beta1.ClassificationEvaluationMetrics.ConfidenceMetricsEntry.recall_at1] and [precision_at1][google.cloud.automl.v1beta1.ClassificationEvaluationMetrics.ConfidenceMetricsEntry.precision_at1].
     *
     * Generated from protobuf field <code>float f1_score_at1 = 7;</code>
     */
    private $f1_score_at1 = 0.0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type float $confidence_threshold
     *           Output only. The confidence threshold value used to compute the metrics.
     *     @type float $recall
     *           Output only. Recall under the given confidence threshold.
     *     @type float $precision
     *           Output only. Precision under the given confidence threshold.
     *     @type float $f1_score
     *           Output only. The harmonic mean of recall and precision.
     *     @type float $recall_at1
     *           Output only. The recall when only considering the label that has the
     *           highest prediction score and not below the confidence threshold for each
     *           example.
     *     @type float $precision_at1
     *           Output only. The precision when only considering the label that has the
     *           highest predictionscore and not below the confidence threshold for each
     *           example.
     *     @type float $f1_score_at1
     *           Output only. The harmonic mean of [recall_at1][google.cloud.automl.v1beta1.ClassificationEvaluationMetrics.ConfidenceMetricsEntry.recall_at1] and [precision_at1][google.cloud.automl.v1beta1.ClassificationEvaluationMetrics.ConfidenceMetricsEntry.precision_at1].
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Automl\V1Beta1\Classification::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The confidence threshold value used to compute the metrics.
     *
     * Generated from protobuf field <code>float confidence_threshold = 1;</code>
     * @return float
     */
    public function getConfidenceThreshold()
    {
        return $this->confidence_threshold;
    }

    /**
     * Output only. The confidence threshold value used to compute the metrics.
     *
     * Generated from protobuf field <code>float confidence_threshold = 1;</code>
     * @param float $var
     * @return $this
     */
    public function setConfidenceThreshold($var)
    {
        GPBUtil::checkFloat($var);
        $this->confidence_threshold = $var;

        return $this;
    }

    /**
     * Output only. Recall under the given confidence threshold.
     *
     * Generated from protobuf field <code>float recall = 2;</code>
     * @return float
     */
    public function getRecall()
    {
        return $this->recall;
    }

    /**
     * Output only. Recall under the given confidence threshold.
     *
     * Generated from protobuf field <code>float recall = 2;</code>
     * @param float $var
     * @return $this
     */
    public function setRecall($var)
    {
        GPBUtil::checkFloat($var);
        $this->recall = $var;

        return $this;
    }

    /**
     * Output only. Precision under the given confidence threshold.
     *
     * Generated from protobuf field <code>float precision = 3;</code>
     * @return float
     */
    public function getPrecision()
    {
        return $this->precision;
    }

    /**
     * Output only. Precision under the given confidence threshold.
     *
     * Generated from protobuf field <code>float precision = 3;</code>
     * @param float $var
     * @return $this
     */
    public function setPrecision($var)
    {
        GPBUtil::checkFloat($var);
        $this->precision = $var;

        return $this;
    }

    /**
     * Output only. The harmonic mean of recall and precision.
     *
     * Generated from protobuf field <code>float f1_score = 4;</code>
     * @return float
     */
    public function getF1Score()
    {
        return $this->f1_score;
    }

    /**
     * Output only. The harmonic mean of recall and precision.
     *
     * Generated from protobuf field <code>float f1_score = 4;</code>
     * @param float $var
     * @return $this
     */
    public function setF1Score($var)
    {
        GPBUtil::checkFloat($var);
        $this->f1_score = $var;

        return $this;
    }

    /**
     * Output only. The recall when only considering the label that has the
     * highest prediction score and not below the confidence threshold for each
     * example.
     *
     * Generated from protobuf field <code>float recall_at1 = 5;</code>
     * @return float
     */
    public function getRecallAt1()
    {
        return $this->recall_at1;
    }

    /**
     * Output only. The recall when only considering the label that has the
     * highest prediction score and not below the confidence threshold for each
     * example.
     *
     * Generated from protobuf field <code>float recall_at1 = 5;</code>
     * @param float $var
     * @return $this
     */
    public function setRecallAt1($var)
    {
        GPBUtil::checkFloat($var);
        $this->recall_at1 = $var;

        return $this;
    }

    /**
     * Output only. The precision when only considering the label that has the
     * highest predictionscore and not below the confidence threshold for each
     * example.
     *
     * Generated from protobuf field <code>float precision_at1 = 6;</code>
     * @return float
     */
    public function getPrecisionAt1()
    {
        return $this->precision_at1;
    }

    /**
     * Output only. The precision when only considering the label that has the
     * highest predictionscore and not below the confidence threshold for each
     * example.
     *
     * Generated from protobuf field <code>float precision_at1 = 6;</code>
     * @param float $var
     * @return $this
     */
    public function setPrecisionAt1($var)
    {
        GPBUtil::checkFloat($var);
        $this->precision_at1 = $var;

        return $this;
    }

    /**
     * Output only. The harmonic mean of [recall_at1][google.cloud.automl.v1beta1.ClassificationEvaluationMetrics.ConfidenceMetricsEntry.recall_at1] and [precision_at1][google.cloud.automl.v1beta1.ClassificationEvaluationMetrics.ConfidenceMetricsEntry.precision_at1].
     *
     * Generated from protobuf field <code>float f1_score_at1 = 7;</code>
     * @return float
     */
    public function getF1ScoreAt1()
    {
        return $this->f1_score_at1;
    }

    /**
     * Output only. The harmonic mean of [recall_at1][google.cloud.automl.v1beta1.ClassificationEvaluationMetrics.ConfidenceMetricsEntry.recall_at1] and [precision_at1][google.cloud.automl.v1beta1.ClassificationEvaluationMetrics.ConfidenceMetricsEntry.precision_at1].
     *
     * Generated from protobuf field <code>float f1_score_at1 = 7;</code>
     * @param float $var
     * @return $this
     */
    public function setF1ScoreAt1($var)
    {
        GPBUtil::checkFloat($var);
        $this->f1_score_at1 = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ConfidenceMetricsEntry::class, \Google\Cloud\Automl\V1beta1\ClassificationEvaluationMetrics_ConfidenceMetricsEntry::class);

