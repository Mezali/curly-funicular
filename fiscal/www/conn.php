<?php
try {
    $pdo = new PDO("mysql:host=20.226.83.79;dbname=banco", "userBanco", "123");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("PHP é uma bosta: o banco deu pau, vai lá resolver isso seu merda; " . $e->getMessage());
}
// bosta de php, odeio php, não gosto de phpdo->query("INSERT INTO user (UID) VALUES ('$uid');");p