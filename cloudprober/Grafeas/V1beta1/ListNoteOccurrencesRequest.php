<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/containeranalysis/v1beta1/grafeas/grafeas.proto

namespace Grafeas\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request to list occurrences for a note.
 *
 * Generated from protobuf message <code>grafeas.v1beta1.ListNoteOccurrencesRequest</code>
 */
class ListNoteOccurrencesRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The name of the note to list occurrences for in the form of
     * `projects/[PROVIDER_ID]/notes/[NOTE_ID]`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * The filter expression.
     *
     * Generated from protobuf field <code>string filter = 2;</code>
     */
    private $filter = '';
    /**
     * Number of occurrences to return in the list.
     *
     * Generated from protobuf field <code>int32 page_size = 3;</code>
     */
    private $page_size = 0;
    /**
     * Token to provide to skip to a particular spot in the list.
     *
     * Generated from protobuf field <code>string page_token = 4;</code>
     */
    private $page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           The name of the note to list occurrences for in the form of
     *           `projects/[PROVIDER_ID]/notes/[NOTE_ID]`.
     *     @type string $filter
     *           The filter expression.
     *     @type int $page_size
     *           Number of occurrences to return in the list.
     *     @type string $page_token
     *           Token to provide to skip to a particular spot in the list.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Devtools\Containeranalysis\V1Beta1\Grafeas\Grafeas::initOnce();
        parent::__construct($data);
    }

    /**
     * The name of the note to list occurrences for in the form of
     * `projects/[PROVIDER_ID]/notes/[NOTE_ID]`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The name of the note to list occurrences for in the form of
     * `projects/[PROVIDER_ID]/notes/[NOTE_ID]`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * The filter expression.
     *
     * Generated from protobuf field <code>string filter = 2;</code>
     * @return string
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * The filter expression.
     *
     * Generated from protobuf field <code>string filter = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setFilter($var)
    {
        GPBUtil::checkString($var, True);
        $this->filter = $var;

        return $this;
    }

    /**
     * Number of occurrences to return in the list.
     *
     * Generated from protobuf field <code>int32 page_size = 3;</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * Number of occurrences to return in the list.
     *
     * Generated from protobuf field <code>int32 page_size = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;

        return $this;
    }

    /**
     * Token to provide to skip to a particular spot in the list.
     *
     * Generated from protobuf field <code>string page_token = 4;</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * Token to provide to skip to a particular spot in the list.
     *
     * Generated from protobuf field <code>string page_token = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;

        return $this;
    }

}

