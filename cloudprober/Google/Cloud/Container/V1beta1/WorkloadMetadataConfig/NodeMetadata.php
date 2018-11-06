<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/container/v1beta1/cluster_service.proto

namespace Google\Cloud\Container\V1beta1\WorkloadMetadataConfig;

/**
 * NodeMetadata is the configuration for if and how to expose the node
 * metadata to the workload running on the node.
 *
 * Protobuf type <code>google.container.v1beta1.WorkloadMetadataConfig.NodeMetadata</code>
 */
class NodeMetadata
{
    /**
     * Not set.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;
    /**
     * Prevent workloads not in hostNetwork from accessing certain VM metadata,
     * specifically kube-env, which contains Kubelet credentials, and the
     * instance identity token.
     * Metadata concealment is a temporary security solution available while the
     * bootstrapping process for cluster nodes is being redesigned with
     * significant security improvements.  This feature is scheduled to be
     * deprecated in the future and later removed.
     *
     * Generated from protobuf enum <code>SECURE = 1;</code>
     */
    const SECURE = 1;
    /**
     * Expose all VM metadata to pods.
     *
     * Generated from protobuf enum <code>EXPOSE = 2;</code>
     */
    const EXPOSE = 2;
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(NodeMetadata::class, \Google\Cloud\Container\V1beta1\WorkloadMetadataConfig_NodeMetadata::class);

