<?php

$password="123456";
$hashpassword="$2y$10$2Ncqe1IiYY7ab7Xwo/DLp.CS85kY.le.rDq6pS8tsEIhMMb8N.1Ci";

$con=password_verify($password,$hashpassword);

echo $con?"true":"false";

// $passsword="123456";
// $hashpass=password_hash($passsword,PASSWORD_DEFAULT,['cost'=>10]);
// echo $hashpass;