<?php

  $servername = "localhost";
  $username = "root";
  $password = "{W*9T1E!Xfruu(Tu]B5JF}gDQT.Y0?z";
  $dbname = "comp424";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
    echo "failure";
    die("Connection failed: " . $conn->connect_error);
  }
  if(isset($_POST['email'])){
    $name = $conn->real_escape_string($_POST['email']);
    $password = $conn->real_escape_string($_POST['psw']);
    $result = $conn->query("SELECT * FROM comp424.login WHERE email='$name' and password='$password'");
    if(mysqli_num_rows($result)==1){
      echo "successfuly logged in";
      exit();
    }
    else {
      echo "incorrect username or password";
      exit();
    }

  }


  $conn -> close();
  return $conn;
?>
