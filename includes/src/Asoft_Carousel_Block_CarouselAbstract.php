<?php

abstract class Asoft_Carousel_Block_CarouselAbstract extends Mage_Core_Block_Template
{
    protected $model;


    public function getProducts()
    {
        $products = $this->getModel()
            ->getProducts($this->getRequestedProductsCount(), $this->getOnlyParameter());

        return $products;
    }


    public function getOnlyParameter()
    {
        return $this->getData('only');
    }


    public function mustShowViewAll()
    {
        return $this->getData('must_show_view_all') !== false;
    }


    protected function getRequestedProductsCount()
    {
        return $this->getData('products_count');
    }


    protected function getColumnCount()
    {
        return $this->getData('column_count');
    }


    public function getUrlByIdPath($path, array $params = [])
    {
        $url = Mage::getModel('core/url_rewrite')->loadByIdPath($path)->getRequestPath();

        if (count($params)) {
            $url = Mage::helper('core/url')->addRequestParam($url, $params);
        }

        return $url;
    }


    abstract protected function getModel();

}