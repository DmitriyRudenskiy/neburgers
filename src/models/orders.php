<?php

function addOrder($userId, $data)
{
    $input = [
        "user_id" => $userId,
        "name" => null,
        "phone" => null,
        "street" => null,
        "home" => null,
        "part" => null,
        "appt" => null,
        "floor" => null,
        "comment" => null,
        "payment" => null,
        "callback" => null
    ];

    foreach ($input as $key => $value) {
        if (!empty($data[$key])) {
            $input[$key] = $data[$key];
        }
    }

    $pdo = connect();
    $sql = "INSERT INTO `orders` (`user_id`, `name`, `phone`, `street`, `home`, `part`, `appt`, `floor`, `comment`, `payment`, `callback`) 
            VALUES (:user_id, :name, :phone, :street, :home, :part, :appt, :floor, :comment, :payment, :callback);";

    $stm = $pdo->prepare($sql);
    $inserted = $stm->execute($input);

    if($inserted){
        return $input;
    }

    return null;
}

function getCountOrdersUsers($userId)
{
    $pdo = connect();
    $sql = "SELECT COUNT(*) countOrder FROM `orders` WHERE user_id=:user_id";

    $stm = $pdo->prepare($sql);
    $stm->execute(['user_id' => $userId]);

    return $stm->fetch(PDO::FETCH_OBJ );
}

function getAllOrders()
{
    $pdo = connect();
    $sql = "SELECT * FROM `orders` WHERE 1";

    $stm = $pdo->prepare($sql);
    $stm->execute();

    return $stm->fetchAll(PDO::FETCH_OBJ );
}