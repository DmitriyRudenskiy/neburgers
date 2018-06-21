<?php

function check($data)
{
    $email = !empty($data["email"]) ? strtolower(trim($data["email"])) : null;

    if ($email === null) {
        return null;
    }

    $input = [
        "name" => 1,
        "phone" => 1,
        "street" => 1,
        "home" => 1,
        "part" => 1,
        "appt" => 1,
        "floor" => 1,
        "comment" => 1,
        "payment" => 1,
        "callback" => 1
    ];

    $data = array_filter($data, "trim");

    $data = array_intersect_key($data, $input);

    return [
        'user' => $email,
        'order' => $data
    ];
}

function add($user, $order)
{
    // проверка пользователя
    $userModel = getUser($user);

    if ($userModel === false) {
        addUser($user);
        $userModel = getUser($user);
    }

    // добавление заказа
    $result = addOrder($userModel->id, $order);

    return $result;
}

function sendMail($data)
{
    $result = getCountOrdersUsers($data['user_id']);

    if ($result->countOrder > 1) {
        $message = file_get_contents(APP_DIR . '/views/mail.txt');
        $message = str_replace('<count>', $result->countOrder, $message);
    } else {
        $message = file_get_contents(APP_DIR . '/views/mail_first.txt');
    }


    var_dump($message);
}

function run()
{
    // список пользователей
    if ($_SERVER["REQUEST_URI"] == "/admin") {
        $users = getAllUsers();
        $orders = getAllOrders();
        require APP_DIR . '/views/admin.php';
        return null;
    }

    // добавление заказа
    if ($_POST) {
        $data = check($_POST);
        $result = add($data['user'], $data['order']);

            var_dump(123);

        if ($result !== null) {
            sendMail($result);
        }
        exit();
        header('Location: /');
    }

    // вывод вёрстки
    require APP_DIR . '/views/home.php';
}