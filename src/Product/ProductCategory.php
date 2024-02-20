<?php

namespace Maksym\MyShop\Product;

use Maksym\MyShop\Element\CatalogElementInterface;
use Maksym\MyShop\Visitor\CatalogVisitorInterface;

class ProductCategory extends AbstractProductCategoriesContainer
{
    public function __construct(
        private readonly int               $id,
        private readonly string            $label,
        private readonly ?CatalogElementInterface $subElementsContainer = new ProductCategories(),
    )
    {}

    public function getSubElementsContainer(): CatalogElementInterface
    {
        return $this->subElementsContainer;
    }

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
            $this->subElementsContainer->acceptHead($catalogVisitor);
        }
    }

    function acceptTail(CatalogVisitorInterface $catalogVisitor): void
    {
        if ($this->categoriesExists()) {
            $this->subElementsContainer->acceptTail($catalogVisitor);
        }

        $catalogVisitor->visitProductCategoryTail($this);
    }

    public function getElements(): array
    {
        return $this->subElementsContainer->getElements();
    }
}
