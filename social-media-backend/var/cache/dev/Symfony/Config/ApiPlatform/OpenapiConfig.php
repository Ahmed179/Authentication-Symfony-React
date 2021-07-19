<?php

namespace Symfony\Config\ApiPlatform;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Openapi'.\DIRECTORY_SEPARATOR.'ContactConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Openapi'.\DIRECTORY_SEPARATOR.'LicenseConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;
use Symfony\Component\Config\Loader\ParamConfigurator;


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class OpenapiConfig 
{
    private $contact;
    private $backwardCompatibilityLayer;
    private $termsOfService;
    private $license;
    
    public function contact(array $value = []): \Symfony\Config\ApiPlatform\Openapi\ContactConfig
    {
        if (null === $this->contact) {
            $this->contact = new \Symfony\Config\ApiPlatform\Openapi\ContactConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "contact()" has already been initialized. You cannot pass values the second time you call contact().');
        }
    
        return $this->contact;
    }
    
    /**
     * Enable this to decorate the "api_platform.swagger.normalizer.documentation" instead of decorating the OpenAPI factory.
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function backwardCompatibilityLayer($value): self
    {
        $this->backwardCompatibilityLayer = $value;
    
        return $this;
    }
    
    /**
     * A URL to the Terms of Service for the API. MUST be in the format of a URL.
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function termsOfService($value): self
    {
        $this->termsOfService = $value;
    
        return $this;
    }
    
    public function license(array $value = []): \Symfony\Config\ApiPlatform\Openapi\LicenseConfig
    {
        if (null === $this->license) {
            $this->license = new \Symfony\Config\ApiPlatform\Openapi\LicenseConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "license()" has already been initialized. You cannot pass values the second time you call license().');
        }
    
        return $this->license;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['contact'])) {
            $this->contact = new \Symfony\Config\ApiPlatform\Openapi\ContactConfig($value['contact']);
            unset($value['contact']);
        }
    
        if (isset($value['backward_compatibility_layer'])) {
            $this->backwardCompatibilityLayer = $value['backward_compatibility_layer'];
            unset($value['backward_compatibility_layer']);
        }
    
        if (isset($value['termsOfService'])) {
            $this->termsOfService = $value['termsOfService'];
            unset($value['termsOfService']);
        }
    
        if (isset($value['license'])) {
            $this->license = new \Symfony\Config\ApiPlatform\Openapi\LicenseConfig($value['license']);
            unset($value['license']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->contact) {
            $output['contact'] = $this->contact->toArray();
        }
        if (null !== $this->backwardCompatibilityLayer) {
            $output['backward_compatibility_layer'] = $this->backwardCompatibilityLayer;
        }
        if (null !== $this->termsOfService) {
            $output['termsOfService'] = $this->termsOfService;
        }
        if (null !== $this->license) {
            $output['license'] = $this->license->toArray();
        }
    
        return $output;
    }
    

}
