<?php

// Parent array to store students
$students = [
    ["id" => 101, "name" => "Alice", "subjects" => ["Math" => 85, "Science" => 90, "English" => 78]],
    ["id" => 102, "name" => "Bob", "subjects" => ["Math" => 70, "Science" => 65, "English" => 80]],
    ["id" => 103, "name" => "Charlie", "subjects" => ["Math" => 92, "Science" => 88, "English" => 95]]
];

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["id"], $_POST["name"], $_POST["math"], $_POST["science"], $_POST["english"])) {
        $id = $_POST["id"];
        $name = $_POST["name"];
        $subjects = [
            "Math" => is_numeric($_POST["math"]) ? (int)$_POST["math"] : 0,
            "Science" => is_numeric($_POST["science"]) ? (int)$_POST["science"] : 0,
            "English" => is_numeric($_POST["english"]) ? (int)$_POST["english"] : 0
        ];
        
        // Append new student record
        $students[] = ["id" => $id, "name" => $name, "subjects" => $subjects];
    }
}

// Function to display students
function displayStudents($students) {
    echo "<table border='1'>";
    echo "<tr><th>ID</th><th>Name</th><th>Subjects</th><th>Total</th><th>Average</th><th>Grade</th></tr>";
    foreach ($students as $student) {
        $total = array_sum($student["subjects"]);
        $average = count($student["subjects"]) ? ($total / count($student["subjects"])) : 0;
        $grade = getGradeCategory($average);

        echo "<tr><td>{$student["id"]}</td><td>{$student["name"]}</td><td>";
        foreach ($student["subjects"] as $subject => $gradeValue) {
            echo "$subject: $gradeValue <br>";
        }
        echo "</td><td>$total</td><td>$average</td><td>$grade</td></tr>";
    }
    echo "</table>";
}

// Function to determine grade category
function getGradeCategory($average) {
    if ($average >= 90) return 'A';
    elseif ($average >= 80) return 'B';
    elseif ($average >= 70) return 'C';
    elseif ($average >= 60) return 'D';
    else return 'F';
}

?>

<!-- HTML Form for adding a student -->
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"> 
    <label>ID:</label>
    <input type="number" name="id" required><br>
    
    <label>Name:</label>
    <input type="text" name="name" required><br>
    
    <label>Math:</label>
    <input type="number" name="math" required><br>
    
    <label>Science:</label>
    <input type="number" name="science" required><br>
    
    <label>English:</label>
    <input type="number" name="english" required><br>
    
    <input type="submit" value="Add Student">
</form>

<?php
// Display students
displayStudents($students);
?>

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Code to handle form submission (e.g., validate inputs, save data)

    // If form is submitted successfully, print 'submitted'
    echo "submitted";
}

