<?php include "db.php"; ?>
<?php
if(isset($_POST['save'])){
    $fn = $_POST['first_name'];
    $ln = $_POST['last_name'];
    $bd = $_POST['birthdate'];
    $em = $_POST['email'];
    $cn = $_POST['contact'];

    $conn->query("INSERT INTO students (first_name, last_name, birthdate, email, contact_number)
        VALUES ('$fn', '$ln', '$bd', '$em', '$cn')");

    header("Location: index.php");
    }
?>
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


<h2>Add Student</h2>
<form method="POST">
First Name: <input name="first_name"><br>
Last Name: <input name="last_name"><br>
Birthdate: <input type="date" name="birthdate"><br>
Email: <input name="email"><br>
Contact: <input name="contact"><br>
<button type="submit" name="save">Save</button>
</form>
</body>
</html>