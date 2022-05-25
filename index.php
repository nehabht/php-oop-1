<?php

include __DIR__ . "/db.php";






?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
    
</head>
<body>

    <header style="height: 100px; background-color: Black; margin-bottom:30px;">
        <h1 class="text-center pt-4" style="color:white;">Watching List</h1>

    </header>

    <main>
        <div class="container">
            <div class="row row-cols-3">
                <?php foreach ($movies as $movie) : ?>
                    <div class="col h-100">
                        <div class="card ">
                            <div class="card-top d-flex justify-content-center" >
                                <img class="img-fluid" style="width: auto; height: 500px;" src="<?= $movie->image ?>" alt="">
                            </div>
                            <div class="card-bottom ms-2 mt-2 ">
                                <h5><?= $movie->title ?></h5>
                                <p class="d-flex flex-column"> Rating:
                                    <?= $movie->rating ?>
                                    <span> Year:
                                    <?= $movie->year ?>
                                    </span>
                                    <span>
                                        <?= $movie->recommend() ?>
                                        
                                    </span>
                                </p>

                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>    
            </div>
        </div>
    </main>
    
</body>
</html>