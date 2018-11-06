<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/servicecontrol/v1/quota_controller.proto

namespace Google\Api\Servicecontrol\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for the AllocateQuota method.
 *
 * Generated from protobuf message <code>google.api.servicecontrol.v1.AllocateQuotaRequest</code>
 */
class AllocateQuotaRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Name of the service as specified in the service configuration. For example,
     * `"pubsub.googleapis.com"`.
     * See [google.api.Service][google.api.Service] for the definition of a service name.
     *
     * Generated from protobuf field <code>string service_name = 1;</code>
     */
    private $service_name = '';
    /**
     * Operation that describes the quota allocation.
     *
     * Generated from protobuf field <code>.google.api.servicecontrol.v1.QuotaOperation allocate_operation = 2;</code>
     */
    private $allocate_operation = null;
    /**
     * Specifies which version of service configuration should be used to process
     * the request. If unspecified or no matching version can be found, the latest
     * one will be used.
     *
     * Generated from protobuf field <code>string service_config_id = 4;</code>
     */
    private $service_config_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $service_name
     *           Name of the service as specified in the service configuration. For example,
     *           `"pubsub.googleapis.com"`.
     *           See [google.api.Service][google.api.Service] for the definition of a service name.
     *     @type \Google\Api\Servicecontrol\V1\QuotaOperation $allocate_operation
     *           Operation that describes the quota allocation.
     *     @type string $service_config_id
     *           Specifies which version of service configuration should be used to process
     *           the request. If unspecified or no matching version can be found, the latest
     *           one will be used.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Api\Servicecontrol\V1\QuotaController::initOnce();
        parent::__construct($data);
    }

    /**
     * Name of the service as specified in the service configuration. For example,
     * `"pubsub.googleapis.com"`.
     * See [google.api.Service][google.api.Service] for the definition of a service name.
     *
     * Generated from protobuf field <code>string service_name = 1;</code>
     * @return string
     */
    public function getServiceName()
    {
        return $this->service_name;
    }

    /**
     * Name of the service as specified in the service configuration. For example,
     * `"pubsub.googleapis.com"`.
     * See [google.api.Service][google.api.Service] for the definition of a service name.
     *
     * Generated from protobuf field <code>string service_name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setServiceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->service_name = $var;

        return $this;
    }

    /**
     * Operation that describes the quota allocation.
     *
     * Generated from protobuf field <code>.google.api.servicecontrol.v1.QuotaOperation allocate_operation = 2;</code>
     * @return \Google\Api\Servicecontrol\V1\QuotaOperation
     */
    public function getAllocateOperation()
    {
        return $this->allocate_operation;
    }

    /**
     * Operation that describes the quota allocation.
     *
     * Generated from protobuf field <code>.google.api.servicecontrol.v1.QuotaOperation allocate_operation = 2;</code>
     * @param \Google\Api\Servicecontrol\V1\QuotaOperation $var
     * @return $this
     */
    public function setAllocateOperation($var)
    {
        GPBUtil::checkMessage($var, \Google\Api\Servicecontrol\V1\QuotaOperation::class);
        $this->allocate_operation = $var;

        return $this;
    }

    /**
     * Specifies which version of service configuration should be used to process
     * the request. If unspecified or no matching version can be found, the latest
     * one will be used.
     *
     * Generated from protobuf field <code>string service_config_id = 4;</code>
     * @return string
     */
    public function getServiceConfigId()
    {
        return $this->service_config_id;
    }

    /**
     * Specifies which version of service configuration should be used to process
     * the request. If unspecified or no matching version can be found, the latest
     * one will be used.
     *
     * Generated from protobuf field <code>string service_config_id = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setServiceConfigId($var)
    {
        GPBUtil::checkString($var, True);
        $this->service_config_id = $var;

        return $this;
    }

}

