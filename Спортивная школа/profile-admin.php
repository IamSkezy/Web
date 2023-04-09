<?php
session_start();
if (!$_SESSION['user']['admin_id']) {
    header('Location: /');
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Спортивная школа</title>
    <!-- CSS -->
    <link rel="stylesheet" href="CSS/style-profiles.css">
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
    <nav class="responsive-menu">
        <div class="menu">
            <div class="menu-items">
                <div class="menu-brand">
                    <a href="index.php">Sport <span>Fitness</span></a>
                </div>

                <div class="menu-links">
                    <div class="menu-link">
                        <a href="index.php">Home</a>
                    </div>

                    <div class="menu-link">
                        <a href="#about-us">About us</a>
                    </div>

                    <div class="menu-link">
                        <a href="#courses">Courses</a>
                    </div>

                    <div class="menu-link">
                        <a href="#schedule">Schedules</a>
                    </div>

                    <div class="menu-link">
                        <a href="#trainers">Trainers</a>
                    </div>

                    <div class="menu-link">
                        <a href="#contacts">Contacts</a>
                    </div>
                </div>

                <div class="menu-account">
                    <a href="reg.php">Sign Up</a>
                </div>

                <div class="menu-btn hidden">
                    <span class="material-symbols-outlined">menu</span>
                </div>
            </div>
        </div>

        <div class="menu-overlay">

        </div>
    </nav>

    <div class="container">
        <div class="container-title">
            <span>Ваш <em>профиль</em></span>
            <img src="resourses/line-dec.png">
            <p class="container-title-description">Sport Fitness - сеть спортивных школ с передовыми технологиями по городу Нижний Новгород.<br>Уже много людей активно занимаются фитнесом в нашей спортивной школе!</p>
        </div>

        <div class="container-content">
            <div class="account">
                <div class="account-user">
                    <div class="account-photo">
                        <img src="resourses/user.png">
                    </div>
    
                    <div class="account-info">
                        <div class="account-title">
                            <span>Информация</span>
                        </div>
                        <span>ФИО:<p class="account-name"><?= $_SESSION['user']['admin_name'] ?></p></span>
                        <span>Email:<p class="account-email"><?= $_SESSION['user']['admin_email'] ?></p></span>
                        <span>Адрес:<p class="account-address"><?= $_SESSION['user']['admin_address'] ?></p></span>
                        <span>Телефон:<p class="account-phone"><?= $_SESSION['user']['admin_phone'] ?></p></span>
                        
                        <div class="account-logout">
                            <form action="vendor/logout.php" method="post">
                                <input type="submit" value="Выход">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <section class="section">
        <div class="container">
            <div class="container-title">
                <span>Добавление <em>администратора</em></span>
                <img src="resourses/line-dec.png">
                <p class="container-title-description">Sport Fitness - сеть спортивных школ с передовыми технологиями по городу Нижний Новгород.<br>Уже много людей активно занимаются фитнесом в нашей спортивной школе!</p> 
            </div>

            <div class="container-content">
                <form action="vendor/addadmin.php" method="post">
                    <div class="input-field">
                        <input type="text" class="admin-input" placeholder="Введите ФИО:" name="name" required>
                    </div>

                    <div class="input-field">
                        <input type="text" class="admin-input" placeholder="Введите Email:" name="email" required>
                    </div>

                    <div class="input-field">
                        <input type="text" class="admin-input" placeholder="Введите адрес:" name="address" required>
                    </div>

                    <div class="input-field">
                        <input type="text" class="admin-input" placeholder="Введите телефон:" name="phone" required>
                    </div>

                    <div class="input-field">
                        <input type="text" class="admin-input" placeholder="Введите логин:" name="login" required>
                    </div>

                    <div class="input-field">
                        <input type="text" class="admin-input" placeholder="Введите пароль:" name="password" required>
                    </div>

                    <div class="request-status">
                        <?php
                            if($_SESSION['request-status-add-admin']) {
                                echo '<i class="bx bx-message-rounded-check"></i><p class="request-success">' . $_SESSION['request-status-add-admin'] .'</p>';
                            } 
                            unset($_SESSION['request-status-add-admin']);
                        ?>
                    </div>

                    <div class="course-btn">
                        <input type="submit" value="Добавить" />
                    </div>
                </form>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="container-title">
                <span>Удаление <em>администратора</em></span>
                <img src="resourses/line-dec.png">
                <p class="container-title-description">Sport Fitness - сеть спортивных школ с передовыми технологиями по городу Нижний Новгород.<br>Уже много людей активно занимаются фитнесом в нашей спортивной школе!</p> 
            </div>

            <div class="container-content">
                <form action="vendor/deleteadmin.php" method="post">
                    <div class="input-field">
                        <input type="text" class="admin-input" placeholder="Введите id:" name="id" required>
                    </div>

                    <div class="request-status">
                        <?php
                            if($_SESSION['request-status-delete-admin']) {
                                echo '<i class="bx bx-message-rounded-check"></i><p class="request-success">' . $_SESSION['request-status-delete-admin'] .'</p>';
                            } 
                            unset($_SESSION['request-status-delete-admin']);
                        ?>
                    </div>

                    <div class="course-btn">
                        <input type="submit" value="Удалить" />
                    </div>
                </form>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="container-title">
                <span>Добавление <em>тренера</em></span>
                <img src="resourses/line-dec.png">
                <p class="container-title-description">Sport Fitness - сеть спортивных школ с передовыми технологиями по городу Нижний Новгород.<br>Уже много людей активно занимаются фитнесом в нашей спортивной школе!</p> 
            </div>

            <div class="container-content">
                <form action="vendor/addtrainer.php" method="post">
                    <div class="input-field">
                        <input type="text" class="admin-input" placeholder="Введите ФИО:" name="name" required>
                    </div>

                    <div class="input-field">
                        <input type="text" class="admin-input" placeholder="Введите Email:" name="email" required>
                    </div>

                    <div class="input-field">
                        <input type="text" class="admin-input" placeholder="Введите адрес:" name="address" required>
                    </div>

                    <div class="input-field">
                        <input type="text" class="admin-input" placeholder="Введите телефон:" name="phone" required>
                    </div>

                    <div class="input-field">
                        <input type="text" class="admin-input" placeholder="Введите тип тренера:" name="type" required>
                    </div>

                    <div class="input-field">
                        <input type="text" class="admin-input" placeholder="Введите описание тренера:" name="description" required>
                    </div>

                    <div class="input-field">
                        <input type="text" class="admin-input" placeholder="Введите путь к фото:" name="src" required>
                    </div>

                    <div class="input-field">
                        <input type="text" class="admin-input" placeholder="Введите логин:" name="login" required>
                    </div>

                    <div class="input-field">
                        <input type="text" class="admin-input" placeholder="Введите пароль:" name="password" required>
                    </div>

                    <div class="request-status">
                        <?php
                            if($_SESSION['request-status-add-trainer']) {
                                echo '<i class="bx bx-message-rounded-check"></i><p class="request-success">' . $_SESSION['request-status-add-trainer'] .'</p>';
                            } 
                            unset($_SESSION['request-status-add-trainer']);
                        ?>
                    </div>

                    <div class="course-btn">
                        <input type="submit" value="Добавить" />
                    </div>
                </form>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="container-title">
                <span>Удаление <em>тренера</em></span>
                <img src="resourses/line-dec.png">
                <p class="container-title-description">Sport Fitness - сеть спортивных школ с передовыми технологиями по городу Нижний Новгород.<br>Уже много людей активно занимаются фитнесом в нашей спортивной школе!</p> 
            </div>

            <div class="container-content">
                <form action="vendor/deletetrainer.php" method="post">
                    <div class="input-field">
                        <input type="text" class="admin-input" placeholder="Введите id:" name="id" required>
                    </div>

                    <div class="request-status">
                       <?php
                            if($_SESSION['request-status-delete-trainer']) {
                                echo '<i class="bx bx-message-rounded-check"></i><p class="request-success">' . $_SESSION['request-status-delete-trainer'] .'</p>';
                            } 
                            unset($_SESSION['request-status-delete-trainer']);
                        ?>
                    </div>

                    <div class="course-btn">
                        <input type="submit" value="Удалить" />
                    </div>
                </form>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="container-title">
                <span>Добавление <em>клиента</em></span>
                <img src="resourses/line-dec.png">
                <p class="container-title-description">Sport Fitness - сеть спортивных школ с передовыми технологиями по городу Нижний Новгород.<br>Уже много людей активно занимаются фитнесом в нашей спортивной школе!</p> 
            </div>

            <div class="container-content">
                <form action="vendor/addclient.php" method="post">
                    <div class="input-field">
                        <input type="text" class="admin-input" placeholder="Введите ФИО:" name="name" required>
                    </div>

                    <div class="input-field">
                        <input type="text" class="admin-input" placeholder="Введите Email:" name="email" required>
                    </div>

                    <div class="input-field">
                        <input type="text" class="admin-input" placeholder="Введите адрес:" name="address" required>
                    </div>

                    <div class="input-field">
                        <input type="text" class="admin-input" placeholder="Введите телефон:" name="phone" required>
                    </div>

                    <div class="input-field">
                        <input type="text" class="admin-input" placeholder="Введите логин:" name="login" required>
                    </div>

                    <div class="input-field">
                        <input type="text" class="admin-input" placeholder="Введите пароль:" name="password" required>
                    </div>

                    <div class="request-status">
                        <?php
                            if($_SESSION['request-status-add-client']) {
                                echo '<i class="bx bx-message-rounded-check"></i><p class="request-success">' . $_SESSION['request-status-add-client'] .'</p>';
                            } 
                            unset($_SESSION['request-status-add-client']);
                        ?>
                    </div>

                    <div class="course-btn">
                        <input type="submit" value="Добавить" />
                    </div>
                </form>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="container-title">
                <span>Удаление <em>клиента</em></span>
                <img src="resourses/line-dec.png">
                <p class="container-title-description">Sport Fitness - сеть спортивных школ с передовыми технологиями по городу Нижний Новгород.<br>Уже много людей активно занимаются фитнесом в нашей спортивной школе!</p> 
            </div>

            <div class="container-content">
                <form action="vendor/deleteclient.php" method="post">
                    <div class="input-field">
                        <input type="text" class="admin-input" placeholder="Введите id:" name="id" required>
                    </div>

                    <div class="request-status">
                        <?php
                            if($_SESSION['request-status-delete-client']) {
                                echo '<i class="bx bx-message-rounded-check"></i><p class="request-success">' . $_SESSION['request-status-delete-client'] .'</p>';
                            } 
                            unset($_SESSION['request-status-delete-client']);
                        ?>
                    </div>

                    <div class="course-btn">
                        <input type="submit" value="Удалить" />
                    </div>
                </form>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="container-title">
                <span>Добавление <em>курса</em></span>
                <img src="resourses/line-dec.png">
                <p class="container-title-description">Sport Fitness - сеть спортивных школ с передовыми технологиями по городу Нижний Новгород.<br>Уже много людей активно занимаются фитнесом в нашей спортивной школе!</p> 
            </div>

            <div class="container-content">
                <form action="vendor/addcourse.php" method="post">
                    <div class="input-field">
                        <input type="text" class="admin-input" placeholder="Введите название:" name="name" required>
                    </div>

                    <div class="input-field">
                        <input type="text" class="admin-input" placeholder="Введите описание:" name="description" required>
                    </div>

                    <div class="input-field">
                        <input type="text" class="admin-input" placeholder="Введите путь к фото:" name="src" required>
                    </div>
                    
                    <div class="input-field">
                        <input type="text" class="admin-input" placeholder="Введите стоимость:" name="cost" required>
                    </div>

                    <div class="input-field">
                        <input type="text" class="admin-input" placeholder="Введите время:" name="time" required>
                    </div>

                    <div class="input-field">
                        <input type="text" class="admin-input" placeholder="Введите id тренера:" name="trainer-id" required>
                    </div>

                    

                    <div class="request-status">
                        <?php
                            if($_SESSION['request-status-add-course']) {
                                echo '<i class="bx bx-message-rounded-check"></i><p class="request-success">' . $_SESSION['request-status-add-course'] .'</p>';
                            } 
                            unset($_SESSION['request-status-add-course']);
                        ?>
                    </div>

                    <div class="course-btn">
                        <input type="submit" value="Добавить" />
                    </div>
                </form>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="container-title">
                <span>Удаление <em>курса</em></span>
                <img src="resourses/line-dec.png">
                <p class="container-title-description">Sport Fitness - сеть спортивных школ с передовыми технологиями по городу Нижний Новгород.<br>Уже много людей активно занимаются фитнесом в нашей спортивной школе!</p> 
            </div>

            <div class="container-content">
                <form action="vendor/deletecourse.php" method="post">
                    <div class="input-field">
                        <input type="text" class="admin-input" placeholder="Введите id:" name="id" required>
                    </div>

                    <div class="request-status">
                        <?php
                            if($_SESSION['request-status-delete-course']) {
                                echo '<i class="bx bx-message-rounded-check"></i><p class="request-success">' . $_SESSION['request-status-delete-course'] .'</p>';
                            } 
                            unset($_SESSION['request-status-delete-course']);
                        ?>
                    </div>

                    <div class="course-btn">
                        <input type="submit" value="Удалить" />
                    </div>
                </form>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="container-title">
                <span>Просмотр информации <em>тренера</em></span>
                <img src="resourses/line-dec.png">
                <p class="container-title-description">Sport Fitness - сеть спортивных школ с передовыми технологиями по городу Нижний Новгород.<br>Уже много людей активно занимаются фитнесом в нашей спортивной школе!</p> 
            </div>

            <div class="container-content">
                <form action="vendor/showtrainer.php" method="post">
                    <div class="field course-field">
                        <select class="input-field section-trainer" name="trainer-name" required>
                            <option disabled value="" selected>Выберите тренера:</option>
                            <?php
                                require('vendor/connect.php');
                                $sql_trainers = $link->query("SELECT * FROM `trainers`");
                                foreach ($sql_trainers as $trainer_name) :
                            ?>
                            <option><?php echo ($trainer_name['trainer_name']);?></option>
                            <?php 
                                endforeach;
                            ?>
                        </select>
                    </div>
                    
                    <div class="user-info">
                        <div class="user-title">
                            <span>Информация</span>
                        </div>

                        <span>ID:<p class="account-name"><?= $_SESSION['trainer_info']['trainer_id'] ?></p></span>
                        <span>ФИО:<p class="account-name"><?= $_SESSION['trainer_info']['trainer_name'] ?></p></span>
                        <span>Email:<p class="account-email"><?= $_SESSION['trainer_info']['trainer_email'] ?></p></span>
                        <span>Адрес:<p class="account-address"><?= $_SESSION['trainer_info']['trainer_address'] ?></p></span>
                        <span>Телефон:<p class="account-phone"><?= $_SESSION['trainer_info']['trainer_phone'] ?></p></span>
                        <span>Логин:<p class="account-address"><?= $_SESSION['trainer_info']['trainer_login'] ?></p></span>
                        <span>Пароль:<p class="account-phone"><?= $_SESSION['trainer_info']['trainer_password'] ?></p></span>
                    </div>

                    <div class="request-status">
                        <?php
                            if($_SESSION['request-status-show-trainer']) {
                                echo '<i class="bx bx-message-rounded-check"></i><p class="request-success">' . $_SESSION['request-status-show-trainer'] .'</p>';
                            } 
                            unset($_SESSION['request-status-show-trainer']);
                        ?>
                    </div>

                    <div class="course-btn">
                        <input type="submit" value="Посмотреть" />
                    </div>
                </form>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="container-title">
                <span>Просмотр информации <em>клиента</em></span>
                <img src="resourses/line-dec.png">
                <p class="container-title-description">Sport Fitness - сеть спортивных школ с передовыми технологиями по городу Нижний Новгород.<br>Уже много людей активно занимаются фитнесом в нашей спортивной школе!</p> 
            </div>

            <div class="container-content">
                <form action="vendor/showclient.php" method="post">
                    <div class="field course-field">
                        <select class="input-field section-trainer" name="client-name" required>
                            <option disabled value="" selected>Выберите клиента:</option>
                            <?php
                                require('vendor/connect.php');
                                $sql_clients = $link->query("SELECT * FROM `clients`");
                                foreach ($sql_clients as $client_name) :
                            ?>
                            <option><?php echo ($client_name['client_name']);?></option>
                            <?php 
                                endforeach;
                            ?>
                        </select>
                    </div>

                    <div class="request-status">
                        <?php
                            if($_SESSION['request-status-show-client']) {
                                echo '<i class="bx bx-message-rounded-check"></i><p class="request-success">' . $_SESSION['request-status-show-client'] .'</p>';
                            } 
                            unset($_SESSION['request-status-show-client']);
                        ?>
                    </div>

                    <div class="course-btn">
                        <input type="submit" value="Посмотреть" />
                    </div>

                    <div class="user-info">
                        <div class="user-title">
                            <span>Информация</span>
                        </div>
                        <span>ID:<p class="account-name"><?= $_SESSION['client_info']['client_id'] ?></p></span>
                        <span>ФИО:<p class="account-name"><?= $_SESSION['client_info']['client_name'] ?></p></span>
                        <span>Email:<p class="account-email"><?= $_SESSION['client_info']['client_email'] ?></p></span>
                        <span>Адрес:<p class="account-address"><?= $_SESSION['client_info']['client_address'] ?></p></span>
                        <span>Телефон:<p class="account-phone"><?= $_SESSION['client_info']['client_phone'] ?></p></span>
                        <span>Логин:<p class="account-address"><?= $_SESSION['client_info']['client_login'] ?></p></span>
                        <span>Пароль:<p class="account-phone"><?= $_SESSION['client_info']['client_password'] ?></p></span>
                    </div>

                </form>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="container-title">
                <span>Просмотр информации <em>курса</em></span>
                <img src="resourses/line-dec.png">
                <p class="container-title-description">Sport Fitness - сеть спортивных школ с передовыми технологиями по городу Нижний Новгород.<br>Уже много людей активно занимаются фитнесом в нашей спортивной школе!</p> 
            </div>

            <div class="container-content">
                <form action="vendor/showcourse.php" method="post">
                    <div class="field course-field">
                        <select class="input-field section-trainer" name="course-name" required>
                            <option disabled value="" selected>Выберите курс:</option>
                            <?php
                                require('vendor/connect.php');
                                $sql_courses = $link->query("SELECT * FROM `courses`");
                                foreach ($sql_courses as $course_name) :
                            ?>
                            <option><?php echo ($course_name['course_name']);?></option>
                            <?php 
                                endforeach;
                            ?>
                        </select>
                    </div>

                    <div class="request-status">
                        <?php
                            if($_SESSION['request-status-show-course']) {
                                echo '<i class="bx bx-message-rounded-check"></i><p class="request-success">' . $_SESSION['request-status-show-course'] .'</p>';
                            } 
                            unset($_SESSION['request-status-show-course']);
                        ?>
                    </div>

                    <div class="course-btn">
                        <input type="submit" value="Посмотреть" />
                    </div>

                    <div class="user-info">
                        <div class="user-title">
                            <span>Информация</span>
                        </div>

                        <span>ID:<p class="account-name"><?= $_SESSION['course_info']['course_id'] ?></p></span>
                        <span>Название:<p class="account-name"><?= $_SESSION['course_info']['course_name'] ?></p></span>
                        <span>Описание:<p class="account-description"><?= $_SESSION['course_info']['course_description'] ?></p></span>
                        <span>Путь:<p class="account-address"><?= $_SESSION['course_info']['course_src'] ?></p></span>
                        <span>Цена:<p class="account-phone"><?= $_SESSION['course_info']['course_cost'] ?></p></span>
                        <span>Время:<p class="account-address"><?= $_SESSION['course_info']['course_time'] ?></p></span>
                        <span>ID тренера:<p class="account-phone"><?= $_SESSION['course_info']['trainer_id'] ?></p></span>
                    </div>

                </form>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="container-title">
                <span>Изменение информации <em>тренера</em></span>
                <img src="resourses/line-dec.png">
                <p class="container-title-description">Sport Fitness - сеть спортивных школ с передовыми технологиями по городу Нижний Новгород.<br>Уже много людей активно занимаются фитнесом в нашей спортивной школе!</p> 
            </div>

            <div class="container-content">
                <form action="vendor/changedatatrainer.php" method="post">
                    <div class="input-field">
                        <input type="text" class="admin-input" placeholder="Введите id:" name="id" required>
                    </div>

                    <div class="field course-field">
                        <select class="input-field section-data" name="data-change" required>
                            <option disabled value="" selected>Выберите данные для изменения:</option>
                            <option>ФИО</option>
                            <option>Email</option>
                            <option>Адрес</option>
                            <option>Телефон</option>
                            <option>Логин</option>
                            <option>Пароль</option>
                            <option>Тип тренера</option>
                            <option>Описание тренера</option>
                            <option>Путь к фото</option>
                          </select>
                    </div>

                    <div class="input-field">
                        <input type="text" class="admin-input" placeholder="Введите измененные данные:" name="change-info" required>
                    </div>

                    <div class="request-status">
                        <?php
                            if($_SESSION['request-status-change-trainer']) {
                                echo '<i class="bx bx-message-rounded-check"></i><p class="request-success">' . $_SESSION['request-status-change-trainer'] .'</p>';
                            } 
                            unset($_SESSION['request-status-change-trainer']);
                        ?>
                    </div>

                    <div class="course-btn">
                        <input type="submit" value="Изменить" />
                    </div>
                </form>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="container-title">
                <span>Изменение информации <em>клиента</em></span>
                <img src="resourses/line-dec.png">
                <p class="container-title-description">Sport Fitness - сеть спортивных школ с передовыми технологиями по городу Нижний Новгород.<br>Уже много людей активно занимаются фитнесом в нашей спортивной школе!</p> 
            </div>

            <div class="container-content">
                <form action="vendor/changedataclient.php" method="post">
                    <div class="input-field">
                        <input type="text" class="admin-input" placeholder="Введите id:" name="id" required>
                    </div>

                    <div class="field course-field">
                        <select class="input-field section-data" name="data-change" required>
                            <option disabled value="" selected>Выберите данные для изменения:</option>
                            <option>ФИО</option>
                            <option>Email</option>
                            <option>Адрес</option>
                            <option>Телефон</option>
                            <option>Логин</option>
                            <option>Пароль</option>
                          </select>
                    </div>

                    <div class="input-field">
                        <input type="text" class="admin-input" placeholder="Введите измененные данные:" name="change-info" required>
                    </div>

                    <div class="request-status">
                        <?php
                            if($_SESSION['request-status-change-client']) {
                                echo '<i class="bx bx-message-rounded-check"></i><p class="request-success">' . $_SESSION['request-status-change-client'] .'</p>';
                            } 
                            unset($_SESSION['request-status-change-client']);
                        ?>
                    </div>

                    <div class="course-btn">
                        <input type="submit" value="Изменить" />
                    </div>
                </form>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="container-title">
                <span>Изменение информации <em>курса</em></span>
                <img src="resourses/line-dec.png">
                <p class="container-title-description">Sport Fitness - сеть спортивных школ с передовыми технологиями по городу Нижний Новгород.<br>Уже много людей активно занимаются фитнесом в нашей спортивной школе!</p> 
            </div>

            <div class="container-content">
                <form action="vendor/changedatacourse.php" method="post">
                    <div class="input-field">
                        <input type="text" class="admin-input" placeholder="Введите id:" name="id" required>
                    </div>

                    <div class="field course-field">
                        <select class="input-field section-data" name="data-change" required>
                            <option disabled value="" selected>Выберите данные для изменения:</option>
                            <option>Название</option>
                            <option>Описание</option>
                            <option>Путь к фото</option>
                            <option>Стоимость курса</option>
                            <option>Время проведения</option>
                          </select>
                    </div>

                    <div class="input-field">
                        <input type="text" class="admin-input" placeholder="Введите измененные данные:" name="change-info" required>
                    </div>

                    <div class="request-status">
                        <?php
                            if($_SESSION['request-status-change-course']) {
                                echo '<i class="bx bx-message-rounded-check"></i><p class="request-success">' . $_SESSION['request-status-change-course'] .'</p>';
                            } 
                            unset($_SESSION['request-status-change-course']);
                        ?>
                    </div>

                    <div class="course-btn">
                        <input type="submit" value="Изменить" />
                    </div>
                </form>
            </div>
        </div>
    </section>

    

    <footer id="margin-top">
        <div class="footer">
            <span>Copyright <i class='bx bx-copyright'></i> 2023 - Site was powered for diplom project.</span>
        </div>
    </footer>
    
    <!-- JS -->
    <script src="JS/menu.js"></script>
    <script src="JS/scroll.js"></script>
</body>
</html>