<?php

namespace Maksym\MyShop\Visitor;

use Maksym\MyShop\Product\Catalog;
use Maksym\MyShop\Product\Product;
use Maksym\MyShop\Product\ProductCategories;
use Maksym\MyShop\Product\ProductCategory;
use Maksym\MyShop\Product\Products;

class ProductCategoryViewer extends AbstractCatalogVisitor
{
    function visitProductCategoryHead(ProductCategory $productCategory) : void
    {
        echo '<li><a href="category.php?ProductMode=0&ProductCategory=' . $productCategory->getId() . '">' . $productCategory->getLabel() . '</a>
              <a href="category.php?ProductMode=1&ProductCategory=' . $productCategory->getId() . '" >(Продукты)</a>';
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

    function visitProductHead(Product $product): void
    {
        echo '<li class="product">' . $product->getLabel();
    }

    function visitProductTail(Product $product): void
    {
        echo "</li>";
    }

    function visitProductsHead(Products $products): void
    {
        echo '<ul class="products-list">';
    }

    function visitProductsTail(Products $products): void
    {
        echo "</ul>";
    }
}