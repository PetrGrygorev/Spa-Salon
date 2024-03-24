<?php

$user_list = [
    ['login' => 'Smith', 'password' => password_hash(123, PASSWORD_DEFAULT)],
    ['login' => 'John', 'password' => password_hash(123, PASSWORD_DEFAULT)],
    ['login' => 'Alice', 'password' => password_hash(123, PASSWORD_DEFAULT)],
];
// https://www.php.net/manual/ru/function.password-hash
// password_hash(string $password, string|int|null $algo, array $options = []): string
