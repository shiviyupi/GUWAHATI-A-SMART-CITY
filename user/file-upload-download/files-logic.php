<?php
// connect to the database
$conn = mysqli_connect('localhost', 'root', '', 'feedback_system');

 if(isset($_POST['Save'])){
   $file=$_FILES['myfile'];  
   $fileName=$file['name'];
   $fileType=$file['type'];
   $fileTmpName=$file['tmp_name'];
   $fileError=$file['error'];
   $fileSize=$file['size'];

   $fileExt=explode('.',$fileName);
   $fileActualExt=strtolower(end($fileExt));
   $allowed=array('doc','docx');     
   if(in_array($fileActualExt,$allowed)){
     if($fileError===0){
       if($fileSize<1000000){
         $fileNameNew=uniqid('',true).".".$fileActualExt;
         $fileDestination='uploads/'.$fileNameNew;
         move_uploaded_file($fileTmpName,$fileDestination);
         header('location:index.php?FileUploadSuccess');
       }else{
         echo "File size is too large";
       }
     }else{
       echo "Their is an error uploading your file";
     }
   }else{
     echo "You can't upload file of this type";
   }
 }

?>