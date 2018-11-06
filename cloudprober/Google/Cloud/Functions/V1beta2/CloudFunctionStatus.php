<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/functions/v1beta2/functions.proto

namespace Google\Cloud\Functions\V1beta2;

/**
 * Describes the current stage of a deployment.
 *
 * Protobuf type <code>google.cloud.functions.v1beta2.CloudFunctionStatus</code>
 */
class CloudFunctionStatus
{
    /**
     * Status not specified.
     *
     * Generated from protobuf enum <code>STATUS_UNSPECIFIED = 0;</code>
     */
    const STATUS_UNSPECIFIED = 0;
    /**
     * Successfully deployed.
     *
     * Generated from protobuf enum <code>READY = 1;</code>
     */
    const READY = 1;
    /**
     * Not deployed correctly - behavior is undefined. The item should be updated
     * or deleted to move it out of this state.
     *
     * Generated from protobuf enum <code>FAILED = 2;</code>
     */
    const FAILED = 2;
    /**
     * Creation or update in progress.
     *
     * Generated from protobuf enum <code>DEPLOYING = 3;</code>
     */
    const DEPLOYING = 3;
    /**
     * Deletion in progress.
     *
     * Generated from protobuf enum <code>DELETING = 4;</code>
     */
    const DELETING = 4;
}

