<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raffle Draw</title>
</head>
<body>
    <?php
    function generateWinner() {
        $timestamp = time();
        $winner = $timestamp % 3; 
        return $winner;
    }

    $currentWinner = generateWinner();
    ?>

    <h1>Raffle Draw Winner</h1>
    <p>The winner is {'Participant'}<?php echo $currentWinner + 1; ?></p>
</body>
</html>
