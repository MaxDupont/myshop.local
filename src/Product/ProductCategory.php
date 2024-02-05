<?php

namespace Maksym\MyShop\Product;

use Maksym\MyShop\Visitor\CatalogVisitorInterface;

class ProductCategory extends AbstractProductCategoriesContainer
{
    public function __construct(
        private readonly int               $id,
        private readonly string            $label,
        protected readonly ProductCategories $productCategories = new ProductCategories(),
    )
    {}

    public function getId(): int
    {
        return $this->id;
    }

    public function getLabel(): string
    {
        return $this->label;
    }

    function acceptHead(CatalogVisitorInterface $catalogVisitor): void
    {
        $catalogVisitor->visitProductCategoryHead($this);

        if ($this->categoriesExists()) {
            $this->productCategories->acceptHead($catalogVisitor);
        }
    }

    function acceptTail(CatalogVisitorInterface $catalogVisitor): void
    {
        if ($this->categoriesExists()) {
            $this->productCategories->acceptTail($catalogVisitor);
        }

        $catalogVisitor->visitProductCategoryTail($this);
    }
}
