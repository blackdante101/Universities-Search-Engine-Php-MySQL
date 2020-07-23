
<?php
$db="unifeed";
$server="localhost";
$uname="blackdante";
$pass="";
$con= new mysqli($server,$uname,$pass,$db);
if (isset($_POST['submit']))
{
$fname=$_POST['user_name'];
$pwd=$_POST['pwd'];


if($con->connect_error){
    die("connection error".$con->connect_error);
}
$sql="SELECT * FROM admintbl WHERE username='$fname' AND pass='$pwd'";
$result=$con->query($sql);
if($result->num_rows > 0){
  header('Location:admin/dashboard.php');
   
}
else{
header('Location:admin/');
}
}
if(isset($_POST['upload_data'])){
   $file=$_FILES['sch_logo'];
   $sch_name=$_POST['sch_name'];
      $sch_location=$_POST['sch_location'];
      $sch_history=$_POST['sch_history'];
      $sch_courses=$_POST['sch_courses'];
      $sch_year=$_POST['sch_year'];
    $sch_website=$_POST['sch_site'];
      $tag_1=$_POST['tag_1'];
      $tag_2=$_POST['tag_2'];
      $tag_3=$_POST['tag_3'];
    
    $fileName=$_FILES['sch_logo']['name'];
    $fileError=$_FILES['sch_logo']['error'];
    $fileTmp=$_FILES['sch_logo']['tmp_name'];
    $fileExt=explode('.',$fileName);
    $fileActualExt=strtolower(end($fileExt));
    $allowed = array('jpg','jpeg','png','gif');
    if(in_array($fileActualExt,$allowed)){
        if ($fileError === 0) {
            $fileNameNew=uniqid('',true).".".$fileActualExt;
            $fileDestination='uploads/'.$fileNameNew;
            move_uploaded_file($fileTmp,$fileDestination);
            $sql2="INSERT INTO schools(logo,schName,location,yearBuilt,courses,schHistory,schWebsite,tag_3,tag_2,tag_1) VALUES ('$fileDestination','$sch_name','$sch_location','$sch_year','$sch_courses','$sch_history','$sch_website','$tag_3','$tag_2','$tag_1'); ";
        
        if(mysqli_query($con,$sql2)){
  echo"<script>Yayy 😂😂😂👏! Info Submitted</script>";
       header('Location: admin/upload-data.php?uploadsuccess');
   
}else{
           echo"<script>OOps 😢😢 ! Info Not Submitted</script>" ;
        }
           
        }else{
            echo "there was an error uploading file";
        }
    }
    else{
        echo "File type is not allowed";
    }
    
   
    
}
?>