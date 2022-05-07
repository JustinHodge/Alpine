<?php
define('DB_DRIVER', 'mysqli');
define('DB_SERVER', 'alpinedb');
define('DB_USER', 'root');
define('DB_PASS', 'rootpwd');
define('DB_DATABASE', 'alpinedb');
define('MIN_ADMIN_LEVEL', 100);

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

$login_page = new ControllerLoginPage;
$landing_page = new ControllerLandingPage;
$page = !empty($_SESSION['logged_in']) ? $landing_page : $login_page;
$class = !empty($_GET['route']) ? $_GET['route'] : 'ControllerLoginPage';
$function = !empty($_GET['function']) ? $_GET['function'] : null;

if (file_exists('./controller' . $class . '.php')) {
    $page = new $class();
};

if ($function && method_exists($page, $function)) {
    $page->$function();
};

$page->getOutput();
