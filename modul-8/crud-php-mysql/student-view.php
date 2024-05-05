<?php
session_start();
if (!isset($_SESSION["username"])) {
  header("Location: login.php");
  exit();
}

// if (isset($_SESSION['start_time'])) {
//   if (time() - $_SESSION['start_time'] > 2) {
//     session_unset();
//     session_destroy();
//   } else {
//     $_SESSION['start_time'] = time();
//   }
// } else {
//   $_SESSION['start_time'] = time();
// }

include("connection.php");

if (isset($_GET["message"])) {
  $message = $_GET["message"];
}

// Proses pencarian
if (isset($_GET["search"])) {
  $search = mysqli_real_escape_string($connection, $_GET["search"]);
  $query = "SELECT * FROM student WHERE nim LIKE '%$search%' OR name LIKE '%$search%' ORDER BY nim ASC";
} else {
  $query = "SELECT * FROM student ORDER BY nim ASC";
}
?>


<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <title>Data Mahasiswa</title>
  <link href="assets/style.css" rel="stylesheet">
</head>

<body>
  <div class="container">
    <div id="header">
      <h1 id="logo">Data Mahasiswa</h1>
    </div>
    <hr>
    <nav>
      <ul>
        <li><a href="student-view.php">Tampil</a></li>
        <li><a href="student-add.php">Tambah</a>
        <li><a href="logout.php">Logout</a>
      </ul>
    </nav>
    <?php
    if (isset($message)) {
      echo "<div class='pesan'>$message</div>";
    }
    ?>
    <!-- Form Pencarian -->
    <form action="student-view.php" method="get">
      <label for="search">Pencarian: </label>
      <input type="text" name="search" id="search" placeholder="Masukkan NIM atau Nama">
      <input type="submit" value="Cari">
    </form>

    <table border="1">
      <tr>
        <th>NIM</th>
        <th>Nama</th>
        <th>Tempat Lahir</th>
        <th>Tanggal Lahir</th>
        <th>Fakultas</th>
        <th>Jurusan</th>
        <th>IPK</th>
        <th>Action</th>
      </tr>
      <?php
      $result = mysqli_query($connection, $query);
      if (!$result) {
        die("Query Error: " . mysqli_errno($connection) . " - " . mysqli_error($connection));
      }

      while ($data = mysqli_fetch_assoc($result)) {
        $birth_date = strtotime($data["birth_date"]);
        $formatted_date = date("d-m-Y", $birth_date);

        echo "<tr>";
        echo "<td>$data[nim]</td>";
        echo "<td>$data[name]</td>";
        echo "<td>$data[birth_city]</td>";
        echo "<td>$formatted_date</td>";
        echo "<td>$data[faculty]</td>";
        echo "<td>$data[department]</td>";
        echo "<td>$data[gpa]</td>";
        echo "<td>";
        echo "<a href='student-edit.php?nim=$data[nim]'>Edit</a> | ";
        echo "<a href='student-delete.php?nim=$data[nim]' onclick=\"return confirm('Apakah Anda yakin ingin menghapus data ini?')\">Delete</a>";
        echo "</td>";
        echo "</tr>";
      }

      mysqli_free_result($result);
      mysqli_close($connection);
      ?>
    </table>
  </div>
</body>

</html>