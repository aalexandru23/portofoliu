<html>
<body>
<?php
	  
			$answer=$_POST['q14'];
			$answer=$_POST['q21'];
			$answer=$_POST['q31'];
			$answer=$_POST['q41'];
			$answer=$_POST['q5'];
			$answer=$_POST['q62'];
			$answer=$_POST['q73'];
			$answer=$_POST['q82'];
			$answer=$_POST['q93'];
			$answer=$_POST['q103'];
			$counting=count($answer);
			
			if(isset($_POST['submit'])){
			if ($counting > 7){
				header("Location : congrats.php");
			}
		else{
			echo"try again";
		}
		}
		
	
	  ?>
</body>
</html>
