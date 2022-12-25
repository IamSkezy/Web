<?php
session_start();

if ($_SESSION['user']) {
    header('Location: admin.php');
}

?>

<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <title>Авторизация</title>
        <link rel='stylesheet' type='text/css' media='screen' href='style.css'>
        <!-- Font -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
        <!-- Icons -->
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    </head>
    <body>
        <div class="auth-reg-page">
            <div class="auth-reg-content">
                <span class="container-title">Авторизация</span>
                <form class="auth-reg-form" action="php/signin.php" method="post">
                    <div class="field login-field">
                        <div class="input-field">
                            <input type="text" placeholder="Логин" class="login" name="login" id="login" required>
                        </div>
                    </div>
                    <div class="field password-field">
                        <div class="input-field">
                            <input type="password" placeholder="Пароль" class="password" name="password" id="password" required>
                            <i class="bx bx-hide show-hide"></i>
                        </div>
                    </div>
                    <div class="errorAuth">
                        <?php
                        if($_SESSION['message']) {
                            echo '<i class="bx bx-error-circle error-icon"></i><p class="error-text">' . $_SESSION['message'] .'</p>';
                        } 
                        unset($_SESSION['message']);
                        ?>
                    </div>
                    <div class="input-field button">
                        <input type="submit" value="Авторизация" />
                    </div>
                </form>
            </div>
        </div>
        <script src="scripts/auth.js"></script>
    </body>
</html>