<?php
include_once "./classes/Movie.php";
$movie_1 = new Movie('Il Signore degli Anelli, ', 'fantasy, ', '180 minuti');
$movie_2 = new Movie('Up!, ', 'animazione, ', 'durata 120')
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php oop</title>
</head>

<body>
    <h1>
        Movie
    </h1>

    <div>
        <?php
        echo $movie_1->getMovieInfo();
        echo "<br>";
        echo $movie_2->getMovieInfo();



        ?>
    </div>
</body>

</html>