<?php           //autoload function
/*function __autoload($class_name)
{
    $directorys = array(
        $_SERVER["DOCUMENT_ROOT"].'/bogdan/OOP/config/model/'
    );
    foreach($directorys as $directory) {
        if (file_exists($directory . $class_name . '.php')) {
            require_once($directory . $class_name . '.php');
            //only require the class once, so quit after to save effort (if you got more, then name them something else
            return;
        }
        return;
    }
}*/
class Autoloader {
    static public function loader($className)
    {
        $directorys = array(
            $_SERVER["DOCUMENT_ROOT"] . '/bogdan/OOP/config/model/'
        );
        /*if (file_exists($filename)) {
            include($filename);
            if (class_exists($className)) {
                return TRUE;
            }
        }*/
        foreach ($directorys as $directory) {
            if (file_exists($directory . $className . '.php')) {
                require_once($directory . $className . '.php');
                //only require the class once, so quit after to save effort (if you got more, then name them something else
                return;
            }
        }
    }
}
spl_autoload_register('Autoloader::loader');
?>