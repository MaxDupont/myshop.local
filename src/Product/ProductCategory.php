<?php

namespace Maksym\MyShop\Product;

use Maksym\MyShop\RecursiveView\CatalogVisitorInterface;

class ProductCategory implements ElementInterface, CategoriesContainerInterface
{
    public function __construct(
        private readonly int $id,
        private readonly string $label,
        private readonly ProductCategories $productCategories = new ProductCategories(),
        private readonly Products $products = new Products())
    {}

    public function getId(): int
    {
        return $this->id;
    }

    public function getLabel(): string
    {
        return $this->label;
    }

    public function getSubCategories(): ProductCategories
    {
        return $this->productCategories;
    }

    function acceptStart(CatalogVisitorInterface $catalogVisitor): void
    {
        $catalogVisitor->visitProductCategory($this);
    }

    function acceptFinish(CatalogVisitorInterface $catalogVisitor): void
    {
        // TODO: Implement acceptFinish() method.
    }

    public function getCount() : int
    {
        return $this->productCategories->getCount();
    }

    public function getProducts(): Products
    {
        return $this->products;
    }

    public function toArray(): array
    {
        return $this->productCategories->toArray();
    }
}