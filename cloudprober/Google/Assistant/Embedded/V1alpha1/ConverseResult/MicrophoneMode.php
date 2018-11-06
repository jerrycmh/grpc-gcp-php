<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/assistant/embedded/v1alpha1/embedded_assistant.proto

namespace Google\Assistant\Embedded\V1alpha1\ConverseResult;

/**
 * Possible states of the microphone after a `Converse` RPC completes.
 *
 * Protobuf type <code>google.assistant.embedded.v1alpha1.ConverseResult.MicrophoneMode</code>
 */
class MicrophoneMode
{
    /**
     * No mode specified.
     *
     * Generated from protobuf enum <code>MICROPHONE_MODE_UNSPECIFIED = 0;</code>
     */
    const MICROPHONE_MODE_UNSPECIFIED = 0;
    /**
     * The service is not expecting a follow-on question from the user.
     * The microphone should remain off until the user re-activates it.
     *
     * Generated from protobuf enum <code>CLOSE_MICROPHONE = 1;</code>
     */
    const CLOSE_MICROPHONE = 1;
    /**
     * The service is expecting a follow-on question from the user. The
     * microphone should be re-opened when the `AudioOut` playback completes
     * (by starting a new `Converse` RPC call to send the new audio).
     *
     * Generated from protobuf enum <code>DIALOG_FOLLOW_ON = 2;</code>
     */
    const DIALOG_FOLLOW_ON = 2;
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(MicrophoneMode::class, \Google\Assistant\Embedded\V1alpha1\ConverseResult_MicrophoneMode::class);

