<!DOCTYPE html>
<html>
    <head>
        <title>chatbox nss</title>
    <link href="style.css" rel="stylesheet" type="text/css">    
    </head>
    <body>
        <div id="main">
            <div id="info">
             <h2> Please Login here</h2> 
                <form action ="login.php" method="post">
                   
                    <label><b>Username</b></label>         
    <input type="text" name="uname" placeholder="user name"><br><br>
                    <label><b>Password</b></label>
    <input type="text" name="password" placeholder="password"><br><br>
<button style="background-color:green;color:white;" type="submit"><b>LOGIN</b></button>               
                </form>
                
                <h2> don't have an account  sign up here</h2>
        <form action ="signup.php" method="post">
                    <label><b>Username</b></label>
     <input type="text" name="uname" placeholder="user name"><br><br>
            <label><b>EmailAdd</b></label>
     <input type="text" name="email" placeholder="email id"><br><br>
                    <label><b>Password</b></label>
    <input type="text" name="pass" placeholder="password"><br><br>
            <button style="background-color:pink; color:black" type ="submit"><b>SIGNUP</b></button>
                </form>
            </div>
        </div>
    </body>
</html>