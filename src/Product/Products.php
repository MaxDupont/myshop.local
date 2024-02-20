<?php

namespace Maksym\MyShop\Product;

use Maksym\MyShop\Element\CatalogElementInterface;
use Maksym\MyShop\Visitor\CatalogVisitorInterface;

class Products implements CatalogElementInterface
{

    /**
     * @param Product[] $products
     */
    public function __construct(
        private readonly array $products = [])
    {
    }

    function acceptHead(CatalogVisitorInterface $catalogVisitor): void
    {
        $catalogVisitor->visitProductsHead($this);
    }

    function acceptTail(CatalogVisitorInterface $catalogVisitor): void
    {
        $catalogVisitor->visitProductsTail($this);
    }

    /**
     * @inheritDoc
     */
    public function getElements(): array
    {
        return $this->products;
    }
}