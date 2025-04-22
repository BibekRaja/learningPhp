<?php

ini_set('session.use_only_cookies', 1);     //setting cookies to true

ini_set('session.use_strict_mode', 1);      //make sure website only uses the session id that is created by our website.


session_set_cookie_params([
    'lifetime' => 1800,
    'domain' => 'localhost',
    'path' => '/',
    'secure' => true,
    'httponly' => true
]);

session_start();

// session_regenerate_id(true); //regenerates new session id

if (!isset($_SESSION['last_regeneration'])) {
    session_regenerate_id(true);
    $_SESSION['last_regeneration'] = time();
} else {
    $interval = 60 * 30;    //time to regenerate session id = sec * min

    if (time() - $_SESSION['last_regeneration'] >= $interval) {
        session_regenerate_id(true);
        $_SESSION['last_regeneration'] = time();

    }
}

