<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/assistant/embedded/v1alpha1/embedded_assistant.proto

namespace Google\Assistant\Embedded\V1alpha1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The audio containing the assistant's response to the query. Sequential chunks
 * of audio data are received in sequential `ConverseResponse` messages.
 *
 * Generated from protobuf message <code>google.assistant.embedded.v1alpha1.AudioOut</code>
 */
class AudioOut extends \Google\Protobuf\Internal\Message
{
    /**
     * *Output-only* The audio data containing the assistant's response to the
     * query. Sequential chunks of audio data are received in sequential
     * `ConverseResponse` messages.
     *
     * Generated from protobuf field <code>bytes audio_data = 1;</code>
     */
    private $audio_data = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $audio_data
     *           *Output-only* The audio data containing the assistant's response to the
     *           query. Sequential chunks of audio data are received in sequential
     *           `ConverseResponse` messages.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Assistant\Embedded\V1Alpha1\EmbeddedAssistant::initOnce();
        parent::__construct($data);
    }

    /**
     * *Output-only* The audio data containing the assistant's response to the
     * query. Sequential chunks of audio data are received in sequential
     * `ConverseResponse` messages.
     *
     * Generated from protobuf field <code>bytes audio_data = 1;</code>
     * @return string
     */
    public function getAudioData()
    {
        return $this->audio_data;
    }

    /**
     * *Output-only* The audio data containing the assistant's response to the
     * query. Sequential chunks of audio data are received in sequential
     * `ConverseResponse` messages.
     *
     * Generated from protobuf field <code>bytes audio_data = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setAudioData($var)
    {
        GPBUtil::checkString($var, False);
        $this->audio_data = $var;

        return $this;
    }

}

