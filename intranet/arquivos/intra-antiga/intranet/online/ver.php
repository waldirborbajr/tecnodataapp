<?
  require("online_inc.php");

  mysql_connect($db_host, $db_user, $db_pass) or die (mysql_error());
  $result=mysql_db_query($db_bdad, "SELECT DISTINCT ip, arquivo FROM online");

  echo '<div style="border: 1px solid blue; height:198px; overflow: scroll;">';
  echo '<table border=0>';
  while ($data = mysql_fetch_array($result)) {
  echo "</table></div>";

  mysql_close();
?>