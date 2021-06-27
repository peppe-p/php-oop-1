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

    public function setFilm($name, $anno, $genere)
    {
        $this->name = $name;
        $this->anno = $anno;
        $this->genere = $genere;
    }
}

$titanic = new Movie("Titanic", "1997", "Romantico");
$Minecraft = new Movie("Minecraft The Movie", "2030", "Avventura");
$batman->setFilm("Batman 3", "2050", "Azione");


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP - 1</title>
</head>

<body>

</body>

</html>