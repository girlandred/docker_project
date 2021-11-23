<?php include("./app/controllers/users.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <title>Register</title>

  <link href="css/bootstrap.min.css" rel="stylesheet" />
  <link href="css/all.min.css" rel="stylesheet" />
  <link href="css/custom.css" rel="stylesheet" />
</head>

<body>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-6">
        <form action="register.php" method="post">
          <h2 class="form-title">Register</h2>
          <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" name="username" id="username" value="<?php echo $username; ?>" class="text-input form-control">
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" id="password" value="<?php echo $password; ?>" class="text-input form-control">
          </div>
          <div class="mb-3">
            <label for="passwordConf" class="form-label">Password Confirmation</label>
            <input type="password" name="passwordConf" id="passwordConf" value="<?php echo $passwordConf; ?>" class="text-input form-control">
          </div>

          <div class="d-grid gap-2 col-3 mx-auto">
            <button class="btn btn-primary" type="submit" name="register-btn">Register</button>
            <span class=" m-auto">Or</span>
            <a href="<?php echo './login.php' ?>" class="btn btn-info" type="button">Sign In</a>
          </div>

        </form>
      </div>
    </div>


  </div>
</body>

</html>