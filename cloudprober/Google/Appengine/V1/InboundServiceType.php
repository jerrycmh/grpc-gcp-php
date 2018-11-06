<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/appengine/v1/version.proto

namespace Google\Appengine\V1;

/**
 * Available inbound services.
 *
 * Protobuf type <code>google.appengine.v1.InboundServiceType</code>
 */
class InboundServiceType
{
    /**
     * Not specified.
     *
     * Generated from protobuf enum <code>INBOUND_SERVICE_UNSPECIFIED = 0;</code>
     */
    const INBOUND_SERVICE_UNSPECIFIED = 0;
    /**
     * Allows an application to receive mail.
     *
     * Generated from protobuf enum <code>INBOUND_SERVICE_MAIL = 1;</code>
     */
    const INBOUND_SERVICE_MAIL = 1;
    /**
     * Allows an application to receive email-bound notifications.
     *
     * Generated from protobuf enum <code>INBOUND_SERVICE_MAIL_BOUNCE = 2;</code>
     */
    const INBOUND_SERVICE_MAIL_BOUNCE = 2;
    /**
     * Allows an application to receive error stanzas.
     *
     * Generated from protobuf enum <code>INBOUND_SERVICE_XMPP_ERROR = 3;</code>
     */
    const INBOUND_SERVICE_XMPP_ERROR = 3;
    /**
     * Allows an application to receive instant messages.
     *
     * Generated from protobuf enum <code>INBOUND_SERVICE_XMPP_MESSAGE = 4;</code>
     */
    const INBOUND_SERVICE_XMPP_MESSAGE = 4;
    /**
     * Allows an application to receive user subscription POSTs.
     *
     * Generated from protobuf enum <code>INBOUND_SERVICE_XMPP_SUBSCRIBE = 5;</code>
     */
    const INBOUND_SERVICE_XMPP_SUBSCRIBE = 5;
    /**
     * Allows an application to receive a user's chat presence.
     *
     * Generated from protobuf enum <code>INBOUND_SERVICE_XMPP_PRESENCE = 6;</code>
     */
    const INBOUND_SERVICE_XMPP_PRESENCE = 6;
    /**
     * Registers an application for notifications when a client connects or
     * disconnects from a channel.
     *
     * Generated from protobuf enum <code>INBOUND_SERVICE_CHANNEL_PRESENCE = 7;</code>
     */
    const INBOUND_SERVICE_CHANNEL_PRESENCE = 7;
    /**
     * Enables warmup requests.
     *
     * Generated from protobuf enum <code>INBOUND_SERVICE_WARMUP = 9;</code>
     */
    const INBOUND_SERVICE_WARMUP = 9;
}

