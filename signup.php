<!DOCTYPE html>
<html>
  <head>
    <title>Music Nation | Signup</title>
    <link href="./css/signup_style.css" rel="stylesheet" />
  </head>

  <body>
    <!-- Main div code -->
    <div id="main">
      <div class="h-tag">
        <h1 class="l-heading">
          <span class="text-primary">Create </span> Your Account
        </h1>
      </div>
      <!-- create account div -->
      <form id="form" class="login" action="./server_scripts/signup_handler.php" method="POST">
        <table cellspacing="2" align="center" cellpadding="8" border="0">
          <tr>
            <td align="right">Enter Name :</td>
            <td>
              <input
                type="text"
                placeholder="Enter user here"
                id="t1"
				class="tb"
				name="name"
              />
            </td>
          </tr>
          <tr>
            <td align="right">Enter Email ID :</td>
            <td>
              <input
                type="text"
                placeholder="Enter Email ID here"
                id="t2"
                class="tb"
				name="email"
              />
            </td>
          </tr>
          <tr>
            <td align="right">Enter Username :</td>
            <td>
              <input
                type="text"
                placeholder="Enter Username here"
                id="t3"
                class="tb"
				name="username"
              />
            </td>
          </tr>
          <tr>
            <td align="right">Enter Password :</td>
            <td>
              <input
                type="password"
                placeholder="Enter Password here"
                id="t4"
                class="tb"
				name="password"
              />
            </td>
          </tr>
          <tr>
            <td align="right">Enter Confirm Password :</td>
            <td>
              <input
                type="password"
                placeholder="Enter Password here"
                id="t5"
                class="tb"
              />
            </td>
          </tr>
          <tr>
            <td></td>
            <td>
              <input type="reset" value="Clear Form" id="res" class="btn" />
              <input
                type="button"
                value="Create Account"
                class="btn"
                onclick="registration()"
              />
            </td>
          </tr>
        </table>
      </form>
      <!-- create account box ending here.. -->
    </div>
    <!-- Main div ending here... -->
    <script src="./scripts/registration.js"></script>
  </body>
</html>
