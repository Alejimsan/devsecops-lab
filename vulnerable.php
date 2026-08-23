<?php
$id = $_GET['id'];
$db = new mysqli("localhost", "root", "", "dvwa");
$resultado = $db->query("SELECT first_name FROM users WHERE user_id = " . $id);
?>
