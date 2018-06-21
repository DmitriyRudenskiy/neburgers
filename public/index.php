<?php
define('APP_DIR', realpath(__DIR__ .  DIRECTORY_SEPARATOR . '../src'));

require_once APP_DIR . '/models/db.php';
require_once APP_DIR . '/models/users.php';
require_once APP_DIR . '/models/orders.php';
require_once APP_DIR . '/controllers/front.php';
try {
    run();
} catch (\Exception $e) {

}
