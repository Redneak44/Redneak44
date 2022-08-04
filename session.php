<?php
session_start();
$_SESSION['name'] = 'Gold';
$_SESSION['arr'] = [1,'2','test'];
echo "Cессии";
echo '<pre>';
print_r($_SESSION);
echo '</pre>';

//unset($_SESSION['name']);точечное удаление сессии
//session_destroy();
$_SESSION = [];

echo '<pre>';
print_r($_SESSION);
echo '</pre>';

var_dump(session_destroy());
?>
