<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Спортивная школа</title>
    <!-- CSS -->
    <link rel="stylesheet" href="CSS/style.css">
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
    <div class="start-screen" id="home">
        <div class="main-banner">
            <video muted autoplay loop class="bg-video">
                <source src="resourses/bg-video.mp4" type="video/mp4">
            </video>

            <div class="banner-overlay">
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

                <div class="banner-overlay-caption">
                    <div class="banner-caption-content">
                        <span class="caption-text">work harder, get stronger</span>
                        <span class="caption-title">Easy with our <span class="caption-title-red">gym</span></span>
                        <div class="caption-btn">
                            <a href="reg.php">Become a member</a>
                        </div>
                    </div>

                    <div class="banner-scroll-btn">
                        <a href="#about-us">
                            <span class="material-symbols-outlined">arrow_forward_ios</span>
                            <p>Scroll</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="section">
        <div class="container" id="about-us">
            <div class="container-title">
                <span>Немного о <em>нас</em></span>
                <img src="resourses/line-dec.png">
                <p class="container-title-description">Sport Fitness - сеть спортивных школ с передовыми технологиями по городу Нижний Новгород.<br>Уже много людей активно занимаются фитнесом в нашей спортивной школе!</p>
            </div>

            <div class="container-content">
                <div class="about-us">
                    <div class="about-us-items">
                        <div class="about-us-item">
                            <div class="about-us-item-logo">
                                <span class="material-symbols-outlined">workspace_premium</span>
                            </div>

                            <div class="about-us-item-info">
                                <div class="about-us-item-info-title">
                                    <span>Гарантия</span>
                                </div>

                                <div class="about-us-item-info-description">
                                    <span>Мы гарантируем успех в ваших начинаниях в области фитнеса.</span>
                                </div>
                                
                                <div class="about-us-item-info-link">
                                    <a href="#contacts">Подробнее</a>
                                </div>
                            </div>
                        </div>

                        <div class="about-us-item">
                            <div class="about-us-item-logo">
                                <span class="material-symbols-outlined">location_on</span>
                            </div>

                            <div class="about-us-item-info">
                                <div class="about-us-item-info-title">
                                    <span>Местоположение</span>
                                </div>

                                <div class="about-us-item-info-description">
                                    <span>Удобное расположение спортивных школ в центре города.</span>
                                </div>
                                
                                <div class="about-us-item-info-link">
                                    <a href="#contacts">Подробнее</a>
                                </div>
                            </div>
                        </div>

                        <div class="about-us-item">
                            <div class="about-us-item-logo">
                                <span class="material-symbols-outlined">fitness_center</span>
                            </div>

                            <div class="about-us-item-info">
                                <div class="about-us-item-info-title">
                                    <span>Выбор</span>
                                </div>

                                <div class="about-us-item-info-description">
                                    <span>Большой выбор различных курсов, упражнений, тренеров и ассортимента.</span>
                                </div>
                                
                                <div class="about-us-item-info-link">
                                    <a href="#contacts">Подробнее</a>
                                </div>
                            </div>
                        </div>

                        <div class="about-us-item">
                            <div class="about-us-item-logo">
                                <span class="material-symbols-outlined">groups</span>
                            </div>

                            <div class="about-us-item-info">
                                <div class="about-us-item-info-title">
                                    <span>Команда</span>
                                </div>

                                <div class="about-us-item-info-description">
                                    <span>В наших спортивных школах работают только лучшие сотрудники нашего города.</span>
                                </div>
                                
                                <div class="about-us-item-info-link">
                                    <a href="#contacts">Подробнее</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container" id="call-to-action">
            <div class="container-title-white">
                <span>Не <em>думай</em>, начни <em>сегодня!</em></span>
            </div>

            <div class="call-to-action">
                <div class="call-to-action-text">
                    <span>Уже множество людей выбрали нашу спортивную школу, выбирай и ты!</span>
                </div>

                <div class="call-to-action-btn">
                    <a href="reg.php">Become a member</a>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container" id="courses">
            <div class="container-title">
                <span>Наши <em>курсы</em></span>
                <img src="resourses/line-dec.png">
                <p class="container-title-description">Sport Fitness - сеть спортивных школ с передовыми технологиями по городу Нижний Новгород.<br>В наших спортивных школах большой выбор различных курсов на любой вкус!</p>
            </div>

            <div class="container-content">
                <div class="courses">
                    <div class="courses-list">
                        
                        <div class="courses-list-item">
                            <p href="" class="courses-list-item-active" id="course-1">
                                <img src="resourses/courses-type.png">
                                <span>Пауэрлифтинг</span>
                            </p>
                        </div>

                        <div class="courses-list-item">
                            <p href="" id="course-2">
                                <img src="resourses/courses-type.png">
                                <span>Легкая атлетика</span>
                            </p>
                        </div>

                        <div class="courses-list-item">
                            <p href="" id="course-3">
                                <img src="resourses/courses-type.png">
                                <span>Cross-fit</span>
                            </p>
                        </div>

                        <div class="courses-list-item">
                            <p id="course-4">
                                <img src="resourses/courses-type.png">
                                <span>Йога</span>
                            </p>
                        </div>

                        <div class="courses-list-btn">
                            <a href="">
                                <span>View All Schedules</span>
                            </a>
                        </div>
                    </div>

                    <div class="courses-information">
                        <div class="courses-information-item courses-information-item-active" id="tabs-1">
                            <img src="resourses/training-image-01.jpg">
                            <span>Пауэрлифтинг</span>
                            <p>Пауэрлифтинг — это силовой вид спорта, который состоит из трех попыток с максимальным весом в трех упражнениях: приседаниях, жиме лежа и становой тяге. Как и в олимпийской тяжелой атлетике, спортсмен пытается поднять максимальный вес штанги, нагруженной блинами, с максимальным весом.</p>
                            <a href="">View schedule</a>
                        </div>

                        <div class="courses-information-item" id="tabs-2">
                            <img src="resourses/training-image-02.jpg">
                            <span>Легкая атлетика</span>
                            <p>Лёгкая атле́тика — олимпийский вид спорта, включающий бег, ходьбу, прыжки и метания. Объединяет следующие дисциплины: беговые виды, спортивную ходьбу, технические виды, многоборья, пробеги и кроссы. Один из основных и наиболее массовых видов спорта.</p>
                            <a href="">View schedule</a>
                        </div>

                        <div class="courses-information-item" id="tabs-3">
                            <img src="resourses/training-image-03.jpg">
                            <span>Cross-fit</span>
                            <p>Кроссфит — брендированная система физической подготовки. Зарегистрирована в качестве торговой марки корпорацией CrossFit, Inc, основанной Грегом Глассманом и Лорен Дженай в 2000 году. Продвигается и как система физических упражнений, и как соревновательный вид спорта.</p>
                            <a href="">View schedule</a>
                        </div>

                        <div class="courses-information-item" id="tabs-4">
                            <img src="resourses/training-image-04.jpg">
                            <span>Йога</span>
                            <p>Йога — это очень древняя практика для поиска целостности в занятиях и в жизни. Йога состоит из асан, дыхательных техник и медитаций, поэтому развивает человека всесторонне — через тело, ум и эмоции. Хотя изначально йога — это духовная практика, в больших городах духовность занимает её малую часть.</p>
                            <a href="">View schedule</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

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

    <section class="section">
        <div class="container" id="trainers">
            <div class="container-title">
                <span>Наши <em>тренеры</em></span>
                <img src="resourses/line-dec.png">
                <p class="container-title-description">Sport Fitness - сеть спортивных школ с передовыми технологиями по городу Нижний Новгород.<br>В наших спортивных школах большой выбор различных курсов на любой вкус!</p>
            </div>

            <div class="container-content">
                <div class="trainers">
                    <div class="trainers-list">

                    <?php
                        require('vendor/connect.php');
                        $sql_trainers = $link->query("SELECT * FROM `trainers`");
                        foreach ($sql_trainers as $trainer_list) :
                    ?>

                        <div class="trainer-item">
                            <img src="<?php echo $trainer_list['trainer_src'];?>">
                            <span class="trainer-type"><?php echo $trainer_list['trainer_type'];?></span>
                            <span class="trainer-name"><?php echo $trainer_list['trainer_name'];?></span>
                            <span class="trainer-description"><?php echo $trainer_list['trainer_description'];?></span>
                            <div class="trainer-social-media">
                                <i class='bx bxl-facebook'></i>
                                <i class='bx bxl-vk' ></i>
                                <i class='bx bxl-telegram' ></i>
                                <i class='bx bxl-instagram-alt' ></i>
                            </div>
                        </div>

                    <?php
                        endforeach;
                    ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container" id="contacts">
            <div class="container-title">
                <span>Наши <em>контакты</em></span>
                <img src="resourses/line-dec.png">
                <p class="container-title-description">Sport Fitness - сеть спортивных школ с передовыми технологиями по городу Нижний Новгород.<br>В наших спортивных школах большой выбор различных курсов на любой вкус!</p>
            </div>

            <div class="container-content">
                <div class="contacts">
                    <div class="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1256.405060318478!2d43.997211351583!3d56.33014788622411!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sru!2sru!4v1678300107649!5m2!1sru!2sru" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>

                    <div class="contacts-form">
                        <form action="vendor/email.php" method="post" class="contact-email">
                            <input class="input-field" type="text" name="name" placeholder="Ваше имя:" required>
                            <input class="input-field" type="text" name="email" placeholder="Ваш Email:" required>
                            <input class="input-field" type="text" name="subject" placeholder="Тема письма:" required>
                            <textarea name="message" id="email-mes" rows="6" placeholder="Сообщение" required></textarea>
                            <input class="email-btn" type="submit" value="Отправить сообщение">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="footer">
            <span>Copyright <i class='bx bx-copyright'></i> 2023 - Site was powered for diplom project.</span>
        </div>
    </footer>
    <!-- JS -->
    <script src="JS/menu.js"></script>
    <script src="JS/courses.js"></script>
    <script src="JS/schedule.js"></script>
    <script src="JS/scroll.js"></script>
</body>
</html>