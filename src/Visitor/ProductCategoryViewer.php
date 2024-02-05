<?php

namespace Maksym\MyShop\Visitor;

use Maksym\MyShop\Product\Catalog;
use Maksym\MyShop\Product\ProductCategories;
use Maksym\MyShop\Product\ProductCategory;

class ProductCategoryViewer implements CatalogVisitorInterface
{
    function visitProductCategoryHead(ProductCategory $productCategory) : void
    {
        echo '<li><a href="category.php?ProductCategory=' . $productCategory->getId() . '">' . $productCategory->getLabel() . '</a>';
    }

    function visitProductCategoryTail(ProductCategory $productCategory): void
    {
        echo '</li>';
    }

    function visitProductCategoriesHead(ProductCategories $productCategories): void
    {
        echo '<ul class="category-list">';
    }

    function visitProductCategoriesTail(ProductCategories $productCategories): void
    {
        echo '</ul>';
    }

    function visitCatalogHead(Catalog $catalog): void
    {
        echo '<h1>' . $catalog->getTitle() . '</h1><p class="description">' . $catalog->getDescription() . '</p><ul class="catalog-list">';
    }

    function visitCatalogTail(Catalog $catalog): void
    {
        echo '</ul>';
    }
}