
   <!-- tester si l'utilisateur est connecté -->
<!---   <?php

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
   else if($_SESSION['username'] !== ""){
       $user = $_SESSION['username'];
       // afficher un message
       echo "<br>Bonjour $user, vous êtes connectés";
   }
?>

<!--<a href='index.php?deconnexion=true'><span>Déconnexion</span></a>  -->





<html>
    <!-- Head Section-->
<head>
    <title>University Chadli Bendjedid Database</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="http://m4bdesigns.xyz/preview/university/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="http://m4bdesigns.xyz/preview/university/assets/css/style.css">
</head>
<body>
<section class="home">

  <div id="carousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-controls">  
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1" style="background-image: url('https://ak.picdn.net/shutterstock/videos/10733540/thumb/1.jpg');"></button>
      <button type="button" data-bs-target="#carousel" data-bs-slide-to="1" aria-label="Slide 2" style="background-image: url('https://ae01.alicdn.com/kf/HTB1YyMWgv1TBuNjy0Fjxh5jyXXaT.jpeg');"></button>
    </div>
   
    </div>
  
    <div class="carousel-inner">
      <div class="carousel-item active" style="background-image: url('https://ak.picdn.net/shutterstock/videos/10733540/thumb/1.jpg');">
        <div class="container">
          <h2>Add Member To </h2>
          <p>Database</p>
          <br>
          <br>
          <button type="button" class="btn btn-light">From Here</button>
          <br>
          <br>
          <br>
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
   else if($_SESSION['username'] !== ""){
       $user = $_SESSION['username'];
       // afficher un message
       echo "<br><h3 style='color:white;'>Hello $user, You Are Connected!</h3>";
   }
?>
          <a href='index.php?deconnexion=true'><span>Disconnect Here</span></a> 
        </div>
      </div>
      <div class="carousel-item" style="background-image: url('https://ae01.alicdn.com/kf/HTB1YyMWgv1TBuNjy0Fjxh5jyXXaT.jpeg');">
        <div class="container">
          <h2>Check The</h2>
          <p>Database</p>
          <br>
          <br>
          <button type="button" class="btn btn-light">From Here</button>
        </div>     
      </div>
     
    
  </div>



</section>
<div id="logoofuniv">
  <img src="https://i.postimg.cc/Qdt4Z5dF/logo-2.png" alt="">
</div>




<!-- Bundle Bootstrap -->
<script src="http://m4bdesigns.xyz/preview/university/bootstrap/js/bootstrap.bundle.js"></script>
</body>  

<!--budle bootstrap-->
</html>