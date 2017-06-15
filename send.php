<meta charset="utf">
<?php 
$name = $_GET['textinput'];
$email = $_GET['courriel'];
$message = $_GET['textarea'];
$formcontent="À: $name \n Message : $message";
$recipient = "olgaramirez1012@gmail.com";
$subject = $_GET['sujet'];
$mailheader = "Portfolio : $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Erreur!");

?>
<html>
<head>
<meta charset="utf-8">
<title>Lettre envoyée</title>
</head>

<body>
<h1><?php echo "Merci!"; ?></h1>
</body>
</html>

