<?php
require_once "db_access.php";
require_once getenv("SS_PEAR_PATH")."/Mail.php";
$query = "SELECT `hashedId`, `Email addresses` FROM `".getenv('SS_DB_GUEST_TABLE')."` WHERE `Priority` = 0 AND `Save the date sent` = 0";
$result = $mysqli->query($query) or trigger_error($mysqli->error."[$query]");

$host = "ssl://smtp.gmail.com";
$port = "465";
$username = getenv("SS_EMAIL_USERNAME");
$password = getenv("SS_EMAIL_PASS");
$smtp = Mail::factory('smtp',
    array ('host' => $host,
      'port' => $port,
      'auth' => true,
      'username' => $username,
      'password' => $password));

while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
  if (strlen($row['Email addresses']) < 1) {
    continue;
  }
  $from = "'Vidya Santosh & Micah Herstand' <wedding@shalomshanti.com>";
  $to = $row['Email addresses'];
  $bcc = ", wedding+bccsavethedate@shalomshanti.com";
  $subject = "Save the date: July 10, 2016 – Wedding of Vidya Santosh and Micah Herstand";
  $body = "
    <a href='https://www.shalomshanti.com/savethedate?response=-1&id={$row['hashedId']}'>
        <img alt='Image: Wedding details and request for information' usemap='#responses' width='600' height='749' src='https://www.shalomshanti.com/shalomshanti/saveTheDateEmailImage.png?id={$row['hashedId']}' />
    </a>
    <map name='responses'>
      <area shape='circle' coords='145,653,55' href='https://www.shalomshanti.com/savethedate?response=0&id={$row['hashedId']}' />
      <area shape='circle' coords='248,653,55' href='https://www.shalomshanti.com/savethedate?response=1&id={$row['hashedId']}' />
      <area shape='circle' coords='353,653,55' href='https://www.shalomshanti.com/savethedate?response=2&id={$row['hashedId']}' />
      <area shape='circle' coords='456,653,55' href='https://www.shalomshanti.com/savethedate?response=3&id={$row['hashedId']}' />
    </map>
    <br><br>If you can't see an image above, please use this link to provide us information for planning purposes: <br><br>https://www.shalomshanti.com/savethedate?response=-1&id={$row['hashedId']}
";
  $headers = array (
    'From' => $from,
    'To' => $to,
    'Subject' => $subject,
    'Content-Type'  => 'text/html; charset=UTF-8'
  );
  
  $mail = $smtp->send($to.$bcc, $headers, $body);
  if (PEAR::isError($mail)) {
    echo("<p>" . $mail->getMessage() . "</p>");
  } else {
    $saveSentQuery = "UPDATE `".getenv('SS_DB_GUEST_TABLE')."` SET `Save the date sent`=1 WHERE `hashedId` = \"{$row['hashedId']}\"";
    $saveSentResult = $mysqli->query($saveSentQuery) or trigger_error($mysqli->error."[$saveSentQuery]");
    echo("<p>Message sent to: {$to}{$bcc}</p>");
  }  
}
?>