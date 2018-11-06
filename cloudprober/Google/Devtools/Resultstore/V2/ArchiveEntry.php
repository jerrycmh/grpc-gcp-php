<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/resultstore/v2/file.proto

namespace Google\Devtools\Resultstore\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Information specific to an entry in an archive.
 *
 * Generated from protobuf message <code>google.devtools.resultstore.v2.ArchiveEntry</code>
 */
class ArchiveEntry extends \Google\Protobuf\Internal\Message
{
    /**
     * The relative path of the entry within the archive.
     *
     * Generated from protobuf field <code>string path = 1;</code>
     */
    private $path = '';
    /**
     * (Optional) The uncompressed length of the archive entry in bytes.  Allows
     * the entry size to be shown in the UI.  Omit if the length is not known.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value length = 2;</code>
     */
    private $length = null;
    /**
     * (Optional) The content-type (aka MIME-type) of the archive entry. (e.g.
     * text/plain, image/jpeg, text/html, etc). This is sent to the web browser
     * so it knows how to handle the entry.
     *
     * Generated from protobuf field <code>string content_type = 3;</code>
     */
    private $content_type = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $path
     *           The relative path of the entry within the archive.
     *     @type \Google\Protobuf\Int64Value $length
     *           (Optional) The uncompressed length of the archive entry in bytes.  Allows
     *           the entry size to be shown in the UI.  Omit if the length is not known.
     *     @type string $content_type
     *           (Optional) The content-type (aka MIME-type) of the archive entry. (e.g.
     *           text/plain, image/jpeg, text/html, etc). This is sent to the web browser
     *           so it knows how to handle the entry.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Devtools\Resultstore\V2\File::initOnce();
        parent::__construct($data);
    }

    /**
     * The relative path of the entry within the archive.
     *
     * Generated from protobuf field <code>string path = 1;</code>
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * The relative path of the entry within the archive.
     *
     * Generated from protobuf field <code>string path = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setPath($var)
    {
        GPBUtil::checkString($var, True);
        $this->path = $var;

        return $this;
    }

    /**
     * (Optional) The uncompressed length of the archive entry in bytes.  Allows
     * the entry size to be shown in the UI.  Omit if the length is not known.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value length = 2;</code>
     * @return \Google\Protobuf\Int64Value
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * (Optional) The uncompressed length of the archive entry in bytes.  Allows
     * the entry size to be shown in the UI.  Omit if the length is not known.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value length = 2;</code>
     * @param \Google\Protobuf\Int64Value $var
     * @return $this
     */
    public function setLength($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int64Value::class);
        $this->length = $var;

        return $this;
    }

    /**
     * (Optional) The content-type (aka MIME-type) of the archive entry. (e.g.
     * text/plain, image/jpeg, text/html, etc). This is sent to the web browser
     * so it knows how to handle the entry.
     *
     * Generated from protobuf field <code>string content_type = 3;</code>
     * @return string
     */
    public function getContentType()
    {
        return $this->content_type;
    }

    /**
     * (Optional) The content-type (aka MIME-type) of the archive entry. (e.g.
     * text/plain, image/jpeg, text/html, etc). This is sent to the web browser
     * so it knows how to handle the entry.
     *
     * Generated from protobuf field <code>string content_type = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setContentType($var)
    {
        GPBUtil::checkString($var, True);
        $this->content_type = $var;

        return $this;
    }

}

