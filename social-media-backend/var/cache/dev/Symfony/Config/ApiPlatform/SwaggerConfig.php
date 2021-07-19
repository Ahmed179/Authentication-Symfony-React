<?php

namespace Symfony\Config\ApiPlatform;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Swagger'.\DIRECTORY_SEPARATOR.'ApiKeysConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class SwaggerConfig 
{
    private $versions;
    private $apiKeys;
    
    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function versions($value): self
    {
        $this->versions = $value;
    
        return $this;
    }
    
    public function apiKeys(array $value = []): \Symfony\Config\ApiPlatform\Swagger\ApiKeysConfig
    {
        return $this->apiKeys[] = new \Symfony\Config\ApiPlatform\Swagger\ApiKeysConfig($value);
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['versions'])) {
            $this->versions = $value['versions'];
            unset($value['versions']);
        }
    
        if (isset($value['api_keys'])) {
            $this->apiKeys = array_map(function ($v) { return new \Symfony\Config\ApiPlatform\Swagger\ApiKeysConfig($v); }, $value['api_keys']);
            unset($value['api_keys']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->versions) {
            $output['versions'] = $this->versions;
        }
        if (null !== $this->apiKeys) {
            $output['api_keys'] = array_map(function ($v) { return $v->toArray(); }, $this->apiKeys);
        }
    
        return $output;
    }
    

}
