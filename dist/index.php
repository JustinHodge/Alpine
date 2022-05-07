<?php
define('DB_DRIVER', 'mysqli');
define('DB_SERVER', 'alpinedb');
define('DB_USER', 'root');
define('DB_PASS', 'rootpwd');
define('DB_DATABASE', 'alpinedb');
define('MIN_ADMIN_LEVEL', 50);

session_start();

if (!empty($_GET['logout'])) {
    session_destroy();
    die();
}

spl_autoload_register(
    function ($class) {
        $file = 'model/' . $class . '.php';

        if (file_exists($file)) {
            require_once $file;
            return true;
        }
        return false;
    }
);

spl_autoload_register(
    function ($class) {
        $file = 'controller/' . $class . '.php';

        if (file_exists($file)) {
            require_once $file;
            return true;
        }
        return false;
    }
);

spl_autoload_register(
    function ($class) {
        $file = 'view/' . $class . '.php';

        if (file_exists($file)) {
            include $file;
            return true;
        }
        return false;
    }
);

$access_level = !empty($_SESSION['access_level']) ? $_SESSION['access_level'] : null;

$login_page = new ControllerLoginPage;
$landing_page = new ControllerLandingPage($access_level);
$page = !empty($_SESSION['logged_in']) ? $landing_page : $login_page;
$class = !empty($_GET['route']) ? $_GET['route'] : 'ControllerLoginPage';
$function = !empty($_GET['function']) ? $_GET['function'] : null;


if (file_exists('./controller' . $class . '.php')) {
    $page = new $class($access_level);
};

if ($function && method_exists($page, $function)) {
    $page->$function();
};

echo $page->getOutput();
