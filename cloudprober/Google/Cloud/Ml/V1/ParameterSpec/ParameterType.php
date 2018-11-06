<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/ml/v1/job_service.proto

namespace Google\Cloud\Ml\V1\ParameterSpec;

/**
 * The type of the parameter.
 *
 * Protobuf type <code>google.cloud.ml.v1.ParameterSpec.ParameterType</code>
 */
class ParameterType
{
    /**
     * You must specify a valid type. Using this unspecified type will result in
     * an error.
     *
     * Generated from protobuf enum <code>PARAMETER_TYPE_UNSPECIFIED = 0;</code>
     */
    const PARAMETER_TYPE_UNSPECIFIED = 0;
    /**
     * Type for real-valued parameters.
     *
     * Generated from protobuf enum <code>DOUBLE = 1;</code>
     */
    const DOUBLE = 1;
    /**
     * Type for integral parameters.
     *
     * Generated from protobuf enum <code>INTEGER = 2;</code>
     */
    const INTEGER = 2;
    /**
     * The parameter is categorical, with a value chosen from the categories
     * field.
     *
     * Generated from protobuf enum <code>CATEGORICAL = 3;</code>
     */
    const CATEGORICAL = 3;
    /**
     * The parameter is real valued, with a fixed set of feasible points. If
     * `type==DISCRETE`, feasible_points must be provided, and
     * {`min_value`, `max_value`} will be ignored.
     *
     * Generated from protobuf enum <code>DISCRETE = 4;</code>
     */
    const DISCRETE = 4;
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ParameterType::class, \Google\Cloud\Ml\V1\ParameterSpec_ParameterType::class);

