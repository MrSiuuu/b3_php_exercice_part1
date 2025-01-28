<?php

/**
 * ÉNONCÉ
 * Créez une classe Article ayant les propriétés 
 * title (titre)
 * content (contenu)
 * Implémentez une méthode getSummary($maxLength) qui retourne les premiers $maxLength caractères 
 * du contenu, suivis de « … » si le contenu est trop long.
 * En dessous la classe instancier un objet et afficher les infos

 */
class Article {
    private string $title;
    private string $content;

    public function __construct(string $title, string $content) {
        $this->title = $title;
        $this->content = $content;
    }

    // Getter pour le titre
    public function getTitle(): string {
        return $this->title;
    }

    // Getter pour le contenu
    public function getContent(): string {
        return $this->content;
    }

    // Méthode pour obtenir un résumé du contenu
    public function getSummary(int $maxLength): string {
        if (strlen($this->content) > $maxLength) {
            return substr($this->content, 0, $maxLength) . "…";
        }
        return $this->content;
    }
}

$article = new Article(
    "Introduction à PHP",
    "PHP est un langage de script côté serveur, conçu principalement pour le développement web. Il est puissant, flexible et largement utilisé dans l'industrie."
);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Article</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: #f5f5f5;
        }

        .article-container {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            padding: 20px 30px;
            max-width: 600px;
            text-align: center;
        }

        .article-container h1 {
            color: #3498db;
            margin-bottom: 15px;
        }

        .article-container p {
            color: #555;
            line-height: 1.6;
            margin-bottom: 10px;
        }

        .article-container .summary {
            font-style: italic;
            color: #7f8c8d;
        }
    </style>
</head>
<body>
    <div class="article-container">
        <h1><?= htmlspecialchars($article->getTitle()); ?></h1>
        <p><strong>Contenu complet :</strong> <?= htmlspecialchars($article->getContent()); ?></p>
        <p class="summary"><strong>Résumé :</strong> <?= htmlspecialchars($article->getSummary(40)); ?></p>
    </div>
</body>
</html>
