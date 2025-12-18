<?php include "db.php"; ?>

<?php
$id = $_GET['id'];
$student = $conn->query("SELECT * FROM students WHERE student_id=$id")->fetch_assoc();

if(isset($_POST['update'])){
    $fn = $_POST['first_name'];
    $ln = $_POST['last_name'];
    $bd = $_POST['birthdate'];
    $em = $_POST['email'];
    $cn = $_POST['contact'];

    $conn->query("
        UPDATE students 
        SET first_name='$fn', last_name='$ln', birthdate='$bd', email='$em', contact_number='$cn'
        WHERE student_id=$id
    ");

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
<h2>Edit Student</h2>
<form method="POST">
First Name: <input name="first_name" value="<?= $student['first_name'] ?>"><br>
Last Name: <input name="last_name" value="<?= $student['last_name'] ?>"><br>
Birthdate: <input type="date" name="birthdate" value="<?= $student['birthdate'] ?>"><br>
Email: <input name="email" value="<?= $student['email'] ?>"><br>
Contact: <input name="contact" value="<?= $student['contact_number'] ?>"><br>
<button name="update">Update</button>
</form>
</body>
</html>