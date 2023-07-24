<?php
class Product
{
    protected $type;
    protected $title;
    protected $image;
    protected $price;

    public function __construct($type, $title, $image, $price,)
    {
        $this->setType($type);
        $this->setTitle($title);
        $this->setImage($image);
        $this->setPrice($price);
    }

    public function getType()
    {
        return $this->type;
    }

    public function setType(string $type)
    {
        if (!strlen($type) && ($type === 'Cane' || $type === 'Gatto' || $type === 'Pesce' || $type === 'Ucello')) return;
        return $this->type = $type;
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
