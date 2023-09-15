<?
require_once('application/lib/Dev.php');

use application\core\Router;
use application\lib\Db;

spl_autoload_register(function($class){
    $patch = str_replace('\\', '/', $class.".php");

    if(file_exists($patch)){
        require_once($patch);
    }
});

session_start();

$router = new Router;
$db = new Db;

?>