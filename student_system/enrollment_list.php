<?php
include "db.php";

$sql = "SELECT e.enrollment_id, s.first_name, s.last_name, 
        c.course_name, e.enroll_date
        FROM enrollment e
        JOIN students s ON e.student_id = s.student_id
        JOIN courses c ON e.course_id = c.course_id";

$result = mysqli_query($conn, $sql);
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

<h2>Enrollment List</h2>
<table border="1" cellpadding="8">
<tr>
    <th>ID</th>
    <th>Student</th>
    <th>Course</th>
    <th>Date</th>
</tr>

<?php while ($row = mysqli_fetch_assoc($result)) { ?>
<tr>
    <td><?= $row['enrollment_id'] ?></td>
    <td><?= $row['first_name'] ?> <?= $row['last_name'] ?></td>
    <td><?= $row['course_name'] ?></td>
    <td><?= $row['enroll_date'] ?></td>
</tr>
<?php } ?>
</table>