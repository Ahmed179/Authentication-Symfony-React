<?php

namespace Symfony\Config\ApiPlatform\Elasticsearch;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class MappingConfig 
{
    private $index;
    private $type;
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function index($value): self
    {
        $this->index = $value;
    
        return $this;
    }
    
    /**
     * @default '_doc'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function type($value): self
    {
        $this->type = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['index'])) {
            $this->index = $value['index'];
            unset($value['index']);
        }
    
        if (isset($value['type'])) {
            $this->type = $value['type'];
            unset($value['type']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->index) {
            $output['index'] = $this->index;
        }
        if (null !== $this->type) {
            $output['type'] = $this->type;
        }
    
        return $output;
    }
    

}
