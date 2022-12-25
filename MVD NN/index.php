<?php
session_start();

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
    <link rel="shortcut icon" href="img/logo.jpg" type="image/jpg">
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

    <?php

    require('php/connect.php');

    $sql_news = $link->query("SELECT *FROM `news`");

    ?>
        <div class="main-content">
            <div class="main-container info-block">
                <div class="info-content">
                    <span class="container-title">Информация:</span>
                    <?php
                        foreach ($sql_news as $news):
                    ?>
                        <div class="info-item">
                            <img src="<?php echo($news['news_photo']);?>">
                            <span class="info-id">id: <?php echo($news['news_id']);?></span>
                            <span class="info-title"><?php echo($news['news_title']);?></span>
                            <span class="info-text"><?php echo($news['news_description']);?></span>
                            <input type="submit" value="Посмотреть" class="btn-main" id="show_info" name="show_info" onclick="showNews()">
                        </div>

                    <?php
                        endforeach;
                    ?>
                </div>

                <div class="map-content">
                    <span class="container-title">Карта географического расположения структурных подразделений:</span>
                    <div class="map-img">
                        <img src="img/map_obl.png">
                        <a href="map-obl.html" class="btn-main" id="show_info" name="show_info">Подробнее</a>
                    </div>
                </div>
            </div>

            <div class="main-container record-block">
                <div class="record-content">
                    <span class="container-title">Запись на прием:</span>
                    <form class="record-form" action="php/email.php" method="post">
                        <div class="record-field">
                            <input class="record-input" type="email" name="email" placeholder="Email" required>
                        </div>
                        <div class="record-field">
                            <input class="record-input" type="text" name="fio" placeholder="ФИО" required>
                        </div>
                        <div class="record-field">
                            <input class="record-input" type="tel" name="phone" placeholder="Номер телефона" required>
                        </div>
                        <div class="record-field">
                            <input class="record-input" type="text" name="comment" placeholder="Желаемая должность" required>
                        </div>

                        <div class="successAdmin">
                            <?php
                                if($_SESSION['messagemail']) {
                                    echo '<i class="bx bx-message-rounded-check"></i><p class="success-text">' . $_SESSION['messagemail'] .'</p>';
                                } 
                                unset($_SESSION['messagemail']);
                            ?>
                        </div>

                        <div class="record-btn">
                            <input class="btn-main" type="submit" value="Отправить" id="record-btn">
                        </div>
                    </form>
                </div>
            </div>

            <div class="main-container s-u-block">
                <div class="structural-units-content">
                    <span class="container-title">Структурные подразделения:</span>
                    <ul class="s-u-list">
                        <li class="s-u-item">
                            <a href="#">
                                <span class="item-text">Управление МВД России по г. Нижнему Новгороду</span>
                                <div class="dropdown-info">
                                    <span>Телефон: 88008008080</span>
                                </div>
                            </a>
                        </li>

                        <li class="s-u-item">
                            <a href="#">
                                <span class="item-text">Отдел полиции №1</span>
                                <div class="dropdown-info">
                                    <span>Телефон: 88008008080</span>
                                </div>
                            </a>
                        </li>

                        <li class="s-u-item">
                            <a href="#">
                                <span class="item-text">Отдел полиции №2</span>
                                <div class="dropdown-info">
                                    <span>Телефон: 88008008080</span>
                                </div>
                            </a>
                        </li>

                        <li class="s-u-item">
                            <a href="#">
                                <span class="item-text">Отдел полиции №3</span>
                                <div class="dropdown-info">
                                    <span>Телефон: 88008008080</span>
                                </div>
                            </a>
                        </li>

                        <li class="s-u-item">
                            <a href="#">
                                <span class="item-text">Отдел полиции №4</span>
                                <div class="dropdown-info">
                                    <span>Телефон: 88008008080</span>
                                </div>
                            </a>
                        </li>

                        <li class="s-u-item">
                            <a href="#">
                                <span class="item-text">Отдел полиции №5</span>
                                <div class="dropdown-info">
                                    <span>Телефон: 88008008080</span>
                                </div>
                            </a>
                        </li>

                        <li class="s-u-item">
                            <a href="#">
                                <span class="item-text">Отдел полиции №6</span>
                                <div class="dropdown-info">
                                    <span>Телефон: 88008008080</span>
                                </div>
                            </a>
                        </li>

                        <li class="s-u-item">
                            <a href="#">
                                <span class="item-text">Отдел полиции №7</span>
                                <div class="dropdown-info">
                                    <span>Телефон: 88008008080</span>
                                </div>
                            </a>
                        </li>

                        <li class="s-u-item">
                            <a href="#">
                                <span class="item-text">Отдел полиции №8</span>
                                <div class="dropdown-info">
                                    <span>Телефон: 88008008080</span>
                                </div>
                            </a>
                        </li>

                        <li class="s-u-item">
                            <a href="#">
                                <span class="item-text">Отдел полиции на метрополитене</span>
                                <div class="dropdown-info">
                                    <span>Телефон: 88008008080</span>
                                </div>
                            </a>
                        </li>

                        <li class="s-u-item">
                            <a href="#">
                                <span class="item-text">Полк ППС</span>
                                <div class="dropdown-info">
                                    <span>Телефон: 88008008080</span>
                                </div>
                            </a>
                        </li>

                        <li class="s-u-item">
                            <a href="#">
                                <span class="item-text">ОБ ДПС</span>
                                <div class="dropdown-info">
                                    <span>Телефон: 88008008080</span>
                                </div>
                            </a>
                        </li>

                        <li class="s-u-item">
                            <a href="#">
                                <span class="item-text">ОБОКПО (конвой)</span>
                                <div class="dropdown-info">
                                    <span>Телефон: 88008008080</span>
                                </div>
                            </a>
                        </li>

                        <li class="s-u-item">
                            <a href="#">
                                <span class="item-text">Спецприемник для административно-задержанных</span>
                                <div class="dropdown-info">
                                    <span>Телефон: 88008008080</span>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </main>

    <footer>
        <div class="footer-content">
            <span>Управление МВД России по городу Нижнему Новгороду</span>
            <span><i class='bx bx-copyright'></i> 2022, cайт создан Ануфриевым Дмитрием и Михаилом Волковым</span>
        </div>
    </footer>
    
    <script src="scripts/mainpage.js"></script>
</body>
</html>