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
    <title>Netflix</title>
</head>

<body>
    <div class="navbar">
        <a class="home" href="#">
            <span class="netflix-logo">NETFLIX</span>
        </a>
        <button class="loginButton">Iniciar Sesion</button>
        <div class="dropdown">
            <button class="dropButton">Idioma
                <i class="fa fa-caret-down">
                </i>
            </button>
            <div class="dropdown-content">
                <a href="#">Español</a>
                <a href="#">English</a>
                <a href="#">Français</a>
            </div>
        </div>
    </div>
    <div class="main-content">
        <p class="main-text">
            Películas y series</br>
            ilimitadas y mucho</br>
            más
        </p>
        <p class="sub-text">
YAZ TUNG TUNG SAHUR        </p>
        <p class="text">
            ¿Quieres ver Netflix ya? Ingresa tu email para crear una cuenta o reiniciar tu </br>membresía de Netflix.
        </p>
        <div class="email-input">
            <input type="email" id="validations" placeholder=" " required>
            <label for="validations">Email</label>
            <button class="start-button">Comenzar</button>
        </div>
    </div>
    <div class="modal-login">

    </div>
</body>

</html>