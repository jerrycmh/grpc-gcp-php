<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/vision/v1p2beta1/text_annotation.proto

namespace Google\Cloud\Vision\V1p2beta1\TextAnnotation;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Detected language for a structural component.
 *
 * Generated from protobuf message <code>google.cloud.vision.v1p2beta1.TextAnnotation.DetectedLanguage</code>
 */
class DetectedLanguage extends \Google\Protobuf\Internal\Message
{
    /**
     * The BCP-47 language code, such as "en-US" or "sr-Latn". For more
     * information, see
     * http://www.unicode.org/reports/tr35/#Unicode_locale_identifier.
     *
     * Generated from protobuf field <code>string language_code = 1;</code>
     */
    private $language_code = '';
    /**
     * Confidence of detected language. Range [0, 1].
     *
     * Generated from protobuf field <code>float confidence = 2;</code>
     */
    private $confidence = 0.0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $language_code
     *           The BCP-47 language code, such as "en-US" or "sr-Latn". For more
     *           information, see
     *           http://www.unicode.org/reports/tr35/#Unicode_locale_identifier.
     *     @type float $confidence
     *           Confidence of detected language. Range [0, 1].
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Vision\V1P2Beta1\TextAnnotation::initOnce();
        parent::__construct($data);
    }

    /**
     * The BCP-47 language code, such as "en-US" or "sr-Latn". For more
     * information, see
     * http://www.unicode.org/reports/tr35/#Unicode_locale_identifier.
     *
     * Generated from protobuf field <code>string language_code = 1;</code>
     * @return string
     */
    public function getLanguageCode()
    {
        return $this->language_code;
    }

    /**
     * The BCP-47 language code, such as "en-US" or "sr-Latn". For more
     * information, see
     * http://www.unicode.org/reports/tr35/#Unicode_locale_identifier.
     *
     * Generated from protobuf field <code>string language_code = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setLanguageCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->language_code = $var;

        return $this;
    }

    /**
     * Confidence of detected language. Range [0, 1].
     *
     * Generated from protobuf field <code>float confidence = 2;</code>
     * @return float
     */
    public function getConfidence()
    {
        return $this->confidence;
    }

    /**
     * Confidence of detected language. Range [0, 1].
     *
     * Generated from protobuf field <code>float confidence = 2;</code>
     * @param float $var
     * @return $this
     */
    public function setConfidence($var)
    {
        GPBUtil::checkFloat($var);
        $this->confidence = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(DetectedLanguage::class, \Google\Cloud\Vision\V1p2beta1\TextAnnotation_DetectedLanguage::class);

