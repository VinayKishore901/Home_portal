<?php
           if(isset($_POST['upload'])){
           echo"pressed";

           $file_name= $_FILES['file']['name'];
           $file_type= $_FILES['file']['type'];
           $file_name= $_FILES['file']['size'];
           $file_tem_loc=$_FILES['file']['tmp_name'];
           $file_store="uploads/".$file_name;

           move_uploaded_file($file_tem_loc,$file_store);
            

       }     
?>
