<?php
session_start();

include('../databaseinfo/database.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_SESSION['user'];
    $feed = filter_input(INPUT_POST, "feedback", FILTER_SANITIZE_SPECIAL_CHARS);
    $q1 = $_POST['q1'];
    $q2 = $_POST['q2'];
    $q3 = $_POST['q3'];
    $rating = $q1+$q2+$q3;

    $sql = "UPDATE feedback SET rest = '$feed', restrat = '$rating' WHERE user = '$username'";

    try {
        mysqli_query($conn, $sql);
        header("Location: restfeed.php?error=Feedback Sumbitted!");
        exit();
    } catch (mysqli_sql_exception $e) {
        header("Location: restfeed.php?error=Some error have occurred!");
        exit();
    }

}

mysqli_close($conn);
?>
