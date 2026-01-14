<?php



// 1. Include your class file
require_once '../config/Database.php';
require_once '../models/Employee.php';

try {
    // 2. Instantiate the class
    $database = new Database();

    // 3. Attempt to connect
    $db = $database->connect();

    // 4. Verify connection status
    if ($db instanceof PDO) {
        echo "Successfully connected to the database!";

        // Optional: Test a simple query to confirm database access
        $version = $db->query('SELECT VERSION()')->fetchColumn();
        echo "<br>MySQL Version: " . $version;
    }
} catch (Exception $e) {
    // This will catch any errors not already handled by your class's 'die' statement
    echo "Test failed: " . $e->getMessage();
}


echo "<br/>/////////////////////////////////////////////////////////////////////////////<br/>";


// --- TEST CODE (Temporary) --- basic testing

// 1. Instantiate your class
$testDb = new Database();

// 2. Call the connect method
$connection = $testDb->connect();

// 3. Simple check
if ($connection) {
    echo "Connection successful!";
} else {
    echo "Connection failed.";
}


echo "<br/>/////////////////////////////////////////////////////////////////////////////<br/>";
// Employee

// $employeeData = ['name' => 'Emmanuel Casiano', 'email' => 'casianoemmanuel@gmail.com', 'position' => 'Software Engineer'];
$editEmployeeData = ['name' => 'Emmanuel P. Casiano', 'email' => 'casianoemmanuel@gmail.com', 'position' => 'Software Engineer'];
//$employeeData2 = ['name' => 'Brian Casiano', 'email' => 'brian@gmail.com', 'position' => 'Graphics Designer'];

$employee = new Employee();
$database = new Database();


// $insert = $employee->create($employeeData2);
// $employee->delete(2);
$employees = $employee->getAll();

$singleEmployee = $employee->getById(1);

$employee->update(1, $editEmployeeData);

echo "<pre>";
print_r($singleEmployee);
echo "</pre>";

// 3. Simple check
// if ($insert) {
//     echo "Employee insert successful!";
// } else {
//     echo "Employee insert failed.";
// }
