<?php
include "include.php";
if (isset($_GET["id"]) || isset($_GET["pw"])) {
    $sql = "INSERT INTO user (id, pw) VALUES (:id, :pw)";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(":id", $_GET["id"], PDO::PARAM_STR);
    $stmt->bindParam(":pw", $_GET["pw"], PDO::PARAM_STR);
    $stmt->execute();
}
$sql = "SELECT * FROM user";
$stmt = $db->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
print_r($result);
echo count($result);
?>
