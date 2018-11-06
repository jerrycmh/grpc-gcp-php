<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/expr/v1alpha1/checked.proto

namespace Google\Api\Expr\V1alpha1\Type;

/**
 * Well-known protobuf types treated with first-class support in CEL.
 *
 * Protobuf type <code>google.api.expr.v1alpha1.Type.WellKnownType</code>
 */
class WellKnownType
{
    /**
     * Unspecified type.
     *
     * Generated from protobuf enum <code>WELL_KNOWN_TYPE_UNSPECIFIED = 0;</code>
     */
    const WELL_KNOWN_TYPE_UNSPECIFIED = 0;
    /**
     * Well-known protobuf.Any type.
     * Any types are a polymorphic message type. During type-checking they are
     * treated like `DYN` types, but at runtime they are resolved to a specific
     * message type specified at evaluation time.
     *
     * Generated from protobuf enum <code>ANY = 1;</code>
     */
    const ANY = 1;
    /**
     * Well-known protobuf.Timestamp type, internally referenced as `timestamp`.
     *
     * Generated from protobuf enum <code>TIMESTAMP = 2;</code>
     */
    const TIMESTAMP = 2;
    /**
     * Well-known protobuf.Duration type, internally referenced as `duration`.
     *
     * Generated from protobuf enum <code>DURATION = 3;</code>
     */
    const DURATION = 3;
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(WellKnownType::class, \Google\Api\Expr\V1alpha1\Type_WellKnownType::class);

