<?php
session_start();
unset($_SESSION['id_estudante']);
unset($_SESSION['primeiro_nome']);
unset($_SESSION['segundo_nome']);
unset($_SESSION['email']);
unset($_SESSION['senha']);

unset($_COOKIE['id_estudante']);
unset($_COOKIE['primeiro_nome']);
unset($_COOKIE['segundo_nome']);
unset($_COOKIE['email']);
unset($_COOKIE['senha']);

setcookie('id_estudante' , null, -1);
setcookie('primeiro_nome', null, -1);
setcookie('segundo_nome' , null, -1);
setcookie('email'        , null, -1);
setcookie('senha'        , null, -1);
setcookie('imagem'       , null, -1);