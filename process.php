<?php include 'database.php';


 if(isset($_POST['submit']))
 {

      $user = mysql_real_escape_string($_POST['user']);
      $message = mysql_real_escape_string($_POST['message']);


      // Set Timezone
      date_default_timezone_set('Asia/Kolkata');
      $time = date("h:i:s", time());
      


      //Validate input
      if(!isset($user) || $user == "" || !isset($message) || $message == "" )
      {

       	 $error = "Please fill in your name and a message";       	
       	 header('Location: index.php?error='.urlencode($error));
      	 exit;

      }
      else
      {

       


      	$query = "INSERT INTO shouts (user,message,time) VALUES ('$user', '$message', '$time')";
      	echo "Query".$query;     	
      	 

      	if(!mysqli_query($conn, $query))
      	{
      	    
      		die("Error: ".mysqli_error($conn));
      	}
      	else
      	{
            
      		header('Location: index.php');
      		exit;

      	}

      }


 }




?>