<?php

try {
    $db = new PDO( "sqlite:".__DIR__."/database.db"); //Tries to create an object w the PDO object
    $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) { // if there is a problem, this executes. 
    echo "Unable to connect";//if there is an error, this messaige is displayed.
    echo $e->getMessage;
    exit;
}

try {
    $results = $db->query("SELECT title, category, img FROM Media");// run the query to retreive DB items
} catch (Exception $e) {
    echo "Unable to retieve results";
    exit;
}

$catalog = ($results->fetchAll(PDO::FETCH_ASSOC));

?>