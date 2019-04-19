<?php 
    //estrutura do bd
    //CREATE DATABASE teste
    //CREATE TABLE produtos(id INT NOT NULL AUTO_INCREMENT, nomes VARCHAR(255) NOT NULL, valor DECIMAL(10, 2) NOT NULL, descricao VARCHAR(1000) NOT NULL, img VARCHAR(255) NOT NULL, PRIMARY KEY (id));

    //configurações do bd
    $host = "localhost";
    $db = "nomeDoBd";
    $user = "usuario";
    $password = "senha";

    //queries
    $qDelete = "DELETE FROM produtos WHERE id = :id";
    $qInsert = "INSERT INTO produtos (nomes, valor, descricao, img) VALUES (:nomes, :valor, :descricao, :img)";
    $qSelect = "SELECT * FROM produtos WHERE nomes LIKE :nome";
    $qSelectAll = "SELECT * FROM produtos";
    $qSelectById = "SELECT nomes, valor, descricao, img FROM produtos WHERE id = :id";
    $qSelectLastInsert = "SELECT * FROM produtos WHERE id = (SELECT max(id) AS lastid FROM produtos);";
    $qUpdate = "UPDATE produtos SET nomes = :nomes, valor = :valor, descricao = :descricao, img = :img WHERE id = :id";

    //caminho da pasta pras imagens
    $path = "imgs/";
?>