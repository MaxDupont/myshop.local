<?php

namespace Maksym\MyShop\Product;

use Maksym\MyShop\RecursiveView\CatalogVisitorInterface;

class ProductCategories implements ElementInterface, CategoriesContainerInterface
{
    /**
     * @var array<ProductCategory>
     */
    private array $productCategories;

    /**
     * @param ProductCategory[] $productCategories
     */
    public function __construct(array $productCategories = [])
    {
        $this->productCategories = $productCategories;
    }

    public function toArray(): array
    {
        return $this->productCategories;
    }

    function acceptStart(CatalogVisitorInterface $catalogVisitor): void
    {
        $catalogVisitor->visitItemStart($this);
    }

    function acceptFinish(CatalogVisitorInterface $catalogVisitor): void
    {
        $catalogVisitor->visitItemFinish($this);
    }

    function getCount () : int
    {
        return count($this->productCategories);
    }
}