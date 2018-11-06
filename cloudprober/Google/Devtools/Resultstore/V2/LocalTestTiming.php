<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/resultstore/v2/action.proto

namespace Google\Devtools\Resultstore\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Timing data for tests executed locally on the machine running the build.
 *
 * Generated from protobuf message <code>google.devtools.resultstore.v2.LocalTestTiming</code>
 */
class LocalTestTiming extends \Google\Protobuf\Internal\Message
{
    /**
     * Time taken by the test process, typically surrounded by a small wrapper
     * script.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration test_process_duration = 1;</code>
     */
    private $test_process_duration = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Duration $test_process_duration
     *           Time taken by the test process, typically surrounded by a small wrapper
     *           script.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Devtools\Resultstore\V2\Action::initOnce();
        parent::__construct($data);
    }

    /**
     * Time taken by the test process, typically surrounded by a small wrapper
     * script.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration test_process_duration = 1;</code>
     * @return \Google\Protobuf\Duration
     */
    public function getTestProcessDuration()
    {
        return $this->test_process_duration;
    }

    /**
     * Time taken by the test process, typically surrounded by a small wrapper
     * script.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration test_process_duration = 1;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setTestProcessDuration($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->test_process_duration = $var;

        return $this;
    }

}

