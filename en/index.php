
<!DOCTYPE html>
<html>
    <!-- Head Section-->
<head>
    <title>University Chadli Bendjedid Database</title>
<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../assets/css/style.css">
<link rel="stylesheet" type="text/css" href="../fontawesome/css/solid.min.css">
<link rel="stylesheet" type="text/css" href="../fontawesome/css/fontawesome.min.css">
<link rel="stylesheet" type="text/css" href="../fontawesome/css/brands.min.css">

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <section class="login-block">
        <div class="container" id="containerLogin">
        <div class="row">
            <div class="col-md-4 login-sec">
                <h2 class="text-center">Login Now</h2>
                <form class="login-form" action="verification.php" method="POST">
      <div class="form-group">
        <label for="exampleInputEmail1" class="text-uppercase">Username</label>
        <input type="text" class="form-control" name="username" placeholder="Enter Username">
        
      </div>
      <br>
      <div class="form-group">
        <label for="exampleInputPassword1" class="text-uppercase">Password</label>
        <input type="password" name="password" class="form-control" placeholder="Enter Password">
      </div>
      <br>
      
      
        <div class="form-check">
        <label class="form-check-label">
          <input type="checkbox" class="form-check-input">
          <small>Remember Me</small>
        </label>
        <button type="submit" name="submit" value="Submit"class="btn btn-login float-right">Submit</button>
        <br>
        <?php
                if(isset($_GET['erreur'])){
                    $err = $_GET['erreur'];
                    if($err==1 || $err==2)
                        echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
                }
                ?>
      </div>
      
    </form>
            </div>
            <div class="col-md-8 banner-sec">    
              <img src="http://m4bdesigns.xyz/preview/university/assets/img/univlogin.png" class="img-fluid">
            </div>
    </section>
</body>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>

<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<!-- Bundle Bootstrap -->
<script src="bootstrap/js/bootstrap.bundle.js"></script>
</html>