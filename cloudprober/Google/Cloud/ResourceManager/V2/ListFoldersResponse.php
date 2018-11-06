<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/resourcemanager/v2/folders.proto

namespace Google\Cloud\ResourceManager\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The ListFolders response message.
 *
 * Generated from protobuf message <code>google.cloud.resourcemanager.v2.ListFoldersResponse</code>
 */
class ListFoldersResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * A possibly paginated list of Folders that are direct descendants of
     * the specified parent resource.
     *
     * Generated from protobuf field <code>repeated .google.cloud.resourcemanager.v2.Folder folders = 1;</code>
     */
    private $folders;
    /**
     * A pagination token returned from a previous call to `ListFolders`
     * that indicates from where listing should continue.
     * This field is optional.
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
     *     @type \Google\Cloud\ResourceManager\V2\Folder[]|\Google\Protobuf\Internal\RepeatedField $folders
     *           A possibly paginated list of Folders that are direct descendants of
     *           the specified parent resource.
     *     @type string $next_page_token
     *           A pagination token returned from a previous call to `ListFolders`
     *           that indicates from where listing should continue.
     *           This field is optional.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Resourcemanager\V2\Folders::initOnce();
        parent::__construct($data);
    }

    /**
     * A possibly paginated list of Folders that are direct descendants of
     * the specified parent resource.
     *
     * Generated from protobuf field <code>repeated .google.cloud.resourcemanager.v2.Folder folders = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFolders()
    {
        return $this->folders;
    }

    /**
     * A possibly paginated list of Folders that are direct descendants of
     * the specified parent resource.
     *
     * Generated from protobuf field <code>repeated .google.cloud.resourcemanager.v2.Folder folders = 1;</code>
     * @param \Google\Cloud\ResourceManager\V2\Folder[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFolders($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\ResourceManager\V2\Folder::class);
        $this->folders = $arr;

        return $this;
    }

    /**
     * A pagination token returned from a previous call to `ListFolders`
     * that indicates from where listing should continue.
     * This field is optional.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * A pagination token returned from a previous call to `ListFolders`
     * that indicates from where listing should continue.
     * This field is optional.
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

