	<?php
$u="yash";
$p="yash@123";

$a=$_POST["n1"];
$b=$_POST["p1"];
if($u==$a && $p==$b)
{
header('Location:http://localhost/php/design.html');
}
else
{
	echo "USERNAME OR PASSWORD ARE INVALID";
}
?>
