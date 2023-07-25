<?php
require_once __DIR__ . "/product.php";


class Toy extends Product
{
    protected $characteristics;
    protected $size;

    public function __construct($type, $title, $image, $price, $characteristics, $size = "ND")
    {
        parent::__construct($type, $title, $image, $price);
        $this->setCharacteristics($characteristics);
        $this->setSize($size);
    }

    // Characteristics
    public function getCharacteristics()
    {
        return 'Caratteristiche: ' . $this->characteristics;
    }

    public function setCharacteristics($characteristics)
    {
        if (!strlen($characteristics)) return;
        return $this->characteristics = $characteristics;
    }

    // Size

    public function getSize()
    {
        return 'Dimensioni: ' . $this->size;
    }

    public function setSize($size)
    {
        if (!strlen($size)) return "ND";
        return $this->size = $size;
    }
}

$seventh_product = new Toy("Cane", 'Kong Classic', 'https://arcaplanet.vtexassets.com/arquivos/ids/256599/kong-classic1.jpg', 13.49, "Galleggia e rimbalza", "8,5 cm x 10 cm");
$eighth_product = new Toy("Gatto", 'Topini di peluche Trixie', 'https://arcaplanet.vtexassets.com/arquivos/ids/223852/trixie-gatto-gioco-active-mouse-peluche.jpg', 4.99, "Morbido con codina in corda", "8,5 cm x 10 cm");
