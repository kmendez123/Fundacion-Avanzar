<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v13/services/geo_target_constant_service.proto

namespace Google\Ads\GoogleAds\V13\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A geo target constant suggestion.
 *
 * Generated from protobuf message <code>google.ads.googleads.v13.services.GeoTargetConstantSuggestion</code>
 */
class GeoTargetConstantSuggestion extends \Google\Protobuf\Internal\Message
{
    /**
     * The language this GeoTargetConstantSuggestion is currently translated to.
     * It affects the name of geo target fields. For example, if locale=en, then
     * name=Spain. If locale=es, then name=España. The default locale will be
     * returned if no translation exists for the locale in the request.
     *
     * Generated from protobuf field <code>optional string locale = 6;</code>
     */
    protected $locale = null;
    /**
     * Approximate user population that will be targeted, rounded to the
     * nearest 100.
     *
     * Generated from protobuf field <code>optional int64 reach = 7;</code>
     */
    protected $reach = null;
    /**
     * If the request searched by location name, this is the location name that
     * matched the geo target.
     *
     * Generated from protobuf field <code>optional string search_term = 8;</code>
     */
    protected $search_term = null;
    /**
     * The GeoTargetConstant result.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v13.resources.GeoTargetConstant geo_target_constant = 4;</code>
     */
    protected $geo_target_constant = null;
    /**
     * The list of parents of the geo target constant.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v13.resources.GeoTargetConstant geo_target_constant_parents = 5;</code>
     */
    private $geo_target_constant_parents;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $locale
     *           The language this GeoTargetConstantSuggestion is currently translated to.
     *           It affects the name of geo target fields. For example, if locale=en, then
     *           name=Spain. If locale=es, then name=España. The default locale will be
     *           returned if no translation exists for the locale in the request.
     *     @type int|string $reach
     *           Approximate user population that will be targeted, rounded to the
     *           nearest 100.
     *     @type string $search_term
     *           If the request searched by location name, this is the location name that
     *           matched the geo target.
     *     @type \Google\Ads\GoogleAds\V13\Resources\GeoTargetConstant $geo_target_constant
     *           The GeoTargetConstant result.
     *     @type array<\Google\Ads\GoogleAds\V13\Resources\GeoTargetConstant>|\Google\Protobuf\Internal\RepeatedField $geo_target_constant_parents
     *           The list of parents of the geo target constant.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V13\Services\GeoTargetConstantService::initOnce();
        parent::__construct($data);
    }

    /**
     * The language this GeoTargetConstantSuggestion is currently translated to.
     * It affects the name of geo target fields. For example, if locale=en, then
     * name=Spain. If locale=es, then name=España. The default locale will be
     * returned if no translation exists for the locale in the request.
     *
     * Generated from protobuf field <code>optional string locale = 6;</code>
     * @return string
     */
    public function getLocale()
    {
        return isset($this->locale) ? $this->locale : '';
    }

    public function hasLocale()
    {
        return isset($this->locale);
    }

    public function clearLocale()
    {
        unset($this->locale);
    }

    /**
     * The language this GeoTargetConstantSuggestion is currently translated to.
     * It affects the name of geo target fields. For example, if locale=en, then
     * name=Spain. If locale=es, then name=España. The default locale will be
     * returned if no translation exists for the locale in the request.
     *
     * Generated from protobuf field <code>optional string locale = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setLocale($var)
    {
        GPBUtil::checkString($var, True);
        $this->locale = $var;

        return $this;
    }

    /**
     * Approximate user population that will be targeted, rounded to the
     * nearest 100.
     *
     * Generated from protobuf field <code>optional int64 reach = 7;</code>
     * @return int|string
     */
    public function getReach()
    {
        return isset($this->reach) ? $this->reach : 0;
    }

    public function hasReach()
    {
        return isset($this->reach);
    }

    public function clearReach()
    {
        unset($this->reach);
    }

    /**
     * Approximate user population that will be targeted, rounded to the
     * nearest 100.
     *
     * Generated from protobuf field <code>optional int64 reach = 7;</code>
     * @param int|string $var
     * @return $this
     */
    public function setReach($var)
    {
        GPBUtil::checkInt64($var);
        $this->reach = $var;

        return $this;
    }

    /**
     * If the request searched by location name, this is the location name that
     * matched the geo target.
     *
     * Generated from protobuf field <code>optional string search_term = 8;</code>
     * @return string
     */
    public function getSearchTerm()
    {
        return isset($this->search_term) ? $this->search_term : '';
    }

    public function hasSearchTerm()
    {
        return isset($this->search_term);
    }

    public function clearSearchTerm()
    {
        unset($this->search_term);
    }

    /**
     * If the request searched by location name, this is the location name that
     * matched the geo target.
     *
     * Generated from protobuf field <code>optional string search_term = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setSearchTerm($var)
    {
        GPBUtil::checkString($var, True);
        $this->search_term = $var;

        return $this;
    }

    /**
     * The GeoTargetConstant result.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v13.resources.GeoTargetConstant geo_target_constant = 4;</code>
     * @return \Google\Ads\GoogleAds\V13\Resources\GeoTargetConstant|null
     */
    public function getGeoTargetConstant()
    {
        return $this->geo_target_constant;
    }

    public function hasGeoTargetConstant()
    {
        return isset($this->geo_target_constant);
    }

    public function clearGeoTargetConstant()
    {
        unset($this->geo_target_constant);
    }

    /**
     * The GeoTargetConstant result.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v13.resources.GeoTargetConstant geo_target_constant = 4;</code>
     * @param \Google\Ads\GoogleAds\V13\Resources\GeoTargetConstant $var
     * @return $this
     */
    public function setGeoTargetConstant($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V13\Resources\GeoTargetConstant::class);
        $this->geo_target_constant = $var;

        return $this;
    }

    /**
     * The list of parents of the geo target constant.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v13.resources.GeoTargetConstant geo_target_constant_parents = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getGeoTargetConstantParents()
    {
        return $this->geo_target_constant_parents;
    }

    /**
     * The list of parents of the geo target constant.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v13.resources.GeoTargetConstant geo_target_constant_parents = 5;</code>
     * @param array<\Google\Ads\GoogleAds\V13\Resources\GeoTargetConstant>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setGeoTargetConstantParents($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V13\Resources\GeoTargetConstant::class);
        $this->geo_target_constant_parents = $arr;

        return $this;
    }

}

