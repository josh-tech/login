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
  if(isset($_POST['fname'])){
    $fname = $conn->real_escape_string($_POST['fname']);
    $lname = $conn->real_escape_string($_POST['lname']);
    $email = $conn->real_escape_string($_POST['uname']);
    $bday = date('Y-m-d', strtotime($_POST['bday']));
    $password = $conn->real_escape_string($_POST['psw']);
    $result = $conn->query("INSERT into comp424.login (password,email, birthdate,firstName, lastName) values ('$password','$email','$bday','$fname', '$lname')");
  

  }


  $conn -> close();
  return $conn;
?>
