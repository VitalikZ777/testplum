<?php
/**
 * Created by PhpStorm.
 * User: Vitalik_Z
 * Date: 22.03.2019
 * Time: 17:14
 */



//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);


function inverse($x) {
    if (!$x) {
      //  throw new Exception('Деление на ноль.');
    }
    return 1/$x;
}

try {
    echo inverse(5) . "\n";
    echo inverse(0) . "\n";
} catch (Exception $e) {
    echo 'Выброшено исключение: ',  $e->getMessage(), "\n";
}

fopen("hj.un","");
try{
    // Your code
    fopen("hj.un","");
}
catch(Error $e) {
    $trace = $e->getTrace();
    echo $e->getMessage().' in '.$e->getFile().' on line '.$e->getLine().' called from '.$trace[0]['file'].' on line '.$trace[0]['line'];
}

//phpinfo();

$arr = [ 1, 2, 3 ,4];
var_dump( $arr );
?>