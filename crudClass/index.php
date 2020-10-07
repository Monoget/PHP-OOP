<?php 

include 'database.php';

$obj=new Database();

//$obj->insert('students',["student_no"=>"20161083","surname"=>"Monoget","forename"=>"saha"]);

//$obj->update('students',["student_no"=>"20161084","surname"=>"Shimul","forename"=>""],'students_id="7"')

//$obj->delete('students','students_id="7"');

echo $obj->pagination('students',null,null,2);

$obj->select('students','*',null,null,null,2);
echo "<pre>";
print_r($obj->getResult());
echo "</pre>";
?>