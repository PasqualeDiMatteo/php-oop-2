<?php
require_once __DIR__ . "/product.php";


class Toy extends Product
{
    protected $characteristics;
    protected $size;

    public function __construct($title, $image, $price, $characteristics, $size = "ND")
    {
        parent::__construct($title, $image, $price);
        $this->setCharacteristics($characteristics);
        $this->setSize($size);
    }

    public function getCharacteristics()
    {
        return 'Caratteristiche: ' . $this->characteristics;
    }

    public function setCharacteristics($characteristics)
    {
        if (!strlen($characteristics)) return;
        $this->characteristics = $characteristics;
    }

    public function getSize()
    {
        return 'Dimensioni: ' . $this->size;
    }

    public function setSize($size)
    {
        if (!strlen($size)) return "ND";
        $this->size = $size;
    }
}

$seventh_product = new Toy('Kong Classic', 'https://arcaplanet.vtexassets.com/arquivos/ids/256599/kong-classic1.jpg', 13.49, "Galleggia e rimbalza", "8,5 cm x 10 cm");
$eighth_product = new Toy('Topini di peluche Trixie', 'https://arcaplanet.vtexassets.com/arquivos/ids/223852/trixie-gatto-gioco-active-mouse-peluche.jpg', 4.99, "Morbido con codina in corda", "8,5 cm x 10 cm");
