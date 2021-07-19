<?php

namespace Symfony\Config\ApiPlatform\Graphql;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Collection'.\DIRECTORY_SEPARATOR.'PaginationConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class CollectionConfig 
{
    private $pagination;
    
    public function pagination(array $value = []): \Symfony\Config\ApiPlatform\Graphql\Collection\PaginationConfig
    {
        if (null === $this->pagination) {
            $this->pagination = new \Symfony\Config\ApiPlatform\Graphql\Collection\PaginationConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "pagination()" has already been initialized. You cannot pass values the second time you call pagination().');
        }
    
        return $this->pagination;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['pagination'])) {
            $this->pagination = new \Symfony\Config\ApiPlatform\Graphql\Collection\PaginationConfig($value['pagination']);
            unset($value['pagination']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->pagination) {
            $output['pagination'] = $this->pagination->toArray();
        }
    
        return $output;
    }
    

}
