<?php
$MYSQL_ROOT_PASSWORD = "root";
$MYSQL_DATABASE = "test";
$MYSQL_USER = "test";
$MYSQL_PASSWORD = "test";

try {
    $pdo = new PDO(
        'mysql:host=mysql;dbname=' . $MYSQL_DATABASE . ';charset=utf8'
        , $MYSQL_USER
        , $MYSQL_PASSWORD,
        array(PDO::ATTR_EMULATE_PREPARES => false)
    );

} catch (PDOException $e) {
    exit('データベース接続失敗。' . $e->getMessage());
}

print_r($pdo);
