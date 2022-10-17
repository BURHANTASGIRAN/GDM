<?php
/* Sürücü isteğiyle bir MySQL veritabanına bağlanalım */
$dsn = 'mysql:dbname=gdm;host=127.0.0.1';
$user = 'root';
$password = '';

try {
    $baglan = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
   echo 'bağlantı kurlamadı:' .$e->getMessage();
}


?>