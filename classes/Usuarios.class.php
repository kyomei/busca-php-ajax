<?php

/**
 * Description of Usuarios
 *
 * @author Rafael Jeferson <rafa.jefer@gmail.com>
 * @tutorial https://www.youtube.com/watch?v=SNKE_B__51E
 */
class Usuarios {
   
   private $pdo;
   private $table = 'usuarios';
   
   public function __construct($db) {
      $this->pdo = $db;
   }
   
   /* Busca todos os dados da tabela */
   public function findAll() {
      $sql = "SELECT * FROM {$this->table}";
      $stmt = $this->pdo->query($sql);
      $stmt->execute();
      if($stmt->rowCount() > 0) {
         return $stmt->fetchAll(PDO::FETCH_ASSOC);
      }
      return array();
   }
   
   /* Busca dados por valor na tabela */
   public function search($s) {
      $sql = "SELECT * FROM {$this->table} WHERE (nome LIKE :search OR email LIKE :search)";
      $stmt = $this->pdo->prepare($sql);
      $stmt->bindValue(":search", "%$s%");
      $stmt->execute();
      if($stmt->rowCount() > 0) {
         return $stmt->fetchAll();
      }
      return array();
   }
   
}
