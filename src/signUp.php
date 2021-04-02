<?php include "signUpDB.php" ?>
<!DOCTYPE html>

<html>
<head>

<script type="text/javascript">
function validate()
{
 var error="";

 // var email = document.getElementById( "email_of_user" );
 // if( email.value == "" || email.value.indexOf( "@" ) == -1 )
 // {
 //  error = " You Have To Write Valid Email Address. ";
 //  document.getElementById( "error_para" ).innerHTML = error;
 //  return false;
 // }
 //
 var password = document.getElementById( "password_of_user" );
 var repassword = document.getElementById("repassword_of_user");
 // if( password.value == "" || password.value >= 8 )
 // {
 //  error = " Password Must Be More Than Or Equal To 8 Digits. ";
 //  document.getElementById( "error_para" ).innerHTML = error;
 //  return false;
 // }
 if(password.value!==repassword.value){
   console.log("false");
   error= "Passwords must match";
  document.getElementById( "error_para" ).innerHTML = error;
   return false
 }
 else
 {
   console.log("true");
  return true;
 }
}

</script>
<meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>

<h2>Sign Up</h2>
<form action="signUpDB.php" method="post" onsubmit="return validate()">

  <div class="container">
    <label for="fname"><b>First Name</b></label>
    <input type="text" placeholder="Enter First Name" name="fname" id="first_name" required>

    <label for="lname"><b>Last Name</b></label>
    <input type="text" placeholder="Enter Last Name" name="lname" id="last_name" required>

    <label for="bday"><b>Birthday</b></label>
    <input type="date" placeholder="Enter Birthday" name="bday" id="birth_day" required>

    <label for="uname"><b>email</b></label>
    <input type="email" placeholder="Enter Username" name="uname" id="email_of_user" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" id="password_of_user" required>

    <label for="repsw"><b>Re-enter Password</b></label>
    <input type="password" placeholder="Enter Password" name="repsw" id="repassword_of_user" required>
    <button type="submit">Submit</button>

  </div>
</form>
<p id="error_para" ></p>


</body>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password],input[type=date],input[type=email] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.signUpButton {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}


.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</html>
