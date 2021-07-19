<?php

namespace Symfony\Config\ApiPlatform;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Elasticsearch'.\DIRECTORY_SEPARATOR.'MappingConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class ElasticsearchConfig 
{
    private $enabled;
    private $hosts;
    private $mapping;
    
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
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function hosts($value): self
    {
        $this->hosts = $value;
    
        return $this;
    }
    
    public function mapping(string $resource_class, array $value = []): \Symfony\Config\ApiPlatform\Elasticsearch\MappingConfig
    {
        if (!isset($this->mapping[$resource_class])) {
            return $this->mapping[$resource_class] = new \Symfony\Config\ApiPlatform\Elasticsearch\MappingConfig($value);
        }
        if ([] === $value) {
            return $this->mapping[$resource_class];
        }
    
        throw new InvalidConfigurationException('The node created by "mapping()" has already been initialized. You cannot pass values the second time you call mapping().');
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['enabled'])) {
            $this->enabled = $value['enabled'];
            unset($value['enabled']);
        }
    
        if (isset($value['hosts'])) {
            $this->hosts = $value['hosts'];
            unset($value['hosts']);
        }
    
        if (isset($value['mapping'])) {
            $this->mapping = array_map(function ($v) { return new \Symfony\Config\ApiPlatform\Elasticsearch\MappingConfig($v); }, $value['mapping']);
            unset($value['mapping']);
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
        if (null !== $this->hosts) {
            $output['hosts'] = $this->hosts;
        }
        if (null !== $this->mapping) {
            $output['mapping'] = array_map(function ($v) { return $v->toArray(); }, $this->mapping);
        }
    
        return $output;
    }
    

}
