<!-- Bonus 2:
  Creare un layout completo per stampare a schermo una lista di movies. Facciamo attenzione all’organizzazione del codice, suddividendolo in appositi file e cartelle. Possiamo ad esempio organizzare il codice
creando un file dedicato ai dati (tipo le array di oggetti) che potremmo chiamare db.php
mettendo ciascuna classe nel proprio file e magari raggruppare tutte le classi in una cartella dedicata che possiamo chiamare Models/
organizzando il layout dividendo la struttura ed i contenuti in file e parziali dedicati.  -->

<?php
include __DIR__ . '/models/movie.php';

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
    <link rel="stylesheet" href="./style/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>

<body>
    <header>
        <div class="container-fluid mt-4">
            <div class="row d-flex flex-wrap">
                <div class="col-12">
                    <h1>
                        Movies
                    </h1>
                </div>
            </div>
        </div>
    </header>
    <main>
        <div class="container-fluid mt-3 mb-5">
            <div class="row d-flex flex-wrap">
                <div class="col-3">
                    <div class="card">
                        <img class="card-img-top" src="<?php echo $starWars->img ?>" alt="<?php echo $starWars->name ?> poster">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $starWars->name ?></h5>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><strong>Director: </strong><?php echo $starWars->director ?> </li>
                                <li class="list-group-item"><strong>Vote: </strong><?php echo $starWars->director ?></li>
                                <li class="list-group-item">
                                    <strong>Genre: </strong>
                                    <?php
                                    foreach ($starWars->genre as $item) {
                                    ?> <span><?php echo $item; ?></span>
                                    <?php } ?>
                                </li>
                            </ul>
                            <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                        </div>
                    </div>
                </div>

                <div class="col-3">
                    <div class="card">
                        <img class="card-img-top" src="<?php echo $indianaJones->img ?>" alt="<?php echo $indianaJones->name ?> poster">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $indianaJones->name ?></h5>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><strong>Director: </strong><?php echo $indianaJones->director ?> </li>
                                <li class="list-group-item"><strong>Vote: </strong><?php echo $indianaJones->director ?></li>
                                <li class="list-group-item">
                                    <strong>Genre: </strong>
                                    <?php
                                    foreach ($indianaJones->genre as $item) {
                                    ?> <span><?php echo $item; ?></span>
                                    <?php } ?>
                                </li>
                            </ul>
                            <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                        </div>
                    </div>
                </div>

                <div class="col-3">
                    <div class="card">
                        <img class="card-img-top" src="<?php echo $starWars->img ?>" alt="<?php echo $starWars->name ?> poster">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $starWars->name ?></h5>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><strong>Director: </strong><?php echo $starWars->director ?> </li>
                                <li class="list-group-item"><strong>Vote: </strong><?php echo $starWars->director ?></li>
                                <li class="list-group-item">
                                    <strong>Genre: </strong>
                                    <?php
                                    foreach ($starWars->genre as $item) {
                                    ?> <span><?php echo $item; ?></span>
                                    <?php } ?>
                                </li>
                            </ul>
                            <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                        </div>
                    </div>
                </div>



            </div>
        </div>

    </main>
</body>

</html>