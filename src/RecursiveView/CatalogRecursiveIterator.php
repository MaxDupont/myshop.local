<?php

namespace Maksym\MyShop\RecursiveView;

use Maksym\MyShop\Product\Catalog;
use Maksym\MyShop\Product\CategoriesContainerInterface;
use Maksym\MyShop\Product\ProductCategories;
use Maksym\MyShop\Product\ProductCategory;

/**
 * Класс служит для рекурсивного обхода дерева каталога
 */
class CatalogRecursiveIterator
{
    /**
     * метод проходит по дереву каталога. В первом параметре метод принимает каталог, во втором - интерфейс каталог-визитор.
     *
     * @param Catalog $categoriesContainer
     * @param CatalogVisitorInterface $catalogVisitor
     * @return void
     */
    public function goRecursively(CategoriesContainerInterface $categoriesContainer, CatalogVisitorInterface $catalogVisitor) : void
    {

        /**
         * @param ProductCategory $productCategory
         * @return void
         */
        $recursiveCallback = function (ProductCategory $productCategory) use ($catalogVisitor) {
            $productCategory->acceptStart($catalogVisitor);

            if (!empty($productCategory->getSubCategories())) {
                $subCatalog = new Catalog($productCategory->getSubCategories());
                $this->goRecursively($subCatalog, $catalogVisitor);
            }
        };

        $productCategories = new ProductCategories($categoriesContainer->toArray());
        $productCategoriesArray = $productCategories->toArray();

        $productCategories->acceptStart($catalogVisitor);
        array_walk($productCategoriesArray, $recursiveCallback);
        $productCategories->acceptFinish($catalogVisitor);
    }
}