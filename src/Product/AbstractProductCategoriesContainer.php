<?php

declare(strict_types = 1);

namespace Maksym\MyShop\Product;

use Maksym\MyShop\Element\CatalogElementInterface;

abstract class AbstractProductCategoriesContainer implements CatalogElementInterface
{
    protected readonly ProductCategories $productCategories;

    public function getElements(): array
    {
        return $this->productCategories->getElements();
    }

    protected function categoriesExists(): bool
    {
        return count($this->getElements()) > 0;
    }
}