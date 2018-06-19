<?php
/**
 * Created by PhpStorm.
 * User: tyr
 * Date: 19/06/18
 * Time: 21:05
 */

//including the database connection file
include("config.php");

//getting id of the data from url
$id = $_GET['id'];

//deleting the row from table

$result = mysqli_query($mysqli, "DELETE FROM users WHERE id=$id");

//redirecting to the display page (index.php in our case)
header("Location:index.php");
