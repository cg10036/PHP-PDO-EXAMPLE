<?php
include "config.php";
try {
    $db = new PDO($db_dsn, $db_id, $db_pw);
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e)
{
    // ERROR $e->getMessage();
}
?>
