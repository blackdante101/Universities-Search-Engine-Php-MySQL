<!DOCTYPE html>
<html>
    <head>
        <title>Unifeed</title>
           <link rel="stylesheet" href="bootstrap-4.5.0-dist/css/bootstrap.min.css">
        <meta name="viewport" content= "width=device-width, initial-scale=1.0"> 
       <style>
            #text{
                width:800px;
           }
           #searchbtn{
               border:1px solid #FF5722;
               color:#FF5722;
           }
           #searchbtn:hover {
               background-color: #FF5722;
               color:white;
           }
           #results{
               font-size:20px;
               margin:10px;
           }
           .orange{
               border:1px solid #FF5722;
               height: auto;
               border-radius: 10px;
           }
           .schooldetails label{
               color: #FF5722;
           }
           #bold{
               font-weight: bold;
           }
           #space{
               margin-left: 1%;
           }
           small{
               background-color: #FF5722;
               height: auto;
               width: auto;
               padding: 5px;
               color:white;
               border-radius: 10px;
               margin-left: 5px;
           }
           .error{
               margin: 2% auto;
               width: 600px;
           }
        </style>
        	
    </head>
    <body>
        <?php
        $db="unifeed";
$server="localhost";
$uname="blackdante";
$pass="";
$con= new mysqli($server,$uname,$pass,$db);
       
  
        ?>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php">
 <img src="img/unifeed.png" width="40%" height="40%"/></a>
  

  <div class="container-fluid" >
  
    <form class="form-inline my-2 my-lg-0" method="GET" action="searchResults.php">
      <input class="form-control mr-sm-2" id="text" type="search2" name="search" placeholder="Search" aria-label="Search" value="<?php echo  htmlspecialchars($_GET['search']) ?>" required>
      <button class="btn  my-2 my-sm-0" name="search" type="submit" id="searchbtn" href="searchResults.php?search='$_['search2']'">Search</button>
    </form>
  </div>
</nav>
   <p id="results">Search Results For: <b><?php echo htmlspecialchars($_GET['search'])?></b></p>
    <?php
  $text= htmlspecialchars($_GET['search']);
        $sql="SELECT * FROM schools WHERE schName OR tag_1 OR tag_2 OR tag_3  LIKE '%$text%'";
        $result=$con->query($sql);
        if($result->num_rows > 0){
            while($row=$result->fetch_assoc()){
               echo"
               <div class='container my-5 orange row py-2 ml-5'>
                <div class='col-sm-3 my-3'>
                    <img src=".$row['logo']." width='200' height='200'>
                </div>
                 <div class='col-sm-7 my-3 schooldetails'>
                    <label id='bold'>Name:</label><label id='space'>".$row['schName']."</label><br>
                     <label id='bold'>Location:</label><label id='space'>".$row['location']."</label><br>
                      <label id='bold'>Year Built:</label><label id='space'>".$row['yearBuilt']."</label><br>
                       <label id='bold'>Website:</label><label id='space'><a href=".$row['schWebsite']." target='_blank'>".$row['schWebsite']."</a></label><br>
                       <label id='bold'>Courses:</label><label id='space'><u>".$row['courses']."</u></label><br>
                     <label id='bold'>Tags:</label><label id='space'><small>".$row['tag_1']."</small><small>".$row['tag_2']."</small><small>".$row['tag_3']."</small></label>
                     
                </div>
                 <div class='col-sm-2 my-3'>
                <a class='btn mt-5 my-sm-0' href='school.php?id=".$row['id']."' name='schoolbtn' type='submit' id='searchbtn'>See More</a>
                </form>
                </div>
           
        </div>
               
               ";
            }
        }
            
        
              
           
             else{
            echo"<div class='error'><img src='error.png' width='500' height='400'><br><h2 class='text'>Oops No Results Found</h2></div>";
        }  
         
        ?>
        
            
    </body>
</html>