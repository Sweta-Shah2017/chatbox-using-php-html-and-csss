<?php 
session_start();
include 'dbc.php';
?>
<!DOCTYPE html>
<html>
    <head>
    <title>HOME</title></head>
 <link rel="stylesheet" href="home.css;">
    <body>
<div id="main">
<h1 style="background-color:yellow;color:black;text-align:center;">
    
    Welcome To Online Chat<br>
    <?php
     echo $_SESSION['name'];
    ?>
    </h1> 
    
        <div class="info" style="background-image:url(chat.jpeg);">
            
    <?php 
       $sql="SELECT * FROM posts";    
        $result=$conn->query($sql) ;
    
    if($result->num_rows >0)
    {
        while($row=$result->fetch_assoc())
        {
echo "<h4>message from ".$row["msg_name"]."...</h4>".$row["msg"]."<br><br>"; 
        }
    }
        else
        {
           echo "0"; 
            
        }
        
       $conn->close(); 
            ?>
            
    </div>
    <form method="post" action="send.php">
    <textarea name="msg" placeholder="type to send message...." class="form-control" style="border-color:red;border-radius:10px;color:blue; font-size:20px; background-color:white;"></textarea><br>
        <input type="submit" value="send" style="width:20%; color:blue;"><br>
    </form>
    
    <form action="logout.php">
    <input style="width:100%; background-color:blue;color:black; font-size:20px; " type="submit" value=" Logout" >
    
    </form>
        
        
        </div>
    
    
    </body>
</html>