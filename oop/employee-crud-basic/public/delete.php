<?php
require_once '../models/Employee.php';
$employee = new Employee();

$employee->delete($_GET['id']);
header("Location: index.php");
exit;
