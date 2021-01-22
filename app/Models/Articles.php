<?php

namespace App\Models;

use App\Models\General\Model;
use Components\Orm\Select;
use PDO;
use Core\MyHelp;

class Articles extends Model
{
    protected $tableName = 'articles';
    private $conn;

    public function all() {
        $this->conn = $this->select();
        $this->conn->setTableName($this->tableName);
        $this->conn->setJoinTable('users');
        $this->conn->setJoinLastTable($this->tableName);
        $this->conn->setJoinMainColumn('id');
        $this->conn->setJoinColumn('id_author');
        return $this->conn->execute();
    }

    public function deleteArticles() 
    {
        if(!empty($_GET['id_article'])) {
            $this->conn = $this->delete();
            $this->conn->setTable($this->tableName);
            $this->conn->setColumn('id_article');
            $this->conn->setValue($_GET['id_article']);
            return $this->conn->execute();
        } else {
            $this->all();
        }
    }

    public function insertArticle()
    {
        return header("Location: http://hilleltest/admin/articlesAdmin");
    }

    public function updateArticles()
    {
        return header("Location: http://hilleltest/admin/articlesAdmin");
    }

    public function insertArticles()
    {
        return header("Location: http://hilleltest/admin/articlesAdmin");
    }
}