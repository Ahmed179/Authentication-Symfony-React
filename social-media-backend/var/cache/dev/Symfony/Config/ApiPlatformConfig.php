<?php

namespace Symfony\Config;

require_once __DIR__.\DIRECTORY_SEPARATOR.'ApiPlatform'.\DIRECTORY_SEPARATOR.'ValidatorConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'ApiPlatform'.\DIRECTORY_SEPARATOR.'EagerLoadingConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'ApiPlatform'.\DIRECTORY_SEPARATOR.'CollectionConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'ApiPlatform'.\DIRECTORY_SEPARATOR.'MappingConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'ApiPlatform'.\DIRECTORY_SEPARATOR.'DoctrineConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'ApiPlatform'.\DIRECTORY_SEPARATOR.'DoctrineMongodbOdmConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'ApiPlatform'.\DIRECTORY_SEPARATOR.'OauthConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'ApiPlatform'.\DIRECTORY_SEPARATOR.'GraphqlConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'ApiPlatform'.\DIRECTORY_SEPARATOR.'SwaggerConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'ApiPlatform'.\DIRECTORY_SEPARATOR.'HttpCacheConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'ApiPlatform'.\DIRECTORY_SEPARATOR.'MercureConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'ApiPlatform'.\DIRECTORY_SEPARATOR.'MessengerConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'ApiPlatform'.\DIRECTORY_SEPARATOR.'ElasticsearchConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'ApiPlatform'.\DIRECTORY_SEPARATOR.'OpenapiConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'ApiPlatform'.\DIRECTORY_SEPARATOR.'FormatsConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'ApiPlatform'.\DIRECTORY_SEPARATOR.'PatchFormatsConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'ApiPlatform'.\DIRECTORY_SEPARATOR.'ErrorFormatsConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'ApiPlatform'.\DIRECTORY_SEPARATOR.'DefaultsConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class ApiPlatformConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $title;
    private $description;
    private $version;
    private $showWebby;
    private $defaultOperationPathResolver;
    private $nameConverter;
    private $assetPackage;
    private $pathSegmentNameGenerator;
    private $allowPlainIdentifiers;
    private $validator;
    private $eagerLoading;
    private $enableFosUser;
    private $enableNelmioApiDoc;
    private $enableSwagger;
    private $enableSwaggerUi;
    private $enableReDoc;
    private $enableEntrypoint;
    private $enableDocs;
    private $enableProfiler;
    private $collection;
    private $mapping;
    private $resourceClassDirectories;
    private $doctrine;
    private $doctrineMongodbOdm;
    private $oauth;
    private $graphql;
    private $swagger;
    private $httpCache;
    private $mercure;
    private $messenger;
    private $elasticsearch;
    private $openapi;
    private $exceptionToStatus;
    private $formats;
    private $patchFormats;
    private $errorFormats;
    private $defaults;
    
    /**
     * The title of the API.
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function title($value): self
    {
        $this->title = $value;
    
        return $this;
    }
    
    /**
     * The description of the API.
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function description($value): self
    {
        $this->description = $value;
    
        return $this;
    }
    
    /**
     * The version of the API.
     * @default '0.0.0'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function version($value): self
    {
        $this->version = $value;
    
        return $this;
    }
    
    /**
     * If true, show Webby on the documentation page
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function showWebby($value): self
    {
        $this->showWebby = $value;
    
        return $this;
    }
    
    /**
     * Specify the default operation path resolver to use for generating resources operations path.
     * @default 'api_platform.operation_path_resolver.underscore'
     * @param ParamConfigurator|mixed $value
     * @deprecated The use of the `default_operation_path_resolver` has been deprecated in 2.1 and will be removed in 3.0. Use `path_segment_name_generator` instead.
     * @return $this
     */
    public function defaultOperationPathResolver($value): self
    {
        $this->defaultOperationPathResolver = $value;
    
        return $this;
    }
    
    /**
     * Specify a name converter to use.
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function nameConverter($value): self
    {
        $this->nameConverter = $value;
    
        return $this;
    }
    
    /**
     * Specify an asset package name to use.
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function assetPackage($value): self
    {
        $this->assetPackage = $value;
    
        return $this;
    }
    
    /**
     * Specify a path name generator to use.
     * @default 'api_platform.path_segment_name_generator.underscore'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function pathSegmentNameGenerator($value): self
    {
        $this->pathSegmentNameGenerator = $value;
    
        return $this;
    }
    
    /**
     * Allow plain identifiers, for example "id" instead of "@id" when denormalizing a relation.
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function allowPlainIdentifiers($value): self
    {
        $this->allowPlainIdentifiers = $value;
    
        return $this;
    }
    
    public function validator(array $value = []): \Symfony\Config\ApiPlatform\ValidatorConfig
    {
        if (null === $this->validator) {
            $this->validator = new \Symfony\Config\ApiPlatform\ValidatorConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "validator()" has already been initialized. You cannot pass values the second time you call validator().');
        }
    
        return $this->validator;
    }
    
    public function eagerLoading(array $value = []): \Symfony\Config\ApiPlatform\EagerLoadingConfig
    {
        if (null === $this->eagerLoading) {
            $this->eagerLoading = new \Symfony\Config\ApiPlatform\EagerLoadingConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "eagerLoading()" has already been initialized. You cannot pass values the second time you call eagerLoading().');
        }
    
        return $this->eagerLoading;
    }
    
    /**
     * Enable the FOSUserBundle integration.
     * @default false
     * @param ParamConfigurator|bool $value
     * @deprecated FOSUserBundle is not actively maintained anymore. Enabling the FOSUserBundle integration has been deprecated in 2.5 and will be removed in 3.0.
     * @return $this
     */
    public function enableFosUser($value): self
    {
        $this->enableFosUser = $value;
    
        return $this;
    }
    
    /**
     * Enable the NelmioApiDocBundle integration.
     * @default false
     * @param ParamConfigurator|bool $value
     * @deprecated Enabling the NelmioApiDocBundle integration has been deprecated in 2.2 and will be removed in 3.0. NelmioApiDocBundle 3 has native support for API Platform.
     * @return $this
     */
    public function enableNelmioApiDoc($value): self
    {
        $this->enableNelmioApiDoc = $value;
    
        return $this;
    }
    
    /**
     * Enable the Swagger documentation and export.
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function enableSwagger($value): self
    {
        $this->enableSwagger = $value;
    
        return $this;
    }
    
    /**
     * Enable Swagger UI
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function enableSwaggerUi($value): self
    {
        $this->enableSwaggerUi = $value;
    
        return $this;
    }
    
    /**
     * Enable ReDoc
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function enableReDoc($value): self
    {
        $this->enableReDoc = $value;
    
        return $this;
    }
    
    /**
     * Enable the entrypoint
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function enableEntrypoint($value): self
    {
        $this->enableEntrypoint = $value;
    
        return $this;
    }
    
    /**
     * Enable the docs
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function enableDocs($value): self
    {
        $this->enableDocs = $value;
    
        return $this;
    }
    
    /**
     * Enable the data collector and the WebProfilerBundle integration.
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function enableProfiler($value): self
    {
        $this->enableProfiler = $value;
    
        return $this;
    }
    
    public function collection(array $value = []): \Symfony\Config\ApiPlatform\CollectionConfig
    {
        if (null === $this->collection) {
            $this->collection = new \Symfony\Config\ApiPlatform\CollectionConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "collection()" has already been initialized. You cannot pass values the second time you call collection().');
        }
    
        return $this->collection;
    }
    
    public function mapping(array $value = []): \Symfony\Config\ApiPlatform\MappingConfig
    {
        if (null === $this->mapping) {
            $this->mapping = new \Symfony\Config\ApiPlatform\MappingConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "mapping()" has already been initialized. You cannot pass values the second time you call mapping().');
        }
    
        return $this->mapping;
    }
    
    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function resourceClassDirectories($value): self
    {
        $this->resourceClassDirectories = $value;
    
        return $this;
    }
    
    public function doctrine(array $value = []): \Symfony\Config\ApiPlatform\DoctrineConfig
    {
        if (null === $this->doctrine) {
            $this->doctrine = new \Symfony\Config\ApiPlatform\DoctrineConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "doctrine()" has already been initialized. You cannot pass values the second time you call doctrine().');
        }
    
        return $this->doctrine;
    }
    
    public function doctrineMongodbOdm(array $value = []): \Symfony\Config\ApiPlatform\DoctrineMongodbOdmConfig
    {
        if (null === $this->doctrineMongodbOdm) {
            $this->doctrineMongodbOdm = new \Symfony\Config\ApiPlatform\DoctrineMongodbOdmConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "doctrineMongodbOdm()" has already been initialized. You cannot pass values the second time you call doctrineMongodbOdm().');
        }
    
        return $this->doctrineMongodbOdm;
    }
    
    public function oauth(array $value = []): \Symfony\Config\ApiPlatform\OauthConfig
    {
        if (null === $this->oauth) {
            $this->oauth = new \Symfony\Config\ApiPlatform\OauthConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "oauth()" has already been initialized. You cannot pass values the second time you call oauth().');
        }
    
        return $this->oauth;
    }
    
    public function graphql(array $value = []): \Symfony\Config\ApiPlatform\GraphqlConfig
    {
        if (null === $this->graphql) {
            $this->graphql = new \Symfony\Config\ApiPlatform\GraphqlConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "graphql()" has already been initialized. You cannot pass values the second time you call graphql().');
        }
    
        return $this->graphql;
    }
    
    public function swagger(array $value = []): \Symfony\Config\ApiPlatform\SwaggerConfig
    {
        if (null === $this->swagger) {
            $this->swagger = new \Symfony\Config\ApiPlatform\SwaggerConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "swagger()" has already been initialized. You cannot pass values the second time you call swagger().');
        }
    
        return $this->swagger;
    }
    
    public function httpCache(array $value = []): \Symfony\Config\ApiPlatform\HttpCacheConfig
    {
        if (null === $this->httpCache) {
            $this->httpCache = new \Symfony\Config\ApiPlatform\HttpCacheConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "httpCache()" has already been initialized. You cannot pass values the second time you call httpCache().');
        }
    
        return $this->httpCache;
    }
    
    public function mercure(array $value = []): \Symfony\Config\ApiPlatform\MercureConfig
    {
        if (null === $this->mercure) {
            $this->mercure = new \Symfony\Config\ApiPlatform\MercureConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "mercure()" has already been initialized. You cannot pass values the second time you call mercure().');
        }
    
        return $this->mercure;
    }
    
    public function messenger(array $value = []): \Symfony\Config\ApiPlatform\MessengerConfig
    {
        if (null === $this->messenger) {
            $this->messenger = new \Symfony\Config\ApiPlatform\MessengerConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "messenger()" has already been initialized. You cannot pass values the second time you call messenger().');
        }
    
        return $this->messenger;
    }
    
    public function elasticsearch(array $value = []): \Symfony\Config\ApiPlatform\ElasticsearchConfig
    {
        if (null === $this->elasticsearch) {
            $this->elasticsearch = new \Symfony\Config\ApiPlatform\ElasticsearchConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "elasticsearch()" has already been initialized. You cannot pass values the second time you call elasticsearch().');
        }
    
        return $this->elasticsearch;
    }
    
    public function openapi(array $value = []): \Symfony\Config\ApiPlatform\OpenapiConfig
    {
        if (null === $this->openapi) {
            $this->openapi = new \Symfony\Config\ApiPlatform\OpenapiConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "openapi()" has already been initialized. You cannot pass values the second time you call openapi().');
        }
    
        return $this->openapi;
    }
    
    /**
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function exceptionToStatus(string $exception_class, $value): self
    {
        $this->exceptionToStatus[$exception_class] = $value;
    
        return $this;
    }
    
    public function formats(string $format, array $value = []): \Symfony\Config\ApiPlatform\FormatsConfig
    {
        if (!isset($this->formats[$format])) {
            return $this->formats[$format] = new \Symfony\Config\ApiPlatform\FormatsConfig($value);
        }
        if ([] === $value) {
            return $this->formats[$format];
        }
    
        throw new InvalidConfigurationException('The node created by "formats()" has already been initialized. You cannot pass values the second time you call formats().');
    }
    
    public function patchFormats(string $format, array $value = []): \Symfony\Config\ApiPlatform\PatchFormatsConfig
    {
        if (!isset($this->patchFormats[$format])) {
            return $this->patchFormats[$format] = new \Symfony\Config\ApiPlatform\PatchFormatsConfig($value);
        }
        if ([] === $value) {
            return $this->patchFormats[$format];
        }
    
        throw new InvalidConfigurationException('The node created by "patchFormats()" has already been initialized. You cannot pass values the second time you call patchFormats().');
    }
    
    public function errorFormats(string $format, array $value = []): \Symfony\Config\ApiPlatform\ErrorFormatsConfig
    {
        if (!isset($this->errorFormats[$format])) {
            return $this->errorFormats[$format] = new \Symfony\Config\ApiPlatform\ErrorFormatsConfig($value);
        }
        if ([] === $value) {
            return $this->errorFormats[$format];
        }
    
        throw new InvalidConfigurationException('The node created by "errorFormats()" has already been initialized. You cannot pass values the second time you call errorFormats().');
    }
    
    public function defaults(array $value = []): \Symfony\Config\ApiPlatform\DefaultsConfig
    {
        if (null === $this->defaults) {
            $this->defaults = new \Symfony\Config\ApiPlatform\DefaultsConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "defaults()" has already been initialized. You cannot pass values the second time you call defaults().');
        }
    
        return $this->defaults;
    }
    
    public function getExtensionAlias(): string
    {
        return 'api_platform';
    }
            
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['title'])) {
            $this->title = $value['title'];
            unset($value['title']);
        }
    
        if (isset($value['description'])) {
            $this->description = $value['description'];
            unset($value['description']);
        }
    
        if (isset($value['version'])) {
            $this->version = $value['version'];
            unset($value['version']);
        }
    
        if (isset($value['show_webby'])) {
            $this->showWebby = $value['show_webby'];
            unset($value['show_webby']);
        }
    
        if (isset($value['default_operation_path_resolver'])) {
            $this->defaultOperationPathResolver = $value['default_operation_path_resolver'];
            unset($value['default_operation_path_resolver']);
        }
    
        if (isset($value['name_converter'])) {
            $this->nameConverter = $value['name_converter'];
            unset($value['name_converter']);
        }
    
        if (isset($value['asset_package'])) {
            $this->assetPackage = $value['asset_package'];
            unset($value['asset_package']);
        }
    
        if (isset($value['path_segment_name_generator'])) {
            $this->pathSegmentNameGenerator = $value['path_segment_name_generator'];
            unset($value['path_segment_name_generator']);
        }
    
        if (isset($value['allow_plain_identifiers'])) {
            $this->allowPlainIdentifiers = $value['allow_plain_identifiers'];
            unset($value['allow_plain_identifiers']);
        }
    
        if (isset($value['validator'])) {
            $this->validator = new \Symfony\Config\ApiPlatform\ValidatorConfig($value['validator']);
            unset($value['validator']);
        }
    
        if (isset($value['eager_loading'])) {
            $this->eagerLoading = new \Symfony\Config\ApiPlatform\EagerLoadingConfig($value['eager_loading']);
            unset($value['eager_loading']);
        }
    
        if (isset($value['enable_fos_user'])) {
            $this->enableFosUser = $value['enable_fos_user'];
            unset($value['enable_fos_user']);
        }
    
        if (isset($value['enable_nelmio_api_doc'])) {
            $this->enableNelmioApiDoc = $value['enable_nelmio_api_doc'];
            unset($value['enable_nelmio_api_doc']);
        }
    
        if (isset($value['enable_swagger'])) {
            $this->enableSwagger = $value['enable_swagger'];
            unset($value['enable_swagger']);
        }
    
        if (isset($value['enable_swagger_ui'])) {
            $this->enableSwaggerUi = $value['enable_swagger_ui'];
            unset($value['enable_swagger_ui']);
        }
    
        if (isset($value['enable_re_doc'])) {
            $this->enableReDoc = $value['enable_re_doc'];
            unset($value['enable_re_doc']);
        }
    
        if (isset($value['enable_entrypoint'])) {
            $this->enableEntrypoint = $value['enable_entrypoint'];
            unset($value['enable_entrypoint']);
        }
    
        if (isset($value['enable_docs'])) {
            $this->enableDocs = $value['enable_docs'];
            unset($value['enable_docs']);
        }
    
        if (isset($value['enable_profiler'])) {
            $this->enableProfiler = $value['enable_profiler'];
            unset($value['enable_profiler']);
        }
    
        if (isset($value['collection'])) {
            $this->collection = new \Symfony\Config\ApiPlatform\CollectionConfig($value['collection']);
            unset($value['collection']);
        }
    
        if (isset($value['mapping'])) {
            $this->mapping = new \Symfony\Config\ApiPlatform\MappingConfig($value['mapping']);
            unset($value['mapping']);
        }
    
        if (isset($value['resource_class_directories'])) {
            $this->resourceClassDirectories = $value['resource_class_directories'];
            unset($value['resource_class_directories']);
        }
    
        if (isset($value['doctrine'])) {
            $this->doctrine = new \Symfony\Config\ApiPlatform\DoctrineConfig($value['doctrine']);
            unset($value['doctrine']);
        }
    
        if (isset($value['doctrine_mongodb_odm'])) {
            $this->doctrineMongodbOdm = new \Symfony\Config\ApiPlatform\DoctrineMongodbOdmConfig($value['doctrine_mongodb_odm']);
            unset($value['doctrine_mongodb_odm']);
        }
    
        if (isset($value['oauth'])) {
            $this->oauth = new \Symfony\Config\ApiPlatform\OauthConfig($value['oauth']);
            unset($value['oauth']);
        }
    
        if (isset($value['graphql'])) {
            $this->graphql = new \Symfony\Config\ApiPlatform\GraphqlConfig($value['graphql']);
            unset($value['graphql']);
        }
    
        if (isset($value['swagger'])) {
            $this->swagger = new \Symfony\Config\ApiPlatform\SwaggerConfig($value['swagger']);
            unset($value['swagger']);
        }
    
        if (isset($value['http_cache'])) {
            $this->httpCache = new \Symfony\Config\ApiPlatform\HttpCacheConfig($value['http_cache']);
            unset($value['http_cache']);
        }
    
        if (isset($value['mercure'])) {
            $this->mercure = new \Symfony\Config\ApiPlatform\MercureConfig($value['mercure']);
            unset($value['mercure']);
        }
    
        if (isset($value['messenger'])) {
            $this->messenger = new \Symfony\Config\ApiPlatform\MessengerConfig($value['messenger']);
            unset($value['messenger']);
        }
    
        if (isset($value['elasticsearch'])) {
            $this->elasticsearch = new \Symfony\Config\ApiPlatform\ElasticsearchConfig($value['elasticsearch']);
            unset($value['elasticsearch']);
        }
    
        if (isset($value['openapi'])) {
            $this->openapi = new \Symfony\Config\ApiPlatform\OpenapiConfig($value['openapi']);
            unset($value['openapi']);
        }
    
        if (isset($value['exception_to_status'])) {
            $this->exceptionToStatus = $value['exception_to_status'];
            unset($value['exception_to_status']);
        }
    
        if (isset($value['formats'])) {
            $this->formats = array_map(function ($v) { return new \Symfony\Config\ApiPlatform\FormatsConfig($v); }, $value['formats']);
            unset($value['formats']);
        }
    
        if (isset($value['patch_formats'])) {
            $this->patchFormats = array_map(function ($v) { return new \Symfony\Config\ApiPlatform\PatchFormatsConfig($v); }, $value['patch_formats']);
            unset($value['patch_formats']);
        }
    
        if (isset($value['error_formats'])) {
            $this->errorFormats = array_map(function ($v) { return new \Symfony\Config\ApiPlatform\ErrorFormatsConfig($v); }, $value['error_formats']);
            unset($value['error_formats']);
        }
    
        if (isset($value['defaults'])) {
            $this->defaults = new \Symfony\Config\ApiPlatform\DefaultsConfig($value['defaults']);
            unset($value['defaults']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->title) {
            $output['title'] = $this->title;
        }
        if (null !== $this->description) {
            $output['description'] = $this->description;
        }
        if (null !== $this->version) {
            $output['version'] = $this->version;
        }
        if (null !== $this->showWebby) {
            $output['show_webby'] = $this->showWebby;
        }
        if (null !== $this->defaultOperationPathResolver) {
            $output['default_operation_path_resolver'] = $this->defaultOperationPathResolver;
        }
        if (null !== $this->nameConverter) {
            $output['name_converter'] = $this->nameConverter;
        }
        if (null !== $this->assetPackage) {
            $output['asset_package'] = $this->assetPackage;
        }
        if (null !== $this->pathSegmentNameGenerator) {
            $output['path_segment_name_generator'] = $this->pathSegmentNameGenerator;
        }
        if (null !== $this->allowPlainIdentifiers) {
            $output['allow_plain_identifiers'] = $this->allowPlainIdentifiers;
        }
        if (null !== $this->validator) {
            $output['validator'] = $this->validator->toArray();
        }
        if (null !== $this->eagerLoading) {
            $output['eager_loading'] = $this->eagerLoading->toArray();
        }
        if (null !== $this->enableFosUser) {
            $output['enable_fos_user'] = $this->enableFosUser;
        }
        if (null !== $this->enableNelmioApiDoc) {
            $output['enable_nelmio_api_doc'] = $this->enableNelmioApiDoc;
        }
        if (null !== $this->enableSwagger) {
            $output['enable_swagger'] = $this->enableSwagger;
        }
        if (null !== $this->enableSwaggerUi) {
            $output['enable_swagger_ui'] = $this->enableSwaggerUi;
        }
        if (null !== $this->enableReDoc) {
            $output['enable_re_doc'] = $this->enableReDoc;
        }
        if (null !== $this->enableEntrypoint) {
            $output['enable_entrypoint'] = $this->enableEntrypoint;
        }
        if (null !== $this->enableDocs) {
            $output['enable_docs'] = $this->enableDocs;
        }
        if (null !== $this->enableProfiler) {
            $output['enable_profiler'] = $this->enableProfiler;
        }
        if (null !== $this->collection) {
            $output['collection'] = $this->collection->toArray();
        }
        if (null !== $this->mapping) {
            $output['mapping'] = $this->mapping->toArray();
        }
        if (null !== $this->resourceClassDirectories) {
            $output['resource_class_directories'] = $this->resourceClassDirectories;
        }
        if (null !== $this->doctrine) {
            $output['doctrine'] = $this->doctrine->toArray();
        }
        if (null !== $this->doctrineMongodbOdm) {
            $output['doctrine_mongodb_odm'] = $this->doctrineMongodbOdm->toArray();
        }
        if (null !== $this->oauth) {
            $output['oauth'] = $this->oauth->toArray();
        }
        if (null !== $this->graphql) {
            $output['graphql'] = $this->graphql->toArray();
        }
        if (null !== $this->swagger) {
            $output['swagger'] = $this->swagger->toArray();
        }
        if (null !== $this->httpCache) {
            $output['http_cache'] = $this->httpCache->toArray();
        }
        if (null !== $this->mercure) {
            $output['mercure'] = $this->mercure->toArray();
        }
        if (null !== $this->messenger) {
            $output['messenger'] = $this->messenger->toArray();
        }
        if (null !== $this->elasticsearch) {
            $output['elasticsearch'] = $this->elasticsearch->toArray();
        }
        if (null !== $this->openapi) {
            $output['openapi'] = $this->openapi->toArray();
        }
        if (null !== $this->exceptionToStatus) {
            $output['exception_to_status'] = $this->exceptionToStatus;
        }
        if (null !== $this->formats) {
            $output['formats'] = array_map(function ($v) { return $v->toArray(); }, $this->formats);
        }
        if (null !== $this->patchFormats) {
            $output['patch_formats'] = array_map(function ($v) { return $v->toArray(); }, $this->patchFormats);
        }
        if (null !== $this->errorFormats) {
            $output['error_formats'] = array_map(function ($v) { return $v->toArray(); }, $this->errorFormats);
        }
        if (null !== $this->defaults) {
            $output['defaults'] = $this->defaults->toArray();
        }
    
        return $output;
    }
    

}
