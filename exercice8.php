<?php

/**
 * ÉNONCÉ:
 * Créez une classe Student qui étend Person et ayant pour propriétés 
 * - grades (tableau de notes).
 * Ajoutez une méthode getAverage() qui retourne la moyenne des notes. 
 * Implémentez les getters et setters pour manipuler le tableau de notes.
 * En dessous de la classe, créer un objet et appeler les méthodes
 */
class Person {
    protected string $firstName;
    protected string $lastName;

    public function __construct(string $firstName, string $lastName) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    public function getFullName(): string {
        return $this->firstName . " " . $this->lastName;
    }
}


class Student extends Person {
    private array $grades = [];


    public function getGrades(): array {
        return $this->grades;
    }

    public function setGrades(array $grades): void {
        $this->grades = $grades;
    }


    public function addGrade(float $grade): void {
        $this->grades[] = $grade;
    }


    public function getAverage(): float {
        if (empty($this->grades)) {
            return 0;
        }
        $sum = array_sum($this->grades);
        return $sum / count($this->grades);
    }
}


$student = new Student("Alice", "Martin");


$student->addGrade(15.5);
$student->addGrade(18.0);
$student->addGrade(12.5);


echo "Nom de l'étudiant : " . $student->getFullName() . "<br>";
echo "Notes : " . implode(", ", $student->getGrades()) . "<br>";
echo "Moyenne : " . $student->getAverage() . "<br>";
?>
