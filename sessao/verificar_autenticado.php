<?php

/*
Esta página implementa a permissão de acesso,
só libera o acesso a página se o usuário estiver
autenticado. Deve incluir esta página em todas
as que tiverem proteção de acesso.
*/



// Verifica se sessão foi iniciada anteriormente
if(session_id() == '')
    session_start();

/*
Verifica se a variável de sessão 'usuario' 
foi criada. Caso negativo, redireciona o 
usuário para a página de login se autenticar.
*/
if (!isset($_SESSION['usuario'])) {
    header("location: login.php?erro=Você+não+tem+permissão+de+acesso");
    die('');
}
?>