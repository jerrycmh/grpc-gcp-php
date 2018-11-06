<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/containeranalysis/v1alpha1/containeranalysis.proto

namespace Google\Devtools\Containeranalysis\V1alpha1\Deployable;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The period during which some deployable was active in a runtime.
 *
 * Generated from protobuf message <code>google.devtools.containeranalysis.v1alpha1.Deployable.Deployment</code>
 */
class Deployment extends \Google\Protobuf\Internal\Message
{
    /**
     * Identity of the user that triggered this deployment.
     *
     * Generated from protobuf field <code>string user_email = 1;</code>
     */
    private $user_email = '';
    /**
     * Beginning of the lifetime of this deployment.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp deploy_time = 2;</code>
     */
    private $deploy_time = null;
    /**
     * End of the lifetime of this deployment.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp undeploy_time = 3;</code>
     */
    private $undeploy_time = null;
    /**
     * Configuration used to create this deployment.
     *
     * Generated from protobuf field <code>string config = 8;</code>
     */
    private $config = '';
    /**
     * Address of the runtime element hosting this deployment.
     *
     * Generated from protobuf field <code>string address = 5;</code>
     */
    private $address = '';
    /**
     * Output only. Resource URI for the artifact being deployed taken from the
     * deployable field with the same name.
     *
     * Generated from protobuf field <code>repeated string resource_uri = 6;</code>
     */
    private $resource_uri;
    /**
     * Platform hosting this deployment.
     *
     * Generated from protobuf field <code>.google.devtools.containeranalysis.v1alpha1.Deployable.Deployment.Platform platform = 7;</code>
     */
    private $platform = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $user_email
     *           Identity of the user that triggered this deployment.
     *     @type \Google\Protobuf\Timestamp $deploy_time
     *           Beginning of the lifetime of this deployment.
     *     @type \Google\Protobuf\Timestamp $undeploy_time
     *           End of the lifetime of this deployment.
     *     @type string $config
     *           Configuration used to create this deployment.
     *     @type string $address
     *           Address of the runtime element hosting this deployment.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $resource_uri
     *           Output only. Resource URI for the artifact being deployed taken from the
     *           deployable field with the same name.
     *     @type int $platform
     *           Platform hosting this deployment.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Devtools\Containeranalysis\V1Alpha1\Containeranalysis::initOnce();
        parent::__construct($data);
    }

    /**
     * Identity of the user that triggered this deployment.
     *
     * Generated from protobuf field <code>string user_email = 1;</code>
     * @return string
     */
    public function getUserEmail()
    {
        return $this->user_email;
    }

    /**
     * Identity of the user that triggered this deployment.
     *
     * Generated from protobuf field <code>string user_email = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setUserEmail($var)
    {
        GPBUtil::checkString($var, True);
        $this->user_email = $var;

        return $this;
    }

    /**
     * Beginning of the lifetime of this deployment.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp deploy_time = 2;</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getDeployTime()
    {
        return $this->deploy_time;
    }

    /**
     * Beginning of the lifetime of this deployment.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp deploy_time = 2;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setDeployTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->deploy_time = $var;

        return $this;
    }

    /**
     * End of the lifetime of this deployment.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp undeploy_time = 3;</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getUndeployTime()
    {
        return $this->undeploy_time;
    }

    /**
     * End of the lifetime of this deployment.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp undeploy_time = 3;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setUndeployTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->undeploy_time = $var;

        return $this;
    }

    /**
     * Configuration used to create this deployment.
     *
     * Generated from protobuf field <code>string config = 8;</code>
     * @return string
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Configuration used to create this deployment.
     *
     * Generated from protobuf field <code>string config = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setConfig($var)
    {
        GPBUtil::checkString($var, True);
        $this->config = $var;

        return $this;
    }

    /**
     * Address of the runtime element hosting this deployment.
     *
     * Generated from protobuf field <code>string address = 5;</code>
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Address of the runtime element hosting this deployment.
     *
     * Generated from protobuf field <code>string address = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setAddress($var)
    {
        GPBUtil::checkString($var, True);
        $this->address = $var;

        return $this;
    }

    /**
     * Output only. Resource URI for the artifact being deployed taken from the
     * deployable field with the same name.
     *
     * Generated from protobuf field <code>repeated string resource_uri = 6;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getResourceUri()
    {
        return $this->resource_uri;
    }

    /**
     * Output only. Resource URI for the artifact being deployed taken from the
     * deployable field with the same name.
     *
     * Generated from protobuf field <code>repeated string resource_uri = 6;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setResourceUri($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->resource_uri = $arr;

        return $this;
    }

    /**
     * Platform hosting this deployment.
     *
     * Generated from protobuf field <code>.google.devtools.containeranalysis.v1alpha1.Deployable.Deployment.Platform platform = 7;</code>
     * @return int
     */
    public function getPlatform()
    {
        return $this->platform;
    }

    /**
     * Platform hosting this deployment.
     *
     * Generated from protobuf field <code>.google.devtools.containeranalysis.v1alpha1.Deployable.Deployment.Platform platform = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setPlatform($var)
    {
        GPBUtil::checkEnum($var, \Google\Devtools\Containeranalysis\V1alpha1\Deployable_Deployment_Platform::class);
        $this->platform = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Deployment::class, \Google\Devtools\Containeranalysis\V1alpha1\Deployable_Deployment::class);

