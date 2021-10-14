<?php 
$data = $_GET;

var_dump($_GET);

if(empty($_GET["name"] || $_GET["mail"] || $_GET["age"])){
    echo "Errore";
}elseif(strlen($_GET["name"]) <= 3){
    echo "Accesso Negato";
}elseif(strpos($_GET["mail"], "@") == false || strpos($_GET["mail"], ".") == false){
    echo "Accesso Negato";
}elseif(!is_numeric($_GET["age"])){
    echo "Accesso Negato";
}else{
    echo "Accesso Riuscito";
}

?>