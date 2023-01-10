<?php
require_once "dbconnect.php";
include("../page-parts/header.php");
include("../page-parts/action.php");

//1
$sql = "SELECT student_name, student_last_name, student_birthday, DATE_FORMAT(student_birthday,'%b %d %Y %h:%i %p'), average_student_mark,student_attendance FROM students INNER JOIN students_stat ON students.id = students_stat.student_id WHERE average_student_mark > 4.5;";
$result = $conn->query($sql);

print_array($result);
echo "<hr>";
//2
$sql = "SELECT DISTINCT students.student_name, students.student_last_name, subjects.subject_name, subjects.subject_hours FROM students
JOIN subjects JOIN students_subject ON students.id=students_subject.student_id;";
$result = $conn->query($sql);
print_array($result);


$conn->close();
include("../page-parts/footer.php");
