<?php
require_once '../models/Employee.php';
require_once '../models/Department.php';
$employee = new Employee();
$department = new Department();

$id = $_GET['id'];
$data = $employee->getById($id);
$departments = $department->getAll();

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
    <select name="department_id">
        <?php foreach ($departments as $dep): ?>
            <option value="<?= $dep['id']; ?>" <?php if ($dep['id'] === $data['department_id']) {
                                                    echo "selected";
                                                } ?>><?= $dep['name']; ?></option>
        <?php endforeach; ?>
    </select>
    <button type="submit">Update</button>
</form>