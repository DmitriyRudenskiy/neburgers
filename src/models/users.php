<?php
function getUser($email)
{
    $pdo = connect();
    $sql = "SELECT * FROM `users` WHERE `email` = :email";

    $stm = $pdo->prepare($sql);
    $stm->execute(['email' => $email]);

    return $stm->fetch(PDO::FETCH_OBJ );
}

function addUser($email)
{
    $pdo = connect();
    $sql = "INSERT INTO `users` (`email`) VALUES (:email);";

    $stm = $pdo->prepare($sql);
    $stm->execute(['email' => $email]);
}

function getAllUsers()
{
    $pdo = connect();
    $sql = "SELECT * FROM `users` WHERE 1";

    $stm = $pdo->prepare($sql);
    $stm->execute();

    return $stm->fetchAll(PDO::FETCH_OBJ );
}