<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <ul>
    
    <?php
    $fileNames = [
      'basic',
      'control_structure',
      'data_type',
      'hello',
      'html_php',
      'operator',
      'php_function',
      'user_defined_function',
      'variable_const'
    ];

    foreach ($fileNames as $fileName) {
      echo "<li><a href=\"$fileName.php\">$fileName</a></li>";
    }
    ?>

  </ul>
</body>
</html>