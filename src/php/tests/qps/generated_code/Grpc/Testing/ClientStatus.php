<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: src/proto/grpc/testing/control.proto

namespace Grpc\Testing;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>grpc.testing.ClientStatus</code>
 */
class ClientStatus extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.grpc.testing.ClientStats stats = 1;</code>
     */
    protected $stats = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Grpc\Testing\ClientStats $stats
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Src\Proto\Grpc\Testing\Control::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.grpc.testing.ClientStats stats = 1;</code>
     * @return \Grpc\Testing\ClientStats
     */
    public function getStats()
    {
        return $this->stats;
    }

    /**
     * Generated from protobuf field <code>.grpc.testing.ClientStats stats = 1;</code>
     * @param \Grpc\Testing\ClientStats $var
     * @return $this
     */
    public function setStats($var)
    {
        GPBUtil::checkMessage($var, \Grpc\Testing\ClientStats::class);
        $this->stats = $var;

        return $this;
    }

}

