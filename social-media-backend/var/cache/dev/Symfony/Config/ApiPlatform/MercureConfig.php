<?php

namespace Symfony\Config\ApiPlatform;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class MercureConfig 
{
    private $enabled;
    private $hubUrl;
    
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
     * The URL sent in the Link HTTP header. If not set, will default to the URL for MercureBundle's default hub.
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function hubUrl($value): self
    {
        $this->hubUrl = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['enabled'])) {
            $this->enabled = $value['enabled'];
            unset($value['enabled']);
        }
    
        if (isset($value['hub_url'])) {
            $this->hubUrl = $value['hub_url'];
            unset($value['hub_url']);
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
        if (null !== $this->hubUrl) {
            $output['hub_url'] = $this->hubUrl;
        }
    
        return $output;
    }
    

}
