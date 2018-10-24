<?php

/**
 * Class Ecommistry_ProductList_Block_ProductList
 */
class Ecommistry_ProductList_Block_ProductList extends Mage_Catalog_Block_Product_List
{
    /**
     * @return mixed
     */
    protected function _getProductCollection()
    {
        if (empty($this->_productCollection)) {
            $this->_productCollection = Mage::getResourceModel('catalog/product_collection')
                ->addAttributeToSelect(Mage::getSingleton('catalog/config')->getProductAttributes())
                ->setStore(Mage::app()->getStore())
                ->addMinimalPrice()
                ->addFinalPrice()
                ->addTaxPercents()
                ->addStoreFilter()
                ->addUrlRewrite()
                ->addAttributeToFilter('handle_display', '1');
        }
        return $this->_productCollection;
    }
}