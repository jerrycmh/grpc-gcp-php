<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/genomics/v1/variants.proto

namespace Google\Genomics\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>google.genomics.v1.StreamVariantsResponse</code>
 */
class StreamVariantsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .google.genomics.v1.Variant variants = 1;</code>
     */
    private $variants;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Genomics\V1\Variant[]|\Google\Protobuf\Internal\RepeatedField $variants
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Genomics\V1\Variants::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .google.genomics.v1.Variant variants = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getVariants()
    {
        return $this->variants;
    }

    /**
     * Generated from protobuf field <code>repeated .google.genomics.v1.Variant variants = 1;</code>
     * @param \Google\Genomics\V1\Variant[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setVariants($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Genomics\V1\Variant::class);
        $this->variants = $arr;

        return $this;
    }

}

