<?php

  require_once 'config.php';

  class Database extends Config {
 
    public function insert($nom, $prenoms, $pseudo, ) {
      $sql = 'INSERT INTO utilisateurs (nom, prenoms, pseudo, mail,) VALUES (:nom, :prenoms, :pseudo, :mail, )';
      $stmt = $this->conn->prepare($sql);
      $stmt->execute([
        'nom' => $nom,
        'prenoms' => $prenoms,
        'pseudo' => $pseudo,
       
        
      ]);
      return true;
    }

    public function read() {
      $sql = 'SELECT * FROM utilisateurs ORDER BY id DESC';
      $stmt = $this->conn->prepare($sql);
      $stmt->execute();
      $result = $stmt->fetchAll();
      return $result;
    }

    public function readOne($id) {
      $sql = 'SELECT * FROM utilisateurs WHERE id = :id';
      $stmt = $this->conn->prepare($sql);
      $stmt->execute(['id' => $id]);
      $result = $stmt->fetch();
      return $result;
    }

    public function update($id, $nom, $prenoms, $pseudo, ) {
      $sql = 'UPDATE utilisateurs SET nom = :nom, prenoms = :prenoms, pseudo = :pseudo, mail = :mail, mdp = :mdp WHERE id = :id';
      $stmt = $this->conn->prepare($sql);
      $stmt->execute([
        'nom' => $nom,
        'prenoms' => $prenoms,
        'pseudo' => $pseudo,
        
        
        'id' => $id,
      ]);

      return true;
    }


    public function delete($id) {
      $sql = 'DELETE FROM utilisateurs WHERE id = :id';
      $stmt = $this->conn->prepare($sql);
      $stmt->execute(['id' => $id]);
      return true;
    }
  }

?>