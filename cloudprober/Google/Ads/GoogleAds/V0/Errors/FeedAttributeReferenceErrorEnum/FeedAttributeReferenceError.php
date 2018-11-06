<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v0/errors/feed_attribute_reference_error.proto

namespace Google\Ads\GoogleAds\V0\Errors\FeedAttributeReferenceErrorEnum;

/**
 * Enum describing possible feed attribute reference errors.
 *
 * Protobuf type <code>google.ads.googleads.v0.errors.FeedAttributeReferenceErrorEnum.FeedAttributeReferenceError</code>
 */
class FeedAttributeReferenceError
{
    /**
     * Enum unspecified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;
    /**
     * The received error code is not known in this version.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    const UNKNOWN = 1;
    /**
     * A feed referenced by ID has been deleted.
     *
     * Generated from protobuf enum <code>CANNOT_REFERENCE_DELETED_FEED = 2;</code>
     */
    const CANNOT_REFERENCE_DELETED_FEED = 2;
    /**
     * There is no active feed with the given name.
     *
     * Generated from protobuf enum <code>INVALID_FEED_NAME = 3;</code>
     */
    const INVALID_FEED_NAME = 3;
    /**
     * There is no feed attribute in an active feed with the given name.
     *
     * Generated from protobuf enum <code>INVALID_FEED_ATTRIBUTE_NAME = 4;</code>
     */
    const INVALID_FEED_ATTRIBUTE_NAME = 4;
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(FeedAttributeReferenceError::class, \Google\Ads\GoogleAds\V0\Errors\FeedAttributeReferenceErrorEnum_FeedAttributeReferenceError::class);

