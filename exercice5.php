<?php

/**
 * ÉNONCÉ :
 * Écrivez une classe nommée Math 
 * Ajouter les méthodes statiques add(), subtract() et multiply().
 * Utilisez ces méthodes pour effectuer des calculs mathématiques sur deux nombres.
 * En dessous de la classe, appeler chaque méthode
 */
class Math {

    public static function add(float $a, float $b): float {
        return $a + $b;
    }

    public static function subtract(float $a, float $b): float {
        return $a - $b;
    }

 
    public static function multiply(float $a, float $b): float {
        return $a * $b;
    }
}

echo "Addition : " . Math::add(10, 5) . "<br>";
echo "Soustraction : " . Math::subtract(10, 5) . "<br>";
echo "Multiplication : " . Math::multiply(10, 5) . "<br>";

?>
