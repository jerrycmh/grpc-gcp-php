<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/cloudbuild/v1/cloudbuild.proto

namespace Google\Devtools\Cloudbuild\V1\BuildOptions;

/**
 * Specifies the behavior when writing build logs to Google Cloud Storage.
 *
 * Protobuf type <code>google.devtools.cloudbuild.v1.BuildOptions.LogStreamingOption</code>
 */
class LogStreamingOption
{
    /**
     * Service may automatically determine build log streaming behavior.
     *
     * Generated from protobuf enum <code>STREAM_DEFAULT = 0;</code>
     */
    const STREAM_DEFAULT = 0;
    /**
     * Build logs should be streamed to Google Cloud Storage.
     *
     * Generated from protobuf enum <code>STREAM_ON = 1;</code>
     */
    const STREAM_ON = 1;
    /**
     * Build logs should not be streamed to Google Cloud Storage; they will be
     * written when the build is completed.
     *
     * Generated from protobuf enum <code>STREAM_OFF = 2;</code>
     */
    const STREAM_OFF = 2;
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(LogStreamingOption::class, \Google\Devtools\Cloudbuild\V1\BuildOptions_LogStreamingOption::class);

