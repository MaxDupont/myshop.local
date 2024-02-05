<?php

declare(strict_types = 1);

namespace Maksym\MyShop\Product;

use Maksym\MyShop\Visitor\CatalogVisitorInterface;

class Catalog extends AbstractProductCategoriesContainer
{
    public function __construct(
        private readonly string $title,
        protected readonly ProductCategories $productCategories,
        private readonly string $description = ''
    ) {
    }

    function acceptHead(CatalogVisitorInterface $catalogVisitor): void
    {
        $catalogVisitor->visitCatalogHead($this);
    }

    function acceptTail(CatalogVisitorInterface $catalogVisitor): void
    {
        $catalogVisitor->visitCatalogTail($this);
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getDescription(): string
    {
        return $this->description;
    }
}