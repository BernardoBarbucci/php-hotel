<?php

$hotels = [

    [
        'name' => 'Hotel Belvedere',
        'description' => 'Hotel Belvedere Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4
    ],
    [
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuro Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2
    ],
    [
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel Rivamare Descrizione',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1
    ],
    [
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5
    ],
    [
        'name' => 'Hotel Milano',
        'description' => 'Hotel Milano Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 50
    ],

];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php Hotels</title>
    <!-- BOOTSTRAP -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>

    <!-- STYLES -->
    <style>
        body {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            background: linear-gradient(90deg, #000, #790000fa);
        }

        h1 {
            color: white;
        }

        p {
            color: white;
        }
    </style>

</head>

<body>
    <main>
        <section class="container">
            <div class="row d-flex justify-content-center">
                <div class="card col-lg-6 border">
                    <div class="row text-white">
                        <!-- foreach per gli hotel -->
                        <?php foreach ($hotels as $hotel) : ?>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="card">
                                    <h1> <?php echo $hotel['name']; ?> </h1>
                                    <p> <?php echo $hotel['description']; ?> </p>
                                    <p> <?php echo $hotel['vote']; ?> </p>
                                    <p> <?php echo $hotel['distance_to_center']; ?> </p>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </section>
    </main>

</body>

</html>