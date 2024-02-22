<?php
if(isset($_GET['username_checker']))
{
$conn = mysqli_connect("localhost", "root", "", "profiler");
$userName=$_GET['userName'];
$records="select * from profile where profile_username='".$userName."'";
$result = mysqli_query($conn, $records);
if(mysqli_num_rows($result)>0)
{
	echo "Already Taken";
}
else
{
	echo "Available";
}
}


if(isset($_GET['insert']))
{
	$userName=$_GET['userName'];
	$conn = mysqli_connect("localhost", "root", "", "profiler");
	$records="insert into profile (profile_username) values ('$userName')";
	if ($conn->query($records) === TRUE)
	{
	    
	    echo "true";
	   
	}
	else
	{
		echo "false";
	}

}
?>

