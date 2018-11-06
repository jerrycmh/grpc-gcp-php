<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/resultstore/v2/coverage_summary.proto

namespace Google\Devtools\Resultstore\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Summary of line coverage
 *
 * Generated from protobuf message <code>google.devtools.resultstore.v2.LineCoverageSummary</code>
 */
class LineCoverageSummary extends \Google\Protobuf\Internal\Message
{
    /**
     * Number of lines instrumented for coverage.
     *
     * Generated from protobuf field <code>int32 instrumented_line_count = 1;</code>
     */
    private $instrumented_line_count = 0;
    /**
     * Number of instrumented lines that were executed by the test.
     *
     * Generated from protobuf field <code>int32 executed_line_count = 2;</code>
     */
    private $executed_line_count = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $instrumented_line_count
     *           Number of lines instrumented for coverage.
     *     @type int $executed_line_count
     *           Number of instrumented lines that were executed by the test.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Devtools\Resultstore\V2\CoverageSummary::initOnce();
        parent::__construct($data);
    }

    /**
     * Number of lines instrumented for coverage.
     *
     * Generated from protobuf field <code>int32 instrumented_line_count = 1;</code>
     * @return int
     */
    public function getInstrumentedLineCount()
    {
        return $this->instrumented_line_count;
    }

    /**
     * Number of lines instrumented for coverage.
     *
     * Generated from protobuf field <code>int32 instrumented_line_count = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setInstrumentedLineCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->instrumented_line_count = $var;

        return $this;
    }

    /**
     * Number of instrumented lines that were executed by the test.
     *
     * Generated from protobuf field <code>int32 executed_line_count = 2;</code>
     * @return int
     */
    public function getExecutedLineCount()
    {
        return $this->executed_line_count;
    }

    /**
     * Number of instrumented lines that were executed by the test.
     *
     * Generated from protobuf field <code>int32 executed_line_count = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setExecutedLineCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->executed_line_count = $var;

        return $this;
    }

}

