<?php

require_once __DIR__ . "/product.php";

class Food extends Product
{
    private $ingredients;
    private $weight;

    public function __construct($title, $image, $price, $ingredients, $weight)
    {
        parent::__construct($title, $image, $price);
        $this->setIngredients($ingredients);
        $this->setWeight($weight);
    }

    public function getIngredients()
    {
        $ing_list = '';
        foreach ($this->ingredients as $ing) {
            $ing_list .= $ing . ', ';
        }
        return 'Ingredienti: ' . $ing_list;
    }

    public function setIngredients(array $ingredients)
    {
        if (!count($ingredients)) return;
        else $this->ingredients = $ingredients;
    }

    public function getWeight()
    {
        return 'Peso netto: ' . $this->weight . 'g';
    }

    public function setWeight(int $weight)
    {
        if (!is_numeric($weight) || $weight < 0) return;
        else $this->weight = $weight;
    }
}

$first_product = new Food('Royal Canin Mini Adult', 'https://arcaplanet.vtexassets.com/arquivos/ids/243820/royal-canin-size-cane-mini-adult.jpg', 43.99, ["prosciutto", "riso"], 545);
$second_product = new Food('Almo Nature Holistic Maintenance Medium Large Tonno e Riso', 'https://arcaplanet.vtexassets.com/arquivos/ids/245173/almo-nature-holistic-cane-adult-medium-pollo-e-riso.jpg', 44.99, ["manzo", "cereali"], 600);
$third_product = new Food('Almo Nature Cat Daily Lattina', 'https://arcaplanet.vtexassets.com/arquivos/ids/245336/almo-daily-menu-cat-400-gr-vitello.jpg', 34.99, ["tonno", "pollo", "prosciutto"], 400);
$fourth_product = new Food('Mangime per Pesci Guppy in Fiocchi', 'https://arcaplanet.vtexassets.com/arquivos/ids/272714/tetra-guppy-mini-flakes.jpg', 2.95, ["pesi e sottoprodotti dei pesci", "cereali", "lieviti", "alghe"], 400);
