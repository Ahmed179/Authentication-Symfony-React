<?php

namespace Symfony\Config\LexikJwtAuthentication;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class SetCookiesConfig 
{
    private $lifetime;
    private $samesite;
    private $path;
    private $domain;
    private $secure;
    private $httpOnly;
    private $split;
    
    /**
     * The cookie lifetime. If null, the "token_ttl" option value will be used
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function lifetime($value): self
    {
        $this->lifetime = $value;
    
        return $this;
    }
    
    /**
     * @default 'lax'
     * @param ParamConfigurator|'none'|'lax'|'strict' $value
     * @return $this
     */
    public function samesite($value): self
    {
        $this->samesite = $value;
    
        return $this;
    }
    
    /**
     * @default '/'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function path($value): self
    {
        $this->path = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function domain($value): self
    {
        $this->domain = $value;
    
        return $this;
    }
    
    /**
     * @default true
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function secure($value): self
    {
        $this->secure = $value;
    
        return $this;
    }
    
    /**
     * @default true
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function httpOnly($value): self
    {
        $this->httpOnly = $value;
    
        return $this;
    }
    
    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function split($value): self
    {
        $this->split = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['lifetime'])) {
            $this->lifetime = $value['lifetime'];
            unset($value['lifetime']);
        }
    
        if (isset($value['samesite'])) {
            $this->samesite = $value['samesite'];
            unset($value['samesite']);
        }
    
        if (isset($value['path'])) {
            $this->path = $value['path'];
            unset($value['path']);
        }
    
        if (isset($value['domain'])) {
            $this->domain = $value['domain'];
            unset($value['domain']);
        }
    
        if (isset($value['secure'])) {
            $this->secure = $value['secure'];
            unset($value['secure']);
        }
    
        if (isset($value['httpOnly'])) {
            $this->httpOnly = $value['httpOnly'];
            unset($value['httpOnly']);
        }
    
        if (isset($value['split'])) {
            $this->split = $value['split'];
            unset($value['split']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->lifetime) {
            $output['lifetime'] = $this->lifetime;
        }
        if (null !== $this->samesite) {
            $output['samesite'] = $this->samesite;
        }
        if (null !== $this->path) {
            $output['path'] = $this->path;
        }
        if (null !== $this->domain) {
            $output['domain'] = $this->domain;
        }
        if (null !== $this->secure) {
            $output['secure'] = $this->secure;
        }
        if (null !== $this->httpOnly) {
            $output['httpOnly'] = $this->httpOnly;
        }
        if (null !== $this->split) {
            $output['split'] = $this->split;
        }
    
        return $output;
    }
    

}
