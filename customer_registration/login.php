<html>
<head>
<title>Login</title>
<!-- FAVICON -->
<link rel="apple-touch-icon" sizes="57x57" href="favicon/login/apple-touch-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="favicon/login/apple-touch-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="favicon/login/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="favicon/login/apple-touch-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="favicon/login/apple-touch-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="favicon/login/apple-touch-icon-120x120.png">
<link rel="icon" type="image/png" href="favicon/login/favicon-32x32.png" sizes="32x32">
<link rel="icon" type="image/png" href="favicon/login/favicon-96x96.png" sizes="96x96">
<link rel="icon" type="image/png" href="favicon/login/favicon-16x16.png" sizes="16x16">
<link rel="manifest" href="favicon/login/manifest.json">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="theme-color" content="#ffffff">
<!-- CSS -->
<link rel="stylesheet" href="css/main.css" type="text/css">
<link rel="stylesheet" href="css/normalize.css" type="text/css">
<link rel="stylesheet" href="css/styleform.css" type="text/css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
</head>
<body class="home">
<div class="nav center-block clearfix">
<ul>
<li class="nav-logo nav-page"><img src="images/login.png" alt="logo"></li>
</ul>
</div>
<div class="login center-block clearfix">
<table class="form-pos">
<form action="login_connect.php" method="POST" >
<tr><th><h2 class="describe-pos">Login</h2></th></tr>
<tr><td><span class="glyphicon glyphicon-user">User:</td><td><input autofocus type="text" name="user" class="position-log form-control" placeholder="Username"></td></tr>
<tr><td><span class="glyphicon glyphicon-lock">Password:</td><td><input type="password" name="pass" class="position-log form-control " placeholder="Password"></td></tr>
<tr><td></td><td><input type="submit" name="login" value="Login" class="position-btn btn btn-default"></td>
<td><input type="reset" name="reset" value="Reset" class="position-btn2 btn btn-default"></td></tr>
<tr><td colspan=2><p class="text-modify"><a href="register.php" class="link-decoration">"You don't have an account? Register here."</a></p></td></tr>
</form>
</table>
</div>
<div class="footer center-block clearfix">
<h4 class="describe-footer">@Creative Forms Solutions</h4>
<h4 class="describe-footer">Alex Alexandrion Ascendro.@</h4>
</div>
</body>
</html>