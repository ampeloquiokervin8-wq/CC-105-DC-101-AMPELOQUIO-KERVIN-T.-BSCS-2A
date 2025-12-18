<?php include "db.php"; ?>
<!DOCTYPE html>

<html>
<head>
    <link rel="stylesheet" href="styles.css"> 
    <script src="script.js" defer></script>
    <title>Student Records</title>
</head>
<body>
<h2>Student List</h2>
<!-- Navigation Buttons -->
<a href="index.php" class="nav-btn">Home</a>
<a href="courses.php" class="nav-btn">Course List</a>
<a href="add_course.php" class="nav-btn">Add Course</a>
<a href="add_student.php" class="nav-btn">Add Student</a>
<a href="enroll_student.php" class="nav-btn">Enroll Student</a>
<a href="enrollment_list.php" class="nav-btn">Enrollment List</a>


<table border="1">
<tr>
    <th>ID</th><th>Name</th><th>Birthdate</th>
    <th>Email</th><th>Contact</th><th>Action</th>
</tr>

<?php
$result = $conn->query("SELECT * FROM students");
while($row = $result->fetch_assoc()):
?>
<tr>
    <td><?= $row['student_id'] ?></td>
    <td><?= $row['first_name'] . " " . $row['last_name'] ?></td>
    <td><?= $row['birthdate'] ?></td>
    <td><?= $row['email'] ?></td>
    <td><?= $row['contact_number'] ?></td>
    <td>
        <a href="edit_student.php?id=<?= $row['student_id'] ?>">Edit</a>
        <a href="delete_student.php?id=<?= $row['student_id'] ?>" onclick="returnconfirmDelete()">Delete</a>
    </td>
</tr>
<?php endwhile; ?>
</table>
</body>
</html>