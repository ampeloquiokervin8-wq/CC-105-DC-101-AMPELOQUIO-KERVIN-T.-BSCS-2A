<?php
include "db.php";
$result = mysqli_query($conn, "SELECT * FROM courses");
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

<h2>Course List</h2>
<a href="add_course.php">Add Course</a>
<table border="1" cellpadding="8">
    <tr>
        <th>ID</th>
        <th>Course Name</th>
        <th>Description</th>
    </tr>
    <?php while($row = mysqli_fetch_assoc($result)) { ?>
    <tr>
        <td><?= $row['course_id'] ?></td>
        <td><?= $row['course_name'] ?></td>
        <td><?= $row['description'] ?></td>
    </tr>
    <?php } ?>
</table>
