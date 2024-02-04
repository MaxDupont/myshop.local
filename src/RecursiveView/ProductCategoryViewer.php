<?php

namespace Maksym\MyShop\RecursiveView;

use Maksym\MyShop\Product\ProductCategories;
use Maksym\MyShop\Product\ProductCategory;

class ProductCategoryViewer implements CatalogVisitorInterface
{
    function visitProductCategory(ProductCategory $item) : void
    {
        echo '<li><a href="category.php?ProductCategory=' . $item->getId() . '">' . $item->getLabel() . '(' . $item->getCount() . ')' . '</a></li>';
    }

    function visitItemStart(ProductCategories $productCategories) : void
    {
        echo '<ul>';
    }

    function visitItemFinish(ProductCategories $productCategories) : void
    {
        echo '</ul>';
    }
}