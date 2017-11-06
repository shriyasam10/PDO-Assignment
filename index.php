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

$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
$stmt= $db->prepare('select * from accounts where id<6');
$stmt->execute();
$result = $stmt->fetchAll();
//while($result=$stmt->fetch(PDO::FETCH_OBJ))
//{

//$results[]=$result;

//}

//print_r($results);
echo "Total number of records are:".count($result)."</br>";
echo "<table border=\"1\"><tr><th>ID</th><th>Email</th><th>First Name</th><th>Last Name</th><th>Phone</th><th>Birthday</th><th>Gender</th><th>Password</th></tr>";
foreach ($result as $row) 
{

echo
"<tr><td>".$row["id"]."</td><td>".$row["email"]."</td><td>".$row["fname"]."</td><td>".$row["lname"]."</td><td>".$row["phone"]."</td><td>".$row["birthday"]."</td><td>".$row["gender"]."</td><td>".$row["password"]."</td></tr>";

}

//else
//{
//echo '0 results';
    
//}

/*$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
$stmt= $db->prepare('select * from accounts where id<6');
$stmt->execute();
while($result=$stmt->fetch(PDO::FETCH_OBJ))
{

$results[]=$result;

}

print_r($results);
*/

?>




















































