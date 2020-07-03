<?php
$dsn = 'mysql:dbname=testphp;host=localhost;';
$user = 'root';
$password = '44237';
try {
    $dbh = new PDO($dsn, $user, $password);

    $sql = "select * from testphp";
    $result = $dbh->query($sql);
    $del_list = $dbh->query($sql);

} catch (PDOException $e) {
    echo "接続失敗: " . $e->getMessage() . "\n";
    exit();
}
?>
<!DOCTYPE html>
<html lang=ja>
  <head>
    <meta charset="utf-8">
    <title>これはテストです</title>
  </head>
  <body align="center">
    <h1 align="center">PHPの覇者田中裕也の教室</h1>
    <table align="center">
      <tr>
        <th>書籍ID</th>
        <th>書籍名</th>
        <th>著者名</th>
      </tr>
      <?php foreach ($result as $value) { ?>
      <tr>
        <td><?php echo "$value[id]" ?></td>
        <td><?php echo "$value[bookname]" ?></td>
        <td><?php echo "$value[auther]" ?></td>
      </tr>
      <?php } ?>
    </table>
  </body>
</html>
