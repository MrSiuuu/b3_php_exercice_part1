<?php
require_once "exercice2.php"; // Importer la classe Person

/**
 * ÉNONCÉ :
 * Importer le fichier de l'exercice2 pour avoir accès à la classe Person
 * Écrivez une classe nommée Employee qui hérite de la classe Person
 * et ajoute les propriétés salary et position.
 * Surchager le constructeur et appeler le constructeur parent
 * Surcharger la méthode afficheInfos() pour afficher le salaire et le poste
 * En dessous la classe instancier un objet et afficher les infos
 */
class Employee extends Person {
    protected float $salary;
    protected string $position;


    public function __construct(string $first_name, string $last_name, int $age, float $salary, string $position) {
        parent::__construct($first_name, $last_name, $age);
        $this->salary = $salary;
        $this->position = $position;
    }

    // Getter pour le salaire
    public function getSalary(): float {
        return $this->salary;
    }

    // Setter pour le salaire
    public function setSalary(float $salary): void {
        $this->salary = $salary;
    }

    // Getter pour le poste
    public function getPosition(): string {
        return $this->position;
    }

    // Setter pour le poste
    public function setPosition(string $position): void {
        $this->position = $position;
    }


    public function afficheInfos(): void {
                             parent::afficheInfos();

        echo "Poste : " . $this->position . "<br>";
        echo "Salaire : " . $this->salary . " €<br>";
    }
}

// Instancier un objet Employee
$employee = new Employee("Alice", "Martin", 28, 35000, "Creatrice de contenu");
$employee1 = new Employee("mark", "zuckerberk", 28, 2000000000, "CEO Facebook");

// Afficher les informations de l'employée
$employee->afficheInfos();
$employee1->afficheInfos();
?>