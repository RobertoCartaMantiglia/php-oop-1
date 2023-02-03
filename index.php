<?php
include_once "./classes/Movie.php";
$movie_1 = new Movie('Il Signore degli Anelli, ', 'fantasy, ', '180 minuti');
$movie_2 = new Movie('Up!, ', 'animazione, ', '120 minuti')
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
        echo "<h2> il film è: ";
        echo $movie_1->title;
        echo "</h2>";
        echo "<p> genere: ";
        echo $movie_1->type;
        echo "</p>";
        echo "<p> durata: ";
        echo $movie_1->timing;
        echo "</p>";

        echo "<div>";
        echo $movie_2->getMovieInfo();
        echo "</div>";


        ?>
    </div>
</body>

</html>