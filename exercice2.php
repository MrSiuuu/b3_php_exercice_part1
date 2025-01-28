<?php
/*
 * ÉNONCÉ :
 * Écrivez une classe PHP nommée Person avec des propriétés first_name, last_name et age en protected.
 * Ajouter un constructeur
 * Ajouter les getters et setters
 * Implémentez une méthode afficheInfos() pour afficher les informations de la personne.
 * Créer un nouvel objet et afficher les informations
 */

class Person {
    protected string $first_name;
    protected string $last_name;
    protected int $age;

    // Constructeur
    public function __construct(string $first_name, string $last_name, int $age) {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->age = $age;
    }

    // Getter pour le prénom
    public function getFirstName(): string {
        return $this->first_name;
    }

    // Setter pour le prénom
    public function setFirstName(string $first_name): void {
        $this->first_name = $first_name;
    }

    // Getter pour le nom
    public function getLastName(): string {
        return $this->last_name;
    }

    // Setter pour le nom
    public function setLastName(string $last_name): void {
        $this->last_name = $last_name;
    }

    // Getter pour l'âge
    public function getAge(): int {
        return $this->age;
    }

    // Setter pour l'âge
    public function setAge(int $age): void {
        $this->age = $age;
    }

    public function afficheInfos(): void {
        echo "Prénom : " . $this->first_name . "<br>";
        echo "Nom : " . $this->last_name . "<br>";
        echo "Âge : " . $this->age . " ans<br>";
    }
}

// mon nouveau_objet Person
$person = new Person("Jesus", "Christ", 30);
$person1 = new Person("Judas", "Traitre", 29);
$person->afficheInfos();
$person1->afficheInfos();
?>