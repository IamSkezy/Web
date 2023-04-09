<?php 
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Спортивная школа</title>
    <!-- CSS -->
    <link rel="stylesheet" href="CSS/style-authorization.css">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <!-- Icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="shortcut icon" href="resourses/logo-gym.png" type="image/x-icon">
</head>
<body>
    <div class="container">
        <form action="vendor/signin.php" method="post">
            <div class="form" id="form1">
                <h3>Авторизация</h3>
                <input type="text" placeholder="Логин" name="login" required>
                <input type="password" placeholder="Пароль" name="password" required>

                <div class="signin-signup">
                    <a href="reg.php"><span>Нет аккаунта? - зарегистрируйтесь.</span></a>
                </div>

                <div class="request-status">
                    <div class="status-error">
                        <?php
                        if($_SESSION['auth-message-singin']){
                            echo '<span>' . $_SESSION['auth-message-singin'] . '</span>'; 
                        }
                        unset($_SESSION['auth-message-singin']);
                        ?>
                    </div>
                </div>

                <div class="btn-box">
                <input type="submit" class="sub-btn" id="submit" value="Войти">
                </div>

            </div>
        </form>
    </div>
</body>
</html>