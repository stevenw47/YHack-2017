<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/spanner/v1/type.proto

namespace Google\Cloud\Spanner\V1;

/**
 * `TypeCode` is used as part of [Type][google.spanner.v1.Type] to
 * indicate the type of a Cloud Spanner value.
 * Each legal value of a type can be encoded to or decoded from a JSON
 * value, using the encodings described below. All Cloud Spanner values can
 * be `null`, regardless of type; `null`s are always encoded as a JSON
 * `null`.
 *
 * Protobuf enum <code>Google\Spanner\V1\TypeCode</code>
 */
class TypeCode
{
    /**
     * Not specified.
     *
     * Generated from protobuf enum <code>TYPE_CODE_UNSPECIFIED = 0;</code>
     */
    const TYPE_CODE_UNSPECIFIED = 0;
    /**
     * Encoded as JSON `true` or `false`.
     *
     * Generated from protobuf enum <code>BOOL = 1;</code>
     */
    const BOOL = 1;
    /**
     * Encoded as `string`, in decimal format.
     *
     * Generated from protobuf enum <code>INT64 = 2;</code>
     */
    const INT64 = 2;
    /**
     * Encoded as `number`, or the strings `"NaN"`, `"Infinity"`, or
     * `"-Infinity"`.
     *
     * Generated from protobuf enum <code>FLOAT64 = 3;</code>
     */
    const FLOAT64 = 3;
    /**
     * Encoded as `string` in RFC 3339 timestamp format. The time zone
     * must be present, and must be `"Z"`.
     *
     * Generated from protobuf enum <code>TIMESTAMP = 4;</code>
     */
    const TIMESTAMP = 4;
    /**
     * Encoded as `string` in RFC 3339 date format.
     *
     * Generated from protobuf enum <code>DATE = 5;</code>
     */
    const DATE = 5;
    /**
     * Encoded as `string`.
     *
     * Generated from protobuf enum <code>STRING = 6;</code>
     */
    const STRING = 6;
    /**
     * Encoded as a base64-encoded `string`, as described in RFC 4648,
     * section 4.
     *
     * Generated from protobuf enum <code>BYTES = 7;</code>
     */
    const BYTES = 7;
    /**
     * Encoded as `list`, where the list elements are represented
     * according to [array_element_type][google.spanner.v1.Type.array_element_type].
     *
     * Generated from protobuf enum <code>ARRAY = 8;</code>
     */
    const PBARRAY = 8;
    /**
     * Encoded as `list`, where list element `i` is represented according
     * to [struct_type.fields[i]][google.spanner.v1.StructType.fields].
     *
     * Generated from protobuf enum <code>STRUCT = 9;</code>
     */
    const STRUCT = 9;
}

