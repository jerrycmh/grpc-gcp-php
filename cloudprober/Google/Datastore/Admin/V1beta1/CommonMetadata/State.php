<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/datastore/admin/v1beta1/datastore_admin.proto

namespace Google\Datastore\Admin\V1beta1\CommonMetadata;

/**
 * The various possible states for an ongoing Operation.
 *
 * Protobuf type <code>google.datastore.admin.v1beta1.CommonMetadata.State</code>
 */
class State
{
    /**
     * Unspecified.
     *
     * Generated from protobuf enum <code>STATE_UNSPECIFIED = 0;</code>
     */
    const STATE_UNSPECIFIED = 0;
    /**
     * Request is being prepared for processing.
     *
     * Generated from protobuf enum <code>INITIALIZING = 1;</code>
     */
    const INITIALIZING = 1;
    /**
     * Request is actively being processed.
     *
     * Generated from protobuf enum <code>PROCESSING = 2;</code>
     */
    const PROCESSING = 2;
    /**
     * Request is in the process of being cancelled after user called
     * google.longrunning.Operations.CancelOperation on the operation.
     *
     * Generated from protobuf enum <code>CANCELLING = 3;</code>
     */
    const CANCELLING = 3;
    /**
     * Request has been processed and is in its finalization stage.
     *
     * Generated from protobuf enum <code>FINALIZING = 4;</code>
     */
    const FINALIZING = 4;
    /**
     * Request has completed successfully.
     *
     * Generated from protobuf enum <code>SUCCESSFUL = 5;</code>
     */
    const SUCCESSFUL = 5;
    /**
     * Request has finished being processed, but encountered an error.
     *
     * Generated from protobuf enum <code>FAILED = 6;</code>
     */
    const FAILED = 6;
    /**
     * Request has finished being cancelled after user called
     * google.longrunning.Operations.CancelOperation.
     *
     * Generated from protobuf enum <code>CANCELLED = 7;</code>
     */
    const CANCELLED = 7;
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(State::class, \Google\Datastore\Admin\V1beta1\CommonMetadata_State::class);

