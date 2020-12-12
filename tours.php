<?php 
$con = mysqli_connect("localhost","root","","tms");

if( isset($_POST['txt']) && isset($_POST['txtid']) )
{
	$txt = $_POST['txt'];
	$txtid = $_POST['txtid'];
	$sel = mysqli_query($con, "");
	if( mysqli_num_rows($sel) >= 1 )
	{
	
	
	}
	else
	{
		echo "&#10005;&#10005;";
	}

}