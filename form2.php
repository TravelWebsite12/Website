<!DOCTYPE html>
<html>
	<head>
		<meta name="viewpoint" content="width=device-width, initial-scale=1.0">
		<title>Responsive sliding form</title>
		<link rel="stylesheet" type="text/css" href="style.css">

 <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />




<div id="menu-bar" class="fas fa-bars"></div>
	




		<div class="container">
			<div class="blueBg">
				<div class="box signin">
					<h2>Already have an account ?</h2>
					<button class="signinBtn">Sign in</button>
				</div>
				<div class="box signup">
					<h2>Don't have an account ?</h2>
					<button class="signupBtn" >Sign up</button>
				</div>
			</div>
			<div class="formBx">
				<div class="form signinForm">
					<form method="POST">
						<h3>Sign In</h3>
						<input type="text" placeholder="Username" name="Username">
						<input type="password" placeholder="Password" name="Password">
						<input type="submit" value="Login" name="munna">
						<a href="#" class="forget">Forget password</a>
					</form>
				</div>	
				<div class="form signupForm">
					<form method="POST">
						<h3>Sign Up</h3>
						<input type="text" placeholder="Username" name="username">
						<input type="text" placeholder="Email Address" name="email">
						<input type="password" id="pswd" placeholder="Password" name="password">
                        <span id = "message" style="color:red"> </span>
						<input type="password" placeholder="Confirm Password" name="cpassword">
						<h5>Password must be same</h5>
						<input type="submit" name="kaalia" value="Register">
					</form>
				</div>	
			</div>
		</div>

		<script>
			const signinBtn = document.querySelector('.signinBtn');
			const signupBtn = document.querySelector('.signupBtn');
			const formBx = document.querySelector('.formBx');
			const body = document.querySelector('body')

			signupBtn.onclick = function(){
				formBx.classList.add('active')
				body.classList.add('active')
			}
			signinBtn.onclick=function(){
				formBx.classList.remove('active')
				body.classList.remove('active')
			}
		</script>	
       
        <?php include"connection2.php"; 
		
		?>
		
	
	</body>
</html>