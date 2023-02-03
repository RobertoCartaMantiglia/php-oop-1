<?php
include_once "./classes/Movie.php";

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
        foreach ($movie_1 as $elemenet) {
            echo "<div>";
            echo "<p>{$movie_1}</p>";
            echo "</div>";
        }
        // var_dump($movie_1);
        ?>
    </div>
</body>

</html>