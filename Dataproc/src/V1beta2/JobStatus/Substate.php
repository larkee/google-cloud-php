<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataproc/v1beta2/jobs.proto

namespace Google\Cloud\Dataproc\V1beta2\JobStatus;

/**
 * The job substate.
 *
 * Protobuf type <code>google.cloud.dataproc.v1beta2.JobStatus.Substate</code>
 */
class Substate
{
    /**
     * The job substate is unknown.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;
    /**
     * The Job is submitted to the agent.
     * Applies to RUNNING state.
     *
     * Generated from protobuf enum <code>SUBMITTED = 1;</code>
     */
    const SUBMITTED = 1;
    /**
     * The Job has been received and is awaiting execution (it may be waiting
     * for a condition to be met). See the "details" field for the reason for
     * the delay.
     * Applies to RUNNING state.
     *
     * Generated from protobuf enum <code>QUEUED = 2;</code>
     */
    const QUEUED = 2;
    /**
     * The agent-reported status is out of date, which may be caused by a
     * loss of communication between the agent and Cloud Dataproc. If the
     * agent does not send a timely update, the job will fail.
     * Applies to RUNNING state.
     *
     * Generated from protobuf enum <code>STALE_STATUS = 3;</code>
     */
    const STALE_STATUS = 3;
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Substate::class, \Google\Cloud\Dataproc\V1beta2\JobStatus_Substate::class);
