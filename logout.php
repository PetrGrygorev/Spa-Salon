<?php
session_start();
unset($_SESSION['currentUser']);
header('Location: index.php'); // https://www.php.net/manual/ru/function.header
                          // header — Отправляет необработанный (сырой) HTTP-заголовок
/*Без функции header(string $header, bool $replace = true, int $response_code = 0): void
возвращается пустая страница, нет адреса перехода */
