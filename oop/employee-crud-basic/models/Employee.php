<?php
require_once __DIR__ . '/../config/Database.php';

class Employee
{
    private $conn;
    private $table = "employees";

    public function __construct()
    {
        $database = new Database();
        $this->conn = $database->connect();
    }

    public function getAll()
    {
        $sql = "
            SELECT e.*, d.name AS department
            FROM {$this->table} e
            JOIN departments d ON e.department_id = d.id
        ";

        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById($id)
    {
        $stmt = $this->conn->prepare("SELECT * FROM {$this->table} WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function create($data)
    {
        $sql = "INSERT INTO {$this->table} (department_id, name, email, position) VALUES (?, ?, ?, ?)";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute([$data['department_id'], $data['name'], $data['email'], $data['position']]);
    }

    public function update($id, $data)
    {
        $sql = "UPDATE {$this->table} SET department_id = ?, name = ?, email = ?, position = ? WHERE id = ?";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute([$data['department_id'], $data['name'], $data['email'], $data['position'], $id]);
    }

    public function delete($id)
    {
        $stmt = $this->conn->prepare("DELETE FROM {$this->table} WHERE id = ?");
        return $stmt->execute([$id]);
    }
}
