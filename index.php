<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles/index.css">
    <link rel="stylesheet" href="styles/navbar.css">
    <title>Netflix</title>
</head>

<body>
    <?php include "components/navbar.php"; ?>
    <div class="main-content">
        <p class="main-text">
            Películas y series</br>
            ilimitadas y mucho</br>
            más
        </p>
        <p class="sub-text">
            A partir de $119. Cancela cuando quieras.
        </p>
        <p class="text">
            ¿Quieres ver Netflix ya? Ingresa tu email para crear una cuenta o reiniciar tu </br>membresía de Netflix.
        </p>
        <div class="validations-input">
            <input type="email" id="validations" placeholder=" " required>
            <label for="validations">Email</label>
            <button class="start-button">
                <a href="views/login.php">Comenzar</a>
            </button>
        </div>
    </div>
</body>
</html>