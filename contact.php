<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Music Nation | Contact</title>
    <meta name="description" content="Welcome to the best music downlaod page." />    
    <link rel="stylesheet" href="css/style.css" />
    <style>
      #message{
        height:60px;
        font-size:25px;
      }
      .btn{
        top: 0;
        left: 0;
      }
    </style>
  </head>
  <body>
    <header>
      <nav id="navbar">
        <div class="container">
          <h1 class="logo"><a href="index.html">Music Nation</a></h1>
          <ul>
            <li><a href="index.php">Home</a></li>  
            <li><a class="current" href="contact.php">Contact</a></li>         
            <li><a href="about.php">About</a></li>
            <li><a href="login.php">Login</a></li> 
          </ul>
        </div>
      </nav>
    </header>
    <section id="contact-form" class="py-3">
      <div class="container">
        <h1 class="l-heading"><span class="text-primary">Contact</span> Us</h1>
        <p>Please fill the form below to contact nike for further details</p>
        <form action="./server_scripts/contact_handler.php" method='POST'>
          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" />
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" id="email" />
          </div>
          <div class="form-group">
            <label for="message">Message</label>
            <input type="text" name="message" id="message" />
          </div>
          <p>or visit <a href="https://www.nike.com/in/w/air-max-shoes/">NIKE air max</a> to grab the latest air max</p>
          <button type="submit" class="btn">Submit</button>
        </form>
      </div>
    </section>
    <section id="contact-info" class="bg-dark">
      <div class="container">
        <div class="box">
          <i class="fas fa-hotel fa-3x"></i>
          <h3>Location</h3>
          <p>Beaverton, Oregon, United States</p>
        </div>
        <div class="box">
          <i class="fas fa-phone fa-3x"></i>
          <h3>Phone Number</h3>
          <p>271491349831</p>
        </div>
        <div class="box">
          <i class="fas fa-envelope fa-3x"></i>
          <h3>Email</h3>
          <p>Nike Helpline</p>
        </div>
      </div>
    </section>
    <footer id="main-footer">
      <p>Music Nation &copy; 2020, All Rights Reserved</p>
    </footer>
    <script
      src="https://kit.fontawesome.com/8da90a7057.js"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
