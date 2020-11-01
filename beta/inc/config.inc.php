<?php
/**
 * A complete login script with registration and members area.
 *
 * @author: Nils Reimers / http://www.php-einfach.de/experte/php-codebeispiele/loginscript/
 * @license: GNU GPLv3
 */
 
//Tragt hier eure Verbindungsdaten zur Datenbank ein
$db_host = 'localhost';
$db_name = 'loginsystem06';
$db_user = 'loginsystem06';
$db_password = 'Monte-2006';
$pdo = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_password);