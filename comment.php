<?php
/**
 * Created by PhpStorm.
 * User: Li
 * Date: 5/2/16
 * Time: 3:26 AM
 */

session_start();

ini_set('display_errors', 'On');

include ('connectToDB.php');

$text = $_POST['text'];
$uid=$_SESSION['uid'];
$pid=$_SESSION['pid'];
$comment = "INSERT INTO Comment(cid, uid, pid, ctime, text, image, c_viewed) VALUES (NULL, '$uid', '$pid', NULL, '$text', NULL, 0)";

if(mysqli_query($link, $comment)){
    header("Location:/display.php?pid=$pid");
}else{
    echo $comment;
}
