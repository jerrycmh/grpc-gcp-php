<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/containeranalysis/v1alpha1/containeranalysis.proto

namespace Google\Devtools\Containeranalysis\V1alpha1\BuildSignature;

/**
 * Public key formats
 *
 * Protobuf type <code>google.devtools.containeranalysis.v1alpha1.BuildSignature.KeyType</code>
 */
class KeyType
{
    /**
     * `KeyType` is not set.
     *
     * Generated from protobuf enum <code>KEY_TYPE_UNSPECIFIED = 0;</code>
     */
    const KEY_TYPE_UNSPECIFIED = 0;
    /**
     * `PGP ASCII Armored` public key.
     *
     * Generated from protobuf enum <code>PGP_ASCII_ARMORED = 1;</code>
     */
    const PGP_ASCII_ARMORED = 1;
    /**
     * `PKIX PEM` public key.
     *
     * Generated from protobuf enum <code>PKIX_PEM = 2;</code>
     */
    const PKIX_PEM = 2;
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(KeyType::class, \Google\Devtools\Containeranalysis\V1alpha1\BuildSignature_KeyType::class);

