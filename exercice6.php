<?php

/**
 * ÉNONCÉ :
 * Écrivez une classe PHP nommée ShoppingCart avec les propriétés 
 * - items (sous forme de tableau)
 * - total.
 * Implémentez une méthode pour ajouter des articles au panier 
 * (chaque article sera dans un tableau avec name et price) 
 * Implémentez une méthode pour afficher tous les items.
 * Implémentez une méthode pour calculer le coût total.
 * En dessous de la classe, créer un objet et appeler vos méthodes
 */
class ShoppingCart {
    private array $items = []; 
    private float $total = 0;  


    public function addItem(string $name, float $price): void {
        $this->items[] = ['name' => $name, 'price' => $price];
    }


    public function displayItems(): void {
        if (empty($this->items)) {
            echo "<p>Le panier est vide.</p>";
        } else {
            echo "<ul>";
            foreach ($this->items as $item) {
                echo "<li>" . htmlspecialchars($item['name']) . " : " . htmlspecialchars($item['price']) . " €</li>";
            }
            echo "</ul>";
        }
    }

  
    public function calculateTotal(): float {
        $this->total = 0;
        foreach ($this->items as $item) {
            $this->total += $item['price'];
        }
        return $this->total;
    }
}


$cart = new ShoppingCart();


$cart->addItem("telephone", 800.50);
$cart->addItem("Paractamol", 45.99);
$cart->addItem("Anticovid", 25.30);

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panier d'achat</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .cart-container {
            background: #ffffff;
            padding: 20px 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }

        .cart-container h1 {
            font-size: 24px;
            margin-bottom: 20px;
            text-align: center;
            color: #333;
        }

        .cart-container ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .cart-container ul li {
            background: #7E7E7EFF;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .cart-container p {
            text-align: center;
            font-size: 18px;
            color: #555;
        }

        .cart-container .total {
            margin-top: 20px;
            font-weight: bold;
            text-align: center;
            color: #2c3e50;
        }
    </style>
</head>
<body>
    <div class="cart-container">
        <h1>Ton panier</h1>
        <?php
        $cart->displayItems();
        ?>
        <div class="total">
            <?php
            echo "Total : " . $cart->calculateTotal() . " €";
            ?>
        </div>
    </div>
</body>
</html>