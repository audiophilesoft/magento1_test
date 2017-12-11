<?php

class Asoft_Carousel_Block_Carousel extends Asoft_Carousel_Block_CarouselAbstract
{

    protected function getModel()
    {
        if (!$this->model) {
            $this->model = Mage::getModel("carousel/carousel",
                $this->getRequestedCategoryId());
        }

        return $this->model;
    }

}