<?php
require_once '../models/Department.php';
$department = new Department();

$department->delete($_GET['id']);
header("Location: departments.php");
exit;
