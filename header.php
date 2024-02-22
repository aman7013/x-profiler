<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>

</head>
<body>
	 <div class="header">

    <div class="header_c0">
		<i class="fa fa-bars" aria-hidden="true" onclick="menu()"></i>
	</div>

		<div class="header_c1">
			<img src="img/logo.png">

		</div>
		<div class="header_c2">
			<a href="#">Features</a>
			<a href="#">Pricing</a>
			<a href="#">Guides</a>
			<a href="#">Free tolls</a>
			

		</div>
		<div class="header_c3">
			<span class="button">Sign In</span>
			<span class="button1">Singup</span>

		</div>
	</div>


 <script type="text/javascript">
	function menu()
	{
		//alert("hello");
		var a=document.getElementById("mobile");
		a.style.display="block";


	}
	function closemenu()
	{
		//alert("hello");
		var a=document.getElementById("mobile");
		a.style.display="none";

		
	}
</script>

<div class="mobile" id="mobile">
	<h6>X-profiler</h6>
	<ul>
			<li><i class="fa fa-angle-double-right" aria-hidden="true"></i> <a href="#">Feature</a></li>
			<li><i class="fa fa-angle-double-right" aria-hidden="true"></i> <a href="#">Pricing</a></li>
			<li><i class="fa fa-angle-double-right" aria-hidden="true"></i> <a href="#">Guides</a></li>
			<li><i class="fa fa-angle-double-right" aria-hidden="true"></i> <a href="#">Free toolla</a></li>
			<p><a href="formcard.php"><span class="button">Sign in</span></a></p>
			
		</ul>
		<span class="closemenu" onclick="closemenu()">X</span>
</div>



</body>
</html>