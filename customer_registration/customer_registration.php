<html>
<head>
<title>Customer Registration</title>
<!--FAVICON-->
<link rel="apple-touch-icon" sizes="57x57" href="favicon/customer/apple-touch-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="favicon/customer/apple-touch-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="favicon/customer/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="favicon/customer/apple-touch-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="favicon/customer/apple-touch-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="favicon/customer/apple-touch-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="favicon/customer/apple-touch-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="favicon/customer/apple-touch-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="favicon/customer/apple-touch-icon-180x180.png">
<link rel="icon" type="image/png" href="favicon/customer/favicon-32x32.png" sizes="32x32">
<link rel="icon" type="image/png" href="favicon/customer/android-chrome-192x192.png" sizes="192x192">
<link rel="icon" type="image/png" href="favicon/customer/favicon-96x96.png" sizes="96x96">
<link rel="icon" type="image/png" href="favicon/customer/favicon-16x16.png" sizes="16x16">
<link rel="manifest" href="favicon/customer/manifest.json">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="msapplication-TileImage" content="/mstile-144x144.png">
<meta name="theme-color" content="#ffffff">
<!--CSS-->
<link rel="stylesheet" href="css/main.css" type="text/css">
<link rel="stylesheet" href="css/normalize.css" type="text/css">
<link rel="stylesheet" href="css/styleform.css" type="text/css">
</head>
<body>
<div class="nav center-block clearfix">
<ul>
<li class="nav-logo nav-page"><img src="images/logo.png" alt="logo"></li>
<li class="nav-page"><a href="#" class="nav-link">Intervention Sheet IT</a></li>
<li class="nav-page"><a href="#" class="nav-link">Contact</a></li>
</ul>
<ul>
<li class="sign-out"><form action="logout.php" method="POST">
<input type="submit" name="logout" value="Logout">
</form></li>
</ul>
</div>
<div class="form center-block clearfix">
<div class="upload">
<h3 class="profile-reg">Profile</h3>
<div class="upload-image">
</div>
<form action="upload.php" method="POST" enctype="multipart/form-data" >
<input type="file" name="choose" value="" class="pos-upload">
<input type="submit" name="upload" value="Upload Now" class="pos-submit">
</form>
</div>
<table class="table-position">
<form action="thanks_page.php" method="POST">
<th class="reg"><h2 class="name-reg">Customer Registration</h2></th>
<tr>
<td><h3 class="describe">Salutation:</h3></td>
<td><select class="margin form-design">
<option value="Mr." name="salutation">Mr.</option>
<option value="Mrs." name="salutation">Mrs.</option>
<option value="Miss" name="salutation">Miss</option>
</select></td>
</tr>
<tr>
<td>
<h3 class="describe">Name: </h3>
</td>
<td><input autofocus type="text" name="name" placeholder="Name"  class="margin form-design" ></td>
</tr>
<tr>
<td><h3 class="describe">Surname:</h3></td>
<td><input  type="text" name="surname" placeholder="Surname" class="margin form-design"></td>
</tr>
<tr>
<td><h3 class="describe">Address:</h3></td>
<td><input  type="text" name="address" placeholder="Address" class="margin form-design"></td>
</tr>
<tr>
<td>
<h3 class="describe">Company:</h3>
</td>
<td><input  type="text" name="company" placeholder="Company" class="margin form-design"></td>
</tr>
<tr>
<td>
<h3 class="describe">Location:</h3>
</td>
<td><input  type="text" name="location" placeholder="Location" class="margin form-design"></td>
</tr>
<tr>
<td>
<h3 class="describe">Telephone:</h3>
</td>
<td>
<input  type="text" name="telephone" placeholder="Telephone" class="margin form-design"></td>
</tr>
<tr>
<td><h3 class="describe">Commentary:</h3></td>
<td><textarea  rows="5" cols="30" placeholder="Commentary" class="margin form-design"></textarea></td>
</tr>
<tr>
<td><h3 class="describe">Gender:</h3></td>
<td><input type="radio" name="gender" value="M" class="margin form-design">Male
<input type="radio" name="gender" value="F" class="margin form-design">Female</td>
</tr>
<tr>
<td><h3 class="describe">Validation:</h3></td>
<td><input type="submit" name="submit" value="Submit" class="margin form-design">
<input type="reset" name="reset" value="Reset" class="margin form-design"></td>
</tr>
</form>
</table>
</div>
<div class="footer center-block clearfix">
<h4 class="describe-footer">@Creative Forms Solutions</h4>
<h4 class="describe-footer">Alex Alexandrion Ascendro.@</h4>
</div>
</body>
</html>