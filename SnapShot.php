<!doctype html>
<html lang=''>
<head>
   <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="SnapShot.css">
   <script src="script.js" type="text/javascript"></script>
   <title>SnapShot</title>
</head>
<body class="news">
    <header>
        <div class="nav">
            <ul>
                <li class="home"><a href="homepage.php">Home</a></li>
                <li class="profile"><a href="profile.php">Profile</a></li>
                <li class="gallery"><a href="gallery.php">Gallery</a></li>
                <li class="SnapShot"><a class="active">SnapShot</a></li>
                <li class="logout"><a href="logout.php">Logout</a></li>
                <li class="upload"><a href="upload.php">Upload</a></li>
            </ul>
        </div>
        <script src="script.js"></script>
        <div id="newImages">
            <div>
                <video id="player">Video is loading...</video>
			</div>
			<div>
               <canvas class="snap" name="image" id="canvas" width="500px" height="375px">Canvas Still Loading</canvas>
                <canvas class="snap1" name="image1" id="canvas_stickers" width="50px" height="50px">Canvas Still Loading</canvas>
                <canvas name="image" id="player">Canvas still loading</canvas>
                <input type="submit" class="button1" value="SnapShot" id="capture">
                <input type="submit" class="" value="Save" id="save">
                <div class="input-group" style="text-align:center;">
    <div class="container2" style="display:inline-block;">
    <button onclick="stickers('stickers/sticker001.png')" class="btn">sticker1</button>
    <button onclick="stickers('stickers/sticker002.png')" class="btn">sticker2</button>
    <button onclick="stickers('stickers/sticker003.png')" class="btn">sticker3</button>
    <button onclick="stickers('stickers/sticker004.png')" class="btn">sticker4</button>
    <button onclick="stickers('stickers/sticker005.png')" class="btn">sticker5</button>
</div>
</div>
  </header>
  <div id="container">
<video autoplay = "true" id = "videoElement">
</video>
</div>
<script type="text/javascript">
    var video = document.querySelector("#videoElement");
    navigator.getUserMedia=navigator.getUserMedia||navigator.webkitGetUsermedia||
    navigator.mozGetUserMedia||navigator.msGetUserMedia||navigator.oGetUserMedia;

    var canvas = document.getElementById("canvas");
    if (navigator.getUserMedia) 
    {
        navigator.getUserMedia({video:true}, handleVideo, videoError);

    }
    function handleVideo(localStream)
    {
        self.video.srcObject = localStream;
    }    
    function videoError(e)
    {

    }

    var context = canvas.getContext('2d');
    capture.addEventListener("click", function(){
    context.drawImage(video, 0, 0, 600, 600);});
    
    const img1 = document.querySelector('.img1');

    document.getElementById('save').addEventListener('click', function(e){
        var image = canvas.toDataURL('image/png');
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function(){
            if (this.readyState == 4 && this.status == 200){
                alert(this.responseText);
            }
        }
        xhttp.open("post", "webcam.php",false);
        xhttp.send(image);
    })

    function setPicture(select){
   var DD = document.getElementById('dropdown');
   var value = DD.options[DD.selectedIndex].value;
   img1.src = value;
 }
 function stickers(path) {
    var sticker = new Image();
    var width = video.offsetWidth, height = video.offsetHeight;
    sticker.src = path;
    if (canvas) {
        contxt = canvas.getContext('2d');
        contxt.drawImage(sticker, 0, 0, width, height);
        pic.value = canvas.toDataURL('image/png');
        if (!(document.getElementById("img"))) {
            var elem = document.createElement("img");
            elem.setAttribute("src", sticker.src);
            document.getElementById("stickers").appendChild(elem);
        }
    }
};
    
</script>
</body>
</html>

<?php




?>