<?php 
session_start();
if(!isset($_SESSION['id_estudante'])){
    echo "false";
}else{
    echo "true";
}