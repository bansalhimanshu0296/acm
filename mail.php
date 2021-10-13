<?php
$c = mysql_connect('localhost','juithost','aphrodite12345');
$s = mysql_select_db('juithost_yp',$c);

$result = mysql_query("SELECT * FROM lok");

while($row = mysql_fetch_array($result))
{
$to = $row['email'];
$a =$row['name'];

$subject = "JYP 16";


	$message = "<html>
	<body> 
	
	
	Dear Parliamentarian,<br>
                                    We are pleased to announce that you have been allotted as<b> ".$a."</b> under the council <b>Lok Sabha</b>. You are requested to go through the Rules and Procedures of JUIT Youth Parliament 2016, which are made available in the downloads section on our website, www.yp.jyc.co.in . We have also made our research material available in the downloads section as background guides, which you can view and download. We shall be organising a Mock/training session to educate you all about the basic rules of decorum to be followed, on Wednesday, 23rd of November at 6 PM in the campus in LT/1. We hope to see you there. For further queries, kindly contact -  <br>

Manan Gupta : +91-9815015015<br>
Jashan Mann : +91-9736077459<br>


We wish you have a great brainstorming session this weekend,<br>
Team JYP 
	
	</body>
	</html>
	";

	// Always set content-type when sending HTML email
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

	// More headers
	$headers .= 'From: <official@yp.jyc.co.in>' . "\r\n";

	if($to == '')
	{
		echo "...x...";
		echo $to;
		echo "<br>";
	}
	else
	{
		if(mail($to, $subject, $message, $headers))
		{
			echo $subject;
			echo $message;
			echo $headers;
			echo $to;
			echo "<br>";	
		}
	}

}


	

?>
