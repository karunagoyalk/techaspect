<?php
$driver = 'mysql';
$database = "dbname=CODINGGROUND";
$dsn = "$driver:host=localhost;$database";

$username = 'root';
$password = 'root';

try {
   $conn = new PDO($dsn, $username, $password);
   echo "Database CODINGGROUND Connected\n";
}catch(PDOException $e){
   echo $e->getMessage();
}
$sql = ("INSERT into users (Planname,monthlyrental,Freeinternet,Freecalls,FreeSMS,CallCharges,SMScharges,Datacharges,Roamingcharges') values('$_POST[Planname]','$_POST[monthlyrental]','$_POST[Freeinternet]','$_POST[Freecalls]','$_POST[FreeSMS]','$_POST[CallCharges]','$_POST[SMSCharges]','$_POST[DataCharges]','$_POST[RoamingCharges]')");
$stmt = $conn->prepare($sql);
$stmt->execute();

while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
  foreach($row as $value)
  {
    echo sprintf("%s, ", $value);
  }
  echo "\n";
}
$sql=("SELECT* From users (filter_var("monthlyrental","freeSMS","freeinternet","freecalls",))");

?>