<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport"
		content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no" />
	<meta name="referrer" content="origin-when-crossorigin" />
	<meta name="author" content="Vipul Sharma" />
	<meta name="description" content="" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>buddyBonds &#8226; New Way For Connecting , Learning and Sharing</title>
	<link rel="shortcut icon" href="resources/images/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
		integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css"
		integrity="sha256-46qynGAkLSFpVbEBog43gvNhfrOj+BmwXdxFgVK/Kvc=" crossorigin="anonymous" />
	<link rel="stylesheet"
		href="http://fonts.googleapis.com/css?family=Lobster+Two|Roboto|Open+Sans|Fira+Code|Nunito|Fira+Sans">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"
		integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

	<!-- site links here !-->
	<link rel="stylesheet" href="utils/css/basic.css">
	<link rel="stylesheet" href="utils/css/index.css">

</head>

<body>

	<nav class="navbar navbar-expand-lg px-5 py-3 sticky-top">
		<h2 class="ml-5 pl-5"><a class="tc-l lt-ff" href="javascript: void(0)">buddyBonds <span
					class="sr-only">(current)</span></a></h2>
		<div class="navbar-collapse">
			<ul class="navbar-nav ml-auto font-weight-bold fs-ff fs-17 mr-5 pr-5">
				<li class="nav-item">
					<a class="nav-link tc-l" href="app/manifesto.php">MANIFESTO</a>
				</li>
				<li class="nav-item">
					<a class="nav-link tc-l" href="app/dev.php">DEVELOPMENT</a>
				</li>
				<li class="nav-item">
					<a class="nav-link tc-l" href="app/cookiepolicy.php">COOKIE POLICY</a>
				</li>
				<li class="nav-item">
					<a class="nav-link tc-l" href="app/joinbuddybonds.php">JOIN BUDDYBONDS</a>
				</li>
			</ul>
		</div>
	</nav>

	<main class="text-center tc-l">
		<div class="d-flex">
			<div class="col-md-6 py-5">
				<div id="ss_carousel" class="carousel slide carousel-fade" data-ride="carousel">
					<div class="carousel-inner">
						<div class="carousel-item active"><img src="resources/images/ss_profile_aku27.png"
								alt="Profile page" class="img-fluid ss_imgs iof-c"></div>
						<div class="carousel-item"><img src="resources/images/ss_home_bB.png" alt="Home page"
								class="img-fluid ss_imgs iof-c"></div>
						<div class="carousel-item"><img src="resources/images/ss_messages.png" alt="Messages page"
								class="img-fluid ss_imgs iof-c"></div>
						<div class="carousel-item"><img src="resources/images/ss_ntfs_bB.png" alt="Notifications page"
								class="img-fluid ss_imgs iof-c"></div>
					</div>
					<!-- <a class="carousel-control-prev" href="#ss_carousel" data-slide="prev"><span
						class="carousel-control-prev-icon"></span></a>
					<a class="carousel-control-next" href="#ss_carousel" data-slide="next"><span
						class="carousel-control-next-icon"></span></a> -->
				</div>
			</div>

			<div class="col-md-6 m-auto">
				<?php
				 	if(isset($_REQUEST['logout'])) {
						if(time() - $_REQUEST['logout'] <= 1800)
							echo '<div class="alert alert-dismissable text-center alert-info">
									<span class="text-success">You have been logged out successfully. See you soon !</span>
								</div>';
						else
							echo '<div class="alert alert-dismissable text-center alert-info">
									<span class="text-danger">Come on ! You have got to login first to logout.</span>
								</div>';	
					}	
				?>
				
				<div id="login_card">
					<form method="POST" action="utils/scripts/login.php" id="login_form"
						class="index_form mx-auto w-300">
						<div id="login_result"></div>
						<div class="form-group mb-2">
							<input type="text" name="un" id="un" required minlength="1" maxlength="32"
								title="Type Your Username Here" placeholder="Username/Email"
								class="br-5 p-6 fs-15 fc-ff w-300"><span id="unErr" class="err fs-22"></span>
						</div>
						<div class="form-group mb-3">
							<input type="password" name="psw" id="psw" required minlength="8"
								title="Type Your Password Here" placeholder="Password"
								class="br-5 p-6 fs-15 fc-ff w-300"><span id="pswErr" class="err fs-22 passErr"></span>
						</div>
						<button type="submit" class="btn btn-block submit_btns tc-l mb-2 os-ff br-8 fs-15"
							id="login_submit"><b><i class="fas fa-sign-in-alt"></i> Log In</b></button>
						<div class="mb-3"><a href="forgotpassword.php" class="tc-l n-ff">Forgot Password?</a></div>
						<br>
						
						<!-- login to signup !-->
						<div class="switch_form_btns br-5 fs-13 p-14 bg-lg tc-d n-ff">
							<a href="javascript: void(0)" id="ltsu"><i class="fas fa-user"></i> Create a New Account</a>
						</div>
						<!-- !-->
					</form>
				</div>

				<div id="signup_card" class="d-n">
					<form method="POST" action="getstarted.php" id="signup_form" class="index_form mx-auto w-300">
						<div id="signup_result"></div>
						<div class="form-group mb-2">
							<input type="text" name="fn" id="fn" required minlength="1" placeholder="Full Name"
								title="Type Your Full Name Here" class="br-5 p-6 fs-15 fc-ff w-300"
								maxlength="256"><span id="fnErr" class="err fs-22"></span>
						</div>
						<div class="form-group mb-2">
							<input type="text" name="su_un" id="su_un" required minlength="1" maxlength="32"
								placeholder="Username" title="Enter A New Username For Yourself"
								class="br-5 p-6 fs-15 fc-ff w-300"><span id="su_unErr" class="err fs-22"></span>
						</div>
						<div class="form-group mb-2">
							<input type="password" name="su_psw" id="su_psw" required minlength="8"
								placeholder="Password" title="Enter A New Password For Yourself"
								class="br-5 p-6 fs-15 fc-ff w-300"><span id="su_pswErr"
								class="err fs-22 passErr"></span>
						</div>
						<div class="form-group">
							<input type="email" name="eml" id="eml" required minlength="1" maxlength="256"
								placeholder="Email Address" title="Type Your Email Address"
								pattern="^\S+@\S+[\.][0-9a-z]+$" class="br-5 p-6 fs-15 fc-ff w-300"><span id="emlErr"
								class="err fs-22"></span>
						</div>
						<button type="submit" class="btn btn-block submit_btns tc-l mb-2 br-8 fs-15"
							id="su_submit"><b><i class="fas fa-chevron-right"></i> Get Started</b></button>
						<div class="form-group n-ff mb-4">
							<small>
								By signing up, you agree to our <a href="terms.php" class="tc-l"><b>Terms</b></a> , <a
									href="datapolicy.php" class="tc-l"><b>Data Policy</b></a> and <a
									href="cookiepolicy.php" class="tc-l"><b>Cookies Policy</b></a>.
							</small>
						</div>

						<!-- signup to login !-->
						<div class="switch_form_btns br-5 fs-13 p-14 bg-lg tc-d n-ff">Already have an account ?<a
								href="javascript: void(0)" id="sutl"> <i class="fas fa-sign-in-alt"></i> Login Here</a>
						</div>
						<!-- !-->
					</form>
				</div>

				<div class="mt-4">
					<p class="fs-ff">Get the buddyBonds App.</p>
					<a href="javascript:void(0)"><img src="resources/images/appStore.png"
							alt="Download App from App Store" class="img-fluid mb-2" /></a><br>
					<a href="javascript:void(0)"><img src="resources/images/playStore.png"
							alt="Get the App from Play Store" class="img-fluid" /></a>
				</div>

			</div>
		</div>
	</main>

	<!-- scripts !-->
	<script type="module" src="utils/js/basic.js"></script>
	<script src="utils/js/index.js"></script>

	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
		integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
	</script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
		integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
	</script>

</body>

</html>