<?php

class Asoft_Categoryproducts_IndexController extends Mage_Core_Controller_Front_Action
{

    public function showAllAction()
    {
        $category_id = $this->getRequest()->get('category_id');


        $block = $this->getLayout()->createBlock('categoryproducts/categoryproducts')->setTemplate('categoryproducts/categoryproducts.phtml');

        $block->setData('category_id', $category_id);
        $block->setData('products_count', PHP_INT_MAX); // todo: is this safe?
        $block->setData('must_show_view_all', false);

        $html = $block->toHtml();

        echo $html;
    }

    public function showNewArrivalAction()
    {
        echo 'test named';
    }

    public function showRefurbishedAction()
    {
        echo 'test named';
    }



   /* public function setupAction()
    {
        $installer = new Mage_Eav_Model_Entity_Setup('core_setup');
        $installer->startSetup();
        $installer->addAttribute('catalog_product', 'refurbished', array(
            'group'           => 'General',
            'label'           => 'Refurbished',
            'input'           => 'boolean',
            'type'            => 'int',
            'default_value_yesno' => '0',
            'required'        => 0,
            'visible_on_front'=> 1,
            'filterable'      => 0,
            'searchable'      => 0,
            'comparable'      => 0,
            'user_defined'    => 1,
            'is_configurable' => 0,
            'global'          => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_GLOBAL,
            'note'            => '',
        ));
        $installer->endSetup();
    }*/
}