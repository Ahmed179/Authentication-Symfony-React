<?php

namespace Symfony\Config\LexikJwtAuthentication;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class EncoderConfig 
{
    private $service;
    private $signatureAlgorithm;
    private $cryptoEngine;
    
    /**
     * @default 'lexik_jwt_authentication.encoder.lcobucci'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function service($value): self
    {
        $this->service = $value;
    
        return $this;
    }
    
    /**
     * @default 'RS256'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function signatureAlgorithm($value): self
    {
        $this->signatureAlgorithm = $value;
    
        return $this;
    }
    
    /**
     * @default 'openssl'
     * @param ParamConfigurator|'openssl'|'phpseclib' $value
     * @deprecated The "encoder.crypto_engine" configuration key is deprecated since version 2.5, built-in encoders support OpenSSL only
     * @return $this
     */
    public function cryptoEngine($value): self
    {
        $this->cryptoEngine = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['service'])) {
            $this->service = $value['service'];
            unset($value['service']);
        }
    
        if (isset($value['signature_algorithm'])) {
            $this->signatureAlgorithm = $value['signature_algorithm'];
            unset($value['signature_algorithm']);
        }
    
        if (isset($value['crypto_engine'])) {
            $this->cryptoEngine = $value['crypto_engine'];
            unset($value['crypto_engine']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->service) {
            $output['service'] = $this->service;
        }
        if (null !== $this->signatureAlgorithm) {
            $output['signature_algorithm'] = $this->signatureAlgorithm;
        }
        if (null !== $this->cryptoEngine) {
            $output['crypto_engine'] = $this->cryptoEngine;
        }
    
        return $output;
    }
    

}
