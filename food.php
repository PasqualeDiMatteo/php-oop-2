<?php

require_once __DIR__ . "/product.php";

class Food extends Product
{
    protected $ingredients;
    protected $weight;

    public function __construct($type, $title, $image, $price, $ingredients, $weight)
    {
        parent::__construct($type, $title, $image, $price);
        $this->setIngredients($ingredients);
        $this->setWeight($weight);
    }

    // Ingredients

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
        return $this->ingredients = $ingredients;
    }

    // Weight

    public function getWeight()
    {
        return 'Peso netto: ' . $this->weight . 'g';
    }

    public function setWeight(int $weight)
    {
        if (!is_numeric($weight) || $weight < 0) return;
        return $this->weight = $weight;
    }
}

$first_product = new Food("Cane", 'Royal Canin Mini Adult', 'https://th.bing.com/th/id/OIP.C3zzw1OWmJVUd4Xde8jCQgHaHa?w=201&h=202&c=7&r=0&o=5&dpr=1.5&pid=1.7', 43.99, ["prosciutto", "riso"], 545);
$second_product = new Food("Cane", 'Almo Nature Holistic Maintenance Medium Large Tonno e Riso', 'https://arcaplanet.vtexassets.com/arquivos/ids/245173/almo-nature-holistic-cane-adult-medium-pollo-e-riso.jpg', 44.99, ["manzo", "cereali"], 600);
$third_product = new Food("Gatto", 'Almo Nature Cat Daily Lattina', 'https://arcaplanet.vtexassets.com/arquivos/ids/245336/almo-daily-menu-cat-400-gr-vitello.jpg', 34.99, ["tonno", "pollo", "prosciutto"], 400);
$fourth_product = new Food("Pesce", 'Mangime per Pesci Guppy in Fiocchi', 'https://arcaplanet.vtexassets.com/arquivos/ids/272714/tetra-guppy-mini-flakes.jpg', 2.95, ["pesi e sottoprodotti dei pesci", "cereali", "lieviti", "alghe"], 400);
