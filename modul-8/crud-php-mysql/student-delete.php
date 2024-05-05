<?php
session_start();
if (!isset($_SESSION["username"])) {
  header("Location: login.php");
  exit();
}

include("connection.php");

if (isset($_GET["nim"])) {
  $nim = $_GET["nim"];
  $query = "DELETE FROM student WHERE nim='$nim'";
  $query_result = mysqli_query($connection, $query);

  if ($query_result) {
    header("Location: student-view.php?message=Data berhasil dihapus");
  } else {
    header("Location: student-view.php?message=Data gagal dihapus");
  }
}

?>
