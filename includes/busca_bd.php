<?php
    //$banco = new mysqli(host, usuario, senha, nomedobanco);
    $banco = new mysqli("localhost", "root", "", "produtos_aeropartes");
    if($banco->connect_errno) {
        echo "<p>Encontrei um erro $banco->errno --> $banco->connect_error</p>";
        die();//mata o servico
    }


    $banco->query("SET NAMES 'utf8'");//resolve compatibilidade utf8 do browser
    $banco->query("SET character_set_connection=utf8");
    $banco->query("SET character_set_client=utf8");
    $banco->query("SET character_set_results=utf8");


//    $busca = $banco -> query("select * from produtos");
//    if (!$busca) {
//        echo "<p>Falha na busca! $banco->error</p>";
//    } else {
//        while($reg = $busca->fetch_object()){//fetch pega todos os dados e faz caber em outro objeto
//            print_r($reg);
//        }
//    }



