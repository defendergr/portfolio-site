<?php
	
	$thema=$_post["thema"];
	$per=$_post["perigrafi"];
	$cat=$_post["category"];
	$happy=$_post["happy"];
	$oroi=$_post["ido"];

?>

<!DOCTYPE html>
<html>
	<head>
		<title>Φόρμες</title>
		<meta charset="utf-8">
	</head>
	<body>
	
	<h1>ΤΑ ΠΑΡΑΠΟΝΑ ΣΑΣ </h1>
	<p>Λάβαμε το παράπονο με θέμα <b><?php echo $thema;?></b>, που ανήκει στην κατηγορία <b><?php echo $cat;?></b> και το κείμενο:</p>
	<p><b><i><?php echo $per;?></i></b></p>
	<p>Είστε ικανοποιημένοι από το κατάστημά μας; </br>Δηλώσατε:<?php if ($happy=="Yes") echo "Ναι"; else echo "Οχι";?></p>
	<p>Αποδεχθήκατε:</br>
	<?php echo $oroi;?>
	
	</body>
</html>