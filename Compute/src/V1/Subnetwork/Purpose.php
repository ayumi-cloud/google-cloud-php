<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1\Subnetwork;

use UnexpectedValueException;

/**
 * The purpose of the resource. This field can be either PRIVATE_RFC_1918 or INTERNAL_HTTPS_LOAD_BALANCER. A subnetwork with purpose set to INTERNAL_HTTPS_LOAD_BALANCER is a user-created subnetwork that is reserved for Internal HTTP(S) Load Balancing. If unspecified, the purpose defaults to PRIVATE_RFC_1918. The enableFlowLogs field isn't supported with the purpose field set to INTERNAL_HTTPS_LOAD_BALANCER.
 *
 * Protobuf type <code>google.cloud.compute.v1.Subnetwork.Purpose</code>
 */
class Purpose
{
    /**
     * A value indicating that the enum field is not set.
     *
     * Generated from protobuf enum <code>UNDEFINED_PURPOSE = 0;</code>
     */
    const UNDEFINED_PURPOSE = 0;
    /**
     * Generated from protobuf enum <code>INTERNAL_HTTPS_LOAD_BALANCER = 248748889;</code>
     */
    const INTERNAL_HTTPS_LOAD_BALANCER = 248748889;
    /**
     * Generated from protobuf enum <code>PRIVATE = 135049571;</code>
     */
    const PBPRIVATE = 135049571;
    /**
     * Generated from protobuf enum <code>PRIVATE_RFC_1918 = 254902107;</code>
     */
    const PRIVATE_RFC_1918 = 254902107;

    private static $valueToName = [
        self::UNDEFINED_PURPOSE => 'UNDEFINED_PURPOSE',
        self::INTERNAL_HTTPS_LOAD_BALANCER => 'INTERNAL_HTTPS_LOAD_BALANCER',
        self::PBPRIVATE => 'PBPRIVATE',
        self::PRIVATE_RFC_1918 => 'PRIVATE_RFC_1918',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}


