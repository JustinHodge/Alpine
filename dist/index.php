<?php
define('DB_DRIVER', 'mysqli');
define('DB_SERVER', 'alpinedb');
define('DB_USER', 'root');
define('DB_PASS', 'rootpwd');
define('DB_DATABASE', 'alpinedb');
define('MIN_ADMIN_LEVEL', 100);

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

$page = new ControllerLoginPage;

$page->getOutput();
