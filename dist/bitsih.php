<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>BIT | Login</title>
  <link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="main.css"><link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700;800&display=swap" rel="stylesheet">
  </head>
  <body>
  <div class="main">
      <div class="container a-container" id="a-container">
        <form action="signup.php" class="form" id="a-form" method="POST" >
          <h2 class="form_title title">Create Account</h2>
          <input class="form__input" name="name" type="text" placeholder="Name">
          <input class="form__input" type="text" name="email" placeholder="Email">
          <input class="form__input" type="password" name="password" placeholder="Password">
          <input class="form__input" type="text" name="phonenumber" placeholder="Phonenumber">
          <button type="submit" class="switch__button button switch-btn"  >SIGN UP</button>
        </form>
      </div>
      <div class="container b-container" id="b-container">
        <form class="form" id="b-form" method="POST" action="login.php">
          <h2 class="form_title title">Sign in to Website</h2>
              <input name="name" class="form__input" type="text" placeholder="Email">
          <input name="password" class="form__input" type="password" placeholder="Password"><a class="form__link">Forgot your password?</a>
          <button class="switch__button button switch-btn" >SIGN IN</button>
        </form>
      </div>
      <div class="switch" id="switch-cnt">
        <div class="switch__circle"></div>
        <div class="switch__circle switch__circle--t"></div>
        <div class="switch__container" id="switch-c1">
          <h2 class="switch__title title">Welcome Back !</h2>
          <p class="switch__description description">To keep connected with us please login with your personal info</p>
          <button class="switch__button button switch-btn">SIGN IN</button>
        </div>
        <div class="switch__container is-hidden" id="switch-c2">
          <h2 class="switch__title title">Hello Friend !</h2>
          <p class="switch__description description">Enter your personal details and start journey with us</p>
          <button class="switch__button button switch-btn">SIGN UP</button>
        </div>
      </div>
    </div>
    <script src="main.js"></script>
  </body>
</html>
<!-- partial -->
  <script  src="./script.js"></script>

</body>
</html>
