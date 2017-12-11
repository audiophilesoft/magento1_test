<?php

class Asoft_Categoryproducts_Model_Categoryproducts extends Mage_Core_Model_Abstract
{
    protected $category;

    public function __construct($id)
    {
        parent::__construct();

        $this->loadCategory($id);
    }


    protected function loadCategory($id)
    {
        $this->category = Mage::getModel("catalog/category")->load($id);
    }

    public function getProducts($count, $only = null)
    {
        $products = $this->category
            ->getProductCollection()
            ->addAttributeToSelect('*')
            ->setOrder('entity_id', 'DESC')
            ->setPageSize($count);

       Mage::getSingleton('catalog/product_visibility')
            ->addVisibleInCatalogFilterToCollection($products);

        return isset($only) ? $products->addAttributeToFilter($only, '1') : $products;
    }

    public function getCategoryUrl()
    {
        return $this->category->getUrl();
    }
}