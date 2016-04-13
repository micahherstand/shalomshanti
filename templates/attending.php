<?php

echo "<section class='havdalah'>";
echo "<h2>Havdalah / Mehendi</h2>";
echo "<h3>Vidya</h3>";
echo "<h4>Attendants</h4>";
$query = "SELECT COUNT(*) as receptionAdultExpected
FROM `".getenv('SS_DB_GUEST_TABLE')."`, `havdalah_guest_attendants` WHERE `havdalah_guest_attendants`.guest_id = ".getenv('SS_DB_GUEST_TABLE').".id and List = 'Vidya'";
$result = $mysqli->query($query) or trigger_error($mysqli->error."[$query]");
$row = $result->fetch_array(MYSQLI_ASSOC);
echo "<strong>{$row['receptionAdultExpected']}</strong><br>";

echo "<h4>Households</h4>";
$query = "SELECT COUNT(*) as receptionAdultExpected
FROM `".getenv('SS_DB_GUEST_TABLE')."`, `havdalah_guest_attendants` WHERE `havdalah_guest_attendants`.guest_id = ".getenv('SS_DB_GUEST_TABLE').".id and List = 'Vidya'";
$result = $mysqli->query($query) or trigger_error($mysqli->error."[$query]");
$row = $result->fetch_array(MYSQLI_ASSOC);
echo "<strong>{$row['receptionAdultExpected']}</strong><br>";

echo "<h3>Micah</h3>";
echo "<h4>Attendants</h4>";
$query = "SELECT COUNT(*) as receptionAdultExpected
FROM `".getenv('SS_DB_GUEST_TABLE')."`, `havdalah_guest_attendants` WHERE `havdalah_guest_attendants`.guest_id = ".getenv('SS_DB_GUEST_TABLE').".id and List = 'Micah'";
$result = $mysqli->query($query) or trigger_error($mysqli->error."[$query]");
$row = $result->fetch_array(MYSQLI_ASSOC);
echo "<strong>{$row['receptionAdultExpected']}</strong><br>";

echo "<h4>Households</h4>";
$query = "SELECT COUNT(*) as receptionAdultExpected
FROM `".getenv('SS_DB_GUEST_TABLE')."`, `havdalah_guest_attendants` WHERE `havdalah_guest_attendants`.guest_id = ".getenv('SS_DB_GUEST_TABLE').".id and List = 'Micah'";
$result = $mysqli->query($query) or trigger_error($mysqli->error."[$query]");
$row = $result->fetch_array(MYSQLI_ASSOC);
echo "<strong>{$row['receptionAdultExpected']}</strong><br>";

echo "<hr>";
echo "<h3>Total</h3>";
echo "<h4>Attendants</h4>";
$query = "SELECT COUNT(*) as receptionAdultExpected
FROM `".getenv('SS_DB_GUEST_TABLE')."`, `havdalah_guest_attendants` WHERE `havdalah_guest_attendants`.guest_id = ".getenv('SS_DB_GUEST_TABLE').".id";
$result = $mysqli->query($query) or trigger_error($mysqli->error."[$query]");
$row = $result->fetch_array(MYSQLI_ASSOC);
echo "<strong>{$row['receptionAdultExpected']}</strong><br>";

echo "<h4>Households</h4>";
$query = "SELECT COUNT(*) as receptionAdultExpected
FROM `".getenv('SS_DB_GUEST_TABLE')."`, `havdalah_guest_attendants` WHERE `havdalah_guest_attendants`.guest_id = ".getenv('SS_DB_GUEST_TABLE').".id";
$result = $mysqli->query($query) or trigger_error($mysqli->error."[$query]");
$row = $result->fetch_array(MYSQLI_ASSOC);
echo "<strong>{$row['receptionAdultExpected']}</strong><br>";


echo "</section><section class='ceremony'>";



echo "<h2>Ceremony</h2>";
echo "<h3>Vidya</h3>";
echo "<h4>Attendants</h4>";
$query = "SELECT COUNT(*) as receptionAdultExpected
FROM `".getenv('SS_DB_GUEST_TABLE')."`, `ceremony_guest_attendants` WHERE `ceremony_guest_attendants`.guest_id = ".getenv('SS_DB_GUEST_TABLE').".id and List = 'Vidya'";
$result = $mysqli->query($query) or trigger_error($mysqli->error."[$query]");
$row = $result->fetch_array(MYSQLI_ASSOC);
echo "<strong>{$row['receptionAdultExpected']}</strong><br>";

echo "<h4>Households</h4>";
$query = "SELECT COUNT(*) as receptionAdultExpected
FROM `".getenv('SS_DB_GUEST_TABLE')."`, `ceremony_guest_attendants` WHERE `ceremony_guest_attendants`.guest_id = ".getenv('SS_DB_GUEST_TABLE').".id and List = 'Vidya'";
$result = $mysqli->query($query) or trigger_error($mysqli->error."[$query]");
$row = $result->fetch_array(MYSQLI_ASSOC);
echo "<strong>{$row['receptionAdultExpected']}</strong><br>";

echo "<h3>Micah</h3>";
echo "<h4>Attendants</h4>";
$query = "SELECT COUNT(*) as receptionAdultExpected
FROM `".getenv('SS_DB_GUEST_TABLE')."`, `ceremony_guest_attendants` WHERE `ceremony_guest_attendants`.guest_id = ".getenv('SS_DB_GUEST_TABLE').".id and List = 'Micah'";
$result = $mysqli->query($query) or trigger_error($mysqli->error."[$query]");
$row = $result->fetch_array(MYSQLI_ASSOC);
echo "<strong>{$row['receptionAdultExpected']}</strong><br>";

echo "<h4>Households</h4>";
$query = "SELECT COUNT(*) as receptionAdultExpected
FROM `".getenv('SS_DB_GUEST_TABLE')."`, `ceremony_guest_attendants` WHERE `ceremony_guest_attendants`.guest_id = ".getenv('SS_DB_GUEST_TABLE').".id and List = 'Micah'";
$result = $mysqli->query($query) or trigger_error($mysqli->error."[$query]");
$row = $result->fetch_array(MYSQLI_ASSOC);
echo "<strong>{$row['receptionAdultExpected']}</strong><br>";

echo "<hr>";
echo "<h3>Total</h3>";
echo "<h4>Attendants</h4>";
$query = "SELECT COUNT(*) as receptionAdultExpected
FROM `".getenv('SS_DB_GUEST_TABLE')."`, `ceremony_guest_attendants` WHERE `ceremony_guest_attendants`.guest_id = ".getenv('SS_DB_GUEST_TABLE').".id";
$result = $mysqli->query($query) or trigger_error($mysqli->error."[$query]");
$row = $result->fetch_array(MYSQLI_ASSOC);
echo "<strong>{$row['receptionAdultExpected']}</strong><br>";

echo "<h4>Households</h4>";
$query = "SELECT COUNT(*) as receptionAdultExpected
FROM `".getenv('SS_DB_GUEST_TABLE')."`, `ceremony_guest_attendants` WHERE `ceremony_guest_attendants`.guest_id = ".getenv('SS_DB_GUEST_TABLE').".id";
$result = $mysqli->query($query) or trigger_error($mysqli->error."[$query]");
$row = $result->fetch_array(MYSQLI_ASSOC);
echo "<strong>{$row['receptionAdultExpected']}</strong><br>";





echo "</section><section class='reception'>";




echo "<h2>Reception</h2>";

echo "<h3>Vidya</h3>";
echo "<h4>Attendants</h4>";
$query = "SELECT COUNT(*) as receptionAdultExpected
FROM `".getenv('SS_DB_GUEST_TABLE')."`, `reception_guest_attendants` WHERE `reception_guest_attendants`.guest_id = ".getenv('SS_DB_GUEST_TABLE').".id and List = 'Vidya'";
$result = $mysqli->query($query) or trigger_error($mysqli->error."[$query]");
$row = $result->fetch_array(MYSQLI_ASSOC);
echo "<strong>{$row['receptionAdultExpected']}</strong><br>";

echo "<h4>Households</h4>";
$query = "SELECT COUNT(*) as receptionAdultExpected
FROM `".getenv('SS_DB_GUEST_TABLE')."`, `reception_guest_attendants` WHERE `reception_guest_attendants`.guest_id = ".getenv('SS_DB_GUEST_TABLE').".id and List = 'Vidya'";
$result = $mysqli->query($query) or trigger_error($mysqli->error."[$query]");
$row = $result->fetch_array(MYSQLI_ASSOC);
echo "<strong>{$row['receptionAdultExpected']}</strong><br>";

echo "<h3>Micah</h3>";
echo "<h4>Attendants</h4>";
$query = "SELECT COUNT(*) as receptionAdultExpected
FROM `".getenv('SS_DB_GUEST_TABLE')."`, `reception_guest_attendants` WHERE `reception_guest_attendants`.guest_id = ".getenv('SS_DB_GUEST_TABLE').".id and List = 'Micah'";
$result = $mysqli->query($query) or trigger_error($mysqli->error."[$query]");
$row = $result->fetch_array(MYSQLI_ASSOC);
echo "<strong>{$row['receptionAdultExpected']}</strong><br>";

echo "<h4>Households</h4>";
$query = "SELECT COUNT(*) as receptionAdultExpected
FROM `".getenv('SS_DB_GUEST_TABLE')."`, `reception_guest_attendants` WHERE `reception_guest_attendants`.guest_id = ".getenv('SS_DB_GUEST_TABLE').".id and List = 'Micah'";
$result = $mysqli->query($query) or trigger_error($mysqli->error."[$query]");
$row = $result->fetch_array(MYSQLI_ASSOC);
echo "<strong>{$row['receptionAdultExpected']}</strong><br>";

echo "<hr>";
echo "<h3>Total</h3>";
echo "<h4>Attendants</h4>";
$query = "SELECT COUNT(*) as receptionAdultExpected
FROM `".getenv('SS_DB_GUEST_TABLE')."`, `reception_guest_attendants` WHERE `reception_guest_attendants`.guest_id = ".getenv('SS_DB_GUEST_TABLE').".id";
$result = $mysqli->query($query) or trigger_error($mysqli->error."[$query]");
$row = $result->fetch_array(MYSQLI_ASSOC);
echo "<strong>{$row['receptionAdultExpected']}</strong><br>";

echo "<h4>Households</h4>";
$query = "SELECT COUNT(*) as receptionAdultExpected
FROM `".getenv('SS_DB_GUEST_TABLE')."`, `reception_guest_attendants` WHERE `reception_guest_attendants`.guest_id = ".getenv('SS_DB_GUEST_TABLE').".id";
$result = $mysqli->query($query) or trigger_error($mysqli->error."[$query]");
$row = $result->fetch_array(MYSQLI_ASSOC);
echo "<strong>{$row['receptionAdultExpected']}</strong><br>";
echo "</section>";

?>
