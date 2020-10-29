<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>LAND fast | Home</title>
    <meta
      name="description"
      content="Welcome to the best product landing page around."
    />
    <meta
      name="keywords"
      content="product landing,advertising,product promotion"
    />
    <link rel="stylesheet" href="css/style.css" />
    <style>
      .flex_box{
        display:flex;
      }
      .flex_box:nth-of-type(odd){
        flex-direction:row-reverse;
      }
      .flex_box>div{
        background-color:#333;
        display:flex;
        flex-direction:column;
        justify-content:center;
        align-items:center;
        padding:50px;
        font-size:30px;
        text-align:center;
        color:white;
        position:relative;
        height:400px;
        width:50%
      }
      .flex_text>button{
        margin-top:25px;
        width:200px;
        outline:none;
        letter-spacing:1px;
        font-size:20px;
      }
      .flex_img>img{
        position:absolute;
        top:0;
        left:0;
        width:100%;
        height:100%;
      }
    </style>
  </head>
  <body>
    <header>
      <nav id="navbar">
        <div class="container">
          <h1 class="logo"><a href="index.html">LAND fast</a></h1>
          <ul>
            <li><a class="current" href="index.php">Home</a></li>  
            <li><a href="contact.php">Contact</a></li>         
            <li><a href="about.php">About</a></li>
            <li><a href="login.php">Login</a></li> 
          </ul>
        </div>
      </nav>

      <div id="showcase">
        <div class="container">
          <div class="showcase-content">
            <h1><span class="text-primary">feel</span> the comfort</h1>
            <p class="lead"></p>
            <a class="btn" href="about.php">i'm interested</a>
          </div>
        </div>
      </div>
    </header>

    <!--  -->
    <?php
      include './server_scripts/db.php';
      $sql = "SELECT * from product";
      $result = $conn->query($sql);
      if (mysqli_num_rows($result) > 0) {
          while($product_row = $result->fetch_assoc()) {
              echo "
                <div class='flex_box'>
                  <div class='flex_img'>
                    <img src='./uploads/".$product_row["imglink"].".jpg'>
                  </div>
                  <div class='flex_text'>
                    <h3>".$product_row['name']."</h3>
                    ".$product_row["description"]."
                    <button>
                      <a href='./order.php?q=".$product_row["productid"]."'>
                        Book a slot
                      </a>
                    </button>
                  </div>
                </div>
              ";
          }    
      }
      else{
          echo 'No Data';
      }
      $conn->close();
    ?>
    
    
    

    <div class="clr"></div>
    <footer id="main-footer">
      <p>LAND fast&copy; 2020, All Rights Reserved</p>
    </footer>
    <script
      src="https://kit.fontawesome.com/8da90a7057.js"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
