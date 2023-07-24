<?php
require_once __DIR__ . "/product.php";


class Accessory extends Product
{
    protected $material;
    protected $size;

    public function __construct($title, $image, $price, $material, $size = "ND")
    {
        parent::__construct($title, $image, $price);
        $this->setMaterial($material);
        $this->setSize($size);
    }

    public function getMaterial()
    {
        return 'Materiale: ' . $this->material;
    }

    public function setMaterial($material)
    {
        if (!strlen($material)) return;
        return $this->material = $material;
    }

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

$fifth_product = new Accessory('Voliera Wilma in Legno', 'https://arcaplanet.vtexassets.com/arquivos/ids/258384/voliera-wilma1.jpg', 184.99, "legno", "L 83 x P 67 x H 153");
$sixth_product = new Accessory('Cartucce Filtranti per Filtro EasyCrystal', 'https://arcaplanet.vtexassets.com/arquivos/ids/272741/tetra-easycrystal-filterpack-250-300.jpg', 2.29, "materiale espanso");
