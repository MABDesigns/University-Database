
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
 <title>University Database</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="http://m4bdesigns.xyz/preview/university/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="http://m4bdesigns.xyz/preview/university/assets/css/style.css">
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
   <button type="button" data-bs-target="#carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1" style="background-image: url('http://m4bdesigns.xyz/preview/university/assets/img/st.jpg');"></button>
   <button type="button" data-bs-target="#carousel" data-bs-slide-to="1" aria-label="Slide 2" style="background-image: url('http://m4bdesigns.xyz/preview/university/assets/img/hss.jpg');"></button>
   <button type="button" data-bs-target="#carousel" data-bs-slide-to="2" aria-label="Slide 3" style="background-image: url('http://m4bdesigns.xyz/preview/university/assets/img/nls.webp');"></button>
   <button type="button" data-bs-target="#carousel" data-bs-slide-to="3" aria-label="Slide 4" style="background-image: url('http://m4bdesigns.xyz/preview/university/assets/img/ltrl.jpg');"></button>
   <button type="button" data-bs-target="#carousel" data-bs-slide-to="4" aria-label="Slide 5" style="background-image: url('http://m4bdesigns.xyz/preview/university/assets/img/beco.jpg');"></button>
   <button type="button" data-bs-target="#carousel" data-bs-slide-to="5" aria-label="Slide 6" style="background-image: url('http://m4bdesigns.xyz/preview/university/assets/img/pls.jpg');"></button>
 </div>

 </div>

 <div class="carousel-inner">
   <div class="carousel-item active" style="background-image: url('http://m4bdesigns.xyz/preview/university/assets/img/st.jpg');">
     <div class="container">
       <a href="http://m4bdesigns.xyz/preview/university/en/dashboard/add/"><h2>Science and Technology </h2></a>
       <br>
       <br>
       <br>
     </div>
   </div>
   <div class="carousel-item" style="background-image: url('http://m4bdesigns.xyz/preview/university/assets/img/hss.jpg');">
     <div class="container">
       <a href="http://m4bdesigns.xyz/preview/university/en/dashboard/check/"><h2>Human and Social Sciences</h2></a>
       <br>
       <br>
     </div>     
   </div>
   <div class="carousel-item" style="background-image: url('http://m4bdesigns.xyz/preview/university/assets/img/nls.webp');">
     <div class="container">
       <a href="http://m4bdesigns.xyz/preview/university/en/dashboard/check/"><h2>Nature and Life Sciences</h2></a>
       <br>
       <br>
     </div>     
   </div>
   <div class="carousel-item" style="background-image: url('http://m4bdesigns.xyz/preview/university/assets/img/ltrl.jpg');">
     <div class="container">
       <a href="http://m4bdesigns.xyz/preview/university/en/dashboard/check/"><h2>Lettres and Languages</h2></a>
       <br>
       <br>
     </div>     
   </div>
  <div class="carousel-item" style="background-image: url('http://m4bdesigns.xyz/preview/university/assets/img/beco.jpg');">
     <div class="container">
       <a href="http://m4bdesigns.xyz/preview/university/en/dashboard/check/"><h2>Economics, Business and Management Sciences</h2></a>
       <br>
       <br>
     </div>     
   </div>
   <div class="carousel-item" style="background-image: url('http://m4bdesigns.xyz/preview/university/assets/img/pls.jpg');">
     <div class="container">
       <a href="http://m4bdesigns.xyz/preview/university/en/dashboard/check/"><h2>Law and Political Sciences</h2></a>
       <br>
       <br>
     </div>     
   </div>
</div>



</section>
<!-- Bundle Bootstrap -->
<script src="http://m4bdesigns.xyz/preview/university/bootstrap/js/bootstrap.bundle.js"></script>
</body>  

<!--budle bootstrap-->
</html>