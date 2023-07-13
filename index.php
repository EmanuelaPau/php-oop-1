<!-- Create un file index.php in cui:
è definita una classe ‘Movie’ :

 => all'interno della classe sono dichiarate delle variabili d'istanza
 => all'interno della classe è definito un costruttore
 => all'interno della classe è definito almeno un metodo

vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà
Bonus 1:
Modificare la classe Movie in modo che accetti piú di un genere.
Bonus 2:
  Creare un layout completo per stampare a schermo una lista di movies. Facciamo attenzione all’organizzazione del codice, suddividendolo in appositi file e cartelle. Possiamo ad esempio organizzare il codice
creando un file dedicato ai dati (tipo le array di oggetti) che potremmo chiamare db.php
mettendo ciascuna classe nel proprio file e magari raggruppare tutte le classi in una cartella dedicata che possiamo chiamare Models/
organizzando il layout dividendo la struttura ed i contenuti in file e parziali dedicati. -->

<?php
class Movie
{
    public $id;
    public $name;
    public $director;
    public $vote;
    public $img;

    function __construct($movieName, $movieDirector, $movieVote, $movieImg)
    {
        $this->name = $movieName;
        $this->director = $movieDirector;
        $this->vote = $movieVote;
        $this->img = $movieImg;
    }
    function createId()
    {
        $this->id = rand(0, 999);
    }
}

var_dump($starWars = new Movie('Episode IV – A New Hope', 'George Lucas', 4.8, 'https://m.media-amazon.com/images/I/81sy+lrM8KL._AC_UF1000,1000_QL80_.jpg'))

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <main>
        <h1>
            <?php ?>
        </h1>
    </main>
</body>

</html>