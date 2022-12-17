<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Test_PHP_Q1</title>
  <link rel="stylesheet" href="./css/style.css">
</head>
<body>
  <table>
    <?php
    for ($i = 1; $i < 10; $i++)
    {
      echo "<tr>";
      for ($j = 1; $j < 10; $j++)
      {
        echo "<td>" . $i * $j . "</td>" ;
      }
      echo "</tr>";
    }
    ?>
  </table>
</body>
</html>