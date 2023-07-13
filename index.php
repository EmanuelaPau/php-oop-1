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
    public $genre;
    public $vote;
    public $img;

    function __construct($movieName, $movieDirector, $movieVote, $movieImg, $movieGenre)
    {
        $this->name = $movieName;
        $this->director = $movieDirector;
        $this->vote = $movieVote;
        $this->img = $movieImg;
        $this->genre = $movieGenre;
    }
    function sayHi()
    {
        echo 'hi';
    }
}

$starWars = new Movie('Episode IV – A New Hope', 'George Lucas', 4.8, 'https://m.media-amazon.com/images/I/81sy+lrM8KL._AC_UF1000,1000_QL80_.jpg', ['Science Fiction']);

$indianaJones = new Movie('Indiana Jones', 'George Lucas', 4.5, 'https://m.media-amazon.com/images/I/51SOmIkKbaL._AC_UF894,1000_QL80_.jpg', ['Action', 'Adventure'])
// var_dump($starWars);

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
            <?php echo $starWars->name ?>
        </h1>
        <h3>
            <?php echo $starWars->director ?>
        </h3>
        <h3>
            <?php echo $starWars->vote ?>
        </h3>
        <h4>
            <?php
            foreach ($starWars->genre as $item) {
                echo $item;
            } ?>
        </h4>
        <img src="<?php echo $starWars->img ?>" alt="<?php echo $starWars->name ?> poster" />

        <h1>
            <?php echo $indianaJones->name ?>
        </h1>
        <h3>
            <?php echo $indianaJones->director ?>
        </h3>
        <h3>
            <?php echo $indianaJones->vote ?>
        </h3>
        <h4>
            <?php
            foreach ($indianaJones->genre as $item) {
            ?> <span><?php echo $item; ?></span>
            <?php } ?>
        </h4>
        <img src="<?php echo $indianaJones->img ?>" alt="<?php echo $starWars->name ?> poster" />



    </main>
</body>

</html>