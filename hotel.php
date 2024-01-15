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
    [
        'name' => 'Hotel Siena',
        'description' => 'Grande e meraviglioso hotel',
        'parking' => true,
        'vote' => 10,
        'distance_to_center' => 0
    ],

];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php Hotels</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>

    <style>
    main {
        height: 100vh;
        background: linear-gradient(180deg, #311f13, #a87e62);
    }

    .card {
        background-color: #f4decb;
        min-height: 15rem;
    }

    #custom_card {
        background-color: #3a2317;
        transition: linear .3s;
    }

    #custom_card:hover {
        background-color: #573721;
        border: 2px solid white;
    }

    h1 {
        color: white;
        font-size: 1.4rem;
    }

    p {
        color: white;
    }
    </style>

</head>

<body>
    <main class="d-flex align-items-center">
        <section class="container d-flex flex-column align-items-center">
            <h1 class="mb-5">PHP Hotels</h1>
            <div class="row d-flex justify-content-center">
                <div class="card col-11 border">
                    <div class="row pt-3">
                        <!-- foreach per gli hotel -->
                        <?php foreach ($hotels as $hotel) : ?>
                        <div class="col-4">
                            <div class="card mb-3 p-2" id="custom_card">
                                <h1> <?php echo $hotel['name']; ?> </h1>
                                <p> <?php echo $hotel['description']; ?> </p>
                                <p> Voto: <?php echo $hotel['vote']; ?> </p>
                                <p>Distanza dal centro: <?php echo $hotel['distance_to_center']; ?>km </p>
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