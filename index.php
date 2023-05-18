<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Registration Form</title>
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <div class="wrapper">
      <header>
        <h1>Register Here</h1>
      </header>
      <form action="#" class="signup">
        <div class="error-txt"></div>
        <div class="field">
          <input type="text" name="name" placeholder="User Name" autocomplete="off" />
        </div>
        <div class="field">
          <input type="email" name="email" placeholder="Email" autocomplete="off" />
        </div>
        <div class="field">
          <input type="password" name="password" placeholder="Password" autocomplete="off" />
        </div>
        <button class="btn">Register</button>
        <div class="links">
          <p>Already have an account? <a href="login.php">Sign In</a></p>
        </div>
      </form>
    </div>
    <script src="ajax/signup.js"></script>
  </body>
</html>
