<?php

class dbConn

{

protected static $db;

private function __construct()

{

try {

self::$db = new PDO('mysql:host=sql2.njit.edu;dbname=sss329', 'sss329','Iag2xyAqh');

self::$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}

catch(PDOException $e) {

echo "<b>Connection Error:</b>"."<br>".$e->getMessage();

}

}

public static function getconnection()

{

if(!self::$db)

{

new dbconn();

}

return self::$db;


}

}

$db = dbconn::getconnection();
echo "<b>Connected Successfully</b>"."<br>";

?>



































