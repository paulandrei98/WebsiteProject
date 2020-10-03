
<?php
  require "Login.php";
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Sign Up | Section</title>
    <link rel="stylesheet" href="signup.css" type="text/css" >
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Play">
  </head>



  <body>
    <div class="sign-up">
      <form class="" action="includes/signup.inc.php" method="post">
        <h2 style="color: #fff;">Sign Up</h2>
        <?php
                if (isset($_GET['error'])) {
                  if ($_GET['error'] == "emptyfields") {
                    echo '<p class="signuperror">Fill in all fields!</p>';
                  }
                  else if($_GET['error'] == "invaliduidmail"){
                    echo '<p class="signuperror"Invalid Username and e-mail!,</p>';
                  }
                  else if($_GET['error'] == "invaliduid"){
                    echo '<p class="signuperror"Invalid Username!,</p>';
                  }
                  else if($_GET['error'] == "invalidmail"){
                    echo '<p class="signuperror"Invalid e-mail!,</p>';
                  }
                  else if($_GET['error'] == "passwordcheck"){
                    echo '<p class="signuperror"Your passwords do not match!,</p>';
                  }
                  else if($_GET['error'] == "usertaken"){
                    echo '<p class="signuperror"Username already taken!,</p>';
                  }
              }
              else if ($_GET['signup'] == "success") {
                echo '<p class="signupsuccess"Signup Successful!,</p>';
              }
             ?>
        <input type="text" name="uid" placeholder="Username">
        <br><br>
        <input type="text" name="mail" placeholder="Email address">
        <br><br>
        <input type="password" name="pwd" placeholder="Password">
        <br><br>
        <input type="password" name="pwd-repeat" placeholder="Repeat password">
        <br><br>

        <input type="button" name="signup-submit" value="Sign-Up"><br><br>
          <div id="msg">Congratulations you have sign up succesfully!
          </div>
      </form>
    </div>
  </body>
</html>

<?php
  require "footer.php";
?>
