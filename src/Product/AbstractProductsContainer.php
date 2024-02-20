<?php

namespace Maksym\MyShop\Product;

use Maksym\MyShop\Element\CatalogElementInterface;
use Maksym\MyShop\Visitor\CatalogVisitorInterface;

abstract class AbstractProductsContainer implements CatalogElementInterface
{
    protected readonly Products $products;

    /**
     * @inheritDoc
     */
    public function getElements(): array
    {
        return $this->products->getElements();
    }
}