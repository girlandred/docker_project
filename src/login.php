<?php include("/app/controllers/users.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login</title>

  <link href="template/css/bootstrap.min.css" rel="stylesheet">
  <link href="template/css/all.min.css" rel="stylesheet">
  <link href="template/css/custom.css" rel="stylesheet">
</head>

<body>
  <div class="container">
    <div class="row justify-content-center">
      <div class="auth-content col-6">

        <form action="login.php" method="post" class="">
          <h2 class="form-title">Login</h2>
          <?php include("/src/app/validate/formErrors.php"); ?>

          <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" name="username" id="username" value="<?php echo $username; ?>" class="text-input form-control">
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" id="password" value="<?php echo $password; ?>" class="text-input form-control">
          </div>
          <div class="d-grid gap-2 col-3 mx-auto">
            <button class="btn btn-primary" type="submit" name="login-btn">Login</button>
            <span class=" m-auto">Or</span>
            <a href="<?php echo './register.php' ?>" class="btn btn-info" type="button">Sign Up</a>
          </div>

        </form>

      </div>
    </div>
  </div>

  <script src="/js/bootstrap.bundle.min.js"></script>
</body>

</html>