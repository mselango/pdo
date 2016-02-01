<?php
//http://wiki.hashphp.org/PDO_Tutorial_for_MySQL_Developers

$db = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', 'root');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);


/* * ************select with no param ******************
  $stmt = $db->query('SELECT * FROM users');
  $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
  print_r($results);
 * *************select with no param ***************** */

/* * ******** select count *******************
  $stmt = $db->query('SELECT * FROM users');
  $row_count = $stmt->rowCount();
  echo $row_count.' rows selected'
 * 
  $id=1;
  $stmt = $db->prepare("SELECT * FROM users WHERE id=:id ");
  $stmt->bindValue(':id', $id, PDO::PARAM_INT);
  $stmt->execute();
  $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
 * 
 */
?>