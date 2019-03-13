<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Finda Data</title>
</head>

<body>
<?php 
	if (isset($_POST['submit'])){
		$con=new mysqli('localhost','root','','rubel');
		$book_name=$_POST['book_name'];
		$sql = "call book_sel('$book_name',@publisher_name,@price)";
		$result=mysqli_query($con,$sql);
		$result=mysqli_query($con,"select @publisher_name,@price");
		while($row=$result->fetch_assoc()){
			
			print "Publisher Name:".$row['@publisher_name']."<br/>";
			print "Price:".$row['@price']."<br/>";
			
			}
	
		
	}
?>



<form action="" method="post">
	Book Name:<input type="text" name="book_name"/>
    <input type="submit" name="submit" value="Result"/>
</form>
</body>
</html>