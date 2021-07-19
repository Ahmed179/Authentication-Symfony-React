<?php

namespace Symfony\Config\LexikJwtAuthentication;

require_once __DIR__.\DIRECTORY_SEPARATOR.'TokenExtractors'.\DIRECTORY_SEPARATOR.'AuthorizationHeaderConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'TokenExtractors'.\DIRECTORY_SEPARATOR.'CookieConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'TokenExtractors'.\DIRECTORY_SEPARATOR.'QueryParameterConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'TokenExtractors'.\DIRECTORY_SEPARATOR.'SplitCookieConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class TokenExtractorsConfig 
{
    private $authorizationHeader;
    private $cookie;
    private $queryParameter;
    private $splitCookie;
    
    public function authorizationHeader(array $value = []): \Symfony\Config\LexikJwtAuthentication\TokenExtractors\AuthorizationHeaderConfig
    {
        if (null === $this->authorizationHeader) {
            $this->authorizationHeader = new \Symfony\Config\LexikJwtAuthentication\TokenExtractors\AuthorizationHeaderConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "authorizationHeader()" has already been initialized. You cannot pass values the second time you call authorizationHeader().');
        }
    
        return $this->authorizationHeader;
    }
    
    public function cookie(array $value = []): \Symfony\Config\LexikJwtAuthentication\TokenExtractors\CookieConfig
    {
        if (null === $this->cookie) {
            $this->cookie = new \Symfony\Config\LexikJwtAuthentication\TokenExtractors\CookieConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "cookie()" has already been initialized. You cannot pass values the second time you call cookie().');
        }
    
        return $this->cookie;
    }
    
    public function queryParameter(array $value = []): \Symfony\Config\LexikJwtAuthentication\TokenExtractors\QueryParameterConfig
    {
        if (null === $this->queryParameter) {
            $this->queryParameter = new \Symfony\Config\LexikJwtAuthentication\TokenExtractors\QueryParameterConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "queryParameter()" has already been initialized. You cannot pass values the second time you call queryParameter().');
        }
    
        return $this->queryParameter;
    }
    
    public function splitCookie(array $value = []): \Symfony\Config\LexikJwtAuthentication\TokenExtractors\SplitCookieConfig
    {
        if (null === $this->splitCookie) {
            $this->splitCookie = new \Symfony\Config\LexikJwtAuthentication\TokenExtractors\SplitCookieConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "splitCookie()" has already been initialized. You cannot pass values the second time you call splitCookie().');
        }
    
        return $this->splitCookie;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['authorization_header'])) {
            $this->authorizationHeader = new \Symfony\Config\LexikJwtAuthentication\TokenExtractors\AuthorizationHeaderConfig($value['authorization_header']);
            unset($value['authorization_header']);
        }
    
        if (isset($value['cookie'])) {
            $this->cookie = new \Symfony\Config\LexikJwtAuthentication\TokenExtractors\CookieConfig($value['cookie']);
            unset($value['cookie']);
        }
    
        if (isset($value['query_parameter'])) {
            $this->queryParameter = new \Symfony\Config\LexikJwtAuthentication\TokenExtractors\QueryParameterConfig($value['query_parameter']);
            unset($value['query_parameter']);
        }
    
        if (isset($value['split_cookie'])) {
            $this->splitCookie = new \Symfony\Config\LexikJwtAuthentication\TokenExtractors\SplitCookieConfig($value['split_cookie']);
            unset($value['split_cookie']);
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
        if (null !== $this->splitCookie) {
            $output['split_cookie'] = $this->splitCookie->toArray();
        }
    
        return $output;
    }
    

}
