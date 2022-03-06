<!DOCTYPE html>
<?php include_once('init.php');?>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>StartPage</title>
</head>
<body>
<div id="content">
 <?
 $SQL='SELECT * FROM data_auth;';
 $result=\Laufer\MySqlConnect::executeSQL($SQL);
 \Laufer\DebugFunc::showLog($result);
 ?>

</div>
</body>
</html>