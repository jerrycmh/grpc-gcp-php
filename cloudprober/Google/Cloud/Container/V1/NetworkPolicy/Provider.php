<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/container/v1/cluster_service.proto

namespace Google\Cloud\Container\V1\NetworkPolicy;

/**
 * Allowed Network Policy providers.
 *
 * Protobuf type <code>google.container.v1.NetworkPolicy.Provider</code>
 */
class Provider
{
    /**
     * Not set
     *
     * Generated from protobuf enum <code>PROVIDER_UNSPECIFIED = 0;</code>
     */
    const PROVIDER_UNSPECIFIED = 0;
    /**
     * Tigera (Calico Felix).
     *
     * Generated from protobuf enum <code>CALICO = 1;</code>
     */
    const CALICO = 1;
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Provider::class, \Google\Cloud\Container\V1\NetworkPolicy_Provider::class);

