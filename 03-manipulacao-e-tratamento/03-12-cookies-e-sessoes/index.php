<?php
//session_start();
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("03.12 - Cookies e sessões");

/*
 * [ cookies ] http://php.net/manual/pt_BR/features.cookies.php
 */
fullStackPHPClassSession("cookies", __LINE__);

var_dump($_COOKIE);

setcookie("testCookie", "Esse é o meu cookie!", time() + 60);
// setcookie("testCookie", null, time() - 60);

$cookie = filter_input_array(INPUT_COOKIE, FILTER_SANITIZE_STRING);
var_dump(
    "<br><br>",
    $_COOKIE,
    "<br><br>",
    $cookie
);

$time = time() + 60 * 60 * 24 * 7;
$user = [
    "user"      => "root",
    "passwd"    => "123456",
    "expire"    => $time,
];

setcookie(
    "loginPuma",
    http_build_query($user),
    $time,
    // "/",
    // "www.pumasync.com.br",
    // true
);

$login = filter_input(INPUT_COOKIE, "loginPuma", FILTER_SANITIZE_STRING);
if ($login) {
    var_dump($login);
    parse_str($login, $user);
    var_dump($user);
}
/*
 * [ sessões ] http://php.net/manual/pt_BR/ref.session.php
 */
fullStackPHPClassSession("sessões", __LINE__);

session_save_path(__DIR__ . "/ses");
session_name("SESSIONPUMASYSTEM");
session_start([
    "cookie_lifetime" => (60 * 60 * 24)
]);


var_dump(
[
    "id"        => session_id(),
    "name"      => session_name(),
    "status"    => session_status(),
    "save_path" => session_save_path(),
    "cookie"    => session_get_cookie_params(),
]);

// $_SESSION['login'] = (object)$user;
// $_SESSION['user'] = $user;
// unset($_SESSION['user']);

session_destroy();

var_dump($_SESSION);

