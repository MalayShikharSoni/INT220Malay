<?php
// Student data storage
$students = [];

// Function to calculate total, average, and grade category
function calculateGrades(&$students) {
    foreach ($students as &$student) {
        $total = array_sum($student["subjects"]);
        $average = $total / count($student["subjects"]);
        $grade = getGradeCategory($average);

        $student["total"] = $total;
        $student["average"] = $average;
        $student["grade"] = $grade;
    }
}

// Function to determine grade category
function getGradeCategory($average) {
    if ($average >= 90) return 'A';
    elseif ($average >= 80) return 'B';
    elseif ($average >= 70) return 'C';
    elseif ($average >= 60) return 'D';
    else return 'F';
}

// Function to display student records
function displayStudents($students) {
    if (empty($students)) {
        echo "<p>No student records available.</p>";
        return;
    }
    echo "<table border='1'>";
    echo "<tr><th>ID</th><th>Name</th><th>Subjects</th><th>Total</th><th>Average</th><th>Grade</th></tr>";
    foreach ($students as $student) {
        echo "<tr><td>{$student["id"]}</td><td>{$student["name"]}</td><td>";
        foreach ($student["subjects"] as $subject => $grade) {
            echo "$subject: $grade <br>";
        }
        echo "</td><td>{$student["total"]}</td><td>{$student["average"]}</td><td>{$student["grade"]}</td></tr>";
    }
    echo "</table>";
}

// Function to modify a student's grade
function modifyGrade(&$students, $id, $subject, $newGrade) {
    foreach ($students as &$student) {
        if ($student["id"] == $id && isset($student["subjects"][ $subject])) {
            $student["subjects"][ $subject] = $newGrade;
            calculateGrades($students);
            return "Grade updated successfully!<br>";
        }
    }
    return "Student or subject not found!<br>";
}

// Function to add a new student
function addStudent(&$students, $id, $name, $subjects) {
    foreach ($students as $student) {
        if ($student["id"] == $id) {
            return "Student ID already exists!<br>";
        }
    }
    $students[] = ["id" => $id, "name" => $name, "subjects" => $subjects];
    calculateGrades($students);
    return "Student added successfully!<br>";
}

// Taking user input from CLI
echo "Enter number of students: ";
$num_students = trim(fgets(STDIN));
for ($i = 0; $i < $num_students; $i++) {
    echo "Enter Student ID: ";
    $id = trim(fgets(STDIN));
    echo "Enter Student Name: ";
    $name = trim(fgets(STDIN));
    echo "Enter number of subjects: ";
    $num_subjects = trim(fgets(STDIN));
    $subjects = [];
    for ($j = 0; $j < $num_subjects; $j++) {
        echo "Enter Subject Name: ";
        $subject = trim(fgets(STDIN));
        echo "Enter Grade for $subject: ";
        $grade = trim(fgets(STDIN));
        $subjects[$subject] = (int)$grade;
    }
    echo addStudent($students, $id, $name, $subjects);
}

displayStudents($students);
?>
