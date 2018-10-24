<?php

/**
 * Class Ecommistry_ProductList_ListController
 */
class Ecommistry_ProductList_ListController extends Mage_Core_Controller_Front_Action
{
    /**
     * Load customer section for logged in customers
     * Authenticate the login before action
     * Function indexAction
     */
    public function indexAction()
    {
        if (!Mage::getSingleton('customer/session')->isLoggedIn()) {
            Mage::getSingleton('customer/session')->authenticate($this);
            return;
        }
        $this->loadLayout();
        // set active nav item
        $navigationBlock = $this->getLayout()->getBlock('customer_account_navigation');
        if ($navigationBlock) {
            $navigationBlock->setActive('productlist/list');
        }
        $this->getLayout()->getBlock('head')->setTitle(Mage::helper('ecommproductlist')->__('Product List'));
        $this->renderLayout();
    }
}