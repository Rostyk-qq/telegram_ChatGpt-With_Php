<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/speech/v2/cloud_speech.proto

namespace Google\Cloud\Speech\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for the
 * [UpdateRecognizer][google.cloud.speech.v2.Speech.UpdateRecognizer] method.
 *
 * Generated from protobuf message <code>google.cloud.speech.v2.UpdateRecognizerRequest</code>
 */
class UpdateRecognizerRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The Recognizer to update.
     * The Recognizer's `name` field is used to identify the Recognizer to update.
     * Format: `projects/{project}/locations/{location}/recognizers/{recognizer}`.
     *
     * Generated from protobuf field <code>.google.cloud.speech.v2.Recognizer recognizer = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $recognizer = null;
    /**
     * The list of fields to update. If empty, all non-default valued fields are
     * considered for update. Use `*` to update the entire Recognizer resource.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
     */
    private $update_mask = null;
    /**
     * If set, validate the request and preview the updated Recognizer, but do not
     * actually update it.
     *
     * Generated from protobuf field <code>bool validate_only = 4;</code>
     */
    private $validate_only = false;

    /**
     * @param \Google\Cloud\Speech\V2\Recognizer $recognizer Required. The Recognizer to update.
     *
     *                                                       The Recognizer's `name` field is used to identify the Recognizer to update.
     *                                                       Format: `projects/{project}/locations/{location}/recognizers/{recognizer}`.
     * @param \Google\Protobuf\FieldMask         $updateMask The list of fields to update. If empty, all non-default valued fields are
     *                                                       considered for update. Use `*` to update the entire Recognizer resource.
     *
     * @return \Google\Cloud\Speech\V2\UpdateRecognizerRequest
     *
     * @experimental
     */
    public static function build(\Google\Cloud\Speech\V2\Recognizer $recognizer, \Google\Protobuf\FieldMask $updateMask): self
    {
        return (new self())
            ->setRecognizer($recognizer)
            ->setUpdateMask($updateMask);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Speech\V2\Recognizer $recognizer
     *           Required. The Recognizer to update.
     *           The Recognizer's `name` field is used to identify the Recognizer to update.
     *           Format: `projects/{project}/locations/{location}/recognizers/{recognizer}`.
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           The list of fields to update. If empty, all non-default valued fields are
     *           considered for update. Use `*` to update the entire Recognizer resource.
     *     @type bool $validate_only
     *           If set, validate the request and preview the updated Recognizer, but do not
     *           actually update it.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Speech\V2\CloudSpeech::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The Recognizer to update.
     * The Recognizer's `name` field is used to identify the Recognizer to update.
     * Format: `projects/{project}/locations/{location}/recognizers/{recognizer}`.
     *
     * Generated from protobuf field <code>.google.cloud.speech.v2.Recognizer recognizer = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Speech\V2\Recognizer|null
     */
    public function getRecognizer()
    {
        return $this->recognizer;
    }

    public function hasRecognizer()
    {
        return isset($this->recognizer);
    }

    public function clearRecognizer()
    {
        unset($this->recognizer);
    }

    /**
     * Required. The Recognizer to update.
     * The Recognizer's `name` field is used to identify the Recognizer to update.
     * Format: `projects/{project}/locations/{location}/recognizers/{recognizer}`.
     *
     * Generated from protobuf field <code>.google.cloud.speech.v2.Recognizer recognizer = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Speech\V2\Recognizer $var
     * @return $this
     */
    public function setRecognizer($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Speech\V2\Recognizer::class);
        $this->recognizer = $var;

        return $this;
    }

    /**
     * The list of fields to update. If empty, all non-default valued fields are
     * considered for update. Use `*` to update the entire Recognizer resource.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
     * @return \Google\Protobuf\FieldMask|null
     */
    public function getUpdateMask()
    {
        return $this->update_mask;
    }

    public function hasUpdateMask()
    {
        return isset($this->update_mask);
    }

    public function clearUpdateMask()
    {
        unset($this->update_mask);
    }

    /**
     * The list of fields to update. If empty, all non-default valued fields are
     * considered for update. Use `*` to update the entire Recognizer resource.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setUpdateMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->update_mask = $var;

        return $this;
    }

    /**
     * If set, validate the request and preview the updated Recognizer, but do not
     * actually update it.
     *
     * Generated from protobuf field <code>bool validate_only = 4;</code>
     * @return bool
     */
    public function getValidateOnly()
    {
        return $this->validate_only;
    }

    /**
     * If set, validate the request and preview the updated Recognizer, but do not
     * actually update it.
     *
     * Generated from protobuf field <code>bool validate_only = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setValidateOnly($var)
    {
        GPBUtil::checkBool($var);
        $this->validate_only = $var;

        return $this;
    }

}

