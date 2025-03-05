<?php
$sql = "SELECT nama FROM manga ORDER by nama";
$arrayManga = array();
$resultAutoComplete = $proses->list($sql);

foreach($resultAutoComplete as $x){
    $arrayManga[] = sprintf('"%s",', $x['nama']); 
}

$stringManga = implode("",$arrayManga); 