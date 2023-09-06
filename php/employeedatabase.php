<?php
include "php/classes/employee.php";
include "php/classes/render.php";

$employee1 = new Employee();
$employee1->setFirstName = "Carl";
$employee1->setLastName = "Sanders";
$employee1->setEmail = "CarlSanders@gmail.com"

echo Render::displayEmployeeName($employee1);
?>