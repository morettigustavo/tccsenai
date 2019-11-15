<?php 
session_start();
if(!isset($_SESSION['id_estudante'])){
    if(isset($_COOKIE['id_estudante'])){
        $_SESSION['id_estudante' ]  = $_COOKIE['id_estudante' ];
        $_SESSION['primeiro_nome']  = $_COOKIE['primeiro_nome'];
        $_SESSION['segundo_nome' ]  = $_COOKIE['segundo_nome' ];
        $_SESSION['email'        ]  = $_COOKIE['email'        ];
        $_SESSION['senha'        ]  = $_COOKIE['senha'        ];
        $_SESSION['imagem'       ]  = $_COOKIE['imagem'       ];
        echo "reset";
    }else{
        echo "false";
    }
}else{
    echo "true";
}