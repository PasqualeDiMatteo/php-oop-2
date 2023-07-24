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
        return 'Prezzo : ' . '€ ' . $this->price;
    }

    public function setPrice($price)
    {
        if (!is_numeric($price) || $price < 0) return;
        return $this->price = $price;
    }
}
