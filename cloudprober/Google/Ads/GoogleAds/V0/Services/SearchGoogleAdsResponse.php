<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v0/services/google_ads_service.proto

namespace Google\Ads\GoogleAds\V0\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for [GoogleAdsService.Search][].
 *
 * Generated from protobuf message <code>google.ads.googleads.v0.services.SearchGoogleAdsResponse</code>
 */
class SearchGoogleAdsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The list of rows that matched the query.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v0.services.GoogleAdsRow results = 1;</code>
     */
    private $results;
    /**
     * Pagination token used to retrieve the next page of results.
     * Pass the content of this string as the `page_token` attribute of
     * the next request. `next_page_token` is not returned for the last
     * page.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    private $next_page_token = '';
    /**
     * Total number of results that match the query ignoring the LIMIT
     * clause.
     *
     * Generated from protobuf field <code>int64 total_results_count = 3;</code>
     */
    private $total_results_count = 0;
    /**
     * FieldMask that represents what fields were requested by the user.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask field_mask = 5;</code>
     */
    private $field_mask = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Ads\GoogleAds\V0\Services\GoogleAdsRow[]|\Google\Protobuf\Internal\RepeatedField $results
     *           The list of rows that matched the query.
     *     @type string $next_page_token
     *           Pagination token used to retrieve the next page of results.
     *           Pass the content of this string as the `page_token` attribute of
     *           the next request. `next_page_token` is not returned for the last
     *           page.
     *     @type int|string $total_results_count
     *           Total number of results that match the query ignoring the LIMIT
     *           clause.
     *     @type \Google\Protobuf\FieldMask $field_mask
     *           FieldMask that represents what fields were requested by the user.
     * }
     */
    public function __construct($data = NULL) {
        \Google\Ads\GoogleAds\V0\Services\GoogleAdsService::initOnce();
        parent::__construct($data);
    }

    /**
     * The list of rows that matched the query.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v0.services.GoogleAdsRow results = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getResults()
    {
        return $this->results;
    }

    /**
     * The list of rows that matched the query.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v0.services.GoogleAdsRow results = 1;</code>
     * @param \Google\Ads\GoogleAds\V0\Services\GoogleAdsRow[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setResults($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V0\Services\GoogleAdsRow::class);
        $this->results = $arr;

        return $this;
    }

    /**
     * Pagination token used to retrieve the next page of results.
     * Pass the content of this string as the `page_token` attribute of
     * the next request. `next_page_token` is not returned for the last
     * page.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * Pagination token used to retrieve the next page of results.
     * Pass the content of this string as the `page_token` attribute of
     * the next request. `next_page_token` is not returned for the last
     * page.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setNextPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_page_token = $var;

        return $this;
    }

    /**
     * Total number of results that match the query ignoring the LIMIT
     * clause.
     *
     * Generated from protobuf field <code>int64 total_results_count = 3;</code>
     * @return int|string
     */
    public function getTotalResultsCount()
    {
        return $this->total_results_count;
    }

    /**
     * Total number of results that match the query ignoring the LIMIT
     * clause.
     *
     * Generated from protobuf field <code>int64 total_results_count = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setTotalResultsCount($var)
    {
        GPBUtil::checkInt64($var);
        $this->total_results_count = $var;

        return $this;
    }

    /**
     * FieldMask that represents what fields were requested by the user.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask field_mask = 5;</code>
     * @return \Google\Protobuf\FieldMask
     */
    public function getFieldMask()
    {
        return $this->field_mask;
    }

    /**
     * FieldMask that represents what fields were requested by the user.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask field_mask = 5;</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setFieldMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->field_mask = $var;

        return $this;
    }

}

