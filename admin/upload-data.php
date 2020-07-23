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
               <a class="nav-link" href="#">Upload Data <span class="sr-only">(current)</span></a>
               </li> 
                <li class="nav-item">
                <a class="nav-link"  href="upload-images.php">Upload images</a>
                </li>
            </ul>
        </nav>
   
         <div class="container-manual">
            <form  name="form-example-2" id="form-example-2" enctype="multipart/form-data" method="post" action="../process.php">
                    <label>School Logo</label>
                <div class="custom-file">
               <input type="file" class="custom-file-input" id="customFile" name="sch_logo" required>
               <label class="custom-file-label" for="customFile">Choose file</label>
               </div>
                <div class="form-group">
                    <label>School Name</label><br>
                    <input type="text" class="form-control" name="sch_name" required>
                </div>
                 <div class="form-group">
                    <label>Location</label><br>
                    <input type="text" class="form-control" name="sch_location" required>
                </div>
               <div class="form-group">
    <label for="exampleFormControlTextarea1">School History</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" name="sch_history" rows="3" required></textarea>
  </div>
                 <div class="form-group">
                    <label>Courses</label><br>
                    <input type="text" class="form-control" name="sch_courses" required>
                </div>
                 <div class="form-group">
                    <label>Year Built</label><br>
                    <input type="text" class="form-control" name="sch_year" required>
                </div>
                <div class="form-group">
                    <label>School Website</label><br>
                    <input type="text" class="form-control" name="sch_site" required>
                </div>
                 <div class="form-group">
                    <label>Tag 1</label><br>
                    <input type="text" class="form-control" name="tag_1" required>
                </div>
                 <div class="form-group">
                    <label>Tag 2</label><br>
                    <input type="text" class="form-control" name="tag_2" required>
                </div>
                 <div class="form-group">
                    <label>Tag 3</label><br>
                    <input type="text" class="form-control" name="tag_3" required>
                </div>
                <input type="submit" class="btn btn-primary" value="Submit" name="upload_data"/>
            </form>
        
             <script>
// Add the following code if you want the name of the file appear on select
$(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
});
</script>
    </body>
</html>