<?php
$id = $_GET['id'];
$movie = file_get_contents('http://www.omdbapi.com/?apikey=3dd96b6e&i=' . $id);
$movie = json_decode($movie, true);
?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Rekweb Movie</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <h2>Movie Detail</h2>
            </div>
        </div>

        <div class="row">
            <div class="col-3">
                <img src="<?= $movie['Poster']; ?>" class="img-fluid">
            </div>

            <div class="col-8">
                <ul class="list-group">
                    <li class="list-group-item">
                        <h3><?= $movie['title']; ?> (<?= $movie['Year']; ?>)</h3>
                    </li>
                    <li class="list-group-item"><strong>Director : </strong> <?= $movie['Director']; ?> </li>
                    <li class="list-group-item"><strong>Writer : </strong> <?= $movie['Writer']; ?></li>
                    <li class="list-group-item"><strong>Cast : </strong> <?= $movie['Actors']; ?></li>
                    <li class="list-group-item"><?= $movie['Plot']; ?></li>
                </ul>
            </div>

        </div>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="script.js"></script>
</body>

</html>