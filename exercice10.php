<?php

/**
 * Classe Statistics pour gérer les calculs statistiques

 * class Statistics {
    *  private array $numbers;

     * // Constructeur pour initialiser le tableau de nombres
     * public function __construct(array $numbers) {
        *  $this->numbers = $numbers;
    *  }

     * // Méthode pour calculer la somme
     * public function getSum(): float {
        *  $sum = 0;
        **foreach ($this->numbers as $number) {
       **     $sum += $number;
       ** }
       ** return $sum;
   ** }

   ** // Méthode pour calculer la moyenne
   ** public function getAverage(): float {
     **   if (count($this->numbers) === 0) {
         *   return 0;
       * }
   *   *  return $this->getSum() / count($this->numbers);
    }

   * // Méthode pour trouver la valeur minimale
   * public function getMin(): float {
      *  if (count($this->numbers) === 0) {
         *   return 0;
       * }
       * $min = $this->numbers[0];
       * foreach ($this->numbers as $number) {
          *  if ($number < $min) {
            *    $min = $number;
          *  }
     *   }
  *      return $min;
   * }

   * // Méthode pour trouver la valeur maximale
   * public function getMax(): float {
       * if (count($this->numbers) === 0) {
        *    return 0;
       * }
       * $max = $this->numbers[0];
       * foreach ($this->numbers as $number) {
       *     if ($number > $max) {
      *          $max = $number;
      *      }
     *   }
   *    return $max;
 *   }
*}

** Exemple d'utilisation
*$numbers = [10, 5, 8, 20, 3, 15];
*$stats = new Statistics($numbers);

* Affichage des résultats
*echo "Tableau de nombres : " . implode(", ", $numbers) . "<br>";
*echo "Somme : " . $stats->getSum() . "<br>";
*echo "Moyenne : " . $stats->getAverage() . "<br>";
*echo "Valeur minimale : " . $stats->getMin() . "<br>";
*echo "Valeur maximale : " . $stats->getMax() . "<br>";
*/

class Statistics {
    private array $numbers;

    public function __construct(array $numbers) {
        $this->numbers = $numbers;
    }

    public function getSum(): float {
        $sum = 0;
        foreach ($this->numbers as $number) {
            $sum += $number;
        }
        return $sum;
    }

    public function getAverage(): float {
        if (count($this->numbers) === 0) {
            return 0;
        }
        return $this->getSum() / count($this->numbers);
    }

    public function getMin(): float {
        if (count($this->numbers) === 0) {
            return 0;
        }
        $min = $this->numbers[0];
        foreach ($this->numbers as $number) {
            if ($number < $min) {
                $min = $number;
            }
        }
        return $min;
    }

    public function getMax(): float {
        if (count($this->numbers) === 0) {
            return 0;
        }
        $max = $this->numbers[0];
        foreach ($this->numbers as $number) {
            if ($number > $max) {
                $max = $number;
            }
        }
        return $max;
    }
}

$numbers = [10, 5, 8, 20, 3, 15];
$stats = new Statistics($numbers);

echo "Tableau de nombres : " . implode(", ", $numbers) . "<br>";
echo "Somme : " . $stats->getSum() . "<br>";
echo "Moyenne : " . $stats->getAverage() . "<br>";
echo "Valeur minimale : " . $stats->getMin() . "<br>";
echo "Valeur maximale : " . $stats->getMax() . "<br>";

?>

