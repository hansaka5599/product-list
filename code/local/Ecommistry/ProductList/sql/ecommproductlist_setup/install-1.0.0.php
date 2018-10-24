<?php
$installer = $this;
$installer->startSetup();
/**
 * Add 'handle_display' attributes for entities
 */
Mage::getResourceModel('catalog/setup', 'catalog_setup')->addAttribute(
    Mage_Catalog_Model_Product::ENTITY, 'handle_display',
    array(
        'group' => 'General',
        'backend' => 'catalog/product_attribute_backend_boolean',
        'frontend' => '',
        'label' => 'Handle Display',
        'input' => 'select',
        'class' => '',
        'source' => 'eav/entity_attribute_source_boolean',
        'global' => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
        'visible' => true,
        'required' => false,
        'user_defined' => false,
        'default' => '',
        'apply_to' => '',
        'is_configurable' => 0,
        'visible_on_front' => false
    )
);

$installer->endSetup();