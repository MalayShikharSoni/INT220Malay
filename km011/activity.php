<?php
function getGradeCategory($avg) {
    if ($avg >= 90) return "A";
    elseif ($avg >= 80) return "B";
    elseif ($avg >= 70) return "C";
    elseif ($avg >= 60) return "D";
    else return "F";
}

foreach ($students as $student) {
    echo "Student Name: " . $student["name"] . "\n";
    echo "Student ID: " . $student["id"] . "\n";
    echo "Subjects and Grades: \n";
    foreach ($student["subjects"] as $subject => $grade) {
        echo $subject . ": " . $grade . "\n";
    }
    $grades = calculateGrades($student);
    echo "Total Grades: " . $grades["total"] . "\n";
    echo "avg Grades: " . $grades["avg"] . "\n";
    echo "Grade Category: " . getGradeCategory($grades["avg"]) . "\n\n";
}




?>