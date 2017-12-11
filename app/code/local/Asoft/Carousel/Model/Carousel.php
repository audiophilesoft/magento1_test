<?php

class Asoft_Carousel_Model_Carousel extends Mage_Core_Model_Abstract
{
    public function getProducts($count, $only)
    {
        $products = Mage::getModel("catalog/product")
            ->getCollection()
            ->addAttributeToSelect('*')
            ->setOrder('entity_id', 'DESC')
            ->setPageSize($count);

        Mage::getSingleton('catalog/product_visibility')
            ->addVisibleInCatalogFilterToCollection($products);


        return isset($only) ? $products->addAttributeToFilter($only, '1') : $products;
    }
}