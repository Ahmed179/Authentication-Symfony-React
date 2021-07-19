<?php

namespace Symfony\Config\ApiPlatform;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class EagerLoadingConfig 
{
    private $enabled;
    private $fetchPartial;
    private $maxJoins;
    private $forceEager;
    
    /**
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function enabled($value): self
    {
        $this->enabled = $value;
    
        return $this;
    }
    
    /**
     * Fetch only partial data according to serialization groups. If enabled, Doctrine ORM entities will not work as expected if any of the other fields are used.
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function fetchPartial($value): self
    {
        $this->fetchPartial = $value;
    
        return $this;
    }
    
    /**
     * Max number of joined relations before EagerLoading throws a RuntimeException
     * @default 30
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function maxJoins($value): self
    {
        $this->maxJoins = $value;
    
        return $this;
    }
    
    /**
     * Force join on every relation. If disabled, it will only join relations having the EAGER fetch mode.
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function forceEager($value): self
    {
        $this->forceEager = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['enabled'])) {
            $this->enabled = $value['enabled'];
            unset($value['enabled']);
        }
    
        if (isset($value['fetch_partial'])) {
            $this->fetchPartial = $value['fetch_partial'];
            unset($value['fetch_partial']);
        }
    
        if (isset($value['max_joins'])) {
            $this->maxJoins = $value['max_joins'];
            unset($value['max_joins']);
        }
    
        if (isset($value['force_eager'])) {
            $this->forceEager = $value['force_eager'];
            unset($value['force_eager']);
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
        if (null !== $this->fetchPartial) {
            $output['fetch_partial'] = $this->fetchPartial;
        }
        if (null !== $this->maxJoins) {
            $output['max_joins'] = $this->maxJoins;
        }
        if (null !== $this->forceEager) {
            $output['force_eager'] = $this->forceEager;
        }
    
        return $output;
    }
    

}
