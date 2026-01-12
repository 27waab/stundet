<?php
    include "config.php";
    include "header.php";

    if (isset($_POST['login'])) {
        $_SESSION['user'] = $_POST['username'];
        header("Location: index.php");
    }
    ?>

    <form method="POST">
        <input type="text" name="username" placeholder="Username" required>
        <button name="login">Login</button>
    </form>

<?php include "footer.php"; ?>
