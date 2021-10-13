<?php

	$conn = mysql_connect('localhost','juithost','aphrodite12345');
	$con = mysql_select_db('juithost_ti',$conn) or die("database failed: " . mysqli_connect_error());
	
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
	if(isset($_POST['submit']))
	{
		$item_name = $_POST['item_name'];
		$item_name1 = $_POST['item_type'];
		$item_name2 = $_POST['quantity'];
		$item_name3 = $_POST['issued_to'];
		$item_name4 = $_POST['date'];
		$item_name5 = $_POST['price'];
		$item_name6 = $_POST['amount_given'];
		$item_name7 = $_POST['price']-$_POST['amount_given'];
		$sql = "insert into things values ('','$item_name','$item_name2','$item_name3','$item_name4','$item_name5','$item_name6','$item_name7','$item_name1')";		
		$rs = mysql_query($sql,$conn);
		if ($rs) {
			echo 'Amount Left :'.$item_name7;
			echo '<script type="text/javascript">alert("Submitted Successfully.");</script>';
        } 
		else {
			echo '<script type="text/javascript">alert("Not Submitted.");</script>';
		}   
	}

?>
<!DOCTYPE html>
<html>
	<head>
	</head>
	<body>
	<form action="index.php" method="post">
		Item name<input name="item_name" type="text"></input><br /><br />
		Item Type<input name="item_type" type="text"></input><br /><br />
		Quantity<input name="quantity" type="number"></input><br /><br />
		Issued To<input name="issued_to" type="text"></input><br /><br />
		Date<input name="date" type="text" value="<?php echo date("Y/m/d"); ?>"></input><br /><br />
		Price<input name="price" type="number"></input><br /><br />
		Amount Given<input name="amount_given" type="number"></input><br /><br />
		Amount Left<input name="amount_left" readonly type="number" value="calc(price.value,amount_given.value)"></input>Automatically Calcuated<br /><br />
		<input type="submit" name="submit" value="submit">
	</form>
	</body>
</html>