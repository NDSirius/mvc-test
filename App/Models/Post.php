<?php

namespace App\Models;

use PDO;
use Core\Model;

class Post extends Model
{

    protected $tableName = 'posts';

    public function __construct()
    {
        $this->getDB();

    }

    public function insert(array $postData)
    {
        $sql = "INSERT INTO {$this->tableName} (title, content) VALUES (:title, :content)";
        $sth = $this->db->prepare($sql);
        $sth->execute($postData);
        return $this->db->lastInsertId();
    }
    public function getPost(int $id)
    {
        $sql = "SELECT * FROM {$this->tableName} WHERE id=:id";
        $sth = $this->db->prepare($sql);
        $sth->execute([':id' => $id]);
        $post = $sth->fetch();

        return !empty($post) ? $post : false;
    }
}