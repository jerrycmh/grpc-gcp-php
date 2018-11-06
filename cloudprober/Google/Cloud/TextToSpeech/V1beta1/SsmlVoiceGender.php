<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/texttospeech/v1beta1/cloud_tts.proto

namespace Google\Cloud\Texttospeech\V1beta1;

/**
 * Gender of the voice as described in
 * [SSML voice element](https://www.w3.org/TR/speech-synthesis11/#edef_voice).
 *
 * Protobuf type <code>google.cloud.texttospeech.v1beta1.SsmlVoiceGender</code>
 */
class SsmlVoiceGender
{
    /**
     * An unspecified gender.
     * In VoiceSelectionParams, this means that the client doesn't care which
     * gender the selected voice will have. In the Voice field of
     * ListVoicesResponse, this may mean that the voice doesn't fit any of the
     * other categories in this enum, or that the gender of the voice isn't known.
     *
     * Generated from protobuf enum <code>SSML_VOICE_GENDER_UNSPECIFIED = 0;</code>
     */
    const SSML_VOICE_GENDER_UNSPECIFIED = 0;
    /**
     * A male voice.
     *
     * Generated from protobuf enum <code>MALE = 1;</code>
     */
    const MALE = 1;
    /**
     * A female voice.
     *
     * Generated from protobuf enum <code>FEMALE = 2;</code>
     */
    const FEMALE = 2;
    /**
     * A gender-neutral voice.
     *
     * Generated from protobuf enum <code>NEUTRAL = 3;</code>
     */
    const NEUTRAL = 3;
}

