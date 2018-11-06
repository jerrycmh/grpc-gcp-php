<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/watcher/v1/watch.proto

namespace Google\Watcher\V1\Change;

/**
 * A reported value can be in one of the following states:
 *
 * Protobuf type <code>google.watcher.v1.Change.State</code>
 */
class State
{
    /**
     * The element exists and its full value is included in data.
     *
     * Generated from protobuf enum <code>EXISTS = 0;</code>
     */
    const EXISTS = 0;
    /**
     * The element does not exist.
     *
     * Generated from protobuf enum <code>DOES_NOT_EXIST = 1;</code>
     */
    const DOES_NOT_EXIST = 1;
    /**
     * Element may or may not exist. Used only for initial state delivery when
     * the client is not interested in fetching the initial state. See the
     * "Initial State" section above.
     *
     * Generated from protobuf enum <code>INITIAL_STATE_SKIPPED = 2;</code>
     */
    const INITIAL_STATE_SKIPPED = 2;
    /**
     * The element may exist, but some error has occurred. More information is
     * available in the data field - the value is a serialized Status
     * proto (from [google.rpc.Status][])
     *
     * Generated from protobuf enum <code>ERROR = 3;</code>
     */
    const ERROR = 3;
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(State::class, \Google\Watcher\V1\Change_State::class);

