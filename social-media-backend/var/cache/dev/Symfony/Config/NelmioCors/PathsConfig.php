<?php

namespace Symfony\Config\NelmioCors;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class PathsConfig 
{
    private $allowCredentials;
    private $allowOrigin;
    private $allowHeaders;
    private $allowMethods;
    private $exposeHeaders;
    private $maxAge;
    private $hosts;
    private $originRegex;
    private $forcedAllowOriginValue;
    
    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function allowCredentials($value): self
    {
        $this->allowCredentials = $value;
    
        return $this;
    }
    
    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function allowOrigin($value): self
    {
        $this->allowOrigin = $value;
    
        return $this;
    }
    
    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function allowHeaders($value): self
    {
        $this->allowHeaders = $value;
    
        return $this;
    }
    
    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function allowMethods($value): self
    {
        $this->allowMethods = $value;
    
        return $this;
    }
    
    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function exposeHeaders($value): self
    {
        $this->exposeHeaders = $value;
    
        return $this;
    }
    
    /**
     * @default 0
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function maxAge($value): self
    {
        $this->maxAge = $value;
    
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
    
    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function originRegex($value): self
    {
        $this->originRegex = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function forcedAllowOriginValue($value): self
    {
        $this->forcedAllowOriginValue = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['allow_credentials'])) {
            $this->allowCredentials = $value['allow_credentials'];
            unset($value['allow_credentials']);
        }
    
        if (isset($value['allow_origin'])) {
            $this->allowOrigin = $value['allow_origin'];
            unset($value['allow_origin']);
        }
    
        if (isset($value['allow_headers'])) {
            $this->allowHeaders = $value['allow_headers'];
            unset($value['allow_headers']);
        }
    
        if (isset($value['allow_methods'])) {
            $this->allowMethods = $value['allow_methods'];
            unset($value['allow_methods']);
        }
    
        if (isset($value['expose_headers'])) {
            $this->exposeHeaders = $value['expose_headers'];
            unset($value['expose_headers']);
        }
    
        if (isset($value['max_age'])) {
            $this->maxAge = $value['max_age'];
            unset($value['max_age']);
        }
    
        if (isset($value['hosts'])) {
            $this->hosts = $value['hosts'];
            unset($value['hosts']);
        }
    
        if (isset($value['origin_regex'])) {
            $this->originRegex = $value['origin_regex'];
            unset($value['origin_regex']);
        }
    
        if (isset($value['forced_allow_origin_value'])) {
            $this->forcedAllowOriginValue = $value['forced_allow_origin_value'];
            unset($value['forced_allow_origin_value']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->allowCredentials) {
            $output['allow_credentials'] = $this->allowCredentials;
        }
        if (null !== $this->allowOrigin) {
            $output['allow_origin'] = $this->allowOrigin;
        }
        if (null !== $this->allowHeaders) {
            $output['allow_headers'] = $this->allowHeaders;
        }
        if (null !== $this->allowMethods) {
            $output['allow_methods'] = $this->allowMethods;
        }
        if (null !== $this->exposeHeaders) {
            $output['expose_headers'] = $this->exposeHeaders;
        }
        if (null !== $this->maxAge) {
            $output['max_age'] = $this->maxAge;
        }
        if (null !== $this->hosts) {
            $output['hosts'] = $this->hosts;
        }
        if (null !== $this->originRegex) {
            $output['origin_regex'] = $this->originRegex;
        }
        if (null !== $this->forcedAllowOriginValue) {
            $output['forced_allow_origin_value'] = $this->forcedAllowOriginValue;
        }
    
        return $output;
    }
    

}
