<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/channel/v1/common.proto

namespace GPBMetadata\Google\Cloud\Channel\V1;

class Common
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Protobuf\Any::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        $pool->internalAddGeneratedFile(
            '
�

$google/cloud/channel/v1/common.protogoogle.cloud.channel.v1google/protobuf/any.protogoogle/api/annotations.proto"�
EduDataF
institute_type (2..google.cloud.channel.v1.EduData.InstituteTypeF
institute_size (2..google.cloud.channel.v1.EduData.InstituteSize
website (	"H
InstituteType
INSTITUTE_TYPE_UNSPECIFIED 
K12

UNIVERSITY"�
InstituteSize
INSTITUTE_SIZE_UNSPECIFIED 

SIZE_1_100
SIZE_101_500
SIZE_501_1000
SIZE_1001_2000
SIZE_2001_5000
SIZE_5001_10000
SIZE_10001_OR_MORE"�
CloudIdentityInfoN
customer_type (27.google.cloud.channel.v1.CloudIdentityInfo.CustomerType
primary_domain	 (	B�A
is_domain_verified (B�A
alternate_email (	
phone_number (	
language_code (	
admin_console_uri
 (	B�A2
edu_data (2 .google.cloud.channel.v1.EduData"C
CustomerType
CUSTOMER_TYPE_UNSPECIFIED 

DOMAIN
TEAM"�
Value
int64_value (H 
string_value (	H 
double_value (H +
proto_value (2.google.protobuf.AnyH 

bool_value (H B
kind"C
	AdminUser
email (	

given_name (	
family_name (	Bl
com.google.cloud.channel.v1BCommonProtoPZ>google.golang.org/genproto/googleapis/cloud/channel/v1;channelbproto3'
        , true);

        static::$is_initialized = true;
    }
}

