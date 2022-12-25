<?php
session_start();
if (!$_SESSION['user']) {
    header('Location: /');
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>МВД по г. Нижний Новгород</title>
    <link rel='stylesheet' type='text/css' media='screen' href='style.css'>
    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <!-- Icons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>

    <header>
        <div class="header-content">
            <div class="header-img">
                <img src="img/logo.jpg">
            </div>
            <div class="header-title">
                <span>Управление МВД России по городу Нижнему Новгороду</span>
            </div>
            <div class="header-img">
                <img src="img/map_obl.png">
            </div>
        </div>
    </header>

    <nav class="nav">
        <div class="nav-content">      
            <div class="menu">
                <div class="menu-item">
                    <a href="index.php">
                        <i class='bx bx-home' ></i>
                        <span>Главная</span>
                    </a>
                </div>

                <div class="menu-item">
                    <a href="vacancies.html">
                        <i class='bx bx-male-female' ></i>
                        <span>Вакансии</span>
                    </a>
                </div>

                <div class="menu-item">
                    <a href="about-us.html">
                        <i class='bx bx-help-circle' ></i>
                        <span>О нас</span>
                    </a>
                </div>

                <div class="menu-item">
                    <a href="contacts.html">
                        <i class='bx bxs-contact' ></i>
                        <span>Контакты</span>
                    </a>
                </div>

                <div class="menu-item">
                    <a href="map-obl.html">
                        <i class='bx bxs-map' ></i>
                        <span>Карта</span>
                    </a>
                </div>
            </div>

            <div class="toggle-menu hidden" onclick="Menu()">
                <i class='bx bx-menu' ></i>
            </div>
        </div>
    </nav>

    <main>
        <div class="admin-panel">
            <div class="admin-panel-content">
                <div class="container-title">
                    <span>Добавление редакторов</span>
                </div>

                <div class="admin-panel-form">
                    <form action="php/adminadd.php" method="post">
                        <div class="input-field">
                            <input type="text" class="admin-input" placeholder="Введите id:" name="admin_id" require>
                        </div>
                        
                        <div class="input-field">
                            <input type="text" class="admin-input" placeholder="Введите логин редактора:" name="admin_login" require>
                        </div>

                        <div class="input-field">
                            <input type="text" class="admin-input" placeholder="Введите пароль редактора:" name="admin_password" require>
                        </div>

                        <div class="input-field">
                            <input type="text" class="admin-input" placeholder="Введите ФИО редактора:" name="admin_fio" require>
                        </div>

                        <div class="successAdmin">
                            <?php
                                if($_SESSION['message1']) {
                                    echo '<i class="bx bx-message-rounded-check"></i><p class="success-text">' . $_SESSION['message1'] .'</p>';
                                } 
                                unset($_SESSION['message1']);
                            ?>
                        </div>

                        <div class="input-field button">
                            <input type="submit" value="Добавить редактора" />
                        </div>
                    </form>
                </div>
            </div>

            <div class="admin-panel-content">
                <div class="container-title">
                    <span>Удаление редакторов</span>
                </div>

                <div class="admin-panel-form">
                    <form action="php/admindelete.php" method="post">
                        <div class="input-field">
                            <input type="text" class="admin-input" placeholder="Введите id редактора:" name="admindelete_id" require>
                        </div>

                        <div class="successAdmin">
                            <?php
                                if($_SESSION['message4']) {
                                    echo '<i class="bx bx-message-rounded-check"></i><p class="success-text">' . $_SESSION['message4'] .'</p>';
                                } 
                                unset($_SESSION['message4']);
                            ?>
                        </div>

                        <div class="input-field button">
                            <input type="submit" value="Удалить редактора" />
                        </div>
                    </form>
                </div>
            </div>

            <div class="admin-panel-content">
                <div class="container-title">
                    <span>Добавление новостей</span>
                </div>

                <div class="admin-panel-form">
                    <form action="php/newsadd.php" method="post">
                        <div class="input-field">
                            <input type="text" class="admin-input" placeholder="Введите id:" name="newsadd_id" require>
                        </div>
                        
                        <div class="input-field">
                            <input type="text" class="admin-input" placeholder="Введите путь до изображения:" name="newsadd_img" require>
                        </div>

                        <div class="input-field">
                            <input type="text" class="admin-input" placeholder="Введите заголовок новости:" name="newsadd_title" require>
                        </div>

                        <div class="input-field">
                            <textarea type="text" class="admin-input" placeholder="Введите описание новости:" name="newsadd_description" require></textarea>
                        </div>

                        <div class="successAdmin">
                            <?php
                                if($_SESSION['message2']) {
                                    echo '<i class="bx bx-message-rounded-check"></i><p class="success-text">' . $_SESSION['message2'] .'</p>';
                                } 
                                unset($_SESSION['message2']);
                            ?>
                        </div>

                        <div class="input-field button">
                            <input type="submit" value="Добавить новость" />
                        </div>
                    </form>
                </div>
            </div>

            <div class="admin-panel-content">
                <div class="container-title">
                    <span>Удаление новостей</span>
                </div>

                <div class="admin-panel-form">
                    <form action="php/newsdelete.php" method="post">
                        <div class="input-field">
                            <input type="text" class="admin-input" placeholder="Введите id новости:" name="newsdelete_id" require>
                        </div>

                        <div class="successAdmin">
                            <?php
                                if($_SESSION['message3']) {
                                    echo '<i class="bx bx-message-rounded-check"></i><p class="success-text">' . $_SESSION['message3'] .'</p>';
                                } 
                                unset($_SESSION['message3']);
                            ?>
                        </div>

                        <div class="input-field button">
                            <input type="submit" value="Удалить новость" />
                        </div>
                    </form>
                </div>
            </div>

            <div class="admin-panel-content">
                <form>
                    <div class="input-field button">
                        <a href="php/logout.php" class="logout">Выход</a>
                    </div>
                </form>
            </div>
        </div>

    </main>

<footer>
    <div class="footer-content">
        <span>Управление МВД России по городу Нижнему Новгороду</span>
        <span><i class='bx bx-copyright'></i> 2022, cайт создан Ануфриевым Дмитрием и Михаилом Волковым</span>
    </div>
</footer>