
   <!-- tester si l'utilisateur est connecté -->
   <?php

session_start();
if (!isset($_SESSION['username'])) {
        header("location: http://m4bdesigns.xyz/preview/university/en/"); }
    
if(isset($_GET['deconnexion']))
{ 
   if($_GET['deconnexion']==true)
   {  
      session_unset();
      header("location: http://m4bdesigns.xyz/preview/university/en/");
   }
}
/*
else if($_SESSION['username'] !== ""){
    $user = $_SESSION['username'];
    // afficher un message
    echo "<br>Bonjour $user, vous êtes connectés";
}*/
?>

<html>
 <!-- Head Section-->
<head>
 <title>University Chadli Bendjedid Database</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="http://m4bdesigns.xyz/preview/university/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="http://m4bdesigns.xyz/preview/university/assets/css/style.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
<div class="deconnectsec" style="background:gray;">
<?php 
if($_SESSION['username'] !== ""){
    $user = $_SESSION['username'];
    // afficher un message
    echo "Hello $user, you are now connected &nbsp;";
}?>
<a href='index.php?deconnexion=true' style="text-decoration: none; background: white; color: #8e8e8e;">Disconnect Here</a> 
</div>
<section class="home">
<div id="carousel" class="carousel slide" data-bs-ride="carousel">
 <div class="carousel-controls">  
 <div class="carousel-indicators">
   <button type="button" data-bs-target="#carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1" style="background-image: url('http://m4bdesigns.xyz/preview/university/assets/img/bg1.webp');"></button>
   <button type="button" data-bs-target="#carousel" data-bs-slide-to="1" aria-label="Slide 2" style="background-image: url('http://m4bdesigns.xyz/preview/university/assets/img/bg2.webp');"></button>
 </div>

 </div>

 <div class="carousel-inner">
   <div class="carousel-item active" style="background-image: url('http://m4bdesigns.xyz/preview/university/assets/img/bg1.webp');">
     <div class="container">
       <img src="https://i.postimg.cc/PxkQ4TzH/testuniv2.png" class="img-fluid"alt="">
       <a href="http://m4bdesigns.xyz/preview/university/en/dashboard/add/"><h2>Add/Edit</h2></a>
       <p>To Database</p>
       <br>
       <br>
       <br>
       
     </div>
   </div>
   <div class="carousel-item" style="background-image: url('http://m4bdesigns.xyz/preview/university/assets/img/bg2.webp');">
     <div class="container">
               <img src="https://i.postimg.cc/PxkQ4TzH/testuniv2.png" class="img-fluid" alt="">
       <a href="http://m4bdesigns.xyz/preview/university/en/dashboard/check/"><h2>Check</h2></a>
       <p>The Database</p>
       <br>
       <br>
     </div>     
   </div>
  
 
</div>



</section>
<!-- Bundle Bootstrap -->

<script src="http://m4bdesigns.xyz/preview/university/bootstrap/js/bootstrap.min.js"></script>
<script src="http://m4bdesigns.xyz/preview/university/bootstrap/js/bootstrap.bundle.js"></script>
</body>  

<!--budle bootstrap-->
</html>