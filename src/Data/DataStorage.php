<?php

namespace Maksym\MyShop\Data;

use Maksym\MyShop\Element\CatalogElementInterface;
use Maksym\MyShop\Product\Catalog;
use Maksym\MyShop\Product\Product;
use Maksym\MyShop\Product\ProductCategories;
use Maksym\MyShop\Product\ProductCategory;
use Maksym\MyShop\Product\Products;

class DataStorage
{
    public function getData(): CatalogElementInterface
    {
        return new Catalog(
            'Main catalog',
            new ProductCategories(
                [
                    new ProductCategory(
                        1,
                        'Игрушки',
                        new ProductCategories(),
                    ),
                    new ProductCategory(
                        2,
                        'Одежда',
                        new ProductCategories(
                            [
                                new ProductCategory(
                                    3,
                                    'Зимняя одежда',
                                    new ProductCategories(
                                        [
                                            new ProductCategory(4, 'Шубы', new ProductCategories(),),
                                            new ProductCategory(5, 'Пальто', new ProductCategories(),)
                                        ]
                                    ),
                                ),
                                new ProductCategory(6,
                                    'Летняя одежда',
                                    new ProductCategories(),
                                )
                            ]
                        ),
                    ),
                    new ProductCategory(
                        7,
                        'Питание',
                        new ProductCategories(),
                    )
                ]
            ),
            'This is my first shop'
        );
    }

    public function getProducts(): CatalogElementInterface
    {
        return new Catalog(
            'Main catalog',
            new ProductCategories(
                [
                    new ProductCategory(
                        1,
                        'Игрушки',
                        new Products([new Product(101, 'Юла'), new Product(102, 'Машина')]),
                    ),
                    new ProductCategory(
                        2,
                        'Одежда',
                        new ProductCategories(
                            [
                                new ProductCategory(
                                    3,
                                    'Зимняя одежда',
                                    new ProductCategories(
                                        [
                                            new ProductCategory(4, 'Шубы', new Products([new Product(105, 'Versace'), new Product(106, 'Gucci')]),),
                                            new ProductCategory(5, 'Пальто', new Products([new Product(105, 'Vers'), new Product(106, 'Guc')]),)
                                        ]
                                    ),
                                ),
                                new ProductCategory(6,
                                    'Летняя одежда',
                                    new Products([new Product(105, 'Носки'), new Product(106, 'Трусы')]),
                                )
                            ]
                        ),
                    ),
                    new ProductCategory(
                        7,
                        'Питание',
                        new Products([new Product(107, 'Манка'), new Product(108, 'Перловка')]),
                    )
                ]
            ),
            'This is my first shop'
        );
    }
}