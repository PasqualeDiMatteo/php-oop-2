<?php
class Product
{
    protected $title;
    protected $image;
    protected $price;

    public function __construct($title, $image, $price)
    {
        $this->setTitle($title);
        $this->setImage($image);
        $this->setPrice($price);
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        if (!strlen($title)) return;
        return $this->title = $title;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function setImage($image)
    {
        if (!$image) return;
        return $this->image = $image;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price)
    {
        if (!is_numeric($price) || $price < 0) return;
        else $this->price = $price;
    }
}

$first_product = new Product('Royal Canin Mini Adult', 'https://arcaplanet.vtexassets.com/arquivos/ids/243820/royal-canin-size-cane-mini-adult.jpg', 99);
$second_product = new Product('Almo Nature Holistic Maintenance Medium Large Tonno e Riso', 'https://arcaplanet.vtexassets.com/arquivos/ids/245173/almo-nature-holistic-cane-adult-medium-pollo-e-riso.jpg', 78);
$third_product = new Product('Almo Nature Cat Daily Lattina', 'https://arcaplanet.vtexassets.com/arquivos/ids/245336/almo-daily-menu-cat-400-gr-vitello.jpg', 44);
