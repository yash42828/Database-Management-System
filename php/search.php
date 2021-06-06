
<!DOCTYPE html>  
<html>  
      <head>  
           <title>Search</title>  
           <link rel="stylesheet" href="css/bootstrap.min.css">            
      </head>  
      <body>
<table align="right">
					<th>
                     <form action="design.html" method="post">  
                    <input type="submit" name="generate_pdf" class="btn btn-success" value="Home" />  
                     </form> 
					</th>
					</table>
				</body>
		</html>
<?php
if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    $query = "SELECT * FROM `pdf_export` WHERE CONCAT(`id`, `name`, `age`, `email`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `pdf_export`";
    $search_result = filterTable($query);
 }

// function to connect and execute the query
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "tut");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
		header('location:http://localhost/php/search.php');
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>PHP HTML TABLE DATA SEARCH</title>
        <style>
            table,tr,th,td
            {
                border: 1px solid black;
            }
        </style>
    </head>
    <body>
        
        <form action="search.php" method="post"> <br>
            <input type="text" name="valueToSearch" placeholder="Value To Search"><br><br>
            <input type="submit" name="search" value="Filter" class="btn btn-success"><br><br>
            
            <table class="table table-bordered">
                <tr>
                    <th width="5%">Id</th>
                    <th width="25%">Name</th>
                    <th width="15%">Age</th>
                    <th width="55%">Email</th>
                </tr>

      <!-- populate table from mysql database -->
                <?php while($row = mysqli_fetch_array($search_result)):?>
                <tr>
                    <td><?php echo $row['id'];?></td>
                    <td><?php echo $row['name'];?></td>
                    <td><?php echo $row['age'];?></td>
                    <td><?php echo $row['email'];?></td>
                </tr>
                <?php endwhile;?>
            </table>
        </form>
        
    </body>
</html>
