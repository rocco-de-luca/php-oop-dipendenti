
<?php

include_once __DIR__ . '/classes/Employees.php';

$director = new Manager();
var_dump($director);

try {
    $director->setNum(5)
}
catch (Exception $e) {
    echo 'error' . $e->getMessage();
}


