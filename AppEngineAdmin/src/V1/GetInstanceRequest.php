<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/appengine/v1/appengine.proto

namespace Google\Cloud\AppEngine\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for `Instances.GetInstance`.
 *
 * Generated from protobuf message <code>google.appengine.v1.GetInstanceRequest</code>
 */
class GetInstanceRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Name of the resource requested. Example:
     * `apps/myapp/services/default/versions/v1/instances/instance-1`.
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
     *           Name of the resource requested. Example:
     *           `apps/myapp/services/default/versions/v1/instances/instance-1`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Appengine\V1\Appengine::initOnce();
        parent::__construct($data);
    }

    /**
     * Name of the resource requested. Example:
     * `apps/myapp/services/default/versions/v1/instances/instance-1`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Name of the resource requested. Example:
     * `apps/myapp/services/default/versions/v1/instances/instance-1`.
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

