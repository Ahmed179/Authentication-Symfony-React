<?php

namespace Symfony\Config;

require_once __DIR__.\DIRECTORY_SEPARATOR.'LexikJwtAuthentication'.\DIRECTORY_SEPARATOR.'EncoderConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'LexikJwtAuthentication'.\DIRECTORY_SEPARATOR.'TokenExtractorsConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'LexikJwtAuthentication'.\DIRECTORY_SEPARATOR.'SetCookiesConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class LexikJwtAuthenticationConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $privateKeyPath;
    private $publicKeyPath;
    private $publicKey;
    private $secretKey;
    private $passPhrase;
    private $tokenTtl;
    private $clockSkew;
    private $encoder;
    private $userIdentityField;
    private $userIdClaim;
    private $tokenExtractors;
    private $setCookies;
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @deprecated The "lexik_jwt_authentication.private_key_path" configuration key is deprecated since version 2.5. Use "lexik_jwt_authentication.secret_key" instead.
     * @return $this
     */
    public function privateKeyPath($value): self
    {
        $this->privateKeyPath = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @deprecated The "lexik_jwt_authentication.public_key_path" configuration key is deprecated since version 2.5. Use "lexik_jwt_authentication.public_key" instead.
     * @return $this
     */
    public function publicKeyPath($value): self
    {
        $this->publicKeyPath = $value;
    
        return $this;
    }
    
    /**
     * The key used to sign tokens (useless for HMAC). If not set, the key will be automatically computed from the secret key.
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function publicKey($value): self
    {
        $this->publicKey = $value;
    
        return $this;
    }
    
    /**
     * The key used to sign tokens. It can be a raw secret (for HMAC), a raw RSA/ECDSA key or the path to a file itself being plaintext or PEM.
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function secretKey($value): self
    {
        $this->secretKey = $value;
    
        return $this;
    }
    
    /**
     * The key passphrase (useless for HMAC)
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function passPhrase($value): self
    {
        $this->passPhrase = $value;
    
        return $this;
    }
    
    /**
     * @default 3600
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function tokenTtl($value): self
    {
        $this->tokenTtl = $value;
    
        return $this;
    }
    
    /**
     * @default 0
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function clockSkew($value): self
    {
        $this->clockSkew = $value;
    
        return $this;
    }
    
    public function encoder(array $value = []): \Symfony\Config\LexikJwtAuthentication\EncoderConfig
    {
        if (null === $this->encoder) {
            $this->encoder = new \Symfony\Config\LexikJwtAuthentication\EncoderConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "encoder()" has already been initialized. You cannot pass values the second time you call encoder().');
        }
    
        return $this->encoder;
    }
    
    /**
     * @default 'username'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function userIdentityField($value): self
    {
        $this->userIdentityField = $value;
    
        return $this;
    }
    
    /**
     * If null, the user ID claim will have the same name as the one defined by the option "user_identity_field"
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function userIdClaim($value): self
    {
        $this->userIdClaim = $value;
    
        return $this;
    }
    
    public function tokenExtractors(array $value = []): \Symfony\Config\LexikJwtAuthentication\TokenExtractorsConfig
    {
        if (null === $this->tokenExtractors) {
            $this->tokenExtractors = new \Symfony\Config\LexikJwtAuthentication\TokenExtractorsConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "tokenExtractors()" has already been initialized. You cannot pass values the second time you call tokenExtractors().');
        }
    
        return $this->tokenExtractors;
    }
    
    public function setCookies(string $name, array $value = []): \Symfony\Config\LexikJwtAuthentication\SetCookiesConfig
    {
        if (!isset($this->setCookies[$name])) {
            return $this->setCookies[$name] = new \Symfony\Config\LexikJwtAuthentication\SetCookiesConfig($value);
        }
        if ([] === $value) {
            return $this->setCookies[$name];
        }
    
        throw new InvalidConfigurationException('The node created by "setCookies()" has already been initialized. You cannot pass values the second time you call setCookies().');
    }
    
    public function getExtensionAlias(): string
    {
        return 'lexik_jwt_authentication';
    }
            
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['private_key_path'])) {
            $this->privateKeyPath = $value['private_key_path'];
            unset($value['private_key_path']);
        }
    
        if (isset($value['public_key_path'])) {
            $this->publicKeyPath = $value['public_key_path'];
            unset($value['public_key_path']);
        }
    
        if (isset($value['public_key'])) {
            $this->publicKey = $value['public_key'];
            unset($value['public_key']);
        }
    
        if (isset($value['secret_key'])) {
            $this->secretKey = $value['secret_key'];
            unset($value['secret_key']);
        }
    
        if (isset($value['pass_phrase'])) {
            $this->passPhrase = $value['pass_phrase'];
            unset($value['pass_phrase']);
        }
    
        if (isset($value['token_ttl'])) {
            $this->tokenTtl = $value['token_ttl'];
            unset($value['token_ttl']);
        }
    
        if (isset($value['clock_skew'])) {
            $this->clockSkew = $value['clock_skew'];
            unset($value['clock_skew']);
        }
    
        if (isset($value['encoder'])) {
            $this->encoder = new \Symfony\Config\LexikJwtAuthentication\EncoderConfig($value['encoder']);
            unset($value['encoder']);
        }
    
        if (isset($value['user_identity_field'])) {
            $this->userIdentityField = $value['user_identity_field'];
            unset($value['user_identity_field']);
        }
    
        if (isset($value['user_id_claim'])) {
            $this->userIdClaim = $value['user_id_claim'];
            unset($value['user_id_claim']);
        }
    
        if (isset($value['token_extractors'])) {
            $this->tokenExtractors = new \Symfony\Config\LexikJwtAuthentication\TokenExtractorsConfig($value['token_extractors']);
            unset($value['token_extractors']);
        }
    
        if (isset($value['set_cookies'])) {
            $this->setCookies = array_map(function ($v) { return new \Symfony\Config\LexikJwtAuthentication\SetCookiesConfig($v); }, $value['set_cookies']);
            unset($value['set_cookies']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->privateKeyPath) {
            $output['private_key_path'] = $this->privateKeyPath;
        }
        if (null !== $this->publicKeyPath) {
            $output['public_key_path'] = $this->publicKeyPath;
        }
        if (null !== $this->publicKey) {
            $output['public_key'] = $this->publicKey;
        }
        if (null !== $this->secretKey) {
            $output['secret_key'] = $this->secretKey;
        }
        if (null !== $this->passPhrase) {
            $output['pass_phrase'] = $this->passPhrase;
        }
        if (null !== $this->tokenTtl) {
            $output['token_ttl'] = $this->tokenTtl;
        }
        if (null !== $this->clockSkew) {
            $output['clock_skew'] = $this->clockSkew;
        }
        if (null !== $this->encoder) {
            $output['encoder'] = $this->encoder->toArray();
        }
        if (null !== $this->userIdentityField) {
            $output['user_identity_field'] = $this->userIdentityField;
        }
        if (null !== $this->userIdClaim) {
            $output['user_id_claim'] = $this->userIdClaim;
        }
        if (null !== $this->tokenExtractors) {
            $output['token_extractors'] = $this->tokenExtractors->toArray();
        }
        if (null !== $this->setCookies) {
            $output['set_cookies'] = array_map(function ($v) { return $v->toArray(); }, $this->setCookies);
        }
    
        return $output;
    }
    

}
