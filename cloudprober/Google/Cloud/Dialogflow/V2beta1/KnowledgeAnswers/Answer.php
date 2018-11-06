<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2beta1/session.proto

namespace Google\Cloud\Dialogflow\V2beta1\KnowledgeAnswers;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * An answer from Knowledge Connector.
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.v2beta1.KnowledgeAnswers.Answer</code>
 */
class Answer extends \Google\Protobuf\Internal\Message
{
    /**
     * Indicates which Knowledge Document this answer was extracted from.
     * Format: `projects/<Project ID>/knowledgeBases/<Knowledge Base
     * ID>/documents/<Document ID>`.
     *
     * Generated from protobuf field <code>string source = 1;</code>
     */
    private $source = '';
    /**
     * The corresponding FAQ question if the answer was extracted from a FAQ
     * Document, empty otherwise.
     *
     * Generated from protobuf field <code>string faq_question = 2;</code>
     */
    private $faq_question = '';
    /**
     * The piece of text from the `source` knowledge base document that answers
     * this conversational query.
     *
     * Generated from protobuf field <code>string answer = 3;</code>
     */
    private $answer = '';
    /**
     * The system's confidence level that this knowledge answer is a good match
     * for this conversational query.
     * NOTE: The confidence level for a given `<query, answer>` pair may change
     * without notice, as it depends on models that are constantly being
     * improved. However, it will change less frequently than the confidence
     * score below, and should be preferred for referencing the quality of an
     * answer.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2beta1.KnowledgeAnswers.Answer.MatchConfidenceLevel match_confidence_level = 4;</code>
     */
    private $match_confidence_level = 0;
    /**
     * The system's confidence score that this Knowledge answer is a good match
     * for this converstational query, range from 0.0 (completely uncertain)
     * to 1.0 (completely certain).
     * Note: The confidence score is likely to vary somewhat (possibly even for
     * identical requests), as the underlying model is under constant
     * improvement, we may deprecate it in the future. We recommend using
     * `match_confidence_level` which should be generally more stable.
     *
     * Generated from protobuf field <code>float match_confidence = 5;</code>
     */
    private $match_confidence = 0.0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $source
     *           Indicates which Knowledge Document this answer was extracted from.
     *           Format: `projects/<Project ID>/knowledgeBases/<Knowledge Base
     *           ID>/documents/<Document ID>`.
     *     @type string $faq_question
     *           The corresponding FAQ question if the answer was extracted from a FAQ
     *           Document, empty otherwise.
     *     @type string $answer
     *           The piece of text from the `source` knowledge base document that answers
     *           this conversational query.
     *     @type int $match_confidence_level
     *           The system's confidence level that this knowledge answer is a good match
     *           for this conversational query.
     *           NOTE: The confidence level for a given `<query, answer>` pair may change
     *           without notice, as it depends on models that are constantly being
     *           improved. However, it will change less frequently than the confidence
     *           score below, and should be preferred for referencing the quality of an
     *           answer.
     *     @type float $match_confidence
     *           The system's confidence score that this Knowledge answer is a good match
     *           for this converstational query, range from 0.0 (completely uncertain)
     *           to 1.0 (completely certain).
     *           Note: The confidence score is likely to vary somewhat (possibly even for
     *           identical requests), as the underlying model is under constant
     *           improvement, we may deprecate it in the future. We recommend using
     *           `match_confidence_level` which should be generally more stable.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\V2Beta1\Session::initOnce();
        parent::__construct($data);
    }

    /**
     * Indicates which Knowledge Document this answer was extracted from.
     * Format: `projects/<Project ID>/knowledgeBases/<Knowledge Base
     * ID>/documents/<Document ID>`.
     *
     * Generated from protobuf field <code>string source = 1;</code>
     * @return string
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * Indicates which Knowledge Document this answer was extracted from.
     * Format: `projects/<Project ID>/knowledgeBases/<Knowledge Base
     * ID>/documents/<Document ID>`.
     *
     * Generated from protobuf field <code>string source = 1;</code>
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
     * The corresponding FAQ question if the answer was extracted from a FAQ
     * Document, empty otherwise.
     *
     * Generated from protobuf field <code>string faq_question = 2;</code>
     * @return string
     */
    public function getFaqQuestion()
    {
        return $this->faq_question;
    }

    /**
     * The corresponding FAQ question if the answer was extracted from a FAQ
     * Document, empty otherwise.
     *
     * Generated from protobuf field <code>string faq_question = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setFaqQuestion($var)
    {
        GPBUtil::checkString($var, True);
        $this->faq_question = $var;

        return $this;
    }

    /**
     * The piece of text from the `source` knowledge base document that answers
     * this conversational query.
     *
     * Generated from protobuf field <code>string answer = 3;</code>
     * @return string
     */
    public function getAnswer()
    {
        return $this->answer;
    }

    /**
     * The piece of text from the `source` knowledge base document that answers
     * this conversational query.
     *
     * Generated from protobuf field <code>string answer = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setAnswer($var)
    {
        GPBUtil::checkString($var, True);
        $this->answer = $var;

        return $this;
    }

    /**
     * The system's confidence level that this knowledge answer is a good match
     * for this conversational query.
     * NOTE: The confidence level for a given `<query, answer>` pair may change
     * without notice, as it depends on models that are constantly being
     * improved. However, it will change less frequently than the confidence
     * score below, and should be preferred for referencing the quality of an
     * answer.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2beta1.KnowledgeAnswers.Answer.MatchConfidenceLevel match_confidence_level = 4;</code>
     * @return int
     */
    public function getMatchConfidenceLevel()
    {
        return $this->match_confidence_level;
    }

    /**
     * The system's confidence level that this knowledge answer is a good match
     * for this conversational query.
     * NOTE: The confidence level for a given `<query, answer>` pair may change
     * without notice, as it depends on models that are constantly being
     * improved. However, it will change less frequently than the confidence
     * score below, and should be preferred for referencing the quality of an
     * answer.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2beta1.KnowledgeAnswers.Answer.MatchConfidenceLevel match_confidence_level = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setMatchConfidenceLevel($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Dialogflow\V2beta1\KnowledgeAnswers_Answer_MatchConfidenceLevel::class);
        $this->match_confidence_level = $var;

        return $this;
    }

    /**
     * The system's confidence score that this Knowledge answer is a good match
     * for this converstational query, range from 0.0 (completely uncertain)
     * to 1.0 (completely certain).
     * Note: The confidence score is likely to vary somewhat (possibly even for
     * identical requests), as the underlying model is under constant
     * improvement, we may deprecate it in the future. We recommend using
     * `match_confidence_level` which should be generally more stable.
     *
     * Generated from protobuf field <code>float match_confidence = 5;</code>
     * @return float
     */
    public function getMatchConfidence()
    {
        return $this->match_confidence;
    }

    /**
     * The system's confidence score that this Knowledge answer is a good match
     * for this converstational query, range from 0.0 (completely uncertain)
     * to 1.0 (completely certain).
     * Note: The confidence score is likely to vary somewhat (possibly even for
     * identical requests), as the underlying model is under constant
     * improvement, we may deprecate it in the future. We recommend using
     * `match_confidence_level` which should be generally more stable.
     *
     * Generated from protobuf field <code>float match_confidence = 5;</code>
     * @param float $var
     * @return $this
     */
    public function setMatchConfidence($var)
    {
        GPBUtil::checkFloat($var);
        $this->match_confidence = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Answer::class, \Google\Cloud\Dialogflow\V2beta1\KnowledgeAnswers_Answer::class);

