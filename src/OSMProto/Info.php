<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/osmformat.proto

namespace OsmProto;

use Exception;
use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\Internal\Message;
use OsmProto\GPBMetadata\Osmformat;

/**
 * Optional metadata that may be included into each primitive.
 *
 * Generated from protobuf message <code>OSMReader.Info</code>
 */
class Info extends Message
{
    /**
     * Generated from protobuf field <code>int32 version = 1;</code>
     */
    private $version = -1;
    /**
     * Generated from protobuf field <code>int64 timestamp = 2;</code>
     */
    private $timestamp = 0;
    /**
     * Generated from protobuf field <code>int64 changeset = 3;</code>
     */
    private $changeset = 0;
    /**
     * Generated from protobuf field <code>int32 uid = 4;</code>
     */
    private $uid = 0;
    /**
     * String IDs
     *
     * Generated from protobuf field <code>uint32 user_sid = 5;</code>
     */
    private $user_sid = 0;
    /**
     * The visible flag is used to store history information. It indicates that
     * the current object version has been created by a delete operation on the
     * OSM API.
     * When a writer sets this flag, it MUST add a required_features tag with
     * value "HistoricalInformation" to the HeaderBlock.
     * If this flag is not available for some object it MUST be assumed to be
     * true if the file has the required_features tag "HistoricalInformation"
     * set.
     *
     * Generated from protobuf field <code>bool visible = 6;</code>
     */
    private $visible = true;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     * @type int $version
     * @type int|string $timestamp
     * @type int|string $changeset
     * @type int $uid
     * @type int $user_sid
     *           String IDs
     * @type bool $visible
     *           The visible flag is used to store history information. It indicates that
     *           the current object version has been created by a delete operation on the
     *           OSM API.
     *           When a writer sets this flag, it MUST add a required_features tag with
     *           value "HistoricalInformation" to the HeaderBlock.
     *           If this flag is not available for some object it MUST be assumed to be
     *           true if the file has the required_features tag "HistoricalInformation"
     *           set.
     * }
     */
    public function __construct($data = NULL)
    {
        Osmformat::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int32 version = 1;</code>
     * @return int
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Generated from protobuf field <code>int32 version = 1;</code>
     * @param int $var
     * @return $this
     * @throws Exception
     */
    public function setVersion($var)
    {
        GPBUtil::checkInt32($var);
        $this->version = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 timestamp = 2;</code>
     * @return int|string
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * Generated from protobuf field <code>int64 timestamp = 2;</code>
     * @param int|string $var
     * @return $this
     * @throws Exception
     */
    public function setTimestamp($var)
    {
        GPBUtil::checkInt64($var);
        $this->timestamp = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 changeset = 3;</code>
     * @return int|string
     */
    public function getChangeset()
    {
        return $this->changeset;
    }

    /**
     * Generated from protobuf field <code>int64 changeset = 3;</code>
     * @param int|string $var
     * @return $this
     * @throws Exception
     */
    public function setChangeset($var)
    {
        GPBUtil::checkInt64($var);
        $this->changeset = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 uid = 4;</code>
     * @return int
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * Generated from protobuf field <code>int32 uid = 4;</code>
     * @param int $var
     * @return $this
     * @throws Exception
     */
    public function setUid($var)
    {
        GPBUtil::checkInt32($var);
        $this->uid = $var;

        return $this;
    }

    /**
     * String IDs
     *
     * Generated from protobuf field <code>uint32 user_sid = 5;</code>
     * @return int
     */
    public function getUserSid()
    {
        return $this->user_sid;
    }

    /**
     * String IDs
     *
     * Generated from protobuf field <code>uint32 user_sid = 5;</code>
     * @param int $var
     * @return $this
     * @throws Exception
     */
    public function setUserSid($var)
    {
        GPBUtil::checkUint32($var);
        $this->user_sid = $var;

        return $this;
    }

    /**
     * The visible flag is used to store history information. It indicates that
     * the current object version has been created by a delete operation on the
     * OSM API.
     * When a writer sets this flag, it MUST add a required_features tag with
     * value "HistoricalInformation" to the HeaderBlock.
     * If this flag is not available for some object it MUST be assumed to be
     * true if the file has the required_features tag "HistoricalInformation"
     * set.
     *
     * Generated from protobuf field <code>bool visible = 6;</code>
     * @return bool
     */
    public function getVisible()
    {
        return $this->visible;
    }

    /**
     * The visible flag is used to store history information. It indicates that
     * the current object version has been created by a delete operation on the
     * OSM API.
     * When a writer sets this flag, it MUST add a required_features tag with
     * value "HistoricalInformation" to the HeaderBlock.
     * If this flag is not available for some object it MUST be assumed to be
     * true if the file has the required_features tag "HistoricalInformation"
     * set.
     *
     * Generated from protobuf field <code>bool visible = 6;</code>
     * @param bool $var
     * @return $this
     * @throws Exception
     */
    public function setVisible($var)
    {
        GPBUtil::checkBool($var);
        $this->visible = $var;

        return $this;
    }

}

