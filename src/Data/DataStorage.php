<?php

namespace Maksym\MyShop\Data;

use Maksym\MyShop\Product\Catalog;
use Maksym\MyShop\Product\Product;
use Maksym\MyShop\Product\ProductCategories;
use Maksym\MyShop\Product\ProductCategory;
use Maksym\MyShop\Product\Products;

// File: DataStorage.php
class DataStorage
{
    private function getData(String $file): array
    {
        $jsonData = file_get_contents($file);
        return json_decode($jsonData, true);
    }

    public function buildCatalog(): Catalog
    {
        $arrayCatalog = $this->getData('catalog_data.json');

        return new Catalog($arrayCatalog['title'],
                           new ProductCategories($this->buildProductCategories($arrayCatalog['productCategories'])),
                           $arrayCatalog['description']);
    }

    /**
     * @param array $productCategories
     * @return array<ProductCategory>
     */
    private function buildProductCategories(array $productCategories): array
    {
        $categories = [];

        foreach ($productCategories as $productCategory) {

            $categories[] = new ProductCategory(
                $productCategory['id'],
                $productCategory['label'],
                new ProductCategories($this->buildProductCategories($productCategory['productCategories'])),
            );
        }
        return $categories;
    }

    public function buildCatalogWithProducts(): Catalog
    {
        $arrayCatalog = $this->getData('catalog_data.json');

        return new Catalog($arrayCatalog['title'],
            new ProductCategories($this->buildProducts($arrayCatalog['productCategories'])),
            $arrayCatalog['description']);
    }
    private function buildProducts(array $productCategories): array
    {
        $categories = [];

        foreach ($productCategories as $productCategory) {

            if ($productCategory['productCategories']) {
                $categories[] = new ProductCategory(
                    $productCategory['id'],
                    $productCategory['label'],
                    new ProductCategories($this->buildProductCategories($productCategory['productCategories'])),
                );
            } else {
                $categories[] = new ProductCategory(
                    $productCategory['id'],
                    $productCategory['label'],
                    new Products($this->buildProduct($productCategory['products'])),
                );
            }
        }
        return $categories;
    }

    /**
     * @param array $productsData
     * @return array<Product>
     */
    private function buildProduct(array $productsData): array
    {
        $products = [];

        foreach ($productsData as $product) {
            $products[] = new Product($product['id'], $product['label']);
        }

        return $products;
    }
}