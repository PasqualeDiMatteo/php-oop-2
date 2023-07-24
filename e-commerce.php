<?php
require_once __DIR__ . "/product.php";
require_once __DIR__ . "/food.php";
require_once __DIR__ . "/accessory.php";
require_once __DIR__ . "/toy.php";



class ECommerce
{
    protected $title;
    protected $products = [];

    public function __construct(string $title, array $products)
    {
        $this->setTitle($title);
        $this->setProducts($products);
    }

    // Title

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        if (!strlen($title)) return;
        return $this->title = $title;
    }

    // Products

    public function getProducts()
    {
        return $this->products;
    }

    public function setProducts(array $products)
    {
        if (!$products) return;
        return $this->products = $products;
    }
}

$e_commerce = new ECommerce("Boolshop", [$first_product, $second_product, $third_product, $fourth_product, $fifth_product, $sixth_product, $seventh_product, $eighth_product]);
