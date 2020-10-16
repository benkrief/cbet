<?php

$url ='';
if(isset($_GET['url'])){
    $url =explode('/',$_GET['url']);
}

//var_dump($url);
if($url ==''){
    require 'controller/default.php';
}
elseif ($url[0]==='quiz'){
    if (!empty($url[1])){
    $idQuiz = $url[1];
    var_dump($url);
    require 'template/template.php';

}
}
else {
    echo "404 Error not found";
}
?>