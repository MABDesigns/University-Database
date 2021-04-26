
<!DOCTYPE html>
<html>
    <!-- Head Section-->
<head>
    <title>University Chadli Bendjedid Database</title>
<link rel="stylesheet" type="text/css" href="../../bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../../assets/css/style.css">
<link rel="stylesheet" type="text/css" href="../../fontawesome/css/solid.min.css">
<link rel="stylesheet" type="text/css" href="../../fontawesome/css/fontawesome.min.css">
<link rel="stylesheet" type="text/css" href="../../fontawesome/css/brands.min.css">

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body style="background: rgb(27, 27, 27);">
<!-- start of header section-->
<header>
    <!-- start of nav-->
    <div class="collapse" id="navbarToggleExternalContent">
      <div class="bg-dark p-4" style="color: white;">
        <a href='index.php?deconnexion=true'><span>Déconnexion</span></a>
            
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
                else if($_SESSION['username'] !== ""){
                    $user = $_SESSION['username'];
                    // afficher un message
                    echo "<br>Bonjour $user, vous êtes connectés";
                }
            ?>
      </div>
    </div>
    
    <nav class="navbar navbar-dark bg-dark">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </nav>
    <!-- end of nav-->
</header>
 <br>
 <br>
 <br>
 <div class="container">
   <div class="row">
     <div class="col" id="addtodatabase">

     </div>
     <div class="col" id="viewdatabase">
       
     </div>
   </div>
 </div>
</body>  
<!--budle bootstrap-->
<script src="../../bootstrap/js/bootstrap.bundle.js"></script>
</html>