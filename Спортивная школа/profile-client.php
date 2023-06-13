// Создание сессии
<?php
session_start();
// Проверка на роль пользователя
if (!$_SESSION['user']['client_id']) {
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
    // Меню
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
    
    // Профиль
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
                        // Вывод информации о пользователе из сессии
                        <span>ФИО:<p class="account-name"><?= $_SESSION['user']['client_name'] ?></p></span>
                        <span>Email:<p class="account-email"><?= $_SESSION['user']['client_email'] ?></p></span>
                        <span>Адрес:<p class="account-address"><?= $_SESSION['user']['client_address'] ?></p></span>
                        <span>Телефон:<p class="account-phone"><?= $_SESSION['user']['client_phone'] ?></p></span>
                        
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
    
    // Расписание
    <section class="section">
        <div class="container" id="schedule">
            <div class="container-title-white">
                <span>Наше <em>расписание</em></span>
                <img src="resourses/line-dec.png">
                <p class="container-title-description-white">Sport Fitness - сеть спортивных школ с передовыми технологиями по городу Нижний Новгород.<br>В наших спортивных школах большой выбор различных курсов на любой вкус!</p>
            </div>

            <div class="container-content">
                <div class="schedule">
                    <div class="schedule-days">
                        <p class="schedule-day active-day">Понедельник</p>
                        <span> / </span>
                        <p class="schedule-day">Вторник</p>
                        <span> / </span>
                        <p class="schedule-day">Среда</p>
                        <span> / </span>
                        <p class="schedule-day">Четверг</p>
                        <span> / </span>
                        <p class="schedule-day">Пятница</p>
                    </div>

                    <div class="schedule-items">
                        <div class="schedule-item active-schedule-item" id="monday">
                            <table>
                                // Вывод данных о расписание из БД
                                <?php
                                    require('vendor/connect.php');
                                    $sql_courses_schedule = $link->query("SELECT courses.course_name, schedules.schedule_time, schedules.schedule_cost, trainers.trainer_name FROM `schedules`, `trainers`, `courses` WHERE schedules.day_id = '1' AND schedules.trainer_id = trainers.trainer_id AND schedules.course_id = courses.course_id;");
                                    foreach ($sql_courses_schedule as $courses_list) :
                                ?>
                                <tr>
                                    <td><?php echo $courses_list['course_name'];?></td>
                                    <td><?php echo $courses_list['schedule_time'];?></td>
                                    <td><?php echo $courses_list['schedule_cost'];?><i class='bx bx-ruble'></i></td>
                                    <td><?php echo $courses_list['trainer_name'];?></td>
                                </tr>
                                <?php
                                    endforeach;
                                ?>
                            </table>
                        </div>

                        <div class="schedule-item" id="tuesday">
                            <table>
                                // Вывод данных о расписание из БД
                                <?php
                                    require('vendor/connect.php');
                                    $sql_courses_schedule = $link->query("SELECT courses.course_name, schedules.schedule_time, schedules.schedule_cost, trainers.trainer_name FROM `schedules`, `trainers`, `courses` WHERE schedules.day_id = '2' AND schedules.trainer_id = trainers.trainer_id AND schedules.course_id = courses.course_id;");
                                    foreach ($sql_courses_schedule as $courses_list) :
                                ?>
                                <tr>
                                    <td><?php echo $courses_list['course_name'];?></td>
                                    <td><?php echo $courses_list['schedule_time'];?></td>
                                    <td><?php echo $courses_list['schedule_cost'];?><i class='bx bx-ruble'></i></td>
                                    <td><?php echo $courses_list['trainer_name'];?></td>
                                </tr>
                                <?php
                                    endforeach;
                                ?>
                            </table>
                        </div>

                        <div class="schedule-item" id="wednesday">
                            <table>
                                // Вывод данных о расписание из БД
                                <?php
                                    require('vendor/connect.php');
                                    $sql_courses_schedule = $link->query("SELECT courses.course_name, schedules.schedule_time, schedules.schedule_cost, trainers.trainer_name FROM `schedules`, `trainers`, `courses` WHERE schedules.day_id = '3' AND schedules.trainer_id = trainers.trainer_id AND schedules.course_id = courses.course_id;");
                                    foreach ($sql_courses_schedule as $courses_list) :
                                ?>
                                <tr>
                                    <td><?php echo $courses_list['course_name'];?></td>
                                    <td><?php echo $courses_list['schedule_time'];?></td>
                                    <td><?php echo $courses_list['schedule_cost'];?><i class='bx bx-ruble'></i></td>
                                    <td><?php echo $courses_list['trainer_name'];?></td>
                                </tr>
                                <?php
                                    endforeach;
                                ?>
                            </table>
                        </div>

                        <div class="schedule-item" id="thursday">
                            <table>
                                // Вывод данных о расписание из БД
                                <?php
                                    require('vendor/connect.php');
                                    $sql_courses_schedule = $link->query("SELECT courses.course_name, schedules.schedule_time, schedules.schedule_cost, trainers.trainer_name FROM `schedules`, `trainers`, `courses` WHERE schedules.day_id = '4' AND schedules.trainer_id = trainers.trainer_id AND schedules.course_id = courses.course_id;");
                                    foreach ($sql_courses_schedule as $courses_list) :
                                ?>
                                <tr>
                                    <td><?php echo $courses_list['course_name'];?></td>
                                    <td><?php echo $courses_list['schedule_time'];?></td>
                                    <td><?php echo $courses_list['schedule_cost'];?><i class='bx bx-ruble'></i></td>
                                    <td><?php echo $courses_list['trainer_name'];?></td>
                                </tr>
                                <?php
                                    endforeach;
                                ?>
                            </table>
                        </div>

                        <div class="schedule-item" id="friday">
                            <table>
                                // Вывод данных о расписание из БД
                                <?php
                                    require('vendor/connect.php');
                                    $sql_courses_schedule = $link->query("SELECT courses.course_name, schedules.schedule_time, schedules.schedule_cost, trainers.trainer_name FROM `schedules`, `trainers`, `courses` WHERE schedules.day_id = '5' AND schedules.trainer_id = trainers.trainer_id AND schedules.course_id = courses.course_id;");
                                    foreach ($sql_courses_schedule as $courses_list) :
                                ?>
                                <tr>
                                    <td><?php echo $courses_list['course_name'];?></td>
                                    <td><?php echo $courses_list['schedule_time'];?></td>
                                    <td><?php echo $courses_list['schedule_cost'];?><i class='bx bx-ruble'></i></td>
                                    <td><?php echo $courses_list['trainer_name'];?></td>
                                </tr>
                                <?php
                                    endforeach;
                                ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    // Информация о курсах
    <div class="container">
        <div class="container-title">
            <span>Ваши <em>курсы</em></span>
            <img src="resourses/line-dec.png">
            <p class="container-title-description">Sport Fitness - сеть спортивных школ с передовыми технологиями по городу Нижний Новгород.<br>Уже много людей активно занимаются фитнесом в нашей спортивной школе!</p>
        </div>

        <div class="container-content">
            <div class="account-course">
                <div class="course-title">
                    <span>Вы записаны на следующие курсы:</span>
                </div>
                <div class="course-list">
                    // Вывод данных о записанных курсах из БД
                    <?php
                        require('vendor/connect.php');
                        $client_id = $_SESSION['user']['client_id'];

                        $check_course_and_client_data = mysqli_query($link, "SELECT courses.course_name, courses.course_time, courses.course_cost, trainers.trainer_name FROM `courses`,`orders`,`trainers`,`clients` WHERE courses.course_id = orders.course_id AND trainers.trainer_id = orders.trainer_id AND orders.client_id = clients.client_id AND clients.client_id = '$client_id';");
                        
                        foreach($check_course_and_client_data as $course_client_data) :
                            
                    ?>
                    // Вывод данных через foreach
                    <span>Название курса: </span><span class="course-name"><?php echo ($course_client_data['course_name']);?></span><br>
                    <span>Время проведения: </span><span class="course-time"><?php echo ($course_client_data['course_time']);?></span><br>
                    <span>Стоимость курса: </span><span class="course-cost"><?php echo ($course_client_data['course_cost']);?></span><br>
                    <span>Ваш тренер: </span><span class="course-trainer"><?php echo ($course_client_data['trainer_name']);?></span><br><br>
                    <?php
                        endforeach;
                    ?>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="container-title">
            <span>Запись на <em>курсы</em></span>
            <img src="resourses/line-dec.png">
            <p class="container-title-description">Sport Fitness - сеть спортивных школ с передовыми технологиями по городу Нижний Новгород.<br>Уже много людей активно занимаются фитнесом в нашей спортивной школе!</p>
        </div>

        <div class="container-content">
            <form action="vendor/regforcourses.php" method="post">
                <div class="field course-field">
                    <select class="input-field section-course" name="course-add" required>
                        <option disabled value="" selected>Выберите желаемый курс</option>
                        // Вывод курсов из БД
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
                
                // Ответ пользователю об ошибке или удаче
                <div class="request-status">
                    <?php
                        if($_SESSION['request-status-course-client-add']) {
                            echo '<i class="bx bx-message-rounded-check"></i><p class="request-success">' . $_SESSION['request-status-course-client-add'] .'</p>';
                        } 
                        unset($_SESSION['request-status-course-client-add']);
                    ?>
                </div>

                <div class="course-btn">
                    <input type="submit" value="Выбрать">
                </div>
            </form>
        </div>
    </div>

    <div class="container">
        <div class="container-title">
            <span>Удаление с <em>курса</em></span>
            <img src="resourses/line-dec.png">
            <p class="container-title-description">Sport Fitness - сеть спортивных школ с передовыми технологиями по городу Нижний Новгород.<br>Уже много людей активно занимаются фитнесом в нашей спортивной школе!</p>
        </div>

        <div class="container-content">
            <form action="vendor/delforcourses.php" method="post">
                <div class="field course-field">
                    <select class="input-field section-course" name="course-delete" required>
                        <option disabled value="" selected>Выберите курс</option>
                        // Вывод из БД данных о курсов
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
                    // Ответ пользователю об ошибке или удаче
                    <?php
                        if($_SESSION['request-status-course-client-delete']) {
                            echo '<i class="bx bx-message-rounded-check"></i><p class="request-success">' . $_SESSION['request-status-course-client-delete'] .'</p>';
                        } 
                        unset($_SESSION['request-status-course-client-delete']);
                    ?>
                </div>

                <div class="course-btn">
                    <input type="submit" value="Выбрать">
                </div>
            </form>
        </div>
    </div>

    <div class="container">
        <div class="container-title">
            <span>Ваши <em>достижения</em></span>
            <img src="resourses/line-dec.png">
            <p class="container-title-description">Sport Fitness - сеть спортивных школ с передовыми технологиями по городу Нижний Новгород.<br>Уже много людей активно занимаются фитнесом в нашей спортивной школе!</p>
        </div>

        <div class="container-content">
            <div class="account-achievement">
                <div class="achievement-title">
                    <span>Вы получили следующие достижения:</span>
                </div>
                <div class="achievement-list">
                
                 // Вывод информации о достижениях из БД
                <?php
                    require('vendor/connect.php');
                    $client_id = $_SESSION['user']['client_id'];
                    $check_achievements = mysqli_query($link, "SELECT achievements.achievement_date, achievements.achievement_type, trainers.trainer_name FROM `achievements`,`trainers` WHERE achievements.trainer_id = trainers.trainer_id AND achievements.client_id = '$client_id';");
                    
                    foreach($check_achievements as $achievements) :
                        
                ?>
                    <span>Дата: </span><span class="achievement-date"><?php echo ($achievements['achievement_date']);?></span><br>
                    <span>Достижение: </span><span class="achievement-type"><?php echo ($achievements['achievement_type']);?></span><br>
                    <span>ФИО тренера: </span><span class="trainer-name"><?php echo ($achievements['trainer_name']);?></span><br><br>
                <?php
                    endforeach;
                ?>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="container-title">
            <span>Ваши <em>сообщения</em></span>
            <img src="resourses/line-dec.png">
            <p class="container-title-description">Sport Fitness - сеть спортивных школ с передовыми технологиями по городу Нижний Новгород.<br>Уже много людей активно занимаются фитнесом в нашей спортивной школе!</p>
        </div>

        <div class="container-content">
            <div class="account-message">
                <div class="message-title">
                    <span>Вы получили следующие сообщения:</span>
                </div>
                <div class="message-list">
                    
                 // Вывод сообщений из БД
                <?php
                    require('vendor/connect.php');
                    $client_id = $_SESSION['user']['client_id'];
                    $check_message = mysqli_query($link, "SELECT messages.message_date, messages.message_message, trainers.trainer_name FROM `messages`, `trainers` WHERE messages.trainer_id = trainers.trainer_id AND messages.client_id = '$client_id' AND messages.message_from = 'тренер';");
                    
                    foreach($check_message as $messages) :
                        
                ?>
                    <span>Дата: </span><span class="message-date"><?php echo ($messages['message_date']);?></span><br>
                    <span>Сообщение: </span><span class="message-type"><?php echo ($messages['message_message']);?></span><br>
                    <span>ФИО тренера: </span><span class="message-name"><?php echo ($messages['trainer_name']);?></span><br><br>
                <?php
                    endforeach;
                ?>
                </div>

                <div>
                    <form action="vendor/clearmessageclient.php" method="post">
                        
                        // Ответ пользователю об ошибке или удаче
                        <div class="request-status">
                            <?php
                                if($_SESSION['request-status-delete-mes']) {
                                    echo '<i class="bx bx-message-rounded-check"></i><p class="request-success">' . $_SESSION['request-status-delete-mes'] .'</p>';
                                } 
                                unset($_SESSION['request-status-delete-mes']);
                            ?>
                        </div>

                        <div class="course-btn">
                            <input type="submit" value="Очистить сообщения">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="container-title">
            <span>Отправить сообщение <em>тренеру</em></span>
            <img src="resourses/line-dec.png">
            <p class="container-title-description">Sport Fitness - сеть спортивных школ с передовыми технологиями по городу Нижний Новгород.<br>Уже много людей активно занимаются фитнесом в нашей спортивной школе!</p>
        </div>

        <div class="container-content">
            <form action="vendor/addmessagetotrainer.php" method="post">
                <div class="field course-field">
                    <select class="input-field section-trainer" name="trainer-name" required>
                        <option disabled value="" selected>Выберите тренера:</option>
                        // Вывод информации о тренерах из БД
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

                <div class="input-field">
                    <input type="date" class="admin-input" placeholder="Введите дату:" name="date" required>
                </div>

                <div class="input-field">
                    <input type="text" class="admin-input" placeholder="Введите сообщение:" name="message" required>
                </div>
                
                // Ответ пользователю об ошибке или удаче
                <div class="request-status">
                    <?php
                        if($_SESSION['request-status-mes-add-client']) {
                            echo '<i class="bx bx-message-rounded-check"></i><p class="request-success">' . $_SESSION['request-status-mes-add-client'] .'</p>';
                        } 
                        unset($_SESSION['request-status-mes-add-client']);
                    ?>
                </div>

                <div class="course-btn">
                    <input type="submit" value="Отправить">
                </div>
            </form>
        </div>
    </div>


    <footer id="margin-top">
        <div class="footer">
            <span>Copyright <i class='bx bx-copyright'></i> 2023 - Site was powered for diplom project.</span>
        </div>
    </footer>
    
    <!-- JS -->
    <script src="JS/menu.js"></script>
    <script src="JS/scroll.js"></script>
    <script src="JS/courses-status.js"></script>
    <script src="JS/achievements-status.js"></script>
    <script src="JS/message-status.js"></script>
    <script src="JS/schedule.js"></script>
</body>
</html>
