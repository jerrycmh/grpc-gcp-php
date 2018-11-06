<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/resultstore/v2/invocation.proto

namespace Google\Devtools\Resultstore\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Describes the workspace under which the tool was invoked, this includes
 * information that was fed into the command, the source code referenced, and
 * the tool itself.
 *
 * Generated from protobuf message <code>google.devtools.resultstore.v2.WorkspaceInfo</code>
 */
class WorkspaceInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Data about the workspace that might be useful for debugging.
     *
     * Generated from protobuf field <code>.google.devtools.resultstore.v2.WorkspaceContext workspace_context = 1;</code>
     */
    private $workspace_context = null;
    /**
     * Where the tool was invoked
     *
     * Generated from protobuf field <code>string hostname = 3;</code>
     */
    private $hostname = '';
    /**
     * The client's working directory where the build/test was run from.
     *
     * Generated from protobuf field <code>string working_directory = 4;</code>
     */
    private $working_directory = '';
    /**
     * Tools should set tool_tag to the name of the tool or use case.
     *
     * Generated from protobuf field <code>string tool_tag = 5;</code>
     */
    private $tool_tag = '';
    /**
     * The command lines invoked. The first command line is the one typed by the
     * user, then each one after that should be an expansion of the previous
     * command line.
     *
     * Generated from protobuf field <code>repeated .google.devtools.resultstore.v2.CommandLine command_lines = 7;</code>
     */
    private $command_lines;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Devtools\Resultstore\V2\WorkspaceContext $workspace_context
     *           Data about the workspace that might be useful for debugging.
     *     @type string $hostname
     *           Where the tool was invoked
     *     @type string $working_directory
     *           The client's working directory where the build/test was run from.
     *     @type string $tool_tag
     *           Tools should set tool_tag to the name of the tool or use case.
     *     @type \Google\Devtools\Resultstore\V2\CommandLine[]|\Google\Protobuf\Internal\RepeatedField $command_lines
     *           The command lines invoked. The first command line is the one typed by the
     *           user, then each one after that should be an expansion of the previous
     *           command line.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Devtools\Resultstore\V2\Invocation::initOnce();
        parent::__construct($data);
    }

    /**
     * Data about the workspace that might be useful for debugging.
     *
     * Generated from protobuf field <code>.google.devtools.resultstore.v2.WorkspaceContext workspace_context = 1;</code>
     * @return \Google\Devtools\Resultstore\V2\WorkspaceContext
     */
    public function getWorkspaceContext()
    {
        return $this->workspace_context;
    }

    /**
     * Data about the workspace that might be useful for debugging.
     *
     * Generated from protobuf field <code>.google.devtools.resultstore.v2.WorkspaceContext workspace_context = 1;</code>
     * @param \Google\Devtools\Resultstore\V2\WorkspaceContext $var
     * @return $this
     */
    public function setWorkspaceContext($var)
    {
        GPBUtil::checkMessage($var, \Google\Devtools\Resultstore\V2\WorkspaceContext::class);
        $this->workspace_context = $var;

        return $this;
    }

    /**
     * Where the tool was invoked
     *
     * Generated from protobuf field <code>string hostname = 3;</code>
     * @return string
     */
    public function getHostname()
    {
        return $this->hostname;
    }

    /**
     * Where the tool was invoked
     *
     * Generated from protobuf field <code>string hostname = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setHostname($var)
    {
        GPBUtil::checkString($var, True);
        $this->hostname = $var;

        return $this;
    }

    /**
     * The client's working directory where the build/test was run from.
     *
     * Generated from protobuf field <code>string working_directory = 4;</code>
     * @return string
     */
    public function getWorkingDirectory()
    {
        return $this->working_directory;
    }

    /**
     * The client's working directory where the build/test was run from.
     *
     * Generated from protobuf field <code>string working_directory = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setWorkingDirectory($var)
    {
        GPBUtil::checkString($var, True);
        $this->working_directory = $var;

        return $this;
    }

    /**
     * Tools should set tool_tag to the name of the tool or use case.
     *
     * Generated from protobuf field <code>string tool_tag = 5;</code>
     * @return string
     */
    public function getToolTag()
    {
        return $this->tool_tag;
    }

    /**
     * Tools should set tool_tag to the name of the tool or use case.
     *
     * Generated from protobuf field <code>string tool_tag = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setToolTag($var)
    {
        GPBUtil::checkString($var, True);
        $this->tool_tag = $var;

        return $this;
    }

    /**
     * The command lines invoked. The first command line is the one typed by the
     * user, then each one after that should be an expansion of the previous
     * command line.
     *
     * Generated from protobuf field <code>repeated .google.devtools.resultstore.v2.CommandLine command_lines = 7;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCommandLines()
    {
        return $this->command_lines;
    }

    /**
     * The command lines invoked. The first command line is the one typed by the
     * user, then each one after that should be an expansion of the previous
     * command line.
     *
     * Generated from protobuf field <code>repeated .google.devtools.resultstore.v2.CommandLine command_lines = 7;</code>
     * @param \Google\Devtools\Resultstore\V2\CommandLine[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCommandLines($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Devtools\Resultstore\V2\CommandLine::class);
        $this->command_lines = $arr;

        return $this;
    }

}

