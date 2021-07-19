<?php

namespace Symfony\Config\ApiPlatform;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Graphql'.\DIRECTORY_SEPARATOR.'GraphiqlConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Graphql'.\DIRECTORY_SEPARATOR.'GraphqlPlaygroundConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Graphql'.\DIRECTORY_SEPARATOR.'CollectionConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class GraphqlConfig 
{
    private $enabled;
    private $defaultIde;
    private $graphiql;
    private $graphqlPlayground;
    private $nestingSeparator;
    private $collection;
    
    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function enabled($value): self
    {
        $this->enabled = $value;
    
        return $this;
    }
    
    /**
     * @default 'graphiql'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function defaultIde($value): self
    {
        $this->defaultIde = $value;
    
        return $this;
    }
    
    public function graphiql(array $value = []): \Symfony\Config\ApiPlatform\Graphql\GraphiqlConfig
    {
        if (null === $this->graphiql) {
            $this->graphiql = new \Symfony\Config\ApiPlatform\Graphql\GraphiqlConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "graphiql()" has already been initialized. You cannot pass values the second time you call graphiql().');
        }
    
        return $this->graphiql;
    }
    
    public function graphqlPlayground(array $value = []): \Symfony\Config\ApiPlatform\Graphql\GraphqlPlaygroundConfig
    {
        if (null === $this->graphqlPlayground) {
            $this->graphqlPlayground = new \Symfony\Config\ApiPlatform\Graphql\GraphqlPlaygroundConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "graphqlPlayground()" has already been initialized. You cannot pass values the second time you call graphqlPlayground().');
        }
    
        return $this->graphqlPlayground;
    }
    
    /**
     * The separator to use to filter nested fields.
     * @default '_'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function nestingSeparator($value): self
    {
        $this->nestingSeparator = $value;
    
        return $this;
    }
    
    public function collection(array $value = []): \Symfony\Config\ApiPlatform\Graphql\CollectionConfig
    {
        if (null === $this->collection) {
            $this->collection = new \Symfony\Config\ApiPlatform\Graphql\CollectionConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "collection()" has already been initialized. You cannot pass values the second time you call collection().');
        }
    
        return $this->collection;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['enabled'])) {
            $this->enabled = $value['enabled'];
            unset($value['enabled']);
        }
    
        if (isset($value['default_ide'])) {
            $this->defaultIde = $value['default_ide'];
            unset($value['default_ide']);
        }
    
        if (isset($value['graphiql'])) {
            $this->graphiql = new \Symfony\Config\ApiPlatform\Graphql\GraphiqlConfig($value['graphiql']);
            unset($value['graphiql']);
        }
    
        if (isset($value['graphql_playground'])) {
            $this->graphqlPlayground = new \Symfony\Config\ApiPlatform\Graphql\GraphqlPlaygroundConfig($value['graphql_playground']);
            unset($value['graphql_playground']);
        }
    
        if (isset($value['nesting_separator'])) {
            $this->nestingSeparator = $value['nesting_separator'];
            unset($value['nesting_separator']);
        }
    
        if (isset($value['collection'])) {
            $this->collection = new \Symfony\Config\ApiPlatform\Graphql\CollectionConfig($value['collection']);
            unset($value['collection']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->enabled) {
            $output['enabled'] = $this->enabled;
        }
        if (null !== $this->defaultIde) {
            $output['default_ide'] = $this->defaultIde;
        }
        if (null !== $this->graphiql) {
            $output['graphiql'] = $this->graphiql->toArray();
        }
        if (null !== $this->graphqlPlayground) {
            $output['graphql_playground'] = $this->graphqlPlayground->toArray();
        }
        if (null !== $this->nestingSeparator) {
            $output['nesting_separator'] = $this->nestingSeparator;
        }
        if (null !== $this->collection) {
            $output['collection'] = $this->collection->toArray();
        }
    
        return $output;
    }
    

}
