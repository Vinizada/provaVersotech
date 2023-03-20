<?php

require_once('connection.php');

class processamentoBanco {

    private $connection;

    public function __construct(){

        $this->connection = new Connection();

    }

    public function deletarUsuario($idUsuario){

        $deletar = $this->connection->getConnection()->prepare("DELETE FROM users WHERE users.id = :id");

        $deletar->bindParam(":id",$idUsuario);

        $deletar->execute();

        $deletar = $this->connection->getConnection()->prepare("DELETE FROM user_colors WHERE user_id = :id");

        $deletar->bindParam(":id",$idUsuario);

        $deletar->execute();

    }

    public function criarUsuario($userName,$userEmail){

        $inserir = $this->connection->getConnection()->prepare("INSERT INTO users(name, email) VALUES (:name, :email)");

        $inserir->bindParam(":name",$userName);
        $inserir->bindParam(":email",$userEmail);

        $inserir->execute();


    }

    public function criarCor($colorName){

        $inserir = $this->connection->getConnection()->prepare("INSERT INTO colors(name) VALUES (:name)");

        $inserir->bindParam(":name",$colorName);

        $inserir->execute();


    }

    public function editarUsuario($id,$userName,$userEmail){

        $inserir = $this->connection->getConnection()->prepare("UPDATE USERS SET NAME = :name, email = :email WHERE ID = :id");

        $inserir->bindParam(":id",$id);
        $inserir->bindParam(":name",$userName);
        $inserir->bindParam(":email",$userEmail);

        $inserir->execute();


    }

    public function buscaUsuario($id){

        return $this->connection->query("SELECT * FROM users where id = $id")->fetchObject();


    }

    public function vinculaUsuarioECor($idUsuario, $idCor){

        $inserir = $this->connection->getConnection()->prepare("INSERT INTO user_colors(user_id, color_id) VALUES (:user_id, :color_id)");

        $inserir->bindParam(":user_id",$idUsuario);
        $inserir->bindParam(":color_id",$idCor);

        $inserir->execute();

    }

    public function desvinculaUsuarioECor($idUsuario, $idCor){

        $inserir = $this->connection->getConnection()->prepare("DELETE FROM user_colors WHERE user_id = :user_id and color_id = :color_id");

        $inserir->bindParam(":user_id",$idUsuario);
        $inserir->bindParam(":color_id",$idCor);

        $inserir->execute();

    }

    public function buscaUsuarios(){

       return $this->connection->query("SELECT * FROM users");

    }

    public function buscaCoresNaoVinculadas($idUsuario){

        return $this->connection->query("SELECT * FROM colors where colors.id not in (SELECT color_id FROM user_colors WHERE user_colors.user_id = $idUsuario)");
 
     }

    public function buscaCoresVinculadas($idUsuario){

        return $this->connection->query("SELECT * FROM colors where colors.id in (SELECT color_id FROM user_colors WHERE user_colors.user_id = $idUsuario)");
 
     }



}

?>