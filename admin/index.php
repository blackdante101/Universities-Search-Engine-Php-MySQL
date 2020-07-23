<!DOCTYPE html>
<html>
    <head>
        <title>Admin Login</title>
         <link rel="stylesheet" href="../bootstrap-4.5.0-dist/css/bootstrap.min.css">
        <meta name="viewport" content= "width=device-width, initial-scale=1.0"> 
        <style>
            *{
                margin:0;
                padding:0;
            }
            .fcontainer{
                color:#FF5722;
                width:600px;;
                height: auto;
                margin:10% auto;
                padding:20px;
                background-color:white;
                border-radius: 5px;
            }
            body{
              background:url("../css/students.jpg");
                background-size:cover;
            }
            form{
               
            }
             #loginbtn{
               border:1px solid #FF5722;
               color:#FF5722;
           }
           #loginbtn:hover {
               background-color: #FF5722;
               color:white;
           }
        </style>
    </head>
    <body>
     <div class="fcontainer">
         <p style="font-size:20px;">Admin Login</p>
         <form method="post" action="../process.php">
         <div class="form-group">
             <label>Username</label><br>
             <input class="form-control" type="text" name="user_name" required/>
         </div>
         <div class="form-group">
             <label>Password</label><br>
             <input class="form-control" type="password" name="pwd" required />
         </div>
         <div class="form-group">
            <input type="submit" class="btn" id="loginbtn" name="submit" />
         </div>
         </form>
     </div>
    </body>
</html>