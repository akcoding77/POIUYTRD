<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$username = $_POST["name"];
echo $username;
}
?>