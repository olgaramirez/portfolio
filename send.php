

<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$website = $_POST['website'];
$priority = $_POST['priority'];
$type = $_POST['type'];
$message = $_POST['message'];
$call = $_POST['call'];

$check_msg='';
foreach($_POST['connect'] as $value) {
$check_msg .= $value.' ';
}

$formcontent=" ��: $name \n �������: $phone \n �������� ������: $call \n ����: $website \n ������ �����: $check_msg \n ��������: $priority \n ���: $type \n ���������: $message";

$recipient = "anymail@mail.ru";
$subject = "����� �������� �����. ������������ - $name";   
$mailheader = "�����������: $email \r\n";  
$info = mail($recipient, $subject, $formcontent, $mailheader, "Content-type:text/plain; Content-type:text/plain; charset = UTF-8\r\n") or die("Error!");

echo "�������!" . " -" . "<a href='/demos/myform' style='text-decoration:none;color:#ff0099;'> �����</a>";
?>


   