<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/genomics/v1/variants.proto

namespace Google\Genomics\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The CreateVariantSet request
 *
 * Generated from protobuf message <code>google.genomics.v1.CreateVariantSetRequest</code>
 */
class CreateVariantSetRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The variant set to be created. Must have a valid `datasetId`.
     *
     * Generated from protobuf field <code>.google.genomics.v1.VariantSet variant_set = 1;</code>
     */
    private $variant_set = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Genomics\V1\VariantSet $variant_set
     *           Required. The variant set to be created. Must have a valid `datasetId`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Genomics\V1\Variants::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The variant set to be created. Must have a valid `datasetId`.
     *
     * Generated from protobuf field <code>.google.genomics.v1.VariantSet variant_set = 1;</code>
     * @return \Google\Genomics\V1\VariantSet
     */
    public function getVariantSet()
    {
        return $this->variant_set;
    }

    /**
     * Required. The variant set to be created. Must have a valid `datasetId`.
     *
     * Generated from protobuf field <code>.google.genomics.v1.VariantSet variant_set = 1;</code>
     * @param \Google\Genomics\V1\VariantSet $var
     * @return $this
     */
    public function setVariantSet($var)
    {
        GPBUtil::checkMessage($var, \Google\Genomics\V1\VariantSet::class);
        $this->variant_set = $var;

        return $this;
    }

}

