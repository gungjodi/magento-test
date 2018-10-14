<?php

namespace Test\Manufacturers\Model\Catalog;

class Product extends \Magento\Catalog\Model\Product {
    public function getName(){
        return 'Manufacturers 1 '.$this->_getData(self::NAME);
    }
}