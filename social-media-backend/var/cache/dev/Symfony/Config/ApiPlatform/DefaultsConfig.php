<?php

namespace Symfony\Config\ApiPlatform;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class DefaultsConfig 
{
    private $collectionOperations;
    private $description;
    private $graphql;
    private $iri;
    private $itemOperations;
    private $shortName;
    private $subresourceOperations;
    private $attributes;
    private $cacheHeaders;
    private $denormalizationContext;
    private $deprecationReason;
    private $elasticsearch;
    private $fetchPartial;
    private $forceEager;
    private $formats;
    private $filters;
    private $hydraContext;
    private $input;
    private $mercure;
    private $messenger;
    private $normalizationContext;
    private $openapiContext;
    private $order;
    private $output;
    private $paginationClientEnabled;
    private $paginationClientItemsPerPage;
    private $paginationClientPartial;
    private $paginationViaCursor;
    private $paginationEnabled;
    private $paginationFetchJoinCollection;
    private $paginationItemsPerPage;
    private $paginationMaximumItemsPerPage;
    private $paginationPartial;
    private $routePrefix;
    private $security;
    private $securityMessage;
    private $securityPostDenormalize;
    private $securityPostDenormalizeMessage;
    private $stateless;
    private $sunset;
    private $swaggerContext;
    private $validationGroups;
    private $urlGenerationStrategy;
    private $compositeIdentifier;
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function collectionOperations($value): self
    {
        $this->collectionOperations = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function description($value): self
    {
        $this->description = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function graphql($value): self
    {
        $this->graphql = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function iri($value): self
    {
        $this->iri = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function itemOperations($value): self
    {
        $this->itemOperations = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function shortName($value): self
    {
        $this->shortName = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function subresourceOperations($value): self
    {
        $this->subresourceOperations = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function attributes($value): self
    {
        $this->attributes = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function cacheHeaders($value): self
    {
        $this->cacheHeaders = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function denormalizationContext($value): self
    {
        $this->denormalizationContext = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function deprecationReason($value): self
    {
        $this->deprecationReason = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function elasticsearch($value): self
    {
        $this->elasticsearch = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function fetchPartial($value): self
    {
        $this->fetchPartial = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function forceEager($value): self
    {
        $this->forceEager = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function formats($value): self
    {
        $this->formats = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function filters($value): self
    {
        $this->filters = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function hydraContext($value): self
    {
        $this->hydraContext = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function input($value): self
    {
        $this->input = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function mercure($value): self
    {
        $this->mercure = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function messenger($value): self
    {
        $this->messenger = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function normalizationContext($value): self
    {
        $this->normalizationContext = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function openapiContext($value): self
    {
        $this->openapiContext = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function order($value): self
    {
        $this->order = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function output($value): self
    {
        $this->output = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function paginationClientEnabled($value): self
    {
        $this->paginationClientEnabled = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function paginationClientItemsPerPage($value): self
    {
        $this->paginationClientItemsPerPage = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function paginationClientPartial($value): self
    {
        $this->paginationClientPartial = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function paginationViaCursor($value): self
    {
        $this->paginationViaCursor = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function paginationEnabled($value): self
    {
        $this->paginationEnabled = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function paginationFetchJoinCollection($value): self
    {
        $this->paginationFetchJoinCollection = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function paginationItemsPerPage($value): self
    {
        $this->paginationItemsPerPage = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function paginationMaximumItemsPerPage($value): self
    {
        $this->paginationMaximumItemsPerPage = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function paginationPartial($value): self
    {
        $this->paginationPartial = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function routePrefix($value): self
    {
        $this->routePrefix = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function security($value): self
    {
        $this->security = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function securityMessage($value): self
    {
        $this->securityMessage = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function securityPostDenormalize($value): self
    {
        $this->securityPostDenormalize = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function securityPostDenormalizeMessage($value): self
    {
        $this->securityPostDenormalizeMessage = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function stateless($value): self
    {
        $this->stateless = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function sunset($value): self
    {
        $this->sunset = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function swaggerContext($value): self
    {
        $this->swaggerContext = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function validationGroups($value): self
    {
        $this->validationGroups = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function urlGenerationStrategy($value): self
    {
        $this->urlGenerationStrategy = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function compositeIdentifier($value): self
    {
        $this->compositeIdentifier = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['collection_operations'])) {
            $this->collectionOperations = $value['collection_operations'];
            unset($value['collection_operations']);
        }
    
        if (isset($value['description'])) {
            $this->description = $value['description'];
            unset($value['description']);
        }
    
        if (isset($value['graphql'])) {
            $this->graphql = $value['graphql'];
            unset($value['graphql']);
        }
    
        if (isset($value['iri'])) {
            $this->iri = $value['iri'];
            unset($value['iri']);
        }
    
        if (isset($value['item_operations'])) {
            $this->itemOperations = $value['item_operations'];
            unset($value['item_operations']);
        }
    
        if (isset($value['short_name'])) {
            $this->shortName = $value['short_name'];
            unset($value['short_name']);
        }
    
        if (isset($value['subresource_operations'])) {
            $this->subresourceOperations = $value['subresource_operations'];
            unset($value['subresource_operations']);
        }
    
        if (isset($value['attributes'])) {
            $this->attributes = $value['attributes'];
            unset($value['attributes']);
        }
    
        if (isset($value['cache_headers'])) {
            $this->cacheHeaders = $value['cache_headers'];
            unset($value['cache_headers']);
        }
    
        if (isset($value['denormalization_context'])) {
            $this->denormalizationContext = $value['denormalization_context'];
            unset($value['denormalization_context']);
        }
    
        if (isset($value['deprecation_reason'])) {
            $this->deprecationReason = $value['deprecation_reason'];
            unset($value['deprecation_reason']);
        }
    
        if (isset($value['elasticsearch'])) {
            $this->elasticsearch = $value['elasticsearch'];
            unset($value['elasticsearch']);
        }
    
        if (isset($value['fetch_partial'])) {
            $this->fetchPartial = $value['fetch_partial'];
            unset($value['fetch_partial']);
        }
    
        if (isset($value['force_eager'])) {
            $this->forceEager = $value['force_eager'];
            unset($value['force_eager']);
        }
    
        if (isset($value['formats'])) {
            $this->formats = $value['formats'];
            unset($value['formats']);
        }
    
        if (isset($value['filters'])) {
            $this->filters = $value['filters'];
            unset($value['filters']);
        }
    
        if (isset($value['hydra_context'])) {
            $this->hydraContext = $value['hydra_context'];
            unset($value['hydra_context']);
        }
    
        if (isset($value['input'])) {
            $this->input = $value['input'];
            unset($value['input']);
        }
    
        if (isset($value['mercure'])) {
            $this->mercure = $value['mercure'];
            unset($value['mercure']);
        }
    
        if (isset($value['messenger'])) {
            $this->messenger = $value['messenger'];
            unset($value['messenger']);
        }
    
        if (isset($value['normalization_context'])) {
            $this->normalizationContext = $value['normalization_context'];
            unset($value['normalization_context']);
        }
    
        if (isset($value['openapi_context'])) {
            $this->openapiContext = $value['openapi_context'];
            unset($value['openapi_context']);
        }
    
        if (isset($value['order'])) {
            $this->order = $value['order'];
            unset($value['order']);
        }
    
        if (isset($value['output'])) {
            $this->output = $value['output'];
            unset($value['output']);
        }
    
        if (isset($value['pagination_client_enabled'])) {
            $this->paginationClientEnabled = $value['pagination_client_enabled'];
            unset($value['pagination_client_enabled']);
        }
    
        if (isset($value['pagination_client_items_per_page'])) {
            $this->paginationClientItemsPerPage = $value['pagination_client_items_per_page'];
            unset($value['pagination_client_items_per_page']);
        }
    
        if (isset($value['pagination_client_partial'])) {
            $this->paginationClientPartial = $value['pagination_client_partial'];
            unset($value['pagination_client_partial']);
        }
    
        if (isset($value['pagination_via_cursor'])) {
            $this->paginationViaCursor = $value['pagination_via_cursor'];
            unset($value['pagination_via_cursor']);
        }
    
        if (isset($value['pagination_enabled'])) {
            $this->paginationEnabled = $value['pagination_enabled'];
            unset($value['pagination_enabled']);
        }
    
        if (isset($value['pagination_fetch_join_collection'])) {
            $this->paginationFetchJoinCollection = $value['pagination_fetch_join_collection'];
            unset($value['pagination_fetch_join_collection']);
        }
    
        if (isset($value['pagination_items_per_page'])) {
            $this->paginationItemsPerPage = $value['pagination_items_per_page'];
            unset($value['pagination_items_per_page']);
        }
    
        if (isset($value['pagination_maximum_items_per_page'])) {
            $this->paginationMaximumItemsPerPage = $value['pagination_maximum_items_per_page'];
            unset($value['pagination_maximum_items_per_page']);
        }
    
        if (isset($value['pagination_partial'])) {
            $this->paginationPartial = $value['pagination_partial'];
            unset($value['pagination_partial']);
        }
    
        if (isset($value['route_prefix'])) {
            $this->routePrefix = $value['route_prefix'];
            unset($value['route_prefix']);
        }
    
        if (isset($value['security'])) {
            $this->security = $value['security'];
            unset($value['security']);
        }
    
        if (isset($value['security_message'])) {
            $this->securityMessage = $value['security_message'];
            unset($value['security_message']);
        }
    
        if (isset($value['security_post_denormalize'])) {
            $this->securityPostDenormalize = $value['security_post_denormalize'];
            unset($value['security_post_denormalize']);
        }
    
        if (isset($value['security_post_denormalize_message'])) {
            $this->securityPostDenormalizeMessage = $value['security_post_denormalize_message'];
            unset($value['security_post_denormalize_message']);
        }
    
        if (isset($value['stateless'])) {
            $this->stateless = $value['stateless'];
            unset($value['stateless']);
        }
    
        if (isset($value['sunset'])) {
            $this->sunset = $value['sunset'];
            unset($value['sunset']);
        }
    
        if (isset($value['swagger_context'])) {
            $this->swaggerContext = $value['swagger_context'];
            unset($value['swagger_context']);
        }
    
        if (isset($value['validation_groups'])) {
            $this->validationGroups = $value['validation_groups'];
            unset($value['validation_groups']);
        }
    
        if (isset($value['url_generation_strategy'])) {
            $this->urlGenerationStrategy = $value['url_generation_strategy'];
            unset($value['url_generation_strategy']);
        }
    
        if (isset($value['composite_identifier'])) {
            $this->compositeIdentifier = $value['composite_identifier'];
            unset($value['composite_identifier']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->collectionOperations) {
            $output['collection_operations'] = $this->collectionOperations;
        }
        if (null !== $this->description) {
            $output['description'] = $this->description;
        }
        if (null !== $this->graphql) {
            $output['graphql'] = $this->graphql;
        }
        if (null !== $this->iri) {
            $output['iri'] = $this->iri;
        }
        if (null !== $this->itemOperations) {
            $output['item_operations'] = $this->itemOperations;
        }
        if (null !== $this->shortName) {
            $output['short_name'] = $this->shortName;
        }
        if (null !== $this->subresourceOperations) {
            $output['subresource_operations'] = $this->subresourceOperations;
        }
        if (null !== $this->attributes) {
            $output['attributes'] = $this->attributes;
        }
        if (null !== $this->cacheHeaders) {
            $output['cache_headers'] = $this->cacheHeaders;
        }
        if (null !== $this->denormalizationContext) {
            $output['denormalization_context'] = $this->denormalizationContext;
        }
        if (null !== $this->deprecationReason) {
            $output['deprecation_reason'] = $this->deprecationReason;
        }
        if (null !== $this->elasticsearch) {
            $output['elasticsearch'] = $this->elasticsearch;
        }
        if (null !== $this->fetchPartial) {
            $output['fetch_partial'] = $this->fetchPartial;
        }
        if (null !== $this->forceEager) {
            $output['force_eager'] = $this->forceEager;
        }
        if (null !== $this->formats) {
            $output['formats'] = $this->formats;
        }
        if (null !== $this->filters) {
            $output['filters'] = $this->filters;
        }
        if (null !== $this->hydraContext) {
            $output['hydra_context'] = $this->hydraContext;
        }
        if (null !== $this->input) {
            $output['input'] = $this->input;
        }
        if (null !== $this->mercure) {
            $output['mercure'] = $this->mercure;
        }
        if (null !== $this->messenger) {
            $output['messenger'] = $this->messenger;
        }
        if (null !== $this->normalizationContext) {
            $output['normalization_context'] = $this->normalizationContext;
        }
        if (null !== $this->openapiContext) {
            $output['openapi_context'] = $this->openapiContext;
        }
        if (null !== $this->order) {
            $output['order'] = $this->order;
        }
        if (null !== $this->output) {
            $output['output'] = $this->output;
        }
        if (null !== $this->paginationClientEnabled) {
            $output['pagination_client_enabled'] = $this->paginationClientEnabled;
        }
        if (null !== $this->paginationClientItemsPerPage) {
            $output['pagination_client_items_per_page'] = $this->paginationClientItemsPerPage;
        }
        if (null !== $this->paginationClientPartial) {
            $output['pagination_client_partial'] = $this->paginationClientPartial;
        }
        if (null !== $this->paginationViaCursor) {
            $output['pagination_via_cursor'] = $this->paginationViaCursor;
        }
        if (null !== $this->paginationEnabled) {
            $output['pagination_enabled'] = $this->paginationEnabled;
        }
        if (null !== $this->paginationFetchJoinCollection) {
            $output['pagination_fetch_join_collection'] = $this->paginationFetchJoinCollection;
        }
        if (null !== $this->paginationItemsPerPage) {
            $output['pagination_items_per_page'] = $this->paginationItemsPerPage;
        }
        if (null !== $this->paginationMaximumItemsPerPage) {
            $output['pagination_maximum_items_per_page'] = $this->paginationMaximumItemsPerPage;
        }
        if (null !== $this->paginationPartial) {
            $output['pagination_partial'] = $this->paginationPartial;
        }
        if (null !== $this->routePrefix) {
            $output['route_prefix'] = $this->routePrefix;
        }
        if (null !== $this->security) {
            $output['security'] = $this->security;
        }
        if (null !== $this->securityMessage) {
            $output['security_message'] = $this->securityMessage;
        }
        if (null !== $this->securityPostDenormalize) {
            $output['security_post_denormalize'] = $this->securityPostDenormalize;
        }
        if (null !== $this->securityPostDenormalizeMessage) {
            $output['security_post_denormalize_message'] = $this->securityPostDenormalizeMessage;
        }
        if (null !== $this->stateless) {
            $output['stateless'] = $this->stateless;
        }
        if (null !== $this->sunset) {
            $output['sunset'] = $this->sunset;
        }
        if (null !== $this->swaggerContext) {
            $output['swagger_context'] = $this->swaggerContext;
        }
        if (null !== $this->validationGroups) {
            $output['validation_groups'] = $this->validationGroups;
        }
        if (null !== $this->urlGenerationStrategy) {
            $output['url_generation_strategy'] = $this->urlGenerationStrategy;
        }
        if (null !== $this->compositeIdentifier) {
            $output['composite_identifier'] = $this->compositeIdentifier;
        }
    
        return $output;
    }
    

}
