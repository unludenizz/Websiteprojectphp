
<?php


$name_lastname = $name. " " .$lastname;



if (empty($_POST['LOGIN'])) {
	
	

	require_once("class.phpmailer.php");

	$mail = new PHPMailer();
	$mail->IsSMTP();
	$mail->Host = "golhisarim.com.tr";
	$mail->SMTPAuth = true;
	$mail->Username = "iletisim@golhisarim.com.tr";
	$mail->Password = "Bombom35.";
	$mail->From = "iletisim@golhisarim.com.tr";
	$mail->Fromname = $name_lastname;
	$mail->AddAddress("iletisim@golhisarim.com.tr","İletişim Formu");
	$mail->AddReplyTo($email, $email);
	$mail->Subject = "İletişim Formu";
	$mail->Body = "Mesajı: "." ".$message. " ". "Telefon Numarası: ".$phone. " ". "Adı Soyadı". " ". $name_lastname;
	$mail->CharSet="UTF-8";
if(!$mail->Send())
	{
	  echo '<script>$("#success-message").show();</script>';
	}
	else{
	    $success_message = "Email sending successful! ";
	}
	}
	
?>