<?php 
$attend=$_POST['t1'];
$connections =mysqli_connect("localhost","root","",);
$db =mysqli_select_db($connections,'attendence');

if(isset($post["insert"]))
{
	//$present=$_post['present']
	$query= "insert into data values('$attend')";
	$query_run =mysqli_query($connections,$query);
	if(	$query_run)
	{
	echo 'data entered into database sucessfully';
	}
	else{
		echo 'data not entered into database sucessfully';
		}
		

?>