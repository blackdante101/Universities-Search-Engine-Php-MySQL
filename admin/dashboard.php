<!DOCTYPE html>
<html>
    <head>
        <title>Dashboard</title>
            <link rel="stylesheet" href="../bootstrap-4.5.0-dist/css/bootstrap.min.css">
	      <meta name="viewport" content= "width=device-width, initial-scale=1.0">
	     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
     
      
	      <style>
              .orange{
                  background-color:#FF5722;
              }
              .container-manual{
                  margin: 5% auto;
                  width: 450px;
                  height: 270px;
                  padding: 20px;
                  border-radius: 3%;
                
              }
              .container-manual div{
                  display: inline-block;
                  padding: 20px;
              }
              .container-manual h3{
                  text-align: center;
              }
              #selection{
                  background-color: whitesmoke;
              }
      * {
  boz-sizing: border-box;
}

body {
  font-family: sans-serif;
  
}

.button {
 background-color: whitesmoke;
  border-radius: 6px;
  display: inline-block;
  padding: 25px;
  text-align: center;
  max-width: 250px;
  text-decoration: none;

}

.button figure {
  margin: 0 0 15px;
}

.button figure img {
 
}

.button .text {
  font-weight: bold;
  color: black;
  margin: 0 0 15px;
  font-size: 16px;
}
                   #navy a{
                color:white;
                text-decoration: none;
            }
        </style> 
    </head>
    <body>
        <nav class="navbar navbar-expand-md orange">
           <h2 class="text text-white nav nav-brand" id="navy"><a  href="#">Dashboard</a></h2>
        </nav>
   
       <div class="container-manual " id="selection">
       
 <a href="upload-data.php" class="button">
  <figure><img src="../img/form.png"></figure>
  <div class="text">
    Upload Data
  </div>
</a>
          
        
  <a href="upload-images.php" class="button">
  <figure><img src="../img/image.png"></figure>
  <div class="text">
   Upload Images
  </div>
</a>
           </div>
       
    </body>
</html>