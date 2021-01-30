<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/channel/v1/offers.proto

namespace Google\Cloud\Channel\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents an offer made to resellers for purchase.
 * An offer is associated with a [Sku][google.cloud.channel.v1.Sku], has a plan for payment, a price, and
 * defines the constraints for buying.
 *
 * Generated from protobuf message <code>google.cloud.channel.v1.Offer</code>
 */
class Offer extends \Google\Protobuf\Internal\Message
{
    /**
     * Resource Name of the Offer.
     * Format: accounts/{account_id}/offers/{offer_id}
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * Marketing information for the Offer.
     *
     * Generated from protobuf field <code>.google.cloud.channel.v1.MarketingInfo marketing_info = 2;</code>
     */
    private $marketing_info = null;
    /**
     * SKU the offer is associated with.
     *
     * Generated from protobuf field <code>.google.cloud.channel.v1.Sku sku = 3;</code>
     */
    private $sku = null;
    /**
     * Describes the payment plan for the Offer.
     *
     * Generated from protobuf field <code>.google.cloud.channel.v1.Plan plan = 4;</code>
     */
    private $plan = null;
    /**
     * Constraints on transacting the Offer.
     *
     * Generated from protobuf field <code>.google.cloud.channel.v1.Constraints constraints = 5;</code>
     */
    private $constraints = null;
    /**
     * Price for each monetizable resource type.
     *
     * Generated from protobuf field <code>repeated .google.cloud.channel.v1.PriceByResource price_by_resources = 6;</code>
     */
    private $price_by_resources;
    /**
     * Start of the Offer validity time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 7;</code>
     */
    private $start_time = null;
    /**
     * Output only. End of the Offer validity time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $end_time = null;
    /**
     * Parameters required to use current Offer to purchase.
     *
     * Generated from protobuf field <code>repeated .google.cloud.channel.v1.ParameterDefinition parameter_definitions = 9;</code>
     */
    private $parameter_definitions;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Resource Name of the Offer.
     *           Format: accounts/{account_id}/offers/{offer_id}
     *     @type \Google\Cloud\Channel\V1\MarketingInfo $marketing_info
     *           Marketing information for the Offer.
     *     @type \Google\Cloud\Channel\V1\Sku $sku
     *           SKU the offer is associated with.
     *     @type \Google\Cloud\Channel\V1\Plan $plan
     *           Describes the payment plan for the Offer.
     *     @type \Google\Cloud\Channel\V1\Constraints $constraints
     *           Constraints on transacting the Offer.
     *     @type \Google\Cloud\Channel\V1\PriceByResource[]|\Google\Protobuf\Internal\RepeatedField $price_by_resources
     *           Price for each monetizable resource type.
     *     @type \Google\Protobuf\Timestamp $start_time
     *           Start of the Offer validity time.
     *     @type \Google\Protobuf\Timestamp $end_time
     *           Output only. End of the Offer validity time.
     *     @type \Google\Cloud\Channel\V1\ParameterDefinition[]|\Google\Protobuf\Internal\RepeatedField $parameter_definitions
     *           Parameters required to use current Offer to purchase.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Channel\V1\Offers::initOnce();
        parent::__construct($data);
    }

    /**
     * Resource Name of the Offer.
     * Format: accounts/{account_id}/offers/{offer_id}
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Resource Name of the Offer.
     * Format: accounts/{account_id}/offers/{offer_id}
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

    /**
     * Marketing information for the Offer.
     *
     * Generated from protobuf field <code>.google.cloud.channel.v1.MarketingInfo marketing_info = 2;</code>
     * @return \Google\Cloud\Channel\V1\MarketingInfo
     */
    public function getMarketingInfo()
    {
        return isset($this->marketing_info) ? $this->marketing_info : null;
    }

    public function hasMarketingInfo()
    {
        return isset($this->marketing_info);
    }

    public function clearMarketingInfo()
    {
        unset($this->marketing_info);
    }

    /**
     * Marketing information for the Offer.
     *
     * Generated from protobuf field <code>.google.cloud.channel.v1.MarketingInfo marketing_info = 2;</code>
     * @param \Google\Cloud\Channel\V1\MarketingInfo $var
     * @return $this
     */
    public function setMarketingInfo($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Channel\V1\MarketingInfo::class);
        $this->marketing_info = $var;

        return $this;
    }

    /**
     * SKU the offer is associated with.
     *
     * Generated from protobuf field <code>.google.cloud.channel.v1.Sku sku = 3;</code>
     * @return \Google\Cloud\Channel\V1\Sku
     */
    public function getSku()
    {
        return isset($this->sku) ? $this->sku : null;
    }

    public function hasSku()
    {
        return isset($this->sku);
    }

    public function clearSku()
    {
        unset($this->sku);
    }

    /**
     * SKU the offer is associated with.
     *
     * Generated from protobuf field <code>.google.cloud.channel.v1.Sku sku = 3;</code>
     * @param \Google\Cloud\Channel\V1\Sku $var
     * @return $this
     */
    public function setSku($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Channel\V1\Sku::class);
        $this->sku = $var;

        return $this;
    }

    /**
     * Describes the payment plan for the Offer.
     *
     * Generated from protobuf field <code>.google.cloud.channel.v1.Plan plan = 4;</code>
     * @return \Google\Cloud\Channel\V1\Plan
     */
    public function getPlan()
    {
        return isset($this->plan) ? $this->plan : null;
    }

    public function hasPlan()
    {
        return isset($this->plan);
    }

    public function clearPlan()
    {
        unset($this->plan);
    }

    /**
     * Describes the payment plan for the Offer.
     *
     * Generated from protobuf field <code>.google.cloud.channel.v1.Plan plan = 4;</code>
     * @param \Google\Cloud\Channel\V1\Plan $var
     * @return $this
     */
    public function setPlan($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Channel\V1\Plan::class);
        $this->plan = $var;

        return $this;
    }

    /**
     * Constraints on transacting the Offer.
     *
     * Generated from protobuf field <code>.google.cloud.channel.v1.Constraints constraints = 5;</code>
     * @return \Google\Cloud\Channel\V1\Constraints
     */
    public function getConstraints()
    {
        return isset($this->constraints) ? $this->constraints : null;
    }

    public function hasConstraints()
    {
        return isset($this->constraints);
    }

    public function clearConstraints()
    {
        unset($this->constraints);
    }

    /**
     * Constraints on transacting the Offer.
     *
     * Generated from protobuf field <code>.google.cloud.channel.v1.Constraints constraints = 5;</code>
     * @param \Google\Cloud\Channel\V1\Constraints $var
     * @return $this
     */
    public function setConstraints($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Channel\V1\Constraints::class);
        $this->constraints = $var;

        return $this;
    }

    /**
     * Price for each monetizable resource type.
     *
     * Generated from protobuf field <code>repeated .google.cloud.channel.v1.PriceByResource price_by_resources = 6;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPriceByResources()
    {
        return $this->price_by_resources;
    }

    /**
     * Price for each monetizable resource type.
     *
     * Generated from protobuf field <code>repeated .google.cloud.channel.v1.PriceByResource price_by_resources = 6;</code>
     * @param \Google\Cloud\Channel\V1\PriceByResource[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPriceByResources($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Channel\V1\PriceByResource::class);
        $this->price_by_resources = $arr;

        return $this;
    }

    /**
     * Start of the Offer validity time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 7;</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getStartTime()
    {
        return isset($this->start_time) ? $this->start_time : null;
    }

    public function hasStartTime()
    {
        return isset($this->start_time);
    }

    public function clearStartTime()
    {
        unset($this->start_time);
    }

    /**
     * Start of the Offer validity time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 7;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setStartTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->start_time = $var;

        return $this;
    }

    /**
     * Output only. End of the Offer validity time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getEndTime()
    {
        return isset($this->end_time) ? $this->end_time : null;
    }

    public function hasEndTime()
    {
        return isset($this->end_time);
    }

    public function clearEndTime()
    {
        unset($this->end_time);
    }

    /**
     * Output only. End of the Offer validity time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setEndTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->end_time = $var;

        return $this;
    }

    /**
     * Parameters required to use current Offer to purchase.
     *
     * Generated from protobuf field <code>repeated .google.cloud.channel.v1.ParameterDefinition parameter_definitions = 9;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getParameterDefinitions()
    {
        return $this->parameter_definitions;
    }

    /**
     * Parameters required to use current Offer to purchase.
     *
     * Generated from protobuf field <code>repeated .google.cloud.channel.v1.ParameterDefinition parameter_definitions = 9;</code>
     * @param \Google\Cloud\Channel\V1\ParameterDefinition[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setParameterDefinitions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Channel\V1\ParameterDefinition::class);
        $this->parameter_definitions = $arr;

        return $this;
    }

}

