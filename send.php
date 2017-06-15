<meta charset="utf">
<?php 
$method = $_SERVER['REQUEST_METHOD'];
var_dump($method); die;
$name = $_POST['textinput'];
$email = $_POST['courriel'];
$message = $_POST['textarea'];
$formcontent="À: $name \n Message : $message";
$recipient = "olgaramirez1012@gmail.com";
$subject = $_POST['sujet'];
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

