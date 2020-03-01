<?php
$MYSQL_ROOT_PASSWORD = "root";
$MYSQL_DATABASE = "test";
$MYSQL_USER = "test";
$MYSQL_PASSWORD = "test";

try {
    $pdo = new PDO(
        'mysql:host=mysql;dbname=' . $MYSQL_DATABASE . ';charset=utf8',
        $MYSQL_USER,
        $MYSQL_PASSWORD
    );
} catch (PDOException $e) {
    exit('データベース接続失敗。' . $e->getMessage());
}

try {
    $sql = 'select * from user';

    // SQLを実行
    $res = $pdo->query($sql);
} catch (PDOException $e) {
    echo "sql : " . $sql . "<br>";
    exit('sql失敗。' . $e->getMessage());
}

echo "<pre>";
foreach ($res as $value) {
    print_r($value);
}
