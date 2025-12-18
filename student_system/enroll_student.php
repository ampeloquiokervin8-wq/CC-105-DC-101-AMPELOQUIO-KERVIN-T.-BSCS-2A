<?php
include "db.php";

$students = mysqli_query($conn, "SELECT * FROM students");
$courses = mysqli_query($conn, "SELECT * FROM courses");

if ($_POST) {
    $student = $_POST['student_id'];
    $course = $_POST['course_id'];
    $date = date("Y-m-d");

    $sql = "INSERT INTO enrollment (student_id, course_id, enroll_date)
            VALUES ('$student', '$course', '$date')";
    mysqli_query($conn, $sql);

    echo "Student Enrolled Successfully!";
}
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="styles.css">
    <script src="script.js" defer></script>
</head>

<body>

<!-- ✅ NAVIGATION BAR -->
<a href="index.php" class="nav-btn">Home</a>
<a href="courses.php" class="nav-btn">Course List</a>
<a href="add_course.php" class="nav-btn">Add Course</a>
<a href="add_student.php" class="nav-btn">Add Student</a>
<a href="enroll_student.php" class="nav-btn">Enroll Student</a>
<a href="enrollment_list.php" class="nav-btn">Enrollment List</a>

<h2>Enroll Student to Course</h2>

<form method="POST">
    Select Student:<br>
    <select name="student_id" required>
        <?php while ($s = mysqli_fetch_assoc($students)) { ?>
        <option value="<?= $s['student_id'] ?>">
            <?= $s['first_name'] . " " . $s['last_name'] ?>
        </option>
        <?php } ?>
    </select><br><br>

    Select Course:<br>
    <select name="course_id" required>
        <?php while ($c = mysqli_fetch_assoc($courses)) { ?>
        <option value="<?= $c['course_id'] ?>">
            <?= $c['course_name'] ?>
        </option>
        <?php } ?>
    </select><br><br>

    <button type="submit">Enroll</button>
</form>