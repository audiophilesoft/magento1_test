<?php

class Asoft_Categoryproducts_Block_Categoryproducts extends Asoft_Carousel_Block_CarouselAbstract
{



    public function getCategoryUrl()
    {
        return $this->getModel()->getCategoryUrl();
    }

    public function getCategoryId()
    {
        return $this->getRequestedCategoryId();
    }


    protected function getRequestedCategoryId()
    {
        return $this->getData('category_id');
    }

    protected function getModel()
    {
        if (!$this->model) {
            $this->model = Mage::getModel("categoryproducts/categoryproducts",
                $this->getRequestedCategoryId());
        }

        return $this->model;

    }

}