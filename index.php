<?php
session_start();
include 'functions.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spa Salon</title>
    <link rel="stylesheet" href="css/main.css">
    <a href="login.php">Вход в личный кабинет</a>
</head>
<body>
    <header>
        <div class="user-login">
            <?php
            if (isset($_SESSION['authorized']) && getCurrentUser() !== null){
                echo '<h1>Spa Salon. Добро Пожаловать! ' . getCurrentUser() . '</h1>
                      <a href="logout.php">Выйти из личного кабинета</a>';
            }
            if ($_SESSION['checkDateOfBirthday'] > 0) {
                    echo '<div><p>До вашего дня рождения осталось: '
                    . $_SESSION['checkDateOfBirthday'] . ' дней (-ень)</p></div>';
                    unset($_SESSION['checkDateOfBirthday']);
            }

            ?>
        </div>
    </header>
    <section>
        <div>
            <?php
            if (isset($_SESSION['authorized']) && $_SESSION['checkDateOfBirthday'] === 0) {
                echo '
                <div>
                    <div>
                        <h2 class="special-discount">Специальная скидка в честь Вашего Дня Рождения!</h2>
                            <div><p>Поздравляем Вас с Днем Рождения!
                                В честь этого мы подготовили для вас специальную акцию!</p></div>
                            <div>
                            <p>Скидка 45% на все услуги нашего спа-салона! </p><br>
                            <p>
                                Насладитесь приятными ощущениями и проведите незабываемый отдых в нашем спа-салоне.
                                Будем рады Вас видеть!
                            </p>
                            </div>
                    </div>
                </div>
                    <div>
                        <img src="img/12290843_4956461.jpg" alt="">
                    </div>';

                        unset($_SESSION['checkDateOfBirthday']);

                } else {
                    echo '
                        <div>
                            <div>
                                <h2>Чёрная пятница!</h2>
                                <h3>Добро пожаловать в наш Spa Salon</h3>
                                    <div class="action_card_text">
                                        <p>
                                        Скидки до 20% каждую Чёрную пятницу!
                                        Насладитесь приятными ощущениями и зарядитесь энергией для полноценного отдыха.
                                        </p>
                                    </div>
                                </div>
                            <div>
                                <img src="img/10747325_4562980.jpg" alt="">
                            </div>
                        </div>';
            } ?>
        </div>
    </section>
    <section>
        <div>
            <div>
                <h2>Welcome to the Spa Salon!</h2>
                <img src="img/pngegg.png" alt="Welcome to the spa salon!">
            </div>
            <div>
                <h2>Spa Salon на горячих камнях</h2>
                <img src="img/4.jpg" alt="">
            </div>
            <div>
                <h2>Спа-процедуры с горячими камнями</h2>
                <img src="img/3.jpg" alt="">
            </div>
            <div>
                <h2>Косметология</h2><br>
                <img src="img/6.jpg" alt="">
            </div>
            <div>
                <h2>Более 10 различных техник массажа</h2>
                <img src="img/5.jpg" alt="">
            </div>
            <div>
                <h2>Вы расслабляетесь, обновляетесь и омолаживаетесь.</h2>
                <img src="img/1.jpg" alt="">
            </div>
            <div>
                <h2>Вас ждет часовой массаж, на ваш выбор расслабляющий или общий.<br>
                    А чтобы вам стало еще уютней, мы предлагаем чаепитие.</h2>
                <img src="img/2.jpg" alt="">
            </div>
        </div>
    </section>
    <section>
        <div>
            <h2>Акции</h2>
            <h2>Для новых посетителей</h2>
            <div>
                <p>Будь первым! Скидка 20% для новых гостей на спа-процедуры. </p>
            </div>
        </div>
        <div>
            <img src="img/16135911_5698174.jpg" alt="">
        </div>
    </section>
    <footer>
        <ul class="menu-contacts">
            <li>Адрес: Россия, г.Саратов.</li>
            <li>Телефон: +7-000-000-00-00</li>
            <li>Почта: spa_salon@mail.ru</li>
            <li>Instagram: @spa_salon</li>
            <li>Часы работы: ежедневно с 8:00 до 23:00</li>
        </ul>
    </footer>
</body>
</html>
