<?php
$field_name = $_POST['name'];
$field_email = $_POST['email'];
$field_phone = $_POST['phone'];
$field_message = $_POST['message'];

$mail_to = 'majus@ist-willig.de';
$subject = 'Anfrage an D&H Instrumentenverleih'.$field_name;

$body_message = 'Name: '.$field_name."\n";
$body_message .= 'E-Mail: '.$field_email."\n";
$body_message .= 'Telefonnummer: '.$field_phone."\n";
$body_message .= 'Nachricht: '.$field_message;

$headers = 'From: '.$field_email."\r\n";
$headers .= 'Reply-To: '.$field_email."\r\n";

$mail_status = mail($mail_to, $subject, $body_message, $headers);

if ($mail_status) { ?>
	<script language="javascript" type="text/javascript">
		alert('Vielen Dank für Ihre Nachricht. Wir werden uns schnellstmöglich mit Ihnen in Verbindung setzen.');
		window.location = 'index.html';
	</script>
<?php
}
else { ?>
	<script language="javascript" type="text/javascript">
		alert('Nachricht konnte nicht versendent werden. Bitte versuchen Sie es später erneut.');
		window.location = 'contact.html';
	</script>
<?php
}
?>