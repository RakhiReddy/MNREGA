<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="MNREGA">
    <meta name="author" content="Bondili Rohan Singh">
    <link rel="shortcut icon" href="assets/icons/logo.ico">

    <title>MNREGA | Login In</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/signin.css" rel="stylesheet">

    
  </head>

  <body>
    <p align="right">
<a href="mindex.php" id="check">Home|</a>
<a href="contactus.html" id="check">Contact Us&nbsp;&nbsp;&nbsp;</a></p>

    <div class="container">

      <form class="form-signin" role="form" method ="POST" action ="mchecking.php">
        <h2 class="form-signin-heading">Administrator Login</h2>
        <input type="email" class="form-control" placeholder="Email address" name ="email" required autofocus>
        <input type="password" class="form-control" placeholder="Password" name ="password" required>
        <label class="checkbox">
          <input type="checkbox" value="remember-me"> Remember me
        </label>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
      </form>

    </div> 
  </body>
</html>
