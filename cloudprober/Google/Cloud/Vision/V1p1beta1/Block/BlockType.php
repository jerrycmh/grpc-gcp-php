<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/vision/v1p1beta1/text_annotation.proto

namespace Google\Cloud\Vision\V1p1beta1\Block;

/**
 * Type of a block (text, image etc) as identified by OCR.
 *
 * Protobuf type <code>google.cloud.vision.v1p1beta1.Block.BlockType</code>
 */
class BlockType
{
    /**
     * Unknown block type.
     *
     * Generated from protobuf enum <code>UNKNOWN = 0;</code>
     */
    const UNKNOWN = 0;
    /**
     * Regular text block.
     *
     * Generated from protobuf enum <code>TEXT = 1;</code>
     */
    const TEXT = 1;
    /**
     * Table block.
     *
     * Generated from protobuf enum <code>TABLE = 2;</code>
     */
    const TABLE = 2;
    /**
     * Image block.
     *
     * Generated from protobuf enum <code>PICTURE = 3;</code>
     */
    const PICTURE = 3;
    /**
     * Horizontal/vertical line box.
     *
     * Generated from protobuf enum <code>RULER = 4;</code>
     */
    const RULER = 4;
    /**
     * Barcode block.
     *
     * Generated from protobuf enum <code>BARCODE = 5;</code>
     */
    const BARCODE = 5;
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(BlockType::class, \Google\Cloud\Vision\V1p1beta1\Block_BlockType::class);

