<?php
/*
 * Copyright 2017 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/*
 * GENERATED CODE WARNING
 * This file was generated from the file
 * https://github.com/google/googleapis/blob/master/google/spanner/admin/database/v1/spanner_database_admin.proto
 * and updates to that file get reflected here through a refresh process.
 *
 * @experimental
 */

namespace Google\Cloud\Spanner\Admin\Database\V1\Gapic;

use Google\ApiCore\ApiException;
use Google\ApiCore\CredentialsWrapper;
use Google\ApiCore\GapicClientTrait;
use Google\ApiCore\LongRunning\OperationsClient;
use Google\ApiCore\OperationResponse;
use Google\ApiCore\PathTemplate;
use Google\ApiCore\RequestParamsHeaderDescriptor;
use Google\ApiCore\RetrySettings;
use Google\ApiCore\Transport\TransportInterface;
use Google\ApiCore\ValidationException;
use Google\Auth\FetchAuthTokenInterface;
use Google\Cloud\Iam\V1\GetIamPolicyRequest;
use Google\Cloud\Iam\V1\GetPolicyOptions;
use Google\Cloud\Iam\V1\Policy;
use Google\Cloud\Iam\V1\SetIamPolicyRequest;
use Google\Cloud\Iam\V1\TestIamPermissionsRequest;
use Google\Cloud\Iam\V1\TestIamPermissionsResponse;
use Google\Cloud\Spanner\Admin\Database\V1\Backup;
use Google\Cloud\Spanner\Admin\Database\V1\CreateBackupMetadata;
use Google\Cloud\Spanner\Admin\Database\V1\CreateBackupRequest;
use Google\Cloud\Spanner\Admin\Database\V1\CreateDatabaseMetadata;
use Google\Cloud\Spanner\Admin\Database\V1\CreateDatabaseRequest;
use Google\Cloud\Spanner\Admin\Database\V1\Database;
use Google\Cloud\Spanner\Admin\Database\V1\DeleteBackupRequest;
use Google\Cloud\Spanner\Admin\Database\V1\DropDatabaseRequest;
use Google\Cloud\Spanner\Admin\Database\V1\EncryptionConfig;
use Google\Cloud\Spanner\Admin\Database\V1\GetBackupRequest;
use Google\Cloud\Spanner\Admin\Database\V1\GetDatabaseDdlRequest;
use Google\Cloud\Spanner\Admin\Database\V1\GetDatabaseDdlResponse;
use Google\Cloud\Spanner\Admin\Database\V1\GetDatabaseRequest;
use Google\Cloud\Spanner\Admin\Database\V1\ListBackupOperationsRequest;
use Google\Cloud\Spanner\Admin\Database\V1\ListBackupOperationsResponse;
use Google\Cloud\Spanner\Admin\Database\V1\ListBackupsRequest;
use Google\Cloud\Spanner\Admin\Database\V1\ListBackupsResponse;
use Google\Cloud\Spanner\Admin\Database\V1\ListDatabaseOperationsRequest;
use Google\Cloud\Spanner\Admin\Database\V1\ListDatabaseOperationsResponse;
use Google\Cloud\Spanner\Admin\Database\V1\ListDatabasesRequest;
use Google\Cloud\Spanner\Admin\Database\V1\ListDatabasesResponse;
use Google\Cloud\Spanner\Admin\Database\V1\RestoreDatabaseMetadata;
use Google\Cloud\Spanner\Admin\Database\V1\RestoreDatabaseRequest;
use Google\Cloud\Spanner\Admin\Database\V1\UpdateBackupRequest;
use Google\Cloud\Spanner\Admin\Database\V1\UpdateDatabaseDdlMetadata;
use Google\Cloud\Spanner\Admin\Database\V1\UpdateDatabaseDdlRequest;
use Google\LongRunning\Operation;
use Google\Protobuf\FieldMask;
use Google\Protobuf\GPBEmpty;

/**
 * Service Description: Cloud Spanner Database Admin API.
 *
 * The Cloud Spanner Database Admin API can be used to create, drop, and
 * list databases. It also enables updating the schema of pre-existing
 * databases. It can be also used to create, delete and list backups for a
 * database and to restore from an existing backup.
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods. Sample code to get started:
 *
 * ```
 * $databaseAdminClient = new DatabaseAdminClient();
 * try {
 *     $formattedParent = $databaseAdminClient->instanceName('[PROJECT]', '[INSTANCE]');
 *     $createStatement = '';
 *     $operationResponse = $databaseAdminClient->createDatabase($formattedParent, $createStatement);
 *     $operationResponse->pollUntilComplete();
 *     if ($operationResponse->operationSucceeded()) {
 *         $result = $operationResponse->getResult();
 *         // doSomethingWith($result)
 *     } else {
 *         $error = $operationResponse->getError();
 *         // handleError($error)
 *     }
 *
 *
 *     // Alternatively:
 *
 *     // start the operation, keep the operation name, and resume later
 *     $operationResponse = $databaseAdminClient->createDatabase($formattedParent, $createStatement);
 *     $operationName = $operationResponse->getName();
 *     // ... do other work
 *     $newOperationResponse = $databaseAdminClient->resumeOperation($operationName, 'createDatabase');
 *     while (!$newOperationResponse->isDone()) {
 *         // ... do other work
 *         $newOperationResponse->reload();
 *     }
 *     if ($newOperationResponse->operationSucceeded()) {
 *       $result = $newOperationResponse->getResult();
 *       // doSomethingWith($result)
 *     } else {
 *       $error = $newOperationResponse->getError();
 *       // handleError($error)
 *     }
 * } finally {
 *     $databaseAdminClient->close();
 * }
 * ```
 *
 * Many parameters require resource names to be formatted in a particular way. To assist
 * with these names, this class includes a format method for each type of name, and additionally
 * a parseName method to extract the individual identifiers contained within formatted names
 * that are returned by the API.
 *
 * @experimental
 */
class DatabaseAdminGapicClient
{
    use GapicClientTrait;

    /**
     * The name of the service.
     */
    const SERVICE_NAME = 'google.spanner.admin.database.v1.DatabaseAdmin';

    /**
     * The default address of the service.
     */
    const SERVICE_ADDRESS = 'spanner.googleapis.com';

    /**
     * The default port of the service.
     */
    const DEFAULT_SERVICE_PORT = 443;

    /**
     * The name of the code generator, to be included in the agent header.
     */
    const CODEGEN_NAME = 'gapic';

    /**
     * The default scopes required by the service.
     */
    public static $serviceScopes = [
        'https://www.googleapis.com/auth/cloud-platform',
        'https://www.googleapis.com/auth/spanner.admin',
    ];
    private static $backupNameTemplate;
    private static $cryptoKeyNameTemplate;
    private static $databaseNameTemplate;
    private static $instanceNameTemplate;
    private static $pathTemplateMap;

    private $operationsClient;

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'apiEndpoint' => self::SERVICE_ADDRESS.':'.self::DEFAULT_SERVICE_PORT,
            'clientConfig' => __DIR__.'/../resources/database_admin_client_config.json',
            'descriptorsConfigPath' => __DIR__.'/../resources/database_admin_descriptor_config.php',
            'gcpApiConfigPath' => __DIR__.'/../resources/database_admin_grpc_config.json',
            'credentialsConfig' => [
                'scopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__.'/../resources/database_admin_rest_client_config.php',
                ],
            ],
        ];
    }

    private static function getBackupNameTemplate()
    {
        if (null == self::$backupNameTemplate) {
            self::$backupNameTemplate = new PathTemplate('projects/{project}/instances/{instance}/backups/{backup}');
        }

        return self::$backupNameTemplate;
    }

    private static function getCryptoKeyNameTemplate()
    {
        if (null == self::$cryptoKeyNameTemplate) {
            self::$cryptoKeyNameTemplate = new PathTemplate('projects/{project}/locations/{location}/keyRings/{key_ring}/cryptoKeys/{crypto_key}');
        }

        return self::$cryptoKeyNameTemplate;
    }

    private static function getDatabaseNameTemplate()
    {
        if (null == self::$databaseNameTemplate) {
            self::$databaseNameTemplate = new PathTemplate('projects/{project}/instances/{instance}/databases/{database}');
        }

        return self::$databaseNameTemplate;
    }

    private static function getInstanceNameTemplate()
    {
        if (null == self::$instanceNameTemplate) {
            self::$instanceNameTemplate = new PathTemplate('projects/{project}/instances/{instance}');
        }

        return self::$instanceNameTemplate;
    }

    private static function getPathTemplateMap()
    {
        if (null == self::$pathTemplateMap) {
            self::$pathTemplateMap = [
                'backup' => self::getBackupNameTemplate(),
                'cryptoKey' => self::getCryptoKeyNameTemplate(),
                'database' => self::getDatabaseNameTemplate(),
                'instance' => self::getInstanceNameTemplate(),
            ];
        }

        return self::$pathTemplateMap;
    }

    /**
     * Formats a string containing the fully-qualified path to represent
     * a backup resource.
     *
     * @param string $project
     * @param string $instance
     * @param string $backup
     *
     * @return string The formatted backup resource.
     * @experimental
     */
    public static function backupName($project, $instance, $backup)
    {
        return self::getBackupNameTemplate()->render([
            'project' => $project,
            'instance' => $instance,
            'backup' => $backup,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent
     * a crypto_key resource.
     *
     * @param string $project
     * @param string $location
     * @param string $keyRing
     * @param string $cryptoKey
     *
     * @return string The formatted crypto_key resource.
     * @experimental
     */
    public static function cryptoKeyName($project, $location, $keyRing, $cryptoKey)
    {
        return self::getCryptoKeyNameTemplate()->render([
            'project' => $project,
            'location' => $location,
            'key_ring' => $keyRing,
            'crypto_key' => $cryptoKey,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent
     * a database resource.
     *
     * @param string $project
     * @param string $instance
     * @param string $database
     *
     * @return string The formatted database resource.
     * @experimental
     */
    public static function databaseName($project, $instance, $database)
    {
        return self::getDatabaseNameTemplate()->render([
            'project' => $project,
            'instance' => $instance,
            'database' => $database,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent
     * a instance resource.
     *
     * @param string $project
     * @param string $instance
     *
     * @return string The formatted instance resource.
     * @experimental
     */
    public static function instanceName($project, $instance)
    {
        return self::getInstanceNameTemplate()->render([
            'project' => $project,
            'instance' => $instance,
        ]);
    }

    /**
     * Parses a formatted name string and returns an associative array of the components in the name.
     * The following name formats are supported:
     * Template: Pattern
     * - backup: projects/{project}/instances/{instance}/backups/{backup}
     * - cryptoKey: projects/{project}/locations/{location}/keyRings/{key_ring}/cryptoKeys/{crypto_key}
     * - database: projects/{project}/instances/{instance}/databases/{database}
     * - instance: projects/{project}/instances/{instance}.
     *
     * The optional $template argument can be supplied to specify a particular pattern, and must
     * match one of the templates listed above. If no $template argument is provided, or if the
     * $template argument does not match one of the templates listed, then parseName will check
     * each of the supported templates, and return the first match.
     *
     * @param string $formattedName The formatted name string
     * @param string $template      Optional name of template to match
     *
     * @return array An associative array from name component IDs to component values.
     *
     * @throws ValidationException If $formattedName could not be matched.
     * @experimental
     */
    public static function parseName($formattedName, $template = null)
    {
        $templateMap = self::getPathTemplateMap();

        if ($template) {
            if (!isset($templateMap[$template])) {
                throw new ValidationException("Template name $template does not exist");
            }

            return $templateMap[$template]->match($formattedName);
        }

        foreach ($templateMap as $templateName => $pathTemplate) {
            try {
                return $pathTemplate->match($formattedName);
            } catch (ValidationException $ex) {
                // Swallow the exception to continue trying other path templates
            }
        }
        throw new ValidationException("Input did not match any known format. Input: $formattedName");
    }

    /**
     * Return an OperationsClient object with the same endpoint as $this.
     *
     * @return OperationsClient
     * @experimental
     */
    public function getOperationsClient()
    {
        return $this->operationsClient;
    }

    /**
     * Resume an existing long running operation that was previously started
     * by a long running API method. If $methodName is not provided, or does
     * not match a long running API method, then the operation can still be
     * resumed, but the OperationResponse object will not deserialize the
     * final response.
     *
     * @param string $operationName The name of the long running operation
     * @param string $methodName    The name of the method used to start the operation
     *
     * @return OperationResponse
     * @experimental
     */
    public function resumeOperation($operationName, $methodName = null)
    {
        $options = isset($this->descriptors[$methodName]['longRunning'])
            ? $this->descriptors[$methodName]['longRunning']
            : [];
        $operation = new OperationResponse($operationName, $this->getOperationsClient(), $options);
        $operation->reload();

        return $operation;
    }

    /**
     * Constructor.
     *
     * @param array $options {
     *                       Optional. Options for configuring the service API wrapper.
     *
     *     @type string $serviceAddress
     *           **Deprecated**. This option will be removed in a future major release. Please
     *           utilize the `$apiEndpoint` option instead.
     *     @type string $apiEndpoint
     *           The address of the API remote host. May optionally include the port, formatted
     *           as "<uri>:<port>". Default 'spanner.googleapis.com:443'.
     *     @type string|array|FetchAuthTokenInterface|CredentialsWrapper $credentials
     *           The credentials to be used by the client to authorize API calls. This option
     *           accepts either a path to a credentials file, or a decoded credentials file as a
     *           PHP array.
     *           *Advanced usage*: In addition, this option can also accept a pre-constructed
     *           {@see \Google\Auth\FetchAuthTokenInterface} object or
     *           {@see \Google\ApiCore\CredentialsWrapper} object. Note that when one of these
     *           objects are provided, any settings in $credentialsConfig will be ignored.
     *     @type array $credentialsConfig
     *           Options used to configure credentials, including auth token caching, for the client.
     *           For a full list of supporting configuration options, see
     *           {@see \Google\ApiCore\CredentialsWrapper::build()}.
     *     @type bool $disableRetries
     *           Determines whether or not retries defined by the client configuration should be
     *           disabled. Defaults to `false`.
     *     @type string|array $clientConfig
     *           Client method configuration, including retry settings. This option can be either a
     *           path to a JSON file, or a PHP array containing the decoded JSON data.
     *           By default this settings points to the default client config file, which is provided
     *           in the resources folder.
     *     @type string|TransportInterface $transport
     *           The transport used for executing network requests. May be either the string `rest`
     *           or `grpc`. Defaults to `grpc` if gRPC support is detected on the system.
     *           *Advanced usage*: Additionally, it is possible to pass in an already instantiated
     *           {@see \Google\ApiCore\Transport\TransportInterface} object. Note that when this
     *           object is provided, any settings in $transportConfig, and any `$apiEndpoint`
     *           setting, will be ignored.
     *     @type array $transportConfig
     *           Configuration options that will be used to construct the transport. Options for
     *           each supported transport type should be passed in a key for that transport. For
     *           example:
     *           $transportConfig = [
     *               'grpc' => [...],
     *               'rest' => [...]
     *           ];
     *           See the {@see \Google\ApiCore\Transport\GrpcTransport::build()} and
     *           {@see \Google\ApiCore\Transport\RestTransport::build()} methods for the
     *           supported options.
     * }
     *
     * @throws ValidationException
     * @experimental
     */
    public function __construct(array $options = [])
    {
        $clientOptions = $this->buildClientOptions($options);
        $this->setClientOptions($clientOptions);
        $this->operationsClient = $this->createOperationsClient($clientOptions);
    }

    /**
     * Creates a new Cloud Spanner database and starts to prepare it for serving.
     * The returned [long-running operation][google.longrunning.Operation] will
     * have a name of the format `<database_name>/operations/<operation_id>` and
     * can be used to track preparation of the database. The
     * [metadata][google.longrunning.Operation.metadata] field type is
     * [CreateDatabaseMetadata][google.spanner.admin.database.v1.CreateDatabaseMetadata]. The
     * [response][google.longrunning.Operation.response] field type is
     * [Database][google.spanner.admin.database.v1.Database], if successful.
     *
     * Sample code:
     * ```
     * $databaseAdminClient = new DatabaseAdminClient();
     * try {
     *     $formattedParent = $databaseAdminClient->instanceName('[PROJECT]', '[INSTANCE]');
     *     $createStatement = '';
     *     $operationResponse = $databaseAdminClient->createDatabase($formattedParent, $createStatement);
     *     $operationResponse->pollUntilComplete();
     *     if ($operationResponse->operationSucceeded()) {
     *         $result = $operationResponse->getResult();
     *         // doSomethingWith($result)
     *     } else {
     *         $error = $operationResponse->getError();
     *         // handleError($error)
     *     }
     *
     *
     *     // Alternatively:
     *
     *     // start the operation, keep the operation name, and resume later
     *     $operationResponse = $databaseAdminClient->createDatabase($formattedParent, $createStatement);
     *     $operationName = $operationResponse->getName();
     *     // ... do other work
     *     $newOperationResponse = $databaseAdminClient->resumeOperation($operationName, 'createDatabase');
     *     while (!$newOperationResponse->isDone()) {
     *         // ... do other work
     *         $newOperationResponse->reload();
     *     }
     *     if ($newOperationResponse->operationSucceeded()) {
     *       $result = $newOperationResponse->getResult();
     *       // doSomethingWith($result)
     *     } else {
     *       $error = $newOperationResponse->getError();
     *       // handleError($error)
     *     }
     * } finally {
     *     $databaseAdminClient->close();
     * }
     * ```
     *
     * @param string $parent          Required. The name of the instance that will serve the new database.
     *                                Values are of the form `projects/<project>/instances/<instance>`.
     * @param string $createStatement Required. A `CREATE DATABASE` statement, which specifies the ID of the
     *                                new database.  The database ID must conform to the regular expression
     *                                `[a-z][a-z0-9_\-]*[a-z0-9]` and be between 2 and 30 characters in length.
     *                                If the database ID is a reserved word or if it contains a hyphen, the
     *                                database ID must be enclosed in backticks (`` ` ``).
     * @param array  $optionalArgs    {
     *                                Optional.
     *
     *     @type string[] $extraStatements
     *          Optional. A list of DDL statements to run inside the newly created
     *          database. Statements can create tables, indexes, etc. These
     *          statements execute atomically with the creation of the database:
     *          if there is an error in any statement, the database is not created.
     *     @type EncryptionConfig $encryptionConfig
     *          Optional.
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\ApiCore\OperationResponse
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function createDatabase($parent, $createStatement, array $optionalArgs = [])
    {
        $request = new CreateDatabaseRequest();
        $request->setParent($parent);
        $request->setCreateStatement($createStatement);
        if (isset($optionalArgs['extraStatements'])) {
            $request->setExtraStatements($optionalArgs['extraStatements']);
        }
        if (isset($optionalArgs['encryptionConfig'])) {
            $request->setEncryptionConfig($optionalArgs['encryptionConfig']);
        }

        $requestParams = new RequestParamsHeaderDescriptor([
          'parent' => $request->getParent(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startOperationsCall(
            'CreateDatabase',
            $optionalArgs,
            $request,
            $this->getOperationsClient()
        )->wait();
    }

    /**
     * Updates the schema of a Cloud Spanner database by
     * creating/altering/dropping tables, columns, indexes, etc. The returned
     * [long-running operation][google.longrunning.Operation] will have a name of
     * the format `<database_name>/operations/<operation_id>` and can be used to
     * track execution of the schema change(s). The
     * [metadata][google.longrunning.Operation.metadata] field type is
     * [UpdateDatabaseDdlMetadata][google.spanner.admin.database.v1.UpdateDatabaseDdlMetadata].  The operation has no response.
     *
     * Sample code:
     * ```
     * $databaseAdminClient = new DatabaseAdminClient();
     * try {
     *     $formattedDatabase = $databaseAdminClient->databaseName('[PROJECT]', '[INSTANCE]', '[DATABASE]');
     *     $statements = [];
     *     $operationResponse = $databaseAdminClient->updateDatabaseDdl($formattedDatabase, $statements);
     *     $operationResponse->pollUntilComplete();
     *     if ($operationResponse->operationSucceeded()) {
     *         // operation succeeded and returns no value
     *     } else {
     *         $error = $operationResponse->getError();
     *         // handleError($error)
     *     }
     *
     *
     *     // Alternatively:
     *
     *     // start the operation, keep the operation name, and resume later
     *     $operationResponse = $databaseAdminClient->updateDatabaseDdl($formattedDatabase, $statements);
     *     $operationName = $operationResponse->getName();
     *     // ... do other work
     *     $newOperationResponse = $databaseAdminClient->resumeOperation($operationName, 'updateDatabaseDdl');
     *     while (!$newOperationResponse->isDone()) {
     *         // ... do other work
     *         $newOperationResponse->reload();
     *     }
     *     if ($newOperationResponse->operationSucceeded()) {
     *       // operation succeeded and returns no value
     *     } else {
     *       $error = $newOperationResponse->getError();
     *       // handleError($error)
     *     }
     * } finally {
     *     $databaseAdminClient->close();
     * }
     * ```
     *
     * @param string   $database     Required. The database to update.
     * @param string[] $statements   Required. DDL statements to be applied to the database.
     * @param array    $optionalArgs {
     *                               Optional.
     *
     *     @type string $operationId
     *          If empty, the new update request is assigned an
     *          automatically-generated operation ID. Otherwise, `operation_id`
     *          is used to construct the name of the resulting
     *          [Operation][google.longrunning.Operation].
     *
     *          Specifying an explicit operation ID simplifies determining
     *          whether the statements were executed in the event that the
     *          [UpdateDatabaseDdl][google.spanner.admin.database.v1.DatabaseAdmin.UpdateDatabaseDdl] call is replayed,
     *          or the return value is otherwise lost: the [database][google.spanner.admin.database.v1.UpdateDatabaseDdlRequest.database] and
     *          `operation_id` fields can be combined to form the
     *          [name][google.longrunning.Operation.name] of the resulting
     *          [longrunning.Operation][google.longrunning.Operation]: `<database>/operations/<operation_id>`.
     *
     *          `operation_id` should be unique within the database, and must be
     *          a valid identifier: `[a-z][a-z0-9_]*`. Note that
     *          automatically-generated operation IDs always begin with an
     *          underscore. If the named operation already exists,
     *          [UpdateDatabaseDdl][google.spanner.admin.database.v1.DatabaseAdmin.UpdateDatabaseDdl] returns
     *          `ALREADY_EXISTS`.
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\ApiCore\OperationResponse
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function updateDatabaseDdl($database, $statements, array $optionalArgs = [])
    {
        $request = new UpdateDatabaseDdlRequest();
        $request->setDatabase($database);
        $request->setStatements($statements);
        if (isset($optionalArgs['operationId'])) {
            $request->setOperationId($optionalArgs['operationId']);
        }

        $requestParams = new RequestParamsHeaderDescriptor([
          'database' => $request->getDatabase(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startOperationsCall(
            'UpdateDatabaseDdl',
            $optionalArgs,
            $request,
            $this->getOperationsClient()
        )->wait();
    }

    /**
     * Starts creating a new Cloud Spanner Backup.
     * The returned backup [long-running operation][google.longrunning.Operation]
     * will have a name of the format
     * `projects/<project>/instances/<instance>/backups/<backup>/operations/<operation_id>`
     * and can be used to track creation of the backup. The
     * [metadata][google.longrunning.Operation.metadata] field type is
     * [CreateBackupMetadata][google.spanner.admin.database.v1.CreateBackupMetadata]. The
     * [response][google.longrunning.Operation.response] field type is
     * [Backup][google.spanner.admin.database.v1.Backup], if successful. Cancelling the returned operation will stop the
     * creation and delete the backup.
     * There can be only one pending backup creation per database. Backup creation
     * of different databases can run concurrently.
     *
     * Sample code:
     * ```
     * $databaseAdminClient = new DatabaseAdminClient();
     * try {
     *     $formattedParent = $databaseAdminClient->instanceName('[PROJECT]', '[INSTANCE]');
     *     $backupId = '';
     *     $backup = new Backup();
     *     $operationResponse = $databaseAdminClient->createBackup($formattedParent, $backupId, $backup);
     *     $operationResponse->pollUntilComplete();
     *     if ($operationResponse->operationSucceeded()) {
     *         $result = $operationResponse->getResult();
     *         // doSomethingWith($result)
     *     } else {
     *         $error = $operationResponse->getError();
     *         // handleError($error)
     *     }
     *
     *
     *     // Alternatively:
     *
     *     // start the operation, keep the operation name, and resume later
     *     $operationResponse = $databaseAdminClient->createBackup($formattedParent, $backupId, $backup);
     *     $operationName = $operationResponse->getName();
     *     // ... do other work
     *     $newOperationResponse = $databaseAdminClient->resumeOperation($operationName, 'createBackup');
     *     while (!$newOperationResponse->isDone()) {
     *         // ... do other work
     *         $newOperationResponse->reload();
     *     }
     *     if ($newOperationResponse->operationSucceeded()) {
     *       $result = $newOperationResponse->getResult();
     *       // doSomethingWith($result)
     *     } else {
     *       $error = $newOperationResponse->getError();
     *       // handleError($error)
     *     }
     * } finally {
     *     $databaseAdminClient->close();
     * }
     * ```
     *
     * @param string $parent       Required. The name of the instance in which the backup will be
     *                             created. This must be the same instance that contains the database the
     *                             backup will be created from. The backup will be stored in the
     *                             location(s) specified in the instance configuration of this
     *                             instance. Values are of the form
     *                             `projects/<project>/instances/<instance>`.
     * @param string $backupId     Required. The id of the backup to be created. The `backup_id` appended to
     *                             `parent` forms the full backup name of the form
     *                             `projects/<project>/instances/<instance>/backups/<backup_id>`.
     * @param Backup $backup       Required. The backup to create.
     * @param array  $optionalArgs {
     *                             Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\ApiCore\OperationResponse
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function createBackup($parent, $backupId, $backup, array $optionalArgs = [])
    {
        $request = new CreateBackupRequest();
        $request->setParent($parent);
        $request->setBackupId($backupId);
        $request->setBackup($backup);

        $requestParams = new RequestParamsHeaderDescriptor([
          'parent' => $request->getParent(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startOperationsCall(
            'CreateBackup',
            $optionalArgs,
            $request,
            $this->getOperationsClient()
        )->wait();
    }

    /**
     * Create a new database by restoring from a completed backup. The new
     * database must be in the same project and in an instance with the same
     * instance configuration as the instance containing
     * the backup. The returned database [long-running
     * operation][google.longrunning.Operation] has a name of the format
     * `projects/<project>/instances/<instance>/databases/<database>/operations/<operation_id>`,
     * and can be used to track the progress of the operation, and to cancel it.
     * The [metadata][google.longrunning.Operation.metadata] field type is
     * [RestoreDatabaseMetadata][google.spanner.admin.database.v1.RestoreDatabaseMetadata].
     * The [response][google.longrunning.Operation.response] type
     * is [Database][google.spanner.admin.database.v1.Database], if
     * successful. Cancelling the returned operation will stop the restore and
     * delete the database.
     * There can be only one database being restored into an instance at a time.
     * Once the restore operation completes, a new restore operation can be
     * initiated, without waiting for the optimize operation associated with the
     * first restore to complete.
     *
     * Sample code:
     * ```
     * $databaseAdminClient = new DatabaseAdminClient();
     * try {
     *     $formattedParent = $databaseAdminClient->instanceName('[PROJECT]', '[INSTANCE]');
     *     $databaseId = '';
     *     $operationResponse = $databaseAdminClient->restoreDatabase($formattedParent, $databaseId);
     *     $operationResponse->pollUntilComplete();
     *     if ($operationResponse->operationSucceeded()) {
     *         $result = $operationResponse->getResult();
     *         // doSomethingWith($result)
     *     } else {
     *         $error = $operationResponse->getError();
     *         // handleError($error)
     *     }
     *
     *
     *     // Alternatively:
     *
     *     // start the operation, keep the operation name, and resume later
     *     $operationResponse = $databaseAdminClient->restoreDatabase($formattedParent, $databaseId);
     *     $operationName = $operationResponse->getName();
     *     // ... do other work
     *     $newOperationResponse = $databaseAdminClient->resumeOperation($operationName, 'restoreDatabase');
     *     while (!$newOperationResponse->isDone()) {
     *         // ... do other work
     *         $newOperationResponse->reload();
     *     }
     *     if ($newOperationResponse->operationSucceeded()) {
     *       $result = $newOperationResponse->getResult();
     *       // doSomethingWith($result)
     *     } else {
     *       $error = $newOperationResponse->getError();
     *       // handleError($error)
     *     }
     * } finally {
     *     $databaseAdminClient->close();
     * }
     * ```
     *
     * @param string $parent       Required. The name of the instance in which to create the
     *                             restored database. This instance must be in the same project and
     *                             have the same instance configuration as the instance containing
     *                             the source backup. Values are of the form
     *                             `projects/<project>/instances/<instance>`.
     * @param string $databaseId   Required. The id of the database to create and restore to. This
     *                             database must not already exist. The `database_id` appended to
     *                             `parent` forms the full database name of the form
     *                             `projects/<project>/instances/<instance>/databases/<database_id>`.
     * @param array  $optionalArgs {
     *                             Optional.
     *
     *     @type string $backup
     *          Name of the backup from which to restore.  Values are of the form
     *          `projects/<project>/instances/<instance>/backups/<backup>`.
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\ApiCore\OperationResponse
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function restoreDatabase($parent, $databaseId, array $optionalArgs = [])
    {
        $request = new RestoreDatabaseRequest();
        $request->setParent($parent);
        $request->setDatabaseId($databaseId);
        if (isset($optionalArgs['backup'])) {
            $request->setBackup($optionalArgs['backup']);
        }

        $requestParams = new RequestParamsHeaderDescriptor([
          'parent' => $request->getParent(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startOperationsCall(
            'RestoreDatabase',
            $optionalArgs,
            $request,
            $this->getOperationsClient()
        )->wait();
    }

    /**
     * Lists Cloud Spanner databases.
     *
     * Sample code:
     * ```
     * $databaseAdminClient = new DatabaseAdminClient();
     * try {
     *     $formattedParent = $databaseAdminClient->instanceName('[PROJECT]', '[INSTANCE]');
     *     // Iterate over pages of elements
     *     $pagedResponse = $databaseAdminClient->listDatabases($formattedParent);
     *     foreach ($pagedResponse->iteratePages() as $page) {
     *         foreach ($page as $element) {
     *             // doSomethingWith($element);
     *         }
     *     }
     *
     *
     *     // Alternatively:
     *
     *     // Iterate through all elements
     *     $pagedResponse = $databaseAdminClient->listDatabases($formattedParent);
     *     foreach ($pagedResponse->iterateAllElements() as $element) {
     *         // doSomethingWith($element);
     *     }
     * } finally {
     *     $databaseAdminClient->close();
     * }
     * ```
     *
     * @param string $parent       Required. The instance whose databases should be listed.
     *                             Values are of the form `projects/<project>/instances/<instance>`.
     * @param array  $optionalArgs {
     *                             Optional.
     *
     *     @type int $pageSize
     *          The maximum number of resources contained in the underlying API
     *          response. The API may return fewer values in a page, even if
     *          there are additional values to be retrieved.
     *     @type string $pageToken
     *          A page token is used to specify a page of values to be returned.
     *          If no page token is specified (the default), the first page
     *          of values will be returned. Any page token used here must have
     *          been generated by a previous call to the API.
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\ApiCore\PagedListResponse
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function listDatabases($parent, array $optionalArgs = [])
    {
        $request = new ListDatabasesRequest();
        $request->setParent($parent);
        if (isset($optionalArgs['pageSize'])) {
            $request->setPageSize($optionalArgs['pageSize']);
        }
        if (isset($optionalArgs['pageToken'])) {
            $request->setPageToken($optionalArgs['pageToken']);
        }

        $requestParams = new RequestParamsHeaderDescriptor([
          'parent' => $request->getParent(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->getPagedListResponse(
            'ListDatabases',
            $optionalArgs,
            ListDatabasesResponse::class,
            $request
        );
    }

    /**
     * Gets the state of a Cloud Spanner database.
     *
     * Sample code:
     * ```
     * $databaseAdminClient = new DatabaseAdminClient();
     * try {
     *     $formattedName = $databaseAdminClient->databaseName('[PROJECT]', '[INSTANCE]', '[DATABASE]');
     *     $response = $databaseAdminClient->getDatabase($formattedName);
     * } finally {
     *     $databaseAdminClient->close();
     * }
     * ```
     *
     * @param string $name         Required. The name of the requested database. Values are of the form
     *                             `projects/<project>/instances/<instance>/databases/<database>`.
     * @param array  $optionalArgs {
     *                             Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Spanner\Admin\Database\V1\Database
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function getDatabase($name, array $optionalArgs = [])
    {
        $request = new GetDatabaseRequest();
        $request->setName($name);

        $requestParams = new RequestParamsHeaderDescriptor([
          'name' => $request->getName(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startCall(
            'GetDatabase',
            Database::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Drops (aka deletes) a Cloud Spanner database.
     * Completed backups for the database will be retained according to their
     * `expire_time`.
     *
     * Sample code:
     * ```
     * $databaseAdminClient = new DatabaseAdminClient();
     * try {
     *     $formattedDatabase = $databaseAdminClient->databaseName('[PROJECT]', '[INSTANCE]', '[DATABASE]');
     *     $databaseAdminClient->dropDatabase($formattedDatabase);
     * } finally {
     *     $databaseAdminClient->close();
     * }
     * ```
     *
     * @param string $database     Required. The database to be dropped.
     * @param array  $optionalArgs {
     *                             Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function dropDatabase($database, array $optionalArgs = [])
    {
        $request = new DropDatabaseRequest();
        $request->setDatabase($database);

        $requestParams = new RequestParamsHeaderDescriptor([
          'database' => $request->getDatabase(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startCall(
            'DropDatabase',
            GPBEmpty::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Returns the schema of a Cloud Spanner database as a list of formatted
     * DDL statements. This method does not show pending schema updates, those may
     * be queried using the [Operations][google.longrunning.Operations] API.
     *
     * Sample code:
     * ```
     * $databaseAdminClient = new DatabaseAdminClient();
     * try {
     *     $formattedDatabase = $databaseAdminClient->databaseName('[PROJECT]', '[INSTANCE]', '[DATABASE]');
     *     $response = $databaseAdminClient->getDatabaseDdl($formattedDatabase);
     * } finally {
     *     $databaseAdminClient->close();
     * }
     * ```
     *
     * @param string $database     Required. The database whose schema we wish to get.
     * @param array  $optionalArgs {
     *                             Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Spanner\Admin\Database\V1\GetDatabaseDdlResponse
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function getDatabaseDdl($database, array $optionalArgs = [])
    {
        $request = new GetDatabaseDdlRequest();
        $request->setDatabase($database);

        $requestParams = new RequestParamsHeaderDescriptor([
          'database' => $request->getDatabase(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startCall(
            'GetDatabaseDdl',
            GetDatabaseDdlResponse::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Sets the access control policy on a database or backup resource.
     * Replaces any existing policy.
     *
     * Authorization requires `spanner.databases.setIamPolicy`
     * permission on [resource][google.iam.v1.SetIamPolicyRequest.resource].
     * For backups, authorization requires `spanner.backups.setIamPolicy`
     * permission on [resource][google.iam.v1.SetIamPolicyRequest.resource].
     *
     * Sample code:
     * ```
     * $databaseAdminClient = new DatabaseAdminClient();
     * try {
     *     $resource = '';
     *     $policy = new Policy();
     *     $response = $databaseAdminClient->setIamPolicy($resource, $policy);
     * } finally {
     *     $databaseAdminClient->close();
     * }
     * ```
     *
     * @param string $resource     REQUIRED: The resource for which the policy is being specified.
     *                             See the operation documentation for the appropriate value for this field.
     * @param Policy $policy       REQUIRED: The complete policy to be applied to the `resource`. The size of
     *                             the policy is limited to a few 10s of KB. An empty policy is a
     *                             valid policy but certain Cloud Platform services (such as Projects)
     *                             might reject them.
     * @param array  $optionalArgs {
     *                             Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Iam\V1\Policy
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function setIamPolicy($resource, $policy, array $optionalArgs = [])
    {
        $request = new SetIamPolicyRequest();
        $request->setResource($resource);
        $request->setPolicy($policy);

        $requestParams = new RequestParamsHeaderDescriptor([
          'resource' => $request->getResource(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startCall(
            'SetIamPolicy',
            Policy::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Gets the access control policy for a database or backup resource.
     * Returns an empty policy if a database or backup exists but does not have a
     * policy set.
     *
     * Authorization requires `spanner.databases.getIamPolicy` permission on
     * [resource][google.iam.v1.GetIamPolicyRequest.resource].
     * For backups, authorization requires `spanner.backups.getIamPolicy`
     * permission on [resource][google.iam.v1.GetIamPolicyRequest.resource].
     *
     * Sample code:
     * ```
     * $databaseAdminClient = new DatabaseAdminClient();
     * try {
     *     $resource = '';
     *     $response = $databaseAdminClient->getIamPolicy($resource);
     * } finally {
     *     $databaseAdminClient->close();
     * }
     * ```
     *
     * @param string $resource     REQUIRED: The resource for which the policy is being requested.
     *                             See the operation documentation for the appropriate value for this field.
     * @param array  $optionalArgs {
     *                             Optional.
     *
     *     @type GetPolicyOptions $options
     *          OPTIONAL: A `GetPolicyOptions` object for specifying options to
     *          `GetIamPolicy`. This field is only used by Cloud IAM.
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Iam\V1\Policy
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function getIamPolicy($resource, array $optionalArgs = [])
    {
        $request = new GetIamPolicyRequest();
        $request->setResource($resource);
        if (isset($optionalArgs['options'])) {
            $request->setOptions($optionalArgs['options']);
        }

        $requestParams = new RequestParamsHeaderDescriptor([
          'resource' => $request->getResource(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startCall(
            'GetIamPolicy',
            Policy::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Returns permissions that the caller has on the specified database or backup
     * resource.
     *
     * Attempting this RPC on a non-existent Cloud Spanner database will
     * result in a NOT_FOUND error if the user has
     * `spanner.databases.list` permission on the containing Cloud
     * Spanner instance. Otherwise returns an empty set of permissions.
     * Calling this method on a backup that does not exist will
     * result in a NOT_FOUND error if the user has
     * `spanner.backups.list` permission on the containing instance.
     *
     * Sample code:
     * ```
     * $databaseAdminClient = new DatabaseAdminClient();
     * try {
     *     $resource = '';
     *     $permissions = [];
     *     $response = $databaseAdminClient->testIamPermissions($resource, $permissions);
     * } finally {
     *     $databaseAdminClient->close();
     * }
     * ```
     *
     * @param string   $resource     REQUIRED: The resource for which the policy detail is being requested.
     *                               See the operation documentation for the appropriate value for this field.
     * @param string[] $permissions  The set of permissions to check for the `resource`. Permissions with
     *                               wildcards (such as '*' or 'storage.*') are not allowed. For more
     *                               information see
     *                               [IAM Overview](https://cloud.google.com/iam/docs/overview#permissions).
     * @param array    $optionalArgs {
     *                               Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Iam\V1\TestIamPermissionsResponse
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function testIamPermissions($resource, $permissions, array $optionalArgs = [])
    {
        $request = new TestIamPermissionsRequest();
        $request->setResource($resource);
        $request->setPermissions($permissions);

        $requestParams = new RequestParamsHeaderDescriptor([
          'resource' => $request->getResource(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startCall(
            'TestIamPermissions',
            TestIamPermissionsResponse::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Gets metadata on a pending or completed [Backup][google.spanner.admin.database.v1.Backup].
     *
     * Sample code:
     * ```
     * $databaseAdminClient = new DatabaseAdminClient();
     * try {
     *     $formattedName = $databaseAdminClient->backupName('[PROJECT]', '[INSTANCE]', '[BACKUP]');
     *     $response = $databaseAdminClient->getBackup($formattedName);
     * } finally {
     *     $databaseAdminClient->close();
     * }
     * ```
     *
     * @param string $name         Required. Name of the backup.
     *                             Values are of the form
     *                             `projects/<project>/instances/<instance>/backups/<backup>`.
     * @param array  $optionalArgs {
     *                             Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Spanner\Admin\Database\V1\Backup
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function getBackup($name, array $optionalArgs = [])
    {
        $request = new GetBackupRequest();
        $request->setName($name);

        $requestParams = new RequestParamsHeaderDescriptor([
          'name' => $request->getName(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startCall(
            'GetBackup',
            Backup::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Updates a pending or completed [Backup][google.spanner.admin.database.v1.Backup].
     *
     * Sample code:
     * ```
     * $databaseAdminClient = new DatabaseAdminClient();
     * try {
     *     $backup = new Backup();
     *     $updateMask = new FieldMask();
     *     $response = $databaseAdminClient->updateBackup($backup, $updateMask);
     * } finally {
     *     $databaseAdminClient->close();
     * }
     * ```
     *
     * @param Backup    $backup       Required. The backup to update. `backup.name`, and the fields to be updated
     *                                as specified by `update_mask` are required. Other fields are ignored.
     *                                Update is only supported for the following fields:
     *                                * `backup.expire_time`.
     * @param FieldMask $updateMask   Required. A mask specifying which fields (e.g. `expire_time`) in the
     *                                Backup resource should be updated. This mask is relative to the Backup
     *                                resource, not to the request message. The field mask must always be
     *                                specified; this prevents any future fields from being erased accidentally
     *                                by clients that do not know about them.
     * @param array     $optionalArgs {
     *                                Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Spanner\Admin\Database\V1\Backup
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function updateBackup($backup, $updateMask, array $optionalArgs = [])
    {
        $request = new UpdateBackupRequest();
        $request->setBackup($backup);
        $request->setUpdateMask($updateMask);

        $requestParams = new RequestParamsHeaderDescriptor([
          'backup.name' => $request->getBackup()->getName(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startCall(
            'UpdateBackup',
            Backup::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Deletes a pending or completed [Backup][google.spanner.admin.database.v1.Backup].
     *
     * Sample code:
     * ```
     * $databaseAdminClient = new DatabaseAdminClient();
     * try {
     *     $formattedName = $databaseAdminClient->backupName('[PROJECT]', '[INSTANCE]', '[BACKUP]');
     *     $databaseAdminClient->deleteBackup($formattedName);
     * } finally {
     *     $databaseAdminClient->close();
     * }
     * ```
     *
     * @param string $name         Required. Name of the backup to delete.
     *                             Values are of the form
     *                             `projects/<project>/instances/<instance>/backups/<backup>`.
     * @param array  $optionalArgs {
     *                             Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function deleteBackup($name, array $optionalArgs = [])
    {
        $request = new DeleteBackupRequest();
        $request->setName($name);

        $requestParams = new RequestParamsHeaderDescriptor([
          'name' => $request->getName(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startCall(
            'DeleteBackup',
            GPBEmpty::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Lists completed and pending backups.
     * Backups returned are ordered by `create_time` in descending order,
     * starting from the most recent `create_time`.
     *
     * Sample code:
     * ```
     * $databaseAdminClient = new DatabaseAdminClient();
     * try {
     *     $formattedParent = $databaseAdminClient->instanceName('[PROJECT]', '[INSTANCE]');
     *     // Iterate over pages of elements
     *     $pagedResponse = $databaseAdminClient->listBackups($formattedParent);
     *     foreach ($pagedResponse->iteratePages() as $page) {
     *         foreach ($page as $element) {
     *             // doSomethingWith($element);
     *         }
     *     }
     *
     *
     *     // Alternatively:
     *
     *     // Iterate through all elements
     *     $pagedResponse = $databaseAdminClient->listBackups($formattedParent);
     *     foreach ($pagedResponse->iterateAllElements() as $element) {
     *         // doSomethingWith($element);
     *     }
     * } finally {
     *     $databaseAdminClient->close();
     * }
     * ```
     *
     * @param string $parent       Required. The instance to list backups from.  Values are of the
     *                             form `projects/<project>/instances/<instance>`.
     * @param array  $optionalArgs {
     *                             Optional.
     *
     *     @type string $filter
     *          An expression that filters the list of returned backups.
     *
     *          A filter expression consists of a field name, a comparison operator, and a
     *          value for filtering.
     *          The value must be a string, a number, or a boolean. The comparison operator
     *          must be one of: `<`, `>`, `<=`, `>=`, `!=`, `=`, or `:`.
     *          Colon `:` is the contains operator. Filter rules are not case sensitive.
     *
     *          The following fields in the [Backup][google.spanner.admin.database.v1.Backup] are eligible for filtering:
     *
     *            * `name`
     *            * `database`
     *            * `state`
     *            * `create_time` (and values are of the format YYYY-MM-DDTHH:MM:SSZ)
     *            * `expire_time` (and values are of the format YYYY-MM-DDTHH:MM:SSZ)
     *            * `size_bytes`
     *
     *          You can combine multiple expressions by enclosing each expression in
     *          parentheses. By default, expressions are combined with AND logic, but
     *          you can specify AND, OR, and NOT logic explicitly.
     *
     *          Here are a few examples:
     *
     *            * `name:Howl` - The backup's name contains the string "howl".
     *            * `database:prod`
     *                   - The database's name contains the string "prod".
     *            * `state:CREATING` - The backup is pending creation.
     *            * `state:READY` - The backup is fully created and ready for use.
     *            * `(name:howl) AND (create_time < \"2018-03-28T14:50:00Z\")`
     *                   - The backup name contains the string "howl" and `create_time`
     *                       of the backup is before 2018-03-28T14:50:00Z.
     *            * `expire_time < \"2018-03-28T14:50:00Z\"`
     *                   - The backup `expire_time` is before 2018-03-28T14:50:00Z.
     *            * `size_bytes > 10000000000` - The backup's size is greater than 10GB
     *     @type int $pageSize
     *          The maximum number of resources contained in the underlying API
     *          response. The API may return fewer values in a page, even if
     *          there are additional values to be retrieved.
     *     @type string $pageToken
     *          A page token is used to specify a page of values to be returned.
     *          If no page token is specified (the default), the first page
     *          of values will be returned. Any page token used here must have
     *          been generated by a previous call to the API.
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\ApiCore\PagedListResponse
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function listBackups($parent, array $optionalArgs = [])
    {
        $request = new ListBackupsRequest();
        $request->setParent($parent);
        if (isset($optionalArgs['filter'])) {
            $request->setFilter($optionalArgs['filter']);
        }
        if (isset($optionalArgs['pageSize'])) {
            $request->setPageSize($optionalArgs['pageSize']);
        }
        if (isset($optionalArgs['pageToken'])) {
            $request->setPageToken($optionalArgs['pageToken']);
        }

        $requestParams = new RequestParamsHeaderDescriptor([
          'parent' => $request->getParent(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->getPagedListResponse(
            'ListBackups',
            $optionalArgs,
            ListBackupsResponse::class,
            $request
        );
    }

    /**
     * Lists database [longrunning-operations][google.longrunning.Operation].
     * A database operation has a name of the form
     * `projects/<project>/instances/<instance>/databases/<database>/operations/<operation>`.
     * The long-running operation
     * [metadata][google.longrunning.Operation.metadata] field type
     * `metadata.type_url` describes the type of the metadata. Operations returned
     * include those that have completed/failed/canceled within the last 7 days,
     * and pending operations.
     *
     * Sample code:
     * ```
     * $databaseAdminClient = new DatabaseAdminClient();
     * try {
     *     $formattedParent = $databaseAdminClient->instanceName('[PROJECT]', '[INSTANCE]');
     *     // Iterate over pages of elements
     *     $pagedResponse = $databaseAdminClient->listDatabaseOperations($formattedParent);
     *     foreach ($pagedResponse->iteratePages() as $page) {
     *         foreach ($page as $element) {
     *             // doSomethingWith($element);
     *         }
     *     }
     *
     *
     *     // Alternatively:
     *
     *     // Iterate through all elements
     *     $pagedResponse = $databaseAdminClient->listDatabaseOperations($formattedParent);
     *     foreach ($pagedResponse->iterateAllElements() as $element) {
     *         // doSomethingWith($element);
     *     }
     * } finally {
     *     $databaseAdminClient->close();
     * }
     * ```
     *
     * @param string $parent       Required. The instance of the database operations.
     *                             Values are of the form `projects/<project>/instances/<instance>`.
     * @param array  $optionalArgs {
     *                             Optional.
     *
     *     @type string $filter
     *          An expression that filters the list of returned operations.
     *
     *          A filter expression consists of a field name, a
     *          comparison operator, and a value for filtering.
     *          The value must be a string, a number, or a boolean. The comparison operator
     *          must be one of: `<`, `>`, `<=`, `>=`, `!=`, `=`, or `:`.
     *          Colon `:` is the contains operator. Filter rules are not case sensitive.
     *
     *          The following fields in the [Operation][google.longrunning.Operation]
     *          are eligible for filtering:
     *
     *            * `name` - The name of the long-running operation
     *            * `done` - False if the operation is in progress, else true.
     *            * `metadata.&#64;type` - the type of metadata. For example, the type string
     *               for [RestoreDatabaseMetadata][google.spanner.admin.database.v1.RestoreDatabaseMetadata] is
     *               `type.googleapis.com/google.spanner.admin.database.v1.RestoreDatabaseMetadata`.
     *            * `metadata.<field_name>` - any field in metadata.value.
     *            * `error` - Error associated with the long-running operation.
     *            * `response.&#64;type` - the type of response.
     *            * `response.<field_name>` - any field in response.value.
     *
     *          You can combine multiple expressions by enclosing each expression in
     *          parentheses. By default, expressions are combined with AND logic. However,
     *          you can specify AND, OR, and NOT logic explicitly.
     *
     *          Here are a few examples:
     *
     *            * `done:true` - The operation is complete.
     *            * `(metadata.&#64;type=type.googleapis.com/google.spanner.admin.database.v1.RestoreDatabaseMetadata) AND` <br/>
     *              `(metadata.source_type:BACKUP) AND` <br/>
     *              `(metadata.backup_info.backup:backup_howl) AND` <br/>
     *              `(metadata.name:restored_howl) AND` <br/>
     *              `(metadata.progress.start_time < \"2018-03-28T14:50:00Z\") AND` <br/>
     *              `(error:*)` - Return operations where:
     *              * The operation's metadata type is [RestoreDatabaseMetadata][google.spanner.admin.database.v1.RestoreDatabaseMetadata].
     *              * The database is restored from a backup.
     *              * The backup name contains "backup_howl".
     *              * The restored database's name contains "restored_howl".
     *              * The operation started before 2018-03-28T14:50:00Z.
     *              * The operation resulted in an error.
     *     @type int $pageSize
     *          The maximum number of resources contained in the underlying API
     *          response. The API may return fewer values in a page, even if
     *          there are additional values to be retrieved.
     *     @type string $pageToken
     *          A page token is used to specify a page of values to be returned.
     *          If no page token is specified (the default), the first page
     *          of values will be returned. Any page token used here must have
     *          been generated by a previous call to the API.
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\ApiCore\PagedListResponse
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function listDatabaseOperations($parent, array $optionalArgs = [])
    {
        $request = new ListDatabaseOperationsRequest();
        $request->setParent($parent);
        if (isset($optionalArgs['filter'])) {
            $request->setFilter($optionalArgs['filter']);
        }
        if (isset($optionalArgs['pageSize'])) {
            $request->setPageSize($optionalArgs['pageSize']);
        }
        if (isset($optionalArgs['pageToken'])) {
            $request->setPageToken($optionalArgs['pageToken']);
        }

        $requestParams = new RequestParamsHeaderDescriptor([
          'parent' => $request->getParent(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->getPagedListResponse(
            'ListDatabaseOperations',
            $optionalArgs,
            ListDatabaseOperationsResponse::class,
            $request
        );
    }

    /**
     * Lists the backup [long-running operations][google.longrunning.Operation] in
     * the given instance. A backup operation has a name of the form
     * `projects/<project>/instances/<instance>/backups/<backup>/operations/<operation>`.
     * The long-running operation
     * [metadata][google.longrunning.Operation.metadata] field type
     * `metadata.type_url` describes the type of the metadata. Operations returned
     * include those that have completed/failed/canceled within the last 7 days,
     * and pending operations. Operations returned are ordered by
     * `operation.metadata.value.progress.start_time` in descending order starting
     * from the most recently started operation.
     *
     * Sample code:
     * ```
     * $databaseAdminClient = new DatabaseAdminClient();
     * try {
     *     $formattedParent = $databaseAdminClient->instanceName('[PROJECT]', '[INSTANCE]');
     *     // Iterate over pages of elements
     *     $pagedResponse = $databaseAdminClient->listBackupOperations($formattedParent);
     *     foreach ($pagedResponse->iteratePages() as $page) {
     *         foreach ($page as $element) {
     *             // doSomethingWith($element);
     *         }
     *     }
     *
     *
     *     // Alternatively:
     *
     *     // Iterate through all elements
     *     $pagedResponse = $databaseAdminClient->listBackupOperations($formattedParent);
     *     foreach ($pagedResponse->iterateAllElements() as $element) {
     *         // doSomethingWith($element);
     *     }
     * } finally {
     *     $databaseAdminClient->close();
     * }
     * ```
     *
     * @param string $parent       Required. The instance of the backup operations. Values are of
     *                             the form `projects/<project>/instances/<instance>`.
     * @param array  $optionalArgs {
     *                             Optional.
     *
     *     @type string $filter
     *          An expression that filters the list of returned backup operations.
     *
     *          A filter expression consists of a field name, a
     *          comparison operator, and a value for filtering.
     *          The value must be a string, a number, or a boolean. The comparison operator
     *          must be one of: `<`, `>`, `<=`, `>=`, `!=`, `=`, or `:`.
     *          Colon `:` is the contains operator. Filter rules are not case sensitive.
     *
     *          The following fields in the [operation][google.longrunning.Operation]
     *          are eligible for filtering:
     *
     *            * `name` - The name of the long-running operation
     *            * `done` - False if the operation is in progress, else true.
     *            * `metadata.&#64;type` - the type of metadata. For example, the type string
     *               for [CreateBackupMetadata][google.spanner.admin.database.v1.CreateBackupMetadata] is
     *               `type.googleapis.com/google.spanner.admin.database.v1.CreateBackupMetadata`.
     *            * `metadata.<field_name>` - any field in metadata.value.
     *            * `error` - Error associated with the long-running operation.
     *            * `response.&#64;type` - the type of response.
     *            * `response.<field_name>` - any field in response.value.
     *
     *          You can combine multiple expressions by enclosing each expression in
     *          parentheses. By default, expressions are combined with AND logic, but
     *          you can specify AND, OR, and NOT logic explicitly.
     *
     *          Here are a few examples:
     *
     *            * `done:true` - The operation is complete.
     *            * `metadata.database:prod` - The database the backup was taken from has
     *               a name containing the string "prod".
     *            * `(metadata.&#64;type=type.googleapis.com/google.spanner.admin.database.v1.CreateBackupMetadata) AND` <br/>
     *              `(metadata.name:howl) AND` <br/>
     *              `(metadata.progress.start_time < \"2018-03-28T14:50:00Z\") AND` <br/>
     *              `(error:*)` - Returns operations where:
     *              * The operation's metadata type is [CreateBackupMetadata][google.spanner.admin.database.v1.CreateBackupMetadata].
     *              * The backup name contains the string "howl".
     *              * The operation started before 2018-03-28T14:50:00Z.
     *              * The operation resulted in an error.
     *     @type int $pageSize
     *          The maximum number of resources contained in the underlying API
     *          response. The API may return fewer values in a page, even if
     *          there are additional values to be retrieved.
     *     @type string $pageToken
     *          A page token is used to specify a page of values to be returned.
     *          If no page token is specified (the default), the first page
     *          of values will be returned. Any page token used here must have
     *          been generated by a previous call to the API.
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\ApiCore\PagedListResponse
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function listBackupOperations($parent, array $optionalArgs = [])
    {
        $request = new ListBackupOperationsRequest();
        $request->setParent($parent);
        if (isset($optionalArgs['filter'])) {
            $request->setFilter($optionalArgs['filter']);
        }
        if (isset($optionalArgs['pageSize'])) {
            $request->setPageSize($optionalArgs['pageSize']);
        }
        if (isset($optionalArgs['pageToken'])) {
            $request->setPageToken($optionalArgs['pageToken']);
        }

        $requestParams = new RequestParamsHeaderDescriptor([
          'parent' => $request->getParent(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->getPagedListResponse(
            'ListBackupOperations',
            $optionalArgs,
            ListBackupOperationsResponse::class,
            $request
        );
    }
}
