<!-- localhost = 127.0.0.1 -->
<!-- db = database that is being used -->
<!-- user = login credential -->
<!-- dsn > database > connect to host > database name -->
<?php
    //Pesronal system database connection
    //$host = 'localhost'; 
    //$db = 'php_assignment2_db';
    //$user = 'root';
    //$pass = '';
    //$charset = 'utf8mb4';

    //remote datebase connection
    $host = 'remotemysql.com'; 
    $db = 'VcqeYknmDc';
    $user = 'VcqeYknmDc';
    $pass = 'H3pERMjdgb';
    $charset = 'utf8mb4';

    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";

    try{
        $pdo = new PDO($dsn, $user, $pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    } catch(PDOException $e) {
        throw new PDOException($e->getMessage());
    }

    require_once 'crud.php';
    $crud = new crud($pdo);
?>


