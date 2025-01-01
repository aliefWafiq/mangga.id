<?php

require '../../config/call.php';

$name = $_GET['user'];
$user = "SELECT * FROM user WHERE name = '$name'";
$hasil = $proses->list($user);

$manga = $_GET['manga'];
$chapter = $_GET['chapter'];

foreach($hasil as $x){
    $proggres_user = $x['proggres'];
    $level_user = $x['level'];
 }

 $next = $chapter + 1;
 
 if($_SERVER['REQUEST_METHOD'] == 'POST'){
    
   if(intval($proggres_user) < 100){ 
      $update_proggres = $proggres_user + 10; 
      $sql = "UPDATE `user` SET `proggres` = '$update_proggres' WHERE `name` = '$name'"; 
      $stmt = $proses->action($sql); 
      echo "<script>window.location='../direct.php?manga=". $manga ."&user=". $name ."&page=baca&chapter=". $next . "'</script>"; 
   } else { 
      $up_level = $level_user + 1; 
      $update_proggres = 0; 
      $sql2 = "UPDATE `user` SET `level` = '$up_level', `proggres` = '$update_proggres' WHERE `name` = '$name'"; 
      $stmt = $proses->action($sql2); 
      echo "<script>window.location='../direct.php?manga=". $manga ."&user=". $name ."&page=baca&chapter=". $next . "'</script>"; 
   }
 }