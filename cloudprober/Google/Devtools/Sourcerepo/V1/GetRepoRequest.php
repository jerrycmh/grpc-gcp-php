<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/sourcerepo/v1/sourcerepo.proto

namespace Google\Devtools\Sourcerepo\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request for GetRepo.
 *
 * Generated from protobuf message <code>google.devtools.sourcerepo.v1.GetRepoRequest</code>
 */
class GetRepoRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The name of the requested repository. Values are of the form
     * `projects/<project>/repos/<repo>`.
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
     *           The name of the requested repository. Values are of the form
     *           `projects/<project>/repos/<repo>`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Devtools\Sourcerepo\V1\Sourcerepo::initOnce();
        parent::__construct($data);
    }

    /**
     * The name of the requested repository. Values are of the form
     * `projects/<project>/repos/<repo>`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The name of the requested repository. Values are of the form
     * `projects/<project>/repos/<repo>`.
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

