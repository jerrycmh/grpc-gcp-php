<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v0/common/bidding.proto

namespace Google\Ads\GoogleAds\V0\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * An automated bid strategy that sets your bids to help get as many clicks
 * as possible within your budget.
 *
 * Generated from protobuf message <code>google.ads.googleads.v0.common.TargetSpend</code>
 */
class TargetSpend extends \Google\Protobuf\Internal\Message
{
    /**
     * The spend target under which to maximize clicks.
     * A TargetSpend bidder will attempt to spend the smaller of this value
     * or the natural throttling spend amount.
     * If not specified, the budget is used as the spend target.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value target_spend_micros = 1;</code>
     */
    private $target_spend_micros = null;
    /**
     * Maximum bid limit that can be set by the bid strategy.
     * The limit applies to all keywords managed by the strategy.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value cpc_bid_ceiling_micros = 2;</code>
     */
    private $cpc_bid_ceiling_micros = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Int64Value $target_spend_micros
     *           The spend target under which to maximize clicks.
     *           A TargetSpend bidder will attempt to spend the smaller of this value
     *           or the natural throttling spend amount.
     *           If not specified, the budget is used as the spend target.
     *     @type \Google\Protobuf\Int64Value $cpc_bid_ceiling_micros
     *           Maximum bid limit that can be set by the bid strategy.
     *           The limit applies to all keywords managed by the strategy.
     * }
     */
    public function __construct($data = NULL) {
        \Google\Ads\GoogleAds\V0\Common\Bidding::initOnce();
        parent::__construct($data);
    }

    /**
     * The spend target under which to maximize clicks.
     * A TargetSpend bidder will attempt to spend the smaller of this value
     * or the natural throttling spend amount.
     * If not specified, the budget is used as the spend target.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value target_spend_micros = 1;</code>
     * @return \Google\Protobuf\Int64Value
     */
    public function getTargetSpendMicros()
    {
        return $this->target_spend_micros;
    }

    /**
     * The spend target under which to maximize clicks.
     * A TargetSpend bidder will attempt to spend the smaller of this value
     * or the natural throttling spend amount.
     * If not specified, the budget is used as the spend target.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value target_spend_micros = 1;</code>
     * @param \Google\Protobuf\Int64Value $var
     * @return $this
     */
    public function setTargetSpendMicros($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int64Value::class);
        $this->target_spend_micros = $var;

        return $this;
    }

    /**
     * Maximum bid limit that can be set by the bid strategy.
     * The limit applies to all keywords managed by the strategy.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value cpc_bid_ceiling_micros = 2;</code>
     * @return \Google\Protobuf\Int64Value
     */
    public function getCpcBidCeilingMicros()
    {
        return $this->cpc_bid_ceiling_micros;
    }

    /**
     * Maximum bid limit that can be set by the bid strategy.
     * The limit applies to all keywords managed by the strategy.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value cpc_bid_ceiling_micros = 2;</code>
     * @param \Google\Protobuf\Int64Value $var
     * @return $this
     */
    public function setCpcBidCeilingMicros($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int64Value::class);
        $this->cpc_bid_ceiling_micros = $var;

        return $this;
    }

}

