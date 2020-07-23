<!DOCTYPE html>
<html>
    <head>
       <title>Dashboard</title>
         <link rel="stylesheet" href="../bootstrap-4.5.0-dist/css/bootstrap.min.css">
        <meta name="viewport" content= "width=device-width, initial-scale=1.0"> 
        <style>
           .orange{
                  background-color:#FF5722;
              }
              .container-manual{
                  margin: 5% auto;
                  width: 600px;
                  height: 270px;
                  padding: 20px;
                  border-radius: 3%;
                
              }
            
          
              #selection{
                  background-color: whitesmoke;
              }
            #float{
                margin-left: 20px;
                
            }
            #float a {
                color: white;
            }
             #navy a{
                color:white;
                text-decoration: none;
            }
        </style>
    </head>
    <body>
     <nav class="navbar navbar-expand-md orange">
           <h2 class="text text-white nav nav-brand" id="navy"><a  href="dashboard.php">Dashboard</a></h2>
            <ul class="navbar-nav" id="float">
             <li class="nav-item active">
               <a class="nav-link" href="upload-data.php">Upload Data</a>
               </li> 
                <li class="nav-item">
                <a class="nav-link"  href="#">Upload images <span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </nav>
   
         <div class="container-manual">
            <form  name="form-example-2" id="form-example-2" enctype="multipart/form-data">
                <div class="custom-file">
                <label>School Logo</label>
               <input type="file" class="custom-file-input" id="customFile" name="sch_logo">
               <label class="custom-file-label" for="customFile">Choose file</label>
               </div>
             </form>
        </div>
    </body>
</html>