<?php
require_once '../models/Department.php';
$dept = new Department();
$departments = $dept->getAll();
?>

<head>
    <link rel="stylesheet" href="style.css">
</head>

<h1>Departments</h1>
<a href="department_create.php">Add Department</a>

<table>
    <tr>
        <th>Name</th>
        <th>Actions</th>
    </tr>
    <?php foreach ($departments as $d): ?>
        <tr>
            <td><?= htmlspecialchars($d['name']) ?></td>

            <td>
                <a href="department_edit.php?id=<?= $d['id'] ?>">Edit</a>
                <a href="department_delete.php?id=<?= $d['id'] ?>" onclick="return confirm('Delete?')">Delete</a>

            </td>
        </tr>
    <?php endforeach; ?>
</table>