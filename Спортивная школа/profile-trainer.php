<?php
session_start();
if (!$_SESSION['user']['trainer_id']) {
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
                        <?php
                            $trainer_id = $_SESSION['user']['trainer_id'];
                        ?>
                        <img src="resourses/trainer<?php echo $trainer_id;?>.jpg">
                    </div>
    
                    <div class="account-info">
                        <div class="account-title">
                            <span>Информация</span>
                        </div>
                        <span>ФИО:<p class="account-name"><?= $_SESSION['user']['trainer_name'] ?></p></span>
                        <span>Email:<p class="account-email"><?= $_SESSION['user']['trainer_email'] ?></p></span>
                        <span>Адрес:<p class="account-address"><?= $_SESSION['user']['trainer_address'] ?></p></span>
                        <span>Телефон:<p class="account-phone"><?= $_SESSION['user']['trainer_phone'] ?></p></span>
                        
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

    <div class="container">
        <div class="container-title">
            <span>Отправить сообщение <em>клиенту</em></span>
            <img src="resourses/line-dec.png">
            <p class="container-title-description">Sport Fitness - сеть спортивных школ с передовыми технологиями по городу Нижний Новгород.<br>Уже много людей активно занимаются фитнесом в нашей спортивной школе!</p>
        </div>

        <div class="container-content">
            <form action="vendor/addmessagetoclient.php" method="post">
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

                <div class="input-field">
                    <input type="date" class="admin-input" placeholder="Введите дату:" name="date" required>
                </div>

                <div class="input-field">
                    <input type="text" class="admin-input" placeholder="Введите сообщение:" name="message" required>
                </div>

                <div class="request-status">
                    <?php
                        if($_SESSION['request-status-mes-add']) {
                            echo '<i class="bx bx-message-rounded-check"></i><p class="request-success">' . $_SESSION['request-status-mes-add'] .'</p>';
                        } 
                        unset($_SESSION['request-status-mes-add']);
                    ?>
                </div>

                <div class="course-btn">
                    <input type="submit" value="Отправить">
                </div>
            </form>
        </div>
    </div>

    <div class="container">
        <div class="container-title">
            <span>Назначить достижение <em>клиенту</em></span>
            <img src="resourses/line-dec.png">
            <p class="container-title-description">Sport Fitness - сеть спортивных школ с передовыми технологиями по городу Нижний Новгород.<br>Уже много людей активно занимаются фитнесом в нашей спортивной школе!</p>
        </div>

        <div class="container-content">
            <form action="vendor/addachievement.php" method="post">
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
                    </select>
                </div>

                <div class="input-field">
                    <input type="date" class="admin-input" placeholder="Введите дату:" name="date" required>
                </div>

                <div class="field course-field">
                    <select class="input-field section-trainer" name="achievement" required>
                        <option disabled value="" selected>Выберите достижение:</option>
                        <option>Примерный клиент</option>
                        <option>Трудяга</option>
                        <option>Ответственный клиент</option>
                        <option>Подающий надежды</option>
                        <option>Талантливый клиент</option>
                    </select>
                </div>

                <div class="request-status">
                    <?php
                        if($_SESSION['request-status-ach-add']) {
                            echo '<i class="bx bx-message-rounded-check"></i><p class="request-success">' . $_SESSION['request-status-ach-add'] .'</p>';
                        } 
                        unset($_SESSION['request-status-ach-add']);
                    ?>
                </div>

                <div class="course-btn">
                    <input type="submit" value="Отправить">
                </div>
            </form>
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
                <?php
                    require('vendor/connect.php');
                    $trainer_id = $_SESSION['user']['trainer_id'];
                    $check_message = mysqli_query($link, "SELECT messages.message_date, messages.message_message, clients.client_name FROM `messages`, `clients` WHERE messages.client_id = clients.client_id AND messages.trainer_id = '$trainer_id' AND messages.message_from = 'клиент';");
                    
                    foreach($check_message as $messages) :
                        
                ?>
                    <span>Дата: </span><span class="message-date"><?php echo ($messages['message_date']);?></span><br>
                    <span>Сообщение: </span><span class="message-type"><?php echo ($messages['message_message']);?></span><br>
                    <span>ФИО клиента: </span><span class="message-name"><?php echo ($messages['client_name']);?></span><br><br>
                <?php
                    endforeach;
                ?>
                </div>

                <div>
                    <form action="vendor/clearmessagetrainer.php" method="post">

                        <div class="request-status">
                            <?php
                                if($_SESSION['request-status-delete-mes-tr']) {
                                    echo '<i class="bx bx-message-rounded-check"></i><p class="request-success">' . $_SESSION['request-status-delete-mes-tr'] .'</p>';
                                } 
                                unset($_SESSION['request-status-delete-mes-tr']);
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

    <footer id="margin-top">
        <div class="footer">
            <span>Copyright <i class='bx bx-copyright'></i> 2023 - Site was powered for diplom project.</span>
        </div>
    </footer>
    
    <!-- JS -->
    <script src="JS/menu.js"></script>
    <script src="JS/scroll.js"></script>
    <script src="JS/courses-status.js"></script>
    <script src="JS/schedule.js"></script>
</body>
</html>