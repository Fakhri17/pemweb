<?php

session_start();
if (!isset($_SESSION["username"])) {
  header("Location: login.php");
  exit();
}

include("connection.php");

$error_message = "";
$select_ftib = "";
$select_fteic = "";

if (isset($_GET["nim"])) {
  $nim = $_GET["nim"];
  $query = "SELECT * FROM student WHERE nim='$nim'";
  $query_result = mysqli_query($connection, $query);
  $data = mysqli_fetch_array($query_result);
}

if (isset($_POST["submit"])) {
  $nim = htmlentities(strip_tags(trim($_POST["nim"])));
  $name = htmlentities(strip_tags(trim($_POST["name"])));
  $birth_city = htmlentities(strip_tags(trim($_POST["birth_city"])));
  $faculty = htmlentities(strip_tags(trim($_POST["faculty"])));
  $department = htmlentities(strip_tags(trim($_POST["department"])));
  $gpa = htmlentities(strip_tags(trim($_POST["gpa"])));
  $birth_date = htmlentities(strip_tags(trim($_POST["birth_date"])));
  $birth_month = htmlentities(strip_tags(trim($_POST["birth_month"])));
  $birth_year = htmlentities(strip_tags(trim($_POST["birth_year"])));



  if (empty($nim)) {
    $error_message .= "- NIM belum diisi <br>";
  } else if (!preg_match("/^[0-9]{8}$/", $nim)) {
    $error_message .= "- NIM harus berupa 8 digit angka <br>";
  }

  $nim = mysqli_real_escape_string($connection, $nim);
  $query = "SELECT * FROM student WHERE nim='$nim'";
  $query_result = mysqli_query($connection, $query);

  $data_amount = mysqli_num_rows($query_result);
  // if ($data_amount >= 1) {
  //   $error_message .= "- NIM yang sama sudah digunakan <br>";
  // }

  if (empty($name)) {
    $error_message .= "- Nama belum diisi <br>";
  }

  if (empty($birth_city)) {
    $error_message .= "- Tempat lahir belum diisi <br>";
  }

  if (empty($department)) {
    $error_message .= "- Jurusan belum diisi <br>";
  }



  switch ($faculty) {
    case 'FTIB':
      $select_ftib = "selected";
      break;
    case 'FTEIC':
      $select_fteic = "selected";
      break;
  }

  if (!is_numeric($gpa) or ($gpa <= 0)) {
    $error_message .= "- IPK harus diisi dengan angka";
  }

  if ($error_message === "") {
    $nim = mysqli_real_escape_string($connection, $nim);
    $name = mysqli_real_escape_string($connection, $name);
    $birth_city = mysqli_real_escape_string($connection, $birth_city);
    $faculty = mysqli_real_escape_string($connection, $faculty);
    $department = mysqli_real_escape_string($connection, $department);
    $gpa = mysqli_real_escape_string($connection, $gpa);
    $birth_date = mysqli_real_escape_string($connection, $birth_date);
    $birth_month = mysqli_real_escape_string($connection, $birth_month);
    $birth_year = mysqli_real_escape_string($connection, $birth_year);

    $birth_date = $birth_year . "-" . $birth_month . "-" . $birth_date;

    $query = "UPDATE student SET name='$name', birth_city='$birth_city', birth_date='$birth_date', faculty='$faculty', department='$department', gpa='$gpa' WHERE nim='$nim'";
    $query_result = mysqli_query($connection, $query);

    if ($query_result) {
      header("Location: student-view.php?message=Data berhasil diubah");
    } else {
      $error_message = "Data gagal diubah";
    }
  }
} else {
  $nim = $data["nim"];
  $name = $data["name"];
  $birth_city = $data["birth_city"];
  $faculty = $data["faculty"];
  $department = $data["department"];
  $gpa = $data["gpa"];
  $birth_date = date("d", strtotime($data["birth_date"]));
  $birth_month = date("m", strtotime($data["birth_date"]));
  $birth_year = date("Y", strtotime($data["birth_date"]));
}

$arr_month = array(
  "01" => "Januari",
  "02" => "Februari",
  "03" => "Maret",
  "04" => "April",
  "05" => "Mei",
  "06" => "Juni",
  "07" => "Juli",
  "08" => "Agustus",
  "09" => "September",
  "10" => "Oktober",
  "11" => "November",
  "12" => "Desember"
);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Edit Data Mahasiswa</title>
  <link href="assets/style.css" rel="stylesheet">
</head>

<body>
  <div class="container">
    <div id="header">
      <h1 id="logo">Edit Data Mahasiswa</h1>
    </div>
    <hr>
    <nav>
      <ul>
        <li><a href="student-view.php">Tampil</a></li>
        <li><a href="student-add.php">Tambah</a>
        <li><a href="logout.php">Logout</a>
      </ul>
    </nav>
    <h2>Edit Data Mahasiswa</h2>
    <?php
    if ($error_message !== "") {
      echo "<div class='error'>$error_message</div>";
    }
    ?>
    <form id="form_mahasiswa" action="student-edit.php" method="post">
      <fieldset>
        <legend>Edit Data Mahasiswa</legend>
        <p>
          <label for="nim">NIM: </label>
          <input type="text" name="nim" id="nim" value="<?php echo $nim; ?>" placeholder="Contoh: 12345678" readonly> (8 digit angka)
        </p>
        <p>
          <label for="name">Nama: </label>
          <input type="text" name="name" id="name" value="<?php echo $name; ?>">
        </p>
        <p>
          <label for="birth_city">Tempat Lahir: </label>
          <input type="text" name="birth_city" id="birth_city" value="<?php echo $birth_city; ?>">
        </p>
        <p>
          <label for="birth_date">Tanggal Lahir: </label>
          <select name="birth_date" id="birth_date">
            <?php
            for ($i = 1; $i <= 31; $i++) {
              $selected = ($i == $birth_date) ? "selected" : "";
              echo "<option value='$i' $selected>$i</option>";
            }
            ?>
          </select>
          <select name="birth_month" id="birth_month">
            <?php
            foreach ($arr_month as $key => $value) {
              $selected = ($key == $birth_month) ? "selected" : "";
              echo "<option value='$key' $selected>$value</option>";
            }
            ?>
          </select>
          <select name="birth_year" id="birth_year">
            <?php
            for ($i = 1990; $i <= 2020; $i++) {
              $selected = ($i == $birth_year) ? "selected" : "";
              echo "<option value='$i' $selected>$i</option>";
            }
            ?>
          </select>
        </p>
        <p>
          <label for="faculty">Fakultas: </label>
          <select name="faculty" id="faculty">
            <option value="FTIB" <?php echo $select_ftib; ?>>FTIB</option>
            <option value="FTEIC" <?php echo $select_fteic; ?>>FTEIC</option>
          </select>
        </p>
        <p>
          <label for="department">Jurusan: </label>
          <input type="text" name="department" id="department" value="<?php echo $department; ?>">
        </p>
        <p>
          <label for="gpa">IPK: </label>
          <input type="text" name="gpa" id="gpa" value="<?php echo $gpa; ?>" placeholder="Contoh: 2.75"> (angka desimal dipisah dengan karakter titik ".")
        </p>
      </fieldset>
      <br>
      <p>
        <input type="submit" name="submit" value="Simpan">
        <input type="reset" value="Reset">
      </p>
    </form>


  </div>
</body>

</html>

<?php
mysqli_close($connection);
?>