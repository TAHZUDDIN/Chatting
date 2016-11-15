<?php

// Connect to mysql

 $conn = mysqli_connect('localhost', 'root', '','shoutit');    


// Check connection

 if(mysqli_connect_errno())
 {
 	echo "Failed to connect to MySql ", mysqli_connect_error;
 }

?>