<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/containeranalysis/v1beta1/grafeas/grafeas.proto

namespace Grafeas\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * An entity that can have metadata. For example, a Docker image.
 *
 * Generated from protobuf message <code>grafeas.v1beta1.Resource</code>
 */
class Resource extends \Google\Protobuf\Internal\Message
{
    /**
     * The name of the resource. For example, the name of a Docker image -
     * "Debian".
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * The unique URI of the resource. For example,
     * `https://gcr.io/project/image&#64;sha256:foo` for a Docker image.
     *
     * Generated from protobuf field <code>string uri = 2;</code>
     */
    private $uri = '';
    /**
     * The hash of the resource content. For example, the Docker digest.
     *
     * Generated from protobuf field <code>.grafeas.v1beta1.provenance.Hash content_hash = 3;</code>
     */
    private $content_hash = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           The name of the resource. For example, the name of a Docker image -
     *           "Debian".
     *     @type string $uri
     *           The unique URI of the resource. For example,
     *           `https://gcr.io/project/image&#64;sha256:foo` for a Docker image.
     *     @type \Grafeas\V1beta1\Provenance\Hash $content_hash
     *           The hash of the resource content. For example, the Docker digest.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Devtools\Containeranalysis\V1Beta1\Grafeas\Grafeas::initOnce();
        parent::__construct($data);
    }

    /**
     * The name of the resource. For example, the name of a Docker image -
     * "Debian".
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The name of the resource. For example, the name of a Docker image -
     * "Debian".
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
     * The unique URI of the resource. For example,
     * `https://gcr.io/project/image&#64;sha256:foo` for a Docker image.
     *
     * Generated from protobuf field <code>string uri = 2;</code>
     * @return string
     */
    public function getUri()
    {
        return $this->uri;
    }

    /**
     * The unique URI of the resource. For example,
     * `https://gcr.io/project/image&#64;sha256:foo` for a Docker image.
     *
     * Generated from protobuf field <code>string uri = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->uri = $var;

        return $this;
    }

    /**
     * The hash of the resource content. For example, the Docker digest.
     *
     * Generated from protobuf field <code>.grafeas.v1beta1.provenance.Hash content_hash = 3;</code>
     * @return \Grafeas\V1beta1\Provenance\Hash
     */
    public function getContentHash()
    {
        return $this->content_hash;
    }

    /**
     * The hash of the resource content. For example, the Docker digest.
     *
     * Generated from protobuf field <code>.grafeas.v1beta1.provenance.Hash content_hash = 3;</code>
     * @param \Grafeas\V1beta1\Provenance\Hash $var
     * @return $this
     */
    public function setContentHash($var)
    {
        GPBUtil::checkMessage($var, \Grafeas\V1beta1\Provenance\Hash::class);
        $this->content_hash = $var;

        return $this;
    }

}

