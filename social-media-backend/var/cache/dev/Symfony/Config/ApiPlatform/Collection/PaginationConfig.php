<?php

namespace Symfony\Config\ApiPlatform\Collection;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class PaginationConfig 
{
    private $enabled;
    private $partial;
    private $clientEnabled;
    private $clientItemsPerPage;
    private $clientPartial;
    private $itemsPerPage;
    private $maximumItemsPerPage;
    private $pageParameterName;
    private $enabledParameterName;
    private $itemsPerPageParameterName;
    private $partialParameterName;
    
    /**
     * To enable or disable pagination for all resource collections by default.
     * @default true
     * @param ParamConfigurator|bool $value
     * @deprecated The use of the `collection.pagination.enabled` has been deprecated in 2.6 and will be removed in 3.0. Use `defaults.pagination_enabled` instead.
     * @return $this
     */
    public function enabled($value): self
    {
        $this->enabled = $value;
    
        return $this;
    }
    
    /**
     * To enable or disable partial pagination for all resource collections by default when pagination is enabled.
     * @default false
     * @param ParamConfigurator|bool $value
     * @deprecated The use of the `collection.pagination.partial` has been deprecated in 2.6 and will be removed in 3.0. Use `defaults.pagination_partial` instead.
     * @return $this
     */
    public function partial($value): self
    {
        $this->partial = $value;
    
        return $this;
    }
    
    /**
     * To allow the client to enable or disable the pagination.
     * @default false
     * @param ParamConfigurator|bool $value
     * @deprecated The use of the `collection.pagination.client_enabled` has been deprecated in 2.6 and will be removed in 3.0. Use `defaults.pagination_client_enabled` instead.
     * @return $this
     */
    public function clientEnabled($value): self
    {
        $this->clientEnabled = $value;
    
        return $this;
    }
    
    /**
     * To allow the client to set the number of items per page.
     * @default false
     * @param ParamConfigurator|bool $value
     * @deprecated The use of the `collection.pagination.client_items_per_page` has been deprecated in 2.6 and will be removed in 3.0. Use `defaults.pagination_client_items_per_page` instead.
     * @return $this
     */
    public function clientItemsPerPage($value): self
    {
        $this->clientItemsPerPage = $value;
    
        return $this;
    }
    
    /**
     * To allow the client to enable or disable partial pagination.
     * @default false
     * @param ParamConfigurator|bool $value
     * @deprecated The use of the `collection.pagination.client_partial` has been deprecated in 2.6 and will be removed in 3.0. Use `defaults.pagination_client_partial` instead.
     * @return $this
     */
    public function clientPartial($value): self
    {
        $this->clientPartial = $value;
    
        return $this;
    }
    
    /**
     * The default number of items per page.
     * @default 30
     * @param ParamConfigurator|int $value
     * @deprecated The use of the `collection.pagination.items_per_page` has been deprecated in 2.6 and will be removed in 3.0. Use `defaults.pagination_items_per_page` instead.
     * @return $this
     */
    public function itemsPerPage($value): self
    {
        $this->itemsPerPage = $value;
    
        return $this;
    }
    
    /**
     * The maximum number of items per page.
     * @default null
     * @param ParamConfigurator|int $value
     * @deprecated The use of the `collection.pagination.maximum_items_per_page` has been deprecated in 2.6 and will be removed in 3.0. Use `defaults.pagination_maximum_items_per_page` instead.
     * @return $this
     */
    public function maximumItemsPerPage($value): self
    {
        $this->maximumItemsPerPage = $value;
    
        return $this;
    }
    
    /**
     * The default name of the parameter handling the page number.
     * @default 'page'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function pageParameterName($value): self
    {
        $this->pageParameterName = $value;
    
        return $this;
    }
    
    /**
     * The name of the query parameter to enable or disable pagination.
     * @default 'pagination'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function enabledParameterName($value): self
    {
        $this->enabledParameterName = $value;
    
        return $this;
    }
    
    /**
     * The name of the query parameter to set the number of items per page.
     * @default 'itemsPerPage'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function itemsPerPageParameterName($value): self
    {
        $this->itemsPerPageParameterName = $value;
    
        return $this;
    }
    
    /**
     * The name of the query parameter to enable or disable partial pagination.
     * @default 'partial'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function partialParameterName($value): self
    {
        $this->partialParameterName = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['enabled'])) {
            $this->enabled = $value['enabled'];
            unset($value['enabled']);
        }
    
        if (isset($value['partial'])) {
            $this->partial = $value['partial'];
            unset($value['partial']);
        }
    
        if (isset($value['client_enabled'])) {
            $this->clientEnabled = $value['client_enabled'];
            unset($value['client_enabled']);
        }
    
        if (isset($value['client_items_per_page'])) {
            $this->clientItemsPerPage = $value['client_items_per_page'];
            unset($value['client_items_per_page']);
        }
    
        if (isset($value['client_partial'])) {
            $this->clientPartial = $value['client_partial'];
            unset($value['client_partial']);
        }
    
        if (isset($value['items_per_page'])) {
            $this->itemsPerPage = $value['items_per_page'];
            unset($value['items_per_page']);
        }
    
        if (isset($value['maximum_items_per_page'])) {
            $this->maximumItemsPerPage = $value['maximum_items_per_page'];
            unset($value['maximum_items_per_page']);
        }
    
        if (isset($value['page_parameter_name'])) {
            $this->pageParameterName = $value['page_parameter_name'];
            unset($value['page_parameter_name']);
        }
    
        if (isset($value['enabled_parameter_name'])) {
            $this->enabledParameterName = $value['enabled_parameter_name'];
            unset($value['enabled_parameter_name']);
        }
    
        if (isset($value['items_per_page_parameter_name'])) {
            $this->itemsPerPageParameterName = $value['items_per_page_parameter_name'];
            unset($value['items_per_page_parameter_name']);
        }
    
        if (isset($value['partial_parameter_name'])) {
            $this->partialParameterName = $value['partial_parameter_name'];
            unset($value['partial_parameter_name']);
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
        if (null !== $this->partial) {
            $output['partial'] = $this->partial;
        }
        if (null !== $this->clientEnabled) {
            $output['client_enabled'] = $this->clientEnabled;
        }
        if (null !== $this->clientItemsPerPage) {
            $output['client_items_per_page'] = $this->clientItemsPerPage;
        }
        if (null !== $this->clientPartial) {
            $output['client_partial'] = $this->clientPartial;
        }
        if (null !== $this->itemsPerPage) {
            $output['items_per_page'] = $this->itemsPerPage;
        }
        if (null !== $this->maximumItemsPerPage) {
            $output['maximum_items_per_page'] = $this->maximumItemsPerPage;
        }
        if (null !== $this->pageParameterName) {
            $output['page_parameter_name'] = $this->pageParameterName;
        }
        if (null !== $this->enabledParameterName) {
            $output['enabled_parameter_name'] = $this->enabledParameterName;
        }
        if (null !== $this->itemsPerPageParameterName) {
            $output['items_per_page_parameter_name'] = $this->itemsPerPageParameterName;
        }
        if (null !== $this->partialParameterName) {
            $output['partial_parameter_name'] = $this->partialParameterName;
        }
    
        return $output;
    }
    

}
