<?php

namespace Symfony\Config\Security\FirewallConfig;

require_once __DIR__.\DIRECTORY_SEPARATOR.'LexikJwt'.\DIRECTORY_SEPARATOR.'AuthorizationHeaderConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'LexikJwt'.\DIRECTORY_SEPARATOR.'CookieConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'LexikJwt'.\DIRECTORY_SEPARATOR.'QueryParameterConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;
use Symfony\Component\Config\Loader\ParamConfigurator;


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class LexikJwtConfig 
{
    private $authorizationHeader;
    private $cookie;
    private $queryParameter;
    private $throwExceptions;
    private $createEntryPoint;
    private $authenticationProvider;
    private $authenticationListener;
    
    public function authorizationHeader(array $value = []): \Symfony\Config\Security\FirewallConfig\LexikJwt\AuthorizationHeaderConfig
    {
        if (null === $this->authorizationHeader) {
            $this->authorizationHeader = new \Symfony\Config\Security\FirewallConfig\LexikJwt\AuthorizationHeaderConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "authorizationHeader()" has already been initialized. You cannot pass values the second time you call authorizationHeader().');
        }
    
        return $this->authorizationHeader;
    }
    
    public function cookie(array $value = []): \Symfony\Config\Security\FirewallConfig\LexikJwt\CookieConfig
    {
        if (null === $this->cookie) {
            $this->cookie = new \Symfony\Config\Security\FirewallConfig\LexikJwt\CookieConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "cookie()" has already been initialized. You cannot pass values the second time you call cookie().');
        }
    
        return $this->cookie;
    }
    
    public function queryParameter(array $value = []): \Symfony\Config\Security\FirewallConfig\LexikJwt\QueryParameterConfig
    {
        if (null === $this->queryParameter) {
            $this->queryParameter = new \Symfony\Config\Security\FirewallConfig\LexikJwt\QueryParameterConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "queryParameter()" has already been initialized. You cannot pass values the second time you call queryParameter().');
        }
    
        return $this->queryParameter;
    }
    
    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function throwExceptions($value): self
    {
        $this->throwExceptions = $value;
    
        return $this;
    }
    
    /**
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function createEntryPoint($value): self
    {
        $this->createEntryPoint = $value;
    
        return $this;
    }
    
    /**
     * @default 'lexik_jwt_authentication.security.authentication.provider'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function authenticationProvider($value): self
    {
        $this->authenticationProvider = $value;
    
        return $this;
    }
    
    /**
     * @default 'lexik_jwt_authentication.security.authentication.listener'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function authenticationListener($value): self
    {
        $this->authenticationListener = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['authorization_header'])) {
            $this->authorizationHeader = new \Symfony\Config\Security\FirewallConfig\LexikJwt\AuthorizationHeaderConfig($value['authorization_header']);
            unset($value['authorization_header']);
        }
    
        if (isset($value['cookie'])) {
            $this->cookie = new \Symfony\Config\Security\FirewallConfig\LexikJwt\CookieConfig($value['cookie']);
            unset($value['cookie']);
        }
    
        if (isset($value['query_parameter'])) {
            $this->queryParameter = new \Symfony\Config\Security\FirewallConfig\LexikJwt\QueryParameterConfig($value['query_parameter']);
            unset($value['query_parameter']);
        }
    
        if (isset($value['throw_exceptions'])) {
            $this->throwExceptions = $value['throw_exceptions'];
            unset($value['throw_exceptions']);
        }
    
        if (isset($value['create_entry_point'])) {
            $this->createEntryPoint = $value['create_entry_point'];
            unset($value['create_entry_point']);
        }
    
        if (isset($value['authentication_provider'])) {
            $this->authenticationProvider = $value['authentication_provider'];
            unset($value['authentication_provider']);
        }
    
        if (isset($value['authentication_listener'])) {
            $this->authenticationListener = $value['authentication_listener'];
            unset($value['authentication_listener']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->authorizationHeader) {
            $output['authorization_header'] = $this->authorizationHeader->toArray();
        }
        if (null !== $this->cookie) {
            $output['cookie'] = $this->cookie->toArray();
        }
        if (null !== $this->queryParameter) {
            $output['query_parameter'] = $this->queryParameter->toArray();
        }
        if (null !== $this->throwExceptions) {
            $output['throw_exceptions'] = $this->throwExceptions;
        }
        if (null !== $this->createEntryPoint) {
            $output['create_entry_point'] = $this->createEntryPoint;
        }
        if (null !== $this->authenticationProvider) {
            $output['authentication_provider'] = $this->authenticationProvider;
        }
        if (null !== $this->authenticationListener) {
            $output['authentication_listener'] = $this->authenticationListener;
        }
    
        return $output;
    }
    

}
