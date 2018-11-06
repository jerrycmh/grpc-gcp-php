<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/resultstore/v2/action.proto

namespace Google\Devtools\Resultstore\V2;

/**
 * Indicates how/where this Action was executed.
 *
 * Protobuf type <code>google.devtools.resultstore.v2.ExecutionStrategy</code>
 */
class ExecutionStrategy
{
    /**
     * The action did not indicate how it was executed.
     *
     * Generated from protobuf enum <code>EXECUTION_STRATEGY_UNSPECIFIED = 0;</code>
     */
    const EXECUTION_STRATEGY_UNSPECIFIED = 0;
    /**
     * The action was executed in some other form.
     *
     * Generated from protobuf enum <code>OTHER_ENVIRONMENT = 1;</code>
     */
    const OTHER_ENVIRONMENT = 1;
    /**
     * The action used a remote build service.
     *
     * Generated from protobuf enum <code>REMOTE_SERVICE = 2;</code>
     */
    const REMOTE_SERVICE = 2;
    /**
     * The action was executed locally, in parallel with other actions.
     *
     * Generated from protobuf enum <code>LOCAL_PARALLEL = 3;</code>
     */
    const LOCAL_PARALLEL = 3;
    /**
     * The action was executed locally, without parallelism.
     *
     * Generated from protobuf enum <code>LOCAL_SEQUENTIAL = 4;</code>
     */
    const LOCAL_SEQUENTIAL = 4;
}

