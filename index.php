<?php include 'database.php';?>
<?php 

 $query = "SELECT * FROM shouts ORDER BY id DESC";
 $shouts  = mysqli_query($conn,$query)


?>



<html>
     <head>

     	<title>SHOUT IT</title>
     	<link rel="stylesheet" type="text/css" href="css/style.css">


     </head>
     <body>
     	<div id="container">
            <head>

                 <h1>SHOUT IT ! Shoutbox</h1>
            </head>

            <div id="shouts">

                   <ul>

                        <?php while($row = mysqli_fetch_assoc($shouts)):  ?>

                             <li class="shout"><span><?php echo $row['time']; ?> =</span><strong><?php echo $row['user']; ?></strong> : <?php echo $row['message']; ?></li>

                        <?php endwhile; ?>
                   	     
                   	      

                   </ul>

            </div>

            <div id="input">

                 <?php if(isset($_GET['error'])):  ?>
                        <div class="error"> <?php echo $_GET['error'];?></div>                    

                 <?php  endif;  ?>

                 <form method="post" action="process.php">

                 		<input type="text" name="user" placeholder="Enter Your Name "/>
                 		<input type="text" name="message" placeholder="Enter A Message "/>
                 		<br>
                 		<input  class="shout-btn" type="submit" name="submit" value="Shout it out"/>


                 </form>


            </div>


     	</div>
     </body>	

</html>