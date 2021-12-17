<?php
/**
 * Created by PhpStorm.
 * User: Mohammed Alshobaki
 * Date: 2021-12-17
 * Time: 8:13 PM
 */

 
$dsn = "mysql:host=localhost;dbname=dbrq45sldvvtpg";
$user = "u6flsbwxprjgn";
$passwd = "pass@123";

$pdo = new PDO($dsn, $user, $passwd);

 
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

