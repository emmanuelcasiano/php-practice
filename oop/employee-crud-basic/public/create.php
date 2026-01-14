<?php
require_once '../models/Employee.php';
$employee = new Employee();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $employee->create($_POST);
    header("Location: index.php");
    exit;
}
?>

<form method="POST">
    <h2>Add Employee</h2>
    <input name="name" placeholder="Name" required>
    <input name="email" type="email" placeholder="Email" required>
    <input name="position" placeholder="Position" required>
    <button type="submit">Save</button>
</form>