<?php 
include("config/setup.php");
session_start();
if(!isset($_SESSION['success']))
{
  header("location: sign.php");
}
else if (isset($_GET['action']) == 'delete')
{
    if (isset($_GET['id']))
    {
        $postid = $_GET['id'];
        $query = $db->query("DELETE FROM images WHERE id=$postid");
        if ($query->execute())
        {
            header("Location: gallery.php");
        }
        else{
            echo "Error: Unable to delete the post";
        }
       
    }
}







?>