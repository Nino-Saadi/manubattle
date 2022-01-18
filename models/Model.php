<?php
namespace App\Models;
use \PDO;
use \Database;
abstract class Model
{
    protected $db;

    protected $table;

    public function hydrate(array $data)
    {
      foreach ($data as $key => $val) {
        $method = 'set' . ucfirst($key);

        if (method_exists($this, $method)) {
          $this->$method($val);
        }
      }
    }
    
    public function __construct()
    {
       $this->db = Database::getInstance();
    }

    // Generic getter
    public function __get($property)
    {
        if (property_exists($this, $property)) {
            return $this->$property;
        }
    }


    // Setter Universel
    public function __set($property, $value) {
      if (property_exists($this, $property)) {
        $this->$property = $value;
      }
    }



    public function delete()
    {
        // on utilise la méthode prepare car notre requête a pas besoin d'un paramètre envoyé par l'utilisateur.

        $stmt = $this->db->prepare('DELETE FROM '. $this->table .' WHERE `id` = ?');

        // on exécute la requête en précisant la valeur du paramètre

        return $stmt->execute([$this->id_user]);
    }


    public function getOne()
    {
        // on utilise la méthode prepare car notre requête a pas besoin d'un paramètre envoyé par l'utilisateur.

        $stmt = $this->db->prepare('SELECT * FROM ' . $this->table . ' WHERE `id` = ?');

        // on exécute la requête en précisant la valeur du paramètre

        $stmt->execute([$this->id]);

        //  on extrait les données de la réponse réçue.

        $author = $stmt->fetch();

        $this->hydrate($author);
    }

    public function getAll()
    {
        // on utilise la méthode prepare car notre requête a pas besoin d'un paramètre envoyé par l'utilisateur.

        $stmt = $this->db->query('SELECT * FROM ' . $this->table);

        // on exécute la requête en précisant la valeur du paramètre

        //  on extrait les données de la réponse réçue.

        $authors = $stmt->fetchAll();

        return $authors;
    }
}
