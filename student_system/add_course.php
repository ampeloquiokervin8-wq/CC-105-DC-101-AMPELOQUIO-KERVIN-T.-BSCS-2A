<?php include "db.php"; ?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="styles.css">
        <script src="script.js" defer></script>
    </head>
<body>

<!-- Navigation Buttons -->
<a href="index.php" class="nav-btn">Home</a>
<a href="courses.php" class="nav-btn">Course List</a>
<a href="add_course.php" class="nav-btn">Add Course</a>
<a href="add_student.php" class="nav-btn">Add Student</a>
<a href="enroll_student.php" class="nav-btn">Enroll Student</a>
<a href="enrollment_list.php" class="nav-btn">Enrollment List</a>

<h2>Add Course</h2>
<form method="POST">
    Course Name:<br>
    <input type="text" name="course_name" required><br><br>

    Description:<br>
    <input type="text" name="description"><br><br>

    <button type="submit">Save</button>
</form>

<?php
if ($_POST) {
    $name = $_POST['course_name'];
    $desc = $_POST['description'];

    $sql = "INSERT INTO courses (course_name, description)
            VALUES ('$name', '$desc')";
    mysqli_query($conn, $sql);

    echo "Course added successfully!";
}
?>