<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../styles/navbar.css">
    <title>Document</title>
</head>

<body>
    <?php include "../components/navbar.php"; ?>
        <div class="login-content">
            <h2>Iniciar Sesión</h2>
            <form>
                <div class="validations-input">
                    <input type="email" id="validations" placeholder=" " required>
                    <label for="validations">Email</label>
                </div>
                <div class="validations-input">
                    <input type="password" id="validations" placeholder=" " required>
                    <label for="validations">Contraseña</label>
                </div>
                <button type="submit" class="start-button">Iniciar Sesión</button>
            </form>
        </div>
</body>

</html>