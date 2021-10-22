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
    <title></title>
    <link rel="icon" href=".png" type="image/x-icon">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css"
        integrity="sha256-46qynGAkLSFpVbEBog43gvNhfrOj+BmwXdxFgVK/Kvc=" crossorigin="anonymous" />
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lobster+Two|Roboto|Open+Sans|Fira+Code">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

    <!-- site links here !-->
    <link rel="stylesheet" href="utils/css/basic.css">
    <link rel="stylesheet" href="utils/css/aboutbuddybonds.css">

</head>

<body>

    <nav class="navbar sticky-top shadow bg-white rounded">
        <ul class="navbar-nav list-inline">
            <li class="list-inline-item">
                <a class="nav-link nav_hdr" href="index.php">buddyBonds</a>
            </li>
        </ul>
        <ul class="navbar-nav list-inline">
            <li class="list-inline-item">
                <a class="nav-link nav_links" href="login.php">LOG IN</a>
            </li>
            <li class="list-inline-item">
                <a class="nav-link nav_links" href="signup.php">SIGN UP</a>
            </li>
        </ul>
    </nav>
    
    <div class="card shadow-lg">
        <div class="card-body">
            <h5 class="card-title">Forgot Your Password</h5>
            <h6 class="card-subtitle mb-2 text-muted">Enter your email address</h6>
            <div class="form-group mt-3">
                <input type="email" name="email" id="email" required maxlength="40" minlength="8"
                    placeholder="Email Address" title="Enter your email address" alt="Enter your email address"
                    pattern="^\S+@\S+[\.][0-9a-z]+$"><span id="reg_emailErr"></span><span id="emailErr"></span>
            </div>
        </div>
    </div>

    <footer class="text-center shadow-lg rounded mt-2">
		<ul class="list-inline footer_ul">
			<li class="list-inline-item"><a href="manifesto.php"><b>MANIFESTO </b></a></li>
			<li class="list-inline-item"><a href="dev.php"><b>DEVELOPMENT </b></a></li>
			<li class="list-inline-item"><a href="cookiepolicy.php"><b>COOKIE POLICY </b></a></li>
			<li class="list-inline-item"><a href="joinbuddybonds.php"><b>JOIN OUR TEAM </b></a></li>
			<li class="list-inline-item"><a href="mailto:connect@buddybonds.com" data-toggle="tooltip"
					title="Clicking will open your mail provider link"><b>CONTACT US</b></a></li>
			<li class="list-inline-item"><b>&#169; 2020 buddyBonds</b></li>
		</ul>
	</footer>
    <!-- scripts start !-->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>

    <script type="module" src="utils/js/basic.js"></script>

</body>

</html>