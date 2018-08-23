<?php

try {$db = new PDO( "sqlite:".__DIR__."/database.db"); //Tries to create an object w the PDO object
var_dump($db);
} catch (Exception $e) { // if there is a problem, this executes. 
    echo "Unable to connect";//if there is an error, this messaige is displayed.
    exit;
}

echo "Unable to connect to the Database";

?>