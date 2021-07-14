<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registration";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// print_r($_POST);  
if(isset($_POST) && !empty($_POST))
{
$firstName = $_POST['first_name'];
$lastName = $_POST['last_name'];
$email = $_POST['email'];
$password = $_POST['password'];
$sql = "INSERT INTO users (first_name,last_name,email,password)
VALUES ('$firstName','$lastName','$email','$password')";

if ($conn->query($sql) === TRUE) {
  echo "<div id = 'msg'>";
  echo "User Registration successfully";
  echo "</div>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
}
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
body {
  background-color: #63738a;
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  height: 100vh;
}
.center {
  width: 100%;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  /* (x, y)  => position */
  -ms-transform: translate(-50%, -50%);
  /* IE 9 */
  -webkit-transform: translate(-50%, -50%);
  /* Chrome, Safari, Opera */
}
table {
  width: 50%;
  margin: 0 auto;
  padding: 2%;

  border-radius: 4px;
  background-color: #f2f3f7;
  min-width: 360px;
  max-width: 420px;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  border: 1px solid #58677B;
}
input[type=text], [type=email], [type=password], [type=submit] {
  width: 100%;
  height: 40px;
  padding: 12px;
  border: 1px solid #cccccc;
  border-radius: 3px;
  outline: none;
  font-size: 14px;
  color: #4fa64e;
}
input[type=text] {
  width: 49%;
}
input:hover {
  border-color: #4fa64e;
}
input[type=submit] {
  background-color: #53ac53;
  background: linear-gradient(to bottom, #58b358 0%, #449944 100%);
  color: #ffffff;
  font-weight: 600;
  border: none;
}
input[type=submit]:hover {
  cursor: pointer;
}
::placeholder {
  color: #969fa4;
}
p {
  text-align: center;
  font-size: 14px;
  color: #969fa4;
  margin: 12px 0;
}
input[type="checkbox"] {
  vertical-align: middle;
  height: 14px;
  width: 14px;
  background-color: red;
}
.terms>label {
  font-size: 14px;
  color: #969fa4;
  margin-left: 6px;
}
div {
  margin: 10px 0;
}
a {
  color: #4fa64e;
  text-decoration: none;
}
footer {
  margin-top: 16px;
}
footer>p {
  color: #ffffff;
}
footer>p>a {
  color: #ffffff;
  text-decoration: underline;
}
.dash {

  min-height: 2px;
  height: 2px;
  max-height: 2px;
  width: 100%;
  background-color: #D4D4D4;
}
h1 {
  text-align: center;
  font-weight: 500;
  color: #636363;
  text-align: 31px;
}
.top {
  width: 100%;
  background-color: salmon;
}
    </style>
</head>
<body>
    <body>
        <div class="center">
          <form action ="connection.php" method="POST">
          <table>
            <tr>
              <td style="width: 33.33%;">
                <div class="dash"></div>
              </td>
              <td style="padding: 0 6px;">
                <h1>Register</h1>
              </td>
              <td style="width: 33.33%;">
                <div class="dash"></div>
              </td>
            </tr>
            <tr>
              <td colspan="3">
                <p>Create your account. It's free and only takes a minute.</p>
              </td>
            </tr>
            <tr>
              <td colspan="3">
                <div>
                  <input placeholder="First Name" name ="first_name" type="text"> <span><input placeholder="Last Name"  name ="last_name" style="float: right;" type="text"></span>
                </div>
              </td>
            </tr>
            <tr>
              <td colspan="3">
                <div>
                  <input type="email" placeholder="Email"  name ="email" >
                </div>
              </td>
            </tr>
            <tr>
              <td colspan="3">
                <div>
                  <input placeholder="Password" type="password"  name ="password" >
                </div>
              </td>
            </tr><!-- 
            <tr>
              <td colspan="3">
                <div>
                  <input placeholder="Confirm Password" type="password">
                </div>
              </td>
            </tr> -->
            <tr>
              <td colspan="3">
                <div class="terms">
                  <input id="checkid2" type="checkbox" value="test"> <label for="checkid2">I accept the <a
                      href="https://www.google.com/">Terms of Use</a> & <a
                      href="https://www.google.com/">Privacy Policy.</a></label>
                </div>
              </td>
            </tr>
            <tr>
              <td colspan="3">
                <div>
                  <input type="submit" value="Register Now">
                </div>
              </td>
            </tr>
          </table>
        </form>
          <footer>
            <p>Already have an account? <a href="http://127.0.0.1:5500/loginpagesuper30.html">Sign in</a></p>
          </footer>
        </div>
      </body>
</body>
</html>