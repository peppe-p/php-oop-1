<?php

class Movie
{
    public $nome;
    public $anno;
    public $genere;

    public function __construct($nome, $anno, $genere)
    {
        $this->nome = $nome;
        $this->anno = $anno;
        $this->genere = $genere;
    }


    /* public function getFilm()
    {
        $film = [$this->nome, $this->anno, $this->genere];
        return $film;
    } */

    public function getNome()
    {
        return $this->nome;
    }
    public function getAnno()
    {
        return $this->anno;
    }
    public function getGenere()
    {
        return $this->genere;
    }
}

$titanic = new Movie("Titanic", "1997", "Romantico");
$minecraft = new Movie("Minecraft The Movie", "2030", "Avventura");
$batman = new Movie("Batman 3", "2050", "Azione");


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    section {
        display: flex;
        width: 1000px;
        margin: auto;
    }

    .movie {
        margin: 20px;
        padding: 20px;
        background-color: royalblue;
        color: white;
    }
    </style>
    <title>OOP - 1</title>
</head>

<body>

    <section>
        <div class="movie">
            <h2><?= $titanic->getNome() ?></h2>
            <h4><?= $titanic->getAnno() ?></h4>
            <h5><?= $titanic->getGenere() ?></h5>
        </div>

        <div class="movie">
            <h2><?= $minecraft->getNome() ?></h2>
            <h4><?= $minecraft->getAnno() ?></h4>
            <h5><?= $minecraft->getGenere() ?></h5>
        </div>

        <div class="movie">
            <h2><?= $batman->getNome() ?></h2>
            <h4><?= $batman->getAnno() ?></h4>
            <h5><?= $batman->getGenere() ?></h5>
        </div>
    </section>

</body>

</html>