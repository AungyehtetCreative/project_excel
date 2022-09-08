<?php 
namespace Libs\Databases;
use PDO;
use PDOException;
class ProductTable{


 private $db = null;

 public function __construct(MySQL $db)
 {
  $this->db = $db;
 }

 // get items
 public function getItems()
 {
  try {
   $query = "SELECT * FROM products";
   $statement = $this->db->connect()->prepare($query);
   $statement->execute();
   $items = $statement->fetchAll();
   return $items;
  } catch (PDOException $e) {
   echo "Select Error: " . $e->getMessage();
  }
 }

 public function itemInsert($item)
{
 try{
  $query = "INSERT INTO products (product_name, price, quantity, created_at, updated_at) VALUES (:product_name, :price, :quantity, :Now(), :Now())";
  $statement = $this->db->connect()->prepare($query);
  $statement->execute($item);
 }
 catch (PDOException $e) {
  echo "Insert Error: " . $e->getMessage();
 }
}
 
}