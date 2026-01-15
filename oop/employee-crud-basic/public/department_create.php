<?php
require_once '../models/Department.php';
$department = new Department();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $department->create($_POST['name']);
    header("Location: departments.php");
    exit;
}
?>

<form method="POST">
    <h2>Add Department</h2>
    <input name="name" placeholder="Name" required>
    <button type="submit">Save</button>
</form>