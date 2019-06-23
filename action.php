
<?php

	$name=$_POST['firstname'];
	$s_name=$_POST['secondname'];
	echo "hello ".$name." your secondname is ".$s_name;

	mysql_connect('localhost','root','') or die("cannot connect");
	mysql_select_db('first_db');

	$q=mysql_query("select * from table1 where name='$name'") or die("failed query");

	$row=mysql_fetch_array($q);

	echo "loction".$row['location'];
	

?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
	<link rel="stylesheet" type="text/css" href="action.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
	<body>
	
		<div class="container">
		
			<form class="form-group">
						
						<div class="form-group">
						      <label>name</label>
						      <input type="text" class="form-control"  placeholder="first name" name="firstname" value="<?php echo $name ?>">
					    </div>  

					    <div class="form-group">
						      <label >regno</label>
						      <input type="text" class="form-control"  placeholder="second name" name="secondname" value="<?php echo $row['reg_no']?>">
					    </div> 	

						<div class="form-group">
						      <label >location</label>
						      <input type="text" class="form-control"  placeholder="second name" name="secondname" value="<?php echo $row['location'] ?>" >
					    </div> 

						 
			</form> 
		</div>

	</body>
</html>