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
        <form action="vendor/signup.php" method="post">
            <div class="form" id="form1">
                <h3>Создайте аккаунт</h3>
                <input type="text" placeholder="Логин" name="login" required>
                <input type="password" placeholder="Пароль" name="password" required>
                <input type="password" placeholder="Подтвердите пароль" name="password-confirm" required>

                <div class="signin-signup">
                    <a href="auth.php"><span>Уже есть аккаунт? - авторизируйтесь.</span></a>
                </div>

                <div class="btn-box">
                    <a href="index.php"><button type="button">Назад</button></a>
                    <button type="button" id="next1">Далее</button>
                </div>

            </div>
            <div class="form" id="form2">
                <h3>Персональные данные</h3>
                <input type="text" placeholder="Email" name="email">
                <input type="text" placeholder="Адрес" name="address">
                <input type="text" placeholder="Телефон" name="phone">


                <div class="btn-box">
                    <button type="button" id="back1">Назад</button>
                    <button type="button" id="next2">Далее</button>
                </div>

            </div>
            <div class="form" id="form3">
                <h3>Фамилия, имя, отчество</h3>
                <input type="text" placeholder="Фамилия" name="surname" required>
                <input type="text" placeholder="Имя" name="name" required>
                <input type="text" placeholder="Отчество" name="secondname" required>

                <div class="request-status">
                    <div class="status-error">
                        <?php
                        if($_SESSION['reg-message-signup']){
                            echo '<span>' . $_SESSION['reg-message-signup'] . '</span>'; 
                        }
                        unset($_SESSION['reg-message-signup']);
                        ?>
                    </div>
                </div>

                <div class="btn-box">
                    <button type="button" id="back2">Назад</button>
                    <input type="submit" class="sub-btn" id="submit" value="Создать">
                </div>

            </div>
        </form>

        <div class="step-row">
            <div id="progress"></div>
            <div class="step-col"><small>Шаг 1</small></div>
            <div class="step-col"><small>Шаг 2</small></div>
            <div class="step-col"><small>Шаг 3</small></div>

        </div>

    </div>

    <script src="JS/reg.js"></script>
</body>
</html>