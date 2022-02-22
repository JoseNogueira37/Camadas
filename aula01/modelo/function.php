<?php

    $NOME = $_REQUEST['NOME'];
    $ANIMAL = $_REQUEST['ANIMAL'];

    if(empty($NOME)){
        $dados = array(
            "tipo" => 'error',
            "mensagem" => 'Existe(m) campos(s) a ser(em) preenchido(s).'
        );
    }else{

        switch($ANIMAL){
            case '1' : $dados = array(
                "tipo" => 'cachorro.jpg',
                "mensagem" => 'Seja bem vindo, '.$NOME', sabemos que seu animal preferido é o cachorro' 
            );
            break;
            case '2' : $dados = array(
                "tipo" => 'gato.jpg',
                "mensagem" => 'Seja bem vindo, '.$NOME', sabemos que seu animal preferido é gato' 
            );
            break;
            case '3' : $dados = array(
                "tipo" => 'peixe.jpg',
                "mensagem" => 'Seja bem vindo, '.$NOME', sabemos que seu animal preferido é o peixe' 
            );
            break;
            
        }

    }
    echo json_encode($dados);