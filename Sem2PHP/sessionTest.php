<?php
//Start session retrieves cookie
session_start();
//echo session_id();
if(isset($_SESSION['test'])){
    //echo "Varde finns";

}
else{
    //echo "varde finns ej";
}
$_SESSION['test'] ='TESTVARDE';
foreach ($_COOKIE as $value){
    echo "tom?".$value;
}
session_destroy();

//echo session_id();
//session_start();
//echo session_id();
foreach ($_COOKIE as $value){
    echo "tom2?".$value;
}
//echo "Värdet är: ".$_SESSION['test'];
