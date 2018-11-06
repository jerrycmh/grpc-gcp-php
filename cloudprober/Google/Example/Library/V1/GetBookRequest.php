<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/example/library/v1/library.proto

namespace Google\Example\Library\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for LibraryService.GetBook.
 *
 * Generated from protobuf message <code>google.example.library.v1.GetBookRequest</code>
 */
class GetBookRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The name of the book to retrieve.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           The name of the book to retrieve.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Example\Library\V1\Library::initOnce();
        parent::__construct($data);
    }

    /**
     * The name of the book to retrieve.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The name of the book to retrieve.
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

}

