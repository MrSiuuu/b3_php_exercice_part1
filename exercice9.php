<?php

/**
 * ÉNONCÉ:
 * Créez une classe Movie avec les propriétés 
 * title, genre et ageRestriction. 
 * Ajoutez une méthode canWatch($viewerAge) qui retourne true 
 * si l’âge du spectateur ($viewerAge) est supérieur ou égal à ageRestriction, 
 * sinon false.
  * En dessous de la classe, créer un objet et appeler les méthodes
 */

class Movie {
    public string $title;
    public string $genre;
    public int $ageRestriction;


    public function __construct(string $title, string $genre, int $ageRestriction) {
        $this->title = $title;
        $this->genre = $genre;
        $this->ageRestriction = $ageRestriction;
    }

    public function canWatch(int $viewerAge): bool {
        if ($viewerAge >= $this->ageRestriction) {
            return true;
        } else {
            return false;
        }
    }
}


$movie = new Movie("Les larmes du soleil", "Action/Sci-fi/Afrique", 16);
$movie1 = new Movie("Les larmes du soleil", "Action/Sci-fi/Afrique", 16);


$viewerAge = 12;
if ($movie->canWatch($viewerAge)) {
    echo "Azy tu peux regarder le film \"" . $movie->title . "\".<br>";
} else {
    echo "Désolé, T_es jeune,  trop jeune pour le regarder \"" . $movie->title . "\".<br>";
}

echo "Titre : " . $movie->title . "<br>";
echo "Genre : " . $movie->genre . "<br>";
echo "Restriction d'âge : " . $movie->ageRestriction . " ans<br>";

$viewerAge = 18;
if ($movie->canWatch($viewerAge)) {
    echo "Azy tu peux regarder le film \"" . $movie->title . "\".<br>";
} else {
    echo "Désolé, T_es jeune,  trop jeune pour le regarder \"" . $movie->title . "\".<br>";
}

echo "Titre : " . $movie->title . "<br>";
echo "Genre : " . $movie->genre . "<br>";
echo "Restriction d'âge : " . $movie->ageRestriction . " ans<br>";

?>
