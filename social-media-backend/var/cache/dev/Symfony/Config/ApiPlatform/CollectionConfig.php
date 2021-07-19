<?php

namespace Symfony\Config\ApiPlatform;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Collection'.\DIRECTORY_SEPARATOR.'PaginationConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class CollectionConfig 
{
    private $existsParameterName;
    private $order;
    private $orderParameterName;
    private $pagination;
    
    /**
     * The name of the query parameter to filter on nullable field values.
     * @default 'exists'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function existsParameterName($value): self
    {
        $this->existsParameterName = $value;
    
        return $this;
    }
    
    /**
     * The default order of results.
     * @default 'ASC'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function order($value): self
    {
        $this->order = $value;
    
        return $this;
    }
    
    /**
     * The name of the query parameter to order results.
     * @default 'order'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function orderParameterName($value): self
    {
        $this->orderParameterName = $value;
    
        return $this;
    }
    
    public function pagination(array $value = []): \Symfony\Config\ApiPlatform\Collection\PaginationConfig
    {
        if (null === $this->pagination) {
            $this->pagination = new \Symfony\Config\ApiPlatform\Collection\PaginationConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "pagination()" has already been initialized. You cannot pass values the second time you call pagination().');
        }
    
        return $this->pagination;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['exists_parameter_name'])) {
            $this->existsParameterName = $value['exists_parameter_name'];
            unset($value['exists_parameter_name']);
        }
    
        if (isset($value['order'])) {
            $this->order = $value['order'];
            unset($value['order']);
        }
    
        if (isset($value['order_parameter_name'])) {
            $this->orderParameterName = $value['order_parameter_name'];
            unset($value['order_parameter_name']);
        }
    
        if (isset($value['pagination'])) {
            $this->pagination = new \Symfony\Config\ApiPlatform\Collection\PaginationConfig($value['pagination']);
            unset($value['pagination']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->existsParameterName) {
            $output['exists_parameter_name'] = $this->existsParameterName;
        }
        if (null !== $this->order) {
            $output['order'] = $this->order;
        }
        if (null !== $this->orderParameterName) {
            $output['order_parameter_name'] = $this->orderParameterName;
        }
        if (null !== $this->pagination) {
            $output['pagination'] = $this->pagination->toArray();
        }
    
        return $output;
    }
    

}
