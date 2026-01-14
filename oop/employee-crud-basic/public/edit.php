<?php
require_once '../models/Employee.php';
$employee = new Employee();

$id = $_GET['id'];
$data = $employee->getById($id);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $employee->update($id, $_POST);
    header("Location: index.php");
    exit;
}
?>

<form method="POST">
    <h2>Edit Employee</h2>
    <input name="name" value="<?= $data['name'] ?>" required>
    <input name="email" value="<?= $data['email'] ?>" required>
    <input name="position" value="<?= $data['position'] ?>" required>
    <button type="submit">Update</button>
</form>