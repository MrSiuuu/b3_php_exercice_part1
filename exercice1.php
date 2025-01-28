<?php
/*
 * ÉNONCÉ :
 * Créer Product avec les propriétés suivantes en protected
 * - name
 * - price_without_tax
 * - vat_rate
 * Ajouter les getters et setters
 * Ajouter une methode getPriceWithVat() qui va retourner le calcul du prix TTC
 * En dessous la classe instancier un produit et afficher les infos
 */

 class Product {
     // Propriétés protégées
     protected string $name;
     protected float $price_without_tax;
     protected float $vat_rate;
 
     // Constructeur
     public function __construct(string $name, float $price_without_tax, float $vat_rate) {
         $this->name = $name;
         $this->price_without_tax = $price_without_tax;
         $this->vat_rate = $vat_rate;
     }
 
     // Getter pour le nom
     public function getName(): string {
         return $this->name;
     }
 
     // Setter pour le nom
     public function setName(string $name): void {
         $this->name = $name;
     }
 
     // Getter pour le prix HT
     public function getPriceWithoutTax(): float {
         return $this->price_without_tax;
     }
 
     // Setter pour le prix HT
     public function setPriceWithoutTax(float $price_without_tax): void {
         $this->price_without_tax = $price_without_tax;
     }
 
     // Getter pour le taux de TVA
     public function getVatRate(): float {
         return $this->vat_rate;
     }
 
     // Setter pour le taux de TVA
     public function setVatRate(float $vat_rate): void {
         $this->vat_rate = $vat_rate;
     }
 
     // Méthode pour calculer le prix TTC
     public function getPriceWithVat(): float {
         return $this->price_without_tax * (1 + $this->vat_rate / 100);
     }
 }
 
 // Instancier des produits
 $products = [
     new Product("Laptop", 1000, 20),
     new Product("PC", 4500, 30)
 ];
 
 ?>
 <!DOCTYPE html>
 <html lang="fr">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Produits</title>
     <style>
         body {
             font-family: Arial, sans-serif;
             margin: 0;
             padding: 20px;
             background-color: #f9f9f9;
         }
 
         .product-card {
             background-color: #8AA496FF;
             border: 1px solid #ddd;
             border-radius: 8px;
             padding: 15px;
             margin-bottom: 20px;
             box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
             max-width: 400px;
         }
 
         .product-card h2 {
             margin: 0 0 10px;
             color: #333;
         }
 
         .product-card p {
             margin: 5px 0;
             color: #555;
         }
     </style>
 </head>
 <body>
    
     <?php foreach ($products as $product): // petite boucle en foreach :) ?>
         <div class="product-card">
             <h2>Produit : <?= htmlspecialchars($product->getName()) ?></h2>
             <p>Prix HT : <?= htmlspecialchars($product->getPriceWithoutTax()) ?> €</p>
             <p>Taux de TVA : <?= htmlspecialchars($product->getVatRate()) ?>%</p>
             <p>Prix TTC : <?= htmlspecialchars($product->getPriceWithVat()) ?> €</p>
         </div>
     <?php endforeach; ?>
 </body>
 </html>
 