<?php  
$conn = mysqli_connect("localhost","root","","tut");  
	  $a=$_POST["id"];
		$b=$_POST["name"];
		$c=$_POST["age"];
		$d=$_POST["mail"];
     // $sql = "SELECT id,name,age,mail FROM pdf_export ORDER BY id ASC";  
     // $result = mysqli_query($conn, $sql);
$sql_insert="INSERT INTO pdf_export(id,name,age,email) values('$a','$b','$c','$d')";
if(!mysqli_query($conn,$sql_insert))
{
    die("Error".mysqli_error($conn));
}
else{
	 echo("Record inserted successfully");
	 header('location:http://localhost/php/insert.html');

}
?>  
