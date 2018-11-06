<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/containeranalysis/v1alpha1/provenance.proto

namespace Google\Devtools\Containeranalysis\V1alpha1\Hash;

/**
 * Specifies the hash algorithm, if any.
 *
 * Protobuf type <code>google.devtools.containeranalysis.v1alpha1.Hash.HashType</code>
 */
class HashType
{
    /**
     * No hash requested.
     *
     * Generated from protobuf enum <code>NONE = 0;</code>
     */
    const NONE = 0;
    /**
     * A sha256 hash.
     *
     * Generated from protobuf enum <code>SHA256 = 1;</code>
     */
    const SHA256 = 1;
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(HashType::class, \Google\Devtools\Containeranalysis\V1alpha1\Hash_HashType::class);

