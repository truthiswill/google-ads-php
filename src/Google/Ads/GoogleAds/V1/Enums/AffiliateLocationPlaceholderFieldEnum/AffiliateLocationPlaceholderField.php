<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v1/enums/affiliate_location_placeholder_field.proto

namespace Google\Ads\GoogleAds\V1\Enums\AffiliateLocationPlaceholderFieldEnum;

/**
 * Possible values for Affiliate Location placeholder fields.
 *
 * Protobuf type <code>google.ads.googleads.v1.enums.AffiliateLocationPlaceholderFieldEnum.AffiliateLocationPlaceholderField</code>
 */
class AffiliateLocationPlaceholderField
{
    /**
     * Not specified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;
    /**
     * Used for return value only. Represents value unknown in this version.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    const UNKNOWN = 1;
    /**
     * Data Type: STRING. The name of the business.
     *
     * Generated from protobuf enum <code>BUSINESS_NAME = 2;</code>
     */
    const BUSINESS_NAME = 2;
    /**
     * Data Type: STRING. Line 1 of the business address.
     *
     * Generated from protobuf enum <code>ADDRESS_LINE_1 = 3;</code>
     */
    const ADDRESS_LINE_1 = 3;
    /**
     * Data Type: STRING. Line 2 of the business address.
     *
     * Generated from protobuf enum <code>ADDRESS_LINE_2 = 4;</code>
     */
    const ADDRESS_LINE_2 = 4;
    /**
     * Data Type: STRING. City of the business address.
     *
     * Generated from protobuf enum <code>CITY = 5;</code>
     */
    const CITY = 5;
    /**
     * Data Type: STRING. Province of the business address.
     *
     * Generated from protobuf enum <code>PROVINCE = 6;</code>
     */
    const PROVINCE = 6;
    /**
     * Data Type: STRING. Postal code of the business address.
     *
     * Generated from protobuf enum <code>POSTAL_CODE = 7;</code>
     */
    const POSTAL_CODE = 7;
    /**
     * Data Type: STRING. Country code of the business address.
     *
     * Generated from protobuf enum <code>COUNTRY_CODE = 8;</code>
     */
    const COUNTRY_CODE = 8;
    /**
     * Data Type: STRING. Phone number of the business.
     *
     * Generated from protobuf enum <code>PHONE_NUMBER = 9;</code>
     */
    const PHONE_NUMBER = 9;
    /**
     * Data Type: STRING. Language code of the business.
     *
     * Generated from protobuf enum <code>LANGUAGE_CODE = 10;</code>
     */
    const LANGUAGE_CODE = 10;
    /**
     * Data Type: INT64. ID of the chain.
     *
     * Generated from protobuf enum <code>CHAIN_ID = 11;</code>
     */
    const CHAIN_ID = 11;
    /**
     * Data Type: STRING. Name of the chain.
     *
     * Generated from protobuf enum <code>CHAIN_NAME = 12;</code>
     */
    const CHAIN_NAME = 12;
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AffiliateLocationPlaceholderField::class, \Google\Ads\GoogleAds\V1\Enums\AffiliateLocationPlaceholderFieldEnum_AffiliateLocationPlaceholderField::class);
