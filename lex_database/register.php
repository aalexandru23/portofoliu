<html>
<head>
<title>Register</title>
<!--FAVICON -->
<link rel="apple-touch-icon" sizes="57x57" href="favicon/register/apple-touch-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="favicon/register/apple-touch-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="favicon/register/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="favicon/register/apple-touch-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="favicon/register/apple-touch-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="favicon/register/apple-touch-icon-120x120.png">
<link rel="icon" type="image/png" href="favicon/register/favicon-32x32.png" sizes="32x32">
<link rel="icon" type="image/png" href="favicon/register/favicon-96x96.png" sizes="96x96">
<link rel="icon" type="image/png" href="favicon/register/favicon-16x16.png" sizes="16x16">
<link rel="manifest" href="favicon/register/manifest.json">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="theme-color" content="#ffffff">
<!--CSS-->
<link rel="stylesheet" href="css/main.css" type="text/css">
<link rel="stylesheet" href="css/normalize.css" type="text/css">
<link rel="stylesheet" href="css/styleform.css" type="text/css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
</head>
<body class="background-register">
<div class="layout-intro">
<div class="nav center-block clearfix">
</div>
<div class="login center-block clearfix">
<table class="form-pos ">
<form action="register_connect_db.php" method="POST" >
<tr><th><h2 class="describe-pos">Register</h2></th></tr>
<tr><td><span class="glyphicon glyphicon-user"></span>User:</td><td><input autofocus type="text" name="user" class="position-log form-control" placeholder="Username"></td></tr>
<tr><td><span class="glyphicon glyphicon-envelope"></span>E-mail:</td><td><input autofocus type="text" name="email" class="position-log form-control" placeholder="E-mail"></td></tr>
<tr><td><span class="glyphicon glyphicon-ok"></span>Confirm E-mail:</td><td><input autofocus type="text" name="confirm" class="position-log form-control" placeholder="Confirm E-mail"></td></tr>
<tr><td><span class="glyphicon glyphicon-lock"></span>Password:</td><td><input type="password" name="pass" class="position-log form-control" placeholder="Password"></td></tr>
<tr><td><span class="glyphicon glyphicon-ok"></span>Re-type Password:</td><td><input autofocus type="password" name="retype" class="position-log form-control" placeholder="Re-type Password"></td></tr>
<tr><td></td><td><input type="submit" name="register" value="Register" class="position-btn-reg btn btn-default"></td>
<td><input type="reset" name="reset" value="Reset" class="position-btn-reg2 btn btn-default"></td></tr>
</form>
</table>
</div>
</div>
</body>
</html>