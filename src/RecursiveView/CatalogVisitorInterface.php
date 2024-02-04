<?php

namespace Maksym\MyShop\RecursiveView;
use Maksym\MyShop\Product\ProductCategories;
use Maksym\MyShop\Product\ProductCategory;

interface CatalogVisitorInterface
{
    function visitProductCategory (ProductCategory $item) : void;

    /**
     * @param ProductCategories $productCategories
     * @return void
     */
    function visitItemStart(ProductCategories $productCategories) : void;

    /**
     * @param ProductCategories $productCategories
     * @return void
     */
    function visitItemFinish(ProductCategories $productCategories) : void;

}