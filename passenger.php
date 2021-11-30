<?php

$pass = mysqli_connect('localhost', 'root', '','fyp');

// get the post records
$txtName = $_POST['txtName'];
$txtAge = $_POST['txtAge'];
$txtPhone = $_POST['txtPhone'];
$txtQty = $_POST['txtQty'];
$txtFlight = $_POST['txtFlight'];
//$generator = $_POST['generator'];

// database insert SQL code
$sql = "INSERT INTO `passenger` (`name`, `age`, `phone`, `qty`, `flight`) VALUES ('$txtName', '$txtAge', '$txtPhone', '$txtQty', '$txtFlight')";

// insert in database 
$rs = mysqli_query($pass, $sql);

if($rs)
{
	echo "Here is your passcode:";
}
  
// Function to generate OTP
function generateNumericOTP($n) {
      
    $generator = "1357902468";
  
    // Iterate for n-times and pick a single character
    // from generator and append it to $result
      
    // Login for generating a random character from generator
    //     ---generate a random number
    //     ---take modulus of same with length of generator (say i)
    //     ---append the character at place (i) from generator to result
  
    $result = "";
  
    for ($i = 1; $i <= $n; $i++) {
        $result .= substr($generator, (rand()%(strlen($generator))), 1);
    }
  
    // Return result
    return $result;
}
// Main program
$n = 6;
print_r(generateNumericOTP($n));
  

?>