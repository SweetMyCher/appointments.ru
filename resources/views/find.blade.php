<?php
define(HOST, localhost);
define(USER, zadanie);
define(PW, 1234);
define(DB, zadanie_db);

$connect = mysql_connect(HOST,USER,PW)
or die('Could not connect to mysql server.' );

mysql_select_db(DB, $connect)
or die('Could not select database.');

$term = strip_tags(substr($_POST['search_term'],0, 100));
$term = mysql_escape_string($term);

$sql = "select preparat, opisanie
from preparaty
where preparat like '%$term%'
or opisanie like '%$term%'
order by preparat asc";

$result = mysql_query($sql);

$string = '';

if (mysql_num_rows($result) > NULL){
  while($row = mysql_fetch_object($result)){
    $string .= "<b>".$row->preparat."</b> - ";
    $string .= $row->opisanie."</a>";
    $string .= "<br/>\n";
  }

}else{
  $string = "No matches!";
} 

echo $string;
?>