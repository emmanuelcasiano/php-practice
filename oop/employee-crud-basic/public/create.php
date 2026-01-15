<?php
require_once '../models/Employee.php';
require_once '../models/Department.php';
$employee = new Employee();
$department = new Department();
$departments = $department->getAll();

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
    <select name="department_id">
        <?php foreach ($departments as $dep): ?>
            <option value="<?= $dep['id']; ?>"><?= $dep['name']; ?></option>
        <?php endforeach; ?>
    </select>
    <button type="submit">Save</button>
</form>