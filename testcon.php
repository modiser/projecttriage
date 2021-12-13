<?php
session_start();
$host = "154.0.161.173"; /* Host name */
$user = "charles"; /* User */
$password = "charles@cce$$1"; /* Password */
$dbname = "unitac_main"; /* Database name */

$con = mysqli_connect($host, $user, $password,$dbname);
// Check connection
if (!$con) {
 die("Connection failed: " . mysqli_connect_error());
}