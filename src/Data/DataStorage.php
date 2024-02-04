<?php

namespace Maksym\MyShop\Data;

use Maksym\MyShop\Product\Catalog;
use Maksym\MyShop\Product\Product;
use Maksym\MyShop\Product\ProductCategories;
use Maksym\MyShop\Product\ProductCategory;
use Maksym\MyShop\Product\Products;

class DataStorage
{
    public static function getData(): Catalog
    {
        return new Catalog(new ProductCategories([
            new ProductCategory(
                1,
                'Игрушки',
                new ProductCategories(),
                new Products(
                    [
                        new Product('Юла', 1),
                        new Product('Неваляшка', 2),
                        new Product('Кукла', 3)
                    ]
                )
            ),
            new ProductCategory(
                2,
                'Одежда',
                new ProductCategories([
                    new ProductCategory(
                        3, 'Зимняя одежда',
                        new ProductCategories([
                            new ProductCategory(4, 'Шубы'),
                            new ProductCategory(5, 'Пальто')])
                    ),
                    new ProductCategory(
                        6,
                        'Летняя одежда')])),
            new ProductCategory(
                7,
                'Питание')
        ]));
    }
}