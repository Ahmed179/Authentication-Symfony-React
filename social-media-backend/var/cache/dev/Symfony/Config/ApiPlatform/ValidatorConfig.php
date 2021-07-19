<?php

namespace Symfony\Config\ApiPlatform;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class ValidatorConfig 
{
    private $serializePayloadFields;
    
    /**
     * Set to null to serialize all payload fields when a validation error is thrown, or set the fields you want to include explicitly.
     * @default array (
    )
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function serializePayloadFields($value = array (
    )): self
    {
        $this->serializePayloadFields = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['serialize_payload_fields'])) {
            $this->serializePayloadFields = $value['serialize_payload_fields'];
            unset($value['serialize_payload_fields']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->serializePayloadFields) {
            $output['serialize_payload_fields'] = $this->serializePayloadFields;
        }
    
        return $output;
    }
    

}
