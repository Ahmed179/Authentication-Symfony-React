<?php

namespace Symfony\Config\ApiPlatform;

require_once __DIR__.\DIRECTORY_SEPARATOR.'HttpCache'.\DIRECTORY_SEPARATOR.'InvalidationConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class HttpCacheConfig 
{
    private $etag;
    private $maxAge;
    private $sharedMaxAge;
    private $vary;
    private $public;
    private $invalidation;
    
    /**
     * Automatically generate etags for API responses.
     * @default true
     * @param ParamConfigurator|bool $value
     * @deprecated The use of the `http_cache.etag` has been deprecated in 2.6 and will be removed in 3.0. Use `defaults.cache_headers.etag` instead.
     * @return $this
     */
    public function etag($value): self
    {
        $this->etag = $value;
    
        return $this;
    }
    
    /**
     * Default value for the response max age.
     * @default null
     * @param ParamConfigurator|int $value
     * @deprecated The use of the `http_cache.max_age` has been deprecated in 2.6 and will be removed in 3.0. Use `defaults.cache_headers.max_age` instead.
     * @return $this
     */
    public function maxAge($value): self
    {
        $this->maxAge = $value;
    
        return $this;
    }
    
    /**
     * Default value for the response shared (proxy) max age.
     * @default null
     * @param ParamConfigurator|int $value
     * @deprecated The use of the `http_cache.shared_max_age` has been deprecated in 2.6 and will be removed in 3.0. Use `defaults.cache_headers.shared_max_age` instead.
     * @return $this
     */
    public function sharedMaxAge($value): self
    {
        $this->sharedMaxAge = $value;
    
        return $this;
    }
    
    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function vary($value): self
    {
        $this->vary = $value;
    
        return $this;
    }
    
    /**
     * To make all responses public by default.
     * @default null
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function public($value): self
    {
        $this->public = $value;
    
        return $this;
    }
    
    public function invalidation(array $value = []): \Symfony\Config\ApiPlatform\HttpCache\InvalidationConfig
    {
        if (null === $this->invalidation) {
            $this->invalidation = new \Symfony\Config\ApiPlatform\HttpCache\InvalidationConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "invalidation()" has already been initialized. You cannot pass values the second time you call invalidation().');
        }
    
        return $this->invalidation;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['etag'])) {
            $this->etag = $value['etag'];
            unset($value['etag']);
        }
    
        if (isset($value['max_age'])) {
            $this->maxAge = $value['max_age'];
            unset($value['max_age']);
        }
    
        if (isset($value['shared_max_age'])) {
            $this->sharedMaxAge = $value['shared_max_age'];
            unset($value['shared_max_age']);
        }
    
        if (isset($value['vary'])) {
            $this->vary = $value['vary'];
            unset($value['vary']);
        }
    
        if (isset($value['public'])) {
            $this->public = $value['public'];
            unset($value['public']);
        }
    
        if (isset($value['invalidation'])) {
            $this->invalidation = new \Symfony\Config\ApiPlatform\HttpCache\InvalidationConfig($value['invalidation']);
            unset($value['invalidation']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->etag) {
            $output['etag'] = $this->etag;
        }
        if (null !== $this->maxAge) {
            $output['max_age'] = $this->maxAge;
        }
        if (null !== $this->sharedMaxAge) {
            $output['shared_max_age'] = $this->sharedMaxAge;
        }
        if (null !== $this->vary) {
            $output['vary'] = $this->vary;
        }
        if (null !== $this->public) {
            $output['public'] = $this->public;
        }
        if (null !== $this->invalidation) {
            $output['invalidation'] = $this->invalidation->toArray();
        }
    
        return $output;
    }
    

}
