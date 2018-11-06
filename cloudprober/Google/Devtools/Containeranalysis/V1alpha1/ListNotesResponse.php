<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/containeranalysis/v1alpha1/containeranalysis.proto

namespace Google\Devtools\Containeranalysis\V1alpha1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response including listed notes.
 *
 * Generated from protobuf message <code>google.devtools.containeranalysis.v1alpha1.ListNotesResponse</code>
 */
class ListNotesResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The occurrences requested
     *
     * Generated from protobuf field <code>repeated .google.devtools.containeranalysis.v1alpha1.Note notes = 1;</code>
     */
    private $notes;
    /**
     * The next pagination token in the list response. It should be used as
     * page_token for the following request. An empty value means no more result.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    private $next_page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Devtools\Containeranalysis\V1alpha1\Note[]|\Google\Protobuf\Internal\RepeatedField $notes
     *           The occurrences requested
     *     @type string $next_page_token
     *           The next pagination token in the list response. It should be used as
     *           page_token for the following request. An empty value means no more result.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Devtools\Containeranalysis\V1Alpha1\Containeranalysis::initOnce();
        parent::__construct($data);
    }

    /**
     * The occurrences requested
     *
     * Generated from protobuf field <code>repeated .google.devtools.containeranalysis.v1alpha1.Note notes = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * The occurrences requested
     *
     * Generated from protobuf field <code>repeated .google.devtools.containeranalysis.v1alpha1.Note notes = 1;</code>
     * @param \Google\Devtools\Containeranalysis\V1alpha1\Note[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setNotes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Devtools\Containeranalysis\V1alpha1\Note::class);
        $this->notes = $arr;

        return $this;
    }

    /**
     * The next pagination token in the list response. It should be used as
     * page_token for the following request. An empty value means no more result.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * The next pagination token in the list response. It should be used as
     * page_token for the following request. An empty value means no more result.
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

}

