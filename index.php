<?php
$nom = "Alex";
$heure = date("H:i");
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon site PHP</title>

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #111827;
            color: white;
            text-align: center;
        }

        .container {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        h1 {
            color: #60a5fa;
            font-size: 45px;
        }

        p {
            font-size: 20px;
            color: #d1d5db;
        }

        .box {
            padding: 25px;
            background: #1f2937;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.3);
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="box">
            <h1>🚀 Bonjour <?php echo $nom; ?> !</h1>

            <p>Bienvenue sur mon site PHP.</p>

            <p>Il est actuellement <?php echo $heure; ?>.</p>
        </div>
    </div>

</body>
</html>