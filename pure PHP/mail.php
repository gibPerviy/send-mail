<?php

$to = 'EMAIL_TO';

$name = clear_data($_POST['name']);
$email = clear_data($_POST['email']);
$subject = 'TITLE';
$headers = "From: EMAIL_FROM\r\n" . "Reply-to: REPLY_TO\r\n";
$headers .= "Content-type: text/html; charset=utf-8\r\n";

$message = '
<html>
<body>
<center>
<table border="1" cellpadding="1" celspacing="0" width="90% bordercolor="black">
<tr><td colspan="2" align="center"><b>_TABLE_TITLE_</b></td></tr>
';
$message .= '<tr>
<td><b>_NAME_</b></td>
<td><b>' . $name . '</b></td>
</tr>';

$message .= '<tr>
<td><b>_Email_</b></td>
<td><b>' . $email . '</b></td>
</tr>';


function clear_data($val) {
  $val = trim($val);
  $val = stripslashes($val);
  $val = htmlspecialchars($val);
  return $val;
}

if ( mail($to, $subject, $message, $headers)) {
  // if success redirect to
  header("Location: /");
} else {
  echo ("Errore");
}
?>
