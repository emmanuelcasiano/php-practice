<?php
require_once '../models/Department.php';
$department = new Department();

$id = $_GET['id'];
$data = $department->getById($id);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $department->update($id, $_POST['name']);
    header("Location: departments.php");
    exit;
}
?>

<form method="POST">
    <h2>Edit Department</h2>
    <input name="name" placeholder="Name" value="<?= $data['name']; ?>" required>
    <button type="submit">Update</button>
</form>