<!DOCTYPE html>
<html>
  <head>
    <title>Music Nation | Login</title>
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <nav id="navbar">
      <div class="container">
        <h1 class="logo"><a href="index.html">Music Nation</a></h1>
        <ul>
          <li><a href="index.php">Home</a></li>  
          <li><a href="contact.php">Contact</a></li>         
          <li><a href="about.php">About</a></li>
          <li><a class="current" href="login.php">Login</a></li> 
        </ul>
      </div>
    </nav>

    <form method="POST" action="./server_scripts/login_handler.php">
      <div class="container">
        <h1 class="l-heading"><span class="text-primary">Employee</span> login</h1>
        <label for="username"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="username"><br>
        <label for="pass"><b>Password </b></label>
        <input type="password" placeholder="Enter Password" name="pass">
        <button type="submit" id="submit"> Login</button>
      </div>
      <div class="container" style="background-color:#f1f1f1">
        <a href="signup.php" type="submit" class="cancelbtn">sign up</a>
      </div>
    </form>
  </body>
</html>