<?php
    include "config.php";
    if (!isset($_SESSION['user'])) {
        header("Location: login.php");
    }
    include "header.php";
    $result = mysqli_query($conn, "SELECT * FROM students");
?>

    <h2>Students</h2>
    <a href="add_student.php">Add Student</a>
    <br><br>

    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
    <div class="card">
        <?= $row['name'] ?><br><br>
        <a href="edit_student.php?id=<?= $row['id'] ?>">Edit</a> |
        <a href="delete_student.php?id=<?= $row['id'] ?>">Delete</a>
    </div>
    <?php } ?>

    <a href="logout.php">Logout</a>

<?php include "footer.php"; ?>
