<?php
    include "config.php";
    if (!isset($_SESSION['user'])) {
        header("Location: login.php");
    }
    $id = $_GET['id'];
    include "header.php";

    if (isset($_POST['update'])) {
        $stmt = $conn->prepare("UPDATE students SET name=? WHERE id=?");
        $stmt->bind_param("si", $_POST['name'], $id);
        $stmt->execute();
        header("Location: index.php");
    }

    $data = mysqli_query($conn, "SELECT * FROM students WHERE id=$id");
    $row = mysqli_fetch_assoc($data);
    ?>

    <form method="POST">
        <input type="text" name="name" value="<?= $row['name'] ?>" required>
        <button name="update">Update</button>
    </form>

<?php include "footer.php"; ?>
