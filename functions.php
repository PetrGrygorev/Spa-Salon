<?php
// Возвращаем массив всех пользователей
// функция getUsersList() возвращает массив всех пользователей и хэшей их паролей;

function getUsersList()
{
    include 'user_data_storage.php';
    return $user_list;
}

// Проверка существования пользователя
// функция existsUser($login) проверяет, существует ли пользователь с указанным логином;

/*function existsUser($login)
{
    $all_users = getUsersList();
    foreach ($all_users as $user) {
        if ($user['login'] === $login) {
            return true;
        }
    }
    return false;
} */

// Проверка на существование пользователя и правильность ввода пароля
// функция checkPassword($login, $password) пусть возвращает true тогда,
// когда существует пользователь с указанным логином и введенный им пароль прошел проверку, иначе — false;
function checkPassword($login, $password)
{
    $all_users = getUsersList();
    foreach ($all_users as $user) {
        if ($user['login'] === $login) {
            if (password_verify($password, $user['password'])) { // https://www.php.net/manual/ru/function.password-verify
                return true;
            }
        }
    }
    return false;
}

// Возвращает имя вошедшего на сайт пользователя
// функция getCurrentUser() которая возвращает либо имя вошедшего на сайт пользователя, либо null.
/* https://www.php.net/manual/ru/function.empty.php
empty(mixed $var): bool */
function getCurrentUser()
{
    if (isset($_SESSION['currentUser']) && !empty($_SESSION['currentUser'])) {
        return $_SESSION['currentUser'];
    } else return null;
}
/*Разместите на главной странице индивидуальную акцию.
Запишите время входа пользователя на сайт.
При обновлении страницы выводите сколько часов-минут-секунд осталось пользователю до истечения персональной скидки
(отсчёт начинаем с 24 часов). */
// Сделана индивидуальная акция с таймером.
function getActionTime ($personalAction) {

}


/*Спросите дату рождения пользователя. При следующем входе на сайт напишите,
сколько дней осталось до его дня рождения. Если сегодня день рождения пользователя — поздравьте его!
Отобразите персональную скидку 5% на все услуги салона.
 */
// Ведет подсчет количества дней до Даты Рождения и если Дата Рождения, то выводит индивидуальную акцию

function getDateBirthday($dateBirthday) {
    $DateToday = new DateTime(date('d.m.Y')); // Текущая дата
    $DateBirth = new DateTime($dateBirthday);  // Дата рождения
    $DateBirth->setDate($DateToday->format('Y'), $DateBirth->format('m'), $DateBirth->format('d')); // Меняем год на текущий
    print_r($DateBirth);
    print_r($DateToday);
    $different = $DateBirth->diff($DateToday);  // Вычисляем разницу между датами
    if ($different->invert) // отрицательный период(т.е. сегодняшняя дата меньше даты др)
    {
        return $different->days;  // выводим кол-во дней
    }
    else {
        if ($different->days === 0){    // если период и интервал дней = 0, значит сегодня др
            return $different->days;
        }
        else { // все  остальное значит что др уже прошел
        $DateBirth->modify('+1year');   // добавляем год к дате рождения, для подсчета дней от сегодняшней даты до след др
        $different = $DateBirth->diff($DateToday); // снова вычисляем разницу между датами
        return $different->days;
        }
    }
}
