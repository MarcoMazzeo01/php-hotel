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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Hotel</title>
</head>
<body>
    <div class="container">
    <h1>Hotels</h1>

    <form method="GET">
            <div class="form-group">
                <label for="parking">Parcheggio disponibile:</label>
                <select name="parking" id="parking" class="form-control">
                    <option value="">Tutti</option>
                    <option value="1">Sì</option>
                    <option value="0">No</option>
                </select>
            </div>
            <div class="form-group">
                <label for="vote">Voto:</label>
                <select name="vote" id="vote" class="form-control">
                    <option value="">Tutti</option>
                    <option value="1">&#9733;</option>
                    <option value="2">&#9733;&#9733;</option>
                    <option value="3">&#9733;&#9733;&#9733;</option>
                    <option value="4">&#9733;&#9733;&#9733;&#9733;</option>
                    <option value="5">&#9733;&#9733;&#9733;&#9733;&#9733;</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary my-3">Cerca</button>
        </form>

    <table class="table">
    <thead>
        <tr>
            
        <?php foreach($hotels[0] as $key => $value): ?>

            <th scope="col"> <?php echo $key ?></th>
        <?php endforeach; ?>
        </tr>
    </thead>
        <tbody>

        <?php foreach($hotels as $hotel): ?>
        <tr>
      <th scope="row"><?php echo $hotel['name'] ?></th>
      <td><?php echo $hotel['description'] ?></td>
      <td><?php echo $hotel['parking'] ? 'Yes' : 'No'; ?></td>
      <td><?php echo $hotel['vote'] ?> &#9733;</td>
      <td><?php echo $hotel['distance_to_center'] ?>Km</td>
      <?php endforeach; ?>
    </tr>
        </tbody>
    </table>



    </div>
</body>
</html>