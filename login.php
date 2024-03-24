<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вход в личный кабинет</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <h1>Вход в личный кабинет</h1>
    <section class="section">
        <form action="process.php" method="post">
            <label class="label">Логин</label>
            <input class="input" type="text" name="login" placeholder="Введите Логин">
            <label class="label">Пароль</label>
            <input class="input" type="password" name="password" placeholder="Введите Пароль">
            <label class="label">Укажите свой день рождения </label>
            <input class="input" type="date" name="datebirthday"  placeholder="Введите дату рождения">
            <input class="input" name="submit" type="submit" value="Войти">
            <?php
                if (isset($_SESSION['message'])){
                    echo '<p>'. $_SESSION['message'] . '</p>';
                }
                unset($_SESSION['message']);
            ?>
        </form>
    </section>
</body>
</html>
