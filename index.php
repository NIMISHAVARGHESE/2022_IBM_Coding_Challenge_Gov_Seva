<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login & Registration Form</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="styleandimage/index.css">
</head>
<body>

	
	<div class="hero">
		<div class="form-box">
			<div class="button-box">
				<div id="btn"></div>
				<button type="button" class="toggle-btn" onclick="login()">Log In</button>
				<button type="button" class="toggle-btn" onclick="register()">Register</button>
			</div>
		
			

			<form id="login" class="input-group" action="Query_Action.php" method="post">
				<input type="text" class="input-field"name="adno1" placeholder="Aadhar Number" required />
				<input type="text" class="input-field"name="phno1" placeholder="Phone Number" required />
				<input type="checkbox" class="check-box" /><span>Remember Password</span>
				<button type="submit" class="submit-btn" name="btn_login" >Log In</button>
			</form>

			<form id="register" class="input-group" action="Query_Action.php" method="post">
				<input type="text" class="input-field"  name="adhno" placeholder="Aadhar Number" required />
				<input type="text" class="input-field"  name="name" placeholder="Full Name" required />
				<input type="text" class="input-field"  name="phno" placeholder="Phone Number" required />
				<input type="text" class="input-field"  name="yob" placeholder="Year Of Birth " required />
				<input type="checkbox" class="check-box" /><span>I agree to the terms & conditions</span>
				<button type="submit" class="submit-btn" name="btn_register">Register</button>
			</form>
		</div>
	</div>


	
	<script>
		var x = document.getElementById("login");
		var y = document.getElementById("register");
		var z = document.getElementById("btn");

		function register() {
			x.style.left = "-400px";
			y.style.left = "50px";
			z.style.left = "110px";
		}

		function login() {
			x.style.left = "50px";
			y.style.left = "450px";
			z.style.left = "0";
		}

	</script>
</body>
</html>