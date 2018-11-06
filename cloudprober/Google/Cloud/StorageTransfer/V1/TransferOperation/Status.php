<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/storagetransfer/v1/transfer_types.proto

namespace Google\Cloud\StorageTransfer\V1\TransferOperation;

/**
 * The status of a TransferOperation.
 *
 * Protobuf type <code>google.storagetransfer.v1.TransferOperation.Status</code>
 */
class Status
{
    /**
     * Zero is an illegal value.
     *
     * Generated from protobuf enum <code>STATUS_UNSPECIFIED = 0;</code>
     */
    const STATUS_UNSPECIFIED = 0;
    /**
     * In progress.
     *
     * Generated from protobuf enum <code>IN_PROGRESS = 1;</code>
     */
    const IN_PROGRESS = 1;
    /**
     * Paused.
     *
     * Generated from protobuf enum <code>PAUSED = 2;</code>
     */
    const PAUSED = 2;
    /**
     * Completed successfully.
     *
     * Generated from protobuf enum <code>SUCCESS = 3;</code>
     */
    const SUCCESS = 3;
    /**
     * Terminated due to an unrecoverable failure.
     *
     * Generated from protobuf enum <code>FAILED = 4;</code>
     */
    const FAILED = 4;
    /**
     * Aborted by the user.
     *
     * Generated from protobuf enum <code>ABORTED = 5;</code>
     */
    const ABORTED = 5;
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Status::class, \Google\Cloud\StorageTransfer\V1\TransferOperation_Status::class);

