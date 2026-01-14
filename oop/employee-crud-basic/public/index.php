<?php
require_once '../models/Employee.php';
$employee = new Employee();
$employees = $employee->getAll();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Employee CRUD</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <h1>Employees</h1>
    <a href="create.php">➕ Add Employee</a>

    <table>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Position</th>
            <th>Actions</th>
        </tr>
        <?php foreach ($employees as $emp): ?>
            <tr>
                <td><?= htmlspecialchars($emp['name']) ?></td>
                <td><?= htmlspecialchars($emp['email']) ?></td>
                <td><?= htmlspecialchars($emp['position']) ?></td>
                <td>
                    <a href="edit.php?id=<?= $emp['id'] ?>">Edit</a>
                    <a href="delete.php?id=<?= $emp['id'] ?>" onclick="return confirm('Delete?')">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>

</body>

</html>