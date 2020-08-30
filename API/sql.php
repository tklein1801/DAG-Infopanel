<?php
$db = new mysqli("localhost", "db_root", "Peter123", "dulliag");
$db->set_charset("utf8");
if ($db->connect_error) {
	echo "Datenbankverbindung ist fehlgeschlagen! <br />Fehler: <br />" . $db->connect_error;
}
