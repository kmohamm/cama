<?php
include("config/setup.php");
$_SESSION['username']= $username;
echo $_SESSION['username'];
$query = $db->query("SELECT * FROM images");
$array = $query->fetchall();
$x = 0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Gallery</title>
    <link rel="stylesheet" type="text/css" href="gallery.css">
</head>
<body>
<div class="nav">
<ul>
    <li class="home"><a href="homepage.php">Home</a></li>
    <li class="profile"><a href="profile.php">Profile</a></li>
    <li class="gallery"><a class="active">Gallery</a></li>
    <li class="SnapShot"><a href="SnapShot.php">SnapShot</a></li>
    <li class="logout"><a href="logout.php">Logout</a></li>
    <li class="upload"><a href="upload.php">Upload</a></li>
</ul>
</div>
<div class="images">
    <?php
        $x = 0;
        while ($x < count($array))
        {?>
        <a href=""><img src="uploads/<?php echo $array[$x]['image_name']?>"></a>
        <a href="https://www.facebook.com/"><img src="https://cdn3.iconfinder.com/data/icons/social-icons-5/606/Facebook.png" width="50px" height="50px"></a>
        <br>
        <?php
        $x++;
        }
?>
</body>
</html>