<?php
    include "config.php";
    if (!isset($_SESSION['user'])) {
        header("Location: login.php");
    }
    include "header.php";

    if (isset($_POST['add'])) {
        $stmt = $conn->prepare("INSERT INTO students (name) VALUES (?)");
        $stmt->bind_param("s", $_POST['name']);
        $stmt->execute();
        header("Location: index.php");
    }
    ?>

    <form method="POST">
        <input type="text" name="name" placeholder="Student Name" required>
        <button name="add">Add Student</button>
    </form>

<?php include "footer.php"; ?>
