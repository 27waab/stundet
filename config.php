<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "student_db");
if (!$conn) {
    die("Connection failed");
}
