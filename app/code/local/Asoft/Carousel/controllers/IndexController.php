<?php

class Asoft_Carousel_IndexController extends Mage_Core_Controller_Front_Action
{

    public function showAllNewArrivalAction()
    {
        $this->showAllAction('new_arrival');
    }


    public function showAllRefurbishedAction()
    {
        $this->showAllAction('refurbished');
    }


    protected function showAllAction($only)
    {
        $block = $this->getLayout()->createBlock('carousel/carousel')->setTemplate('carousel/carousel.phtml');
        $block->setData('products_count', PHP_INT_MAX); // todo: is this safe?
        $block->setData('must_show_view_all', false);
        $block->setData('only', $only);

        $html = $block->toHtml();

        echo $html;
    }

}