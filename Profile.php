<?php include('server.php') ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CSS Files -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="stylesheet" href="bootstrap/css/font-awesome-5.8.1.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap/css/mdb.css">
    <link rel="stylesheet" href="bootstrap/css/style.css">
  <link rel="stylesheet" type="text/css" href="style.css">

   
    <title> Pāthika</title>
   

</head>
<body>


  <!-- Main Navbar -->
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container">
            <a href="index.html" class="navbar-brand">
               <i class="fa fa-paper-plane"></i>  Pāthika</a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#travel-navbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="travel-navbar">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item px-3">
                        <a href="intel.php" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item px-3">
                        <a href="Profile.php" class="nav-link">Profile</a>
                    </li>
                    <li class="nav-item px-3">
                        <a href="Gallery.php" class="nav-link">Gallery</a>
                    </li>
                    <li class="nav-item px-3">
                        <a href="Agencies.php" class="nav-link">Agencies</a>
                    </li>
                    <li class="nav-item px-3">
                        <a href="Contact.php" class="nav-link">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
   

  <div class="header">
    
    <h2>Register</h2>
  </div>

     
  <form method="post" action="Profile.php">
    <?php include('errors.php'); ?>

    <div class="input-group">

      <label>Username</label>
      <input type="text" name="username" value="<?php echo $username; ?>">
    </div>
    <div class="input-group">
      <label>Email</label>
      <input type="email" name="email" value="<?php echo $email; ?>">
    </div>
    <div class="input-group">
      <label>Password</label>
      <input type="password" name="password_1">
    </div>
    <div class="input-group">
      <label>Confirm password</label>
      <input type="password" name="password_2">
    </div>
    <div class="input-group">
      <button type="submit" class="btn" name="reg_user">Register</button>
    </div>


    <p>
      Already a member? <a href="login.php">Sign in</a>
    </p>
  </form>

</body>
</html>