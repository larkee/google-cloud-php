<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/appengine/v1/domain_mapping.proto

namespace GPBMetadata\Google\Appengine\V1;

class DomainMapping
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
(google/appengine/v1/domain_mapping.protogoogle.appengine.v1"�
DomainMapping
name (	

id (	6
ssl_settings (2 .google.appengine.v1.SslSettings=
resource_records (2#.google.appengine.v1.ResourceRecord"�
SslSettings
certificate_id (	O
ssl_management_type (22.google.appengine.v1.SslSettings.SslManagementType&
pending_managed_certificate_id (	"S
SslManagementType#
SSL_MANAGEMENT_TYPE_UNSPECIFIED 
	AUTOMATIC

MANUAL"�
ResourceRecord
name (	
rrdata (	<
type (2..google.appengine.v1.ResourceRecord.RecordType"E

RecordType
RECORD_TYPE_UNSPECIFIED 
A
AAAA	
CNAMEB�
com.google.appengine.v1BDomainMappingProtoPZ<google.golang.org/genproto/googleapis/appengine/v1;appengine�Google.Cloud.AppEngine.V1�Google\\Cloud\\AppEngine\\V1�Google::Cloud::AppEngine::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

