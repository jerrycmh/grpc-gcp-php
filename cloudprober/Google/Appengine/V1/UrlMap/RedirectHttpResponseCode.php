<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/appengine/v1/app_yaml.proto

namespace Google\Appengine\V1\UrlMap;

/**
 * Redirect codes.
 *
 * Protobuf type <code>google.appengine.v1.UrlMap.RedirectHttpResponseCode</code>
 */
class RedirectHttpResponseCode
{
    /**
     * Not specified. `302` is assumed.
     *
     * Generated from protobuf enum <code>REDIRECT_HTTP_RESPONSE_CODE_UNSPECIFIED = 0;</code>
     */
    const REDIRECT_HTTP_RESPONSE_CODE_UNSPECIFIED = 0;
    /**
     * `301 Moved Permanently` code.
     *
     * Generated from protobuf enum <code>REDIRECT_HTTP_RESPONSE_CODE_301 = 1;</code>
     */
    const REDIRECT_HTTP_RESPONSE_CODE_301 = 1;
    /**
     * `302 Moved Temporarily` code.
     *
     * Generated from protobuf enum <code>REDIRECT_HTTP_RESPONSE_CODE_302 = 2;</code>
     */
    const REDIRECT_HTTP_RESPONSE_CODE_302 = 2;
    /**
     * `303 See Other` code.
     *
     * Generated from protobuf enum <code>REDIRECT_HTTP_RESPONSE_CODE_303 = 3;</code>
     */
    const REDIRECT_HTTP_RESPONSE_CODE_303 = 3;
    /**
     * `307 Temporary Redirect` code.
     *
     * Generated from protobuf enum <code>REDIRECT_HTTP_RESPONSE_CODE_307 = 4;</code>
     */
    const REDIRECT_HTTP_RESPONSE_CODE_307 = 4;
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(RedirectHttpResponseCode::class, \Google\Appengine\V1\UrlMap_RedirectHttpResponseCode::class);

