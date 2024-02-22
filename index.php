<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
	<title></title>
	<link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<style type="text/css">
		
	</style>
	<script>
$(document).ready(function () 
{
	username();
	insert();
});


function username()
{
  $('#userName').on('keyup',function()
  {
  	var userName=$("#userName").val();
  	
   
    $.ajax({  
     url: "process.php?username_checker" + "&userName=" + userName,   
      success:function(data)  
       {  
       	if(userName=="")
       	{
       		$("#checker").html("");	
       	}
       	else
       	{
        $("#checker").html(data);
        }
        }  
  });   
  });
}

function insert()
	{
		
 $('#submit').on('click',function()
  {
  		var userName=$('#userName').val();
		$.ajax({
		url: 'process.php?insert' + '&userName=' + userName, 
		success: function(data) 
		{

			alert(data);
			alert("Sucess");
			
			
		},
		});
});
	}
	</script>
</head>
<body>

<?php include 'header.php';?>


 <div class="layout">
 <div class="layout_c1">  
<div class="box">
	<div class="box_c1">
		<h1>X-Profiler</h1>
		<h2>Crawl <span>300 pages</span> of a site for <span>FREE</span></h2>
		<label>X-Profiler/</label>
	<p>	<input type="text" class="userName" id="userName" autocomplete="off" style="width:30%; height:13%;"><a href="formcard.php"><span class="button" id="submit">Submit</span></a></p>
		<p class="checker" id="checker"></p>
		<p style="color: white;"><strong>www.x-profiler.com</strong></p>
		
	</div>
</div>
</div>
</div>



<div class="business">
	<div class="business_c1">
		<img src="https://scontent.fdel25-1.fna.fbcdn.net/v/t39.30808-6/326856850_860007685285181_1644671929320142659_n.jpg?stp=dst-jpg_p843x403&_nc_cat=106&ccb=1-7&_nc_sid=dd5e9f&_nc_ohc=7S5gieBMPGYAX-OiZBh&_nc_ht=scontent.fdel25-1.fna&oh=00_AfAWYizxKVwBMoxDSwRUKaWk_6Z6aIgK0DHo-Zb3WnHwlg&oe=65B142FE">
		<h3>My Account</h3>
		<p ><span class="button">Submit</span></p>

	</div>

	<div class="business_c1 crd">
		<img src="https://scontent.fdel25-1.fna.fbcdn.net/v/t39.30808-6/326856850_860007685285181_1644671929320142659_n.jpg?stp=dst-jpg_p843x403&_nc_cat=106&ccb=1-7&_nc_sid=dd5e9f&_nc_ohc=7S5gieBMPGYAX-OiZBh&_nc_ht=scontent.fdel25-1.fna&oh=00_AfAWYizxKVwBMoxDSwRUKaWk_6Z6aIgK0DHo-Zb3WnHwlg&oe=65B142FE">
		<h3>Aadhar Card </h3>
		<p><span class="button">Submit</span></p>


	</div>
	<div class="business_c1 crd">
		<img src="https://scontent.fdel25-1.fna.fbcdn.net/v/t39.30808-6/326856850_860007685285181_1644671929320142659_n.jpg?stp=dst-jpg_p843x403&_nc_cat=106&ccb=1-7&_nc_sid=dd5e9f&_nc_ohc=7S5gieBMPGYAX-OiZBh&_nc_ht=scontent.fdel25-1.fna&oh=00_AfAWYizxKVwBMoxDSwRUKaWk_6Z6aIgK0DHo-Zb3WnHwlg&oe=65B142FE">
		<h3>Pan varification</h3>
		<p><span class="button">Submit</span></p>


	</div>
	<div class="business_c1 crd crd1">
		<img src="https://scontent.fdel25-1.fna.fbcdn.net/v/t39.30808-6/326856850_860007685285181_1644671929320142659_n.jpg?stp=dst-jpg_p843x403&_nc_cat=106&ccb=1-7&_nc_sid=dd5e9f&_nc_ohc=7S5gieBMPGYAX-OiZBh&_nc_ht=scontent.fdel25-1.fna&oh=00_AfAWYizxKVwBMoxDSwRUKaWk_6Z6aIgK0DHo-Zb3WnHwlg&oe=65B142FE">
		<h3>Covid varification</h3>
		<p><span class="button">Submit</span></p>


	</div>
	<div class="business_c1 crd crd1">
		<img src="https://scontent.fdel25-1.fna.fbcdn.net/v/t39.30808-6/326856850_860007685285181_1644671929320142659_n.jpg?stp=dst-jpg_p843x403&_nc_cat=106&ccb=1-7&_nc_sid=dd5e9f&_nc_ohc=7S5gieBMPGYAX-OiZBh&_nc_ht=scontent.fdel25-1.fna&oh=00_AfAWYizxKVwBMoxDSwRUKaWk_6Z6aIgK0DHo-Zb3WnHwlg&oe=65B142FE">
		<h3>class X Marksheet</h3>
		<p><span class="button">Submit</span></p>


	</div>
	<div class="business_c1 crd crd1">
		<img src="https://scontent.fdel25-1.fna.fbcdn.net/v/t39.30808-6/326856850_860007685285181_1644671929320142659_n.jpg?stp=dst-jpg_p843x403&_nc_cat=106&ccb=1-7&_nc_sid=dd5e9f&_nc_ohc=7S5gieBMPGYAX-OiZBh&_nc_ht=scontent.fdel25-1.fna&oh=00_AfAWYizxKVwBMoxDSwRUKaWk_6Z6aIgK0DHo-Zb3WnHwlg&oe=65B142FE">
		<h3>class XII Marksheet</h3>
		<p><span class="button">Submit</span></p>


	</div>
</div>



</body>
</html>