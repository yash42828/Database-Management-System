<?php
// php code to Delete data from mysql database 

if(isset($_POST['delete']))
{
    
    // connect to mysql
    $conn = mysqli_connect("localhost","root","","tut");  
    // get id to delete
    $id=$_POST['id'];
    
 
    // mysql delete query 
    $query = "DELETE FROM `pdf_export` WHERE `id` = $id";
    
    $result = mysqli_query($conn, $query);
    
    if($result)
    {
        echo 'Data Deleted';
      //  sleep(3);
        header('location:http://localhost/php/delete.html');
    }else{
        echo 'Data Not Deleted <br> ';
        echo 'Enter Valid ID';
    }
    mysqli_close($conn);
}
?>