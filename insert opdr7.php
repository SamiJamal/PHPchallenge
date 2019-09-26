<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 24-9-2019
 * Time: 14:20
 */
$item = $_POST["item"];
$con = mysqli_connect('localhost','root','root',"boodschappen");

if(!$con)
{
    echo 'not connected to server';
}

if(!mysqli_select_db($con, "boodschappen"))
{
    echo "database not selected";
}



$sql = "INSERT INTO invoerproducten VALUE (0, '$item')";

if (mysqli_query($con,$sql))
{
    echo "het is opgeslagen in de database";
}










?>