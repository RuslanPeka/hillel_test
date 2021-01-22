<?php

namespace App\Controllers\Admin;

use App\Controllers\General\Controller;
use App\Models\Articles;

class ArticlesAdminController extends Controller
{
    private $conn;

    public function __construct()
    {
        $this->conn = new Articles();
    }

    public function index()
    {
        $data = $this->conn->all();
        $this->generate('Admin', 'ArticlesAdmin', $data);
    }

    public function update()
    {
        $objArticles = new Articles();
        $data = $objArticles->all();
        parent::generate('Admin', 'ArticlesAdmin', $data);
    }

    public function delete()
    {
        $data = $this->conn->deleteRow();
        $data = $this->conn->all();
        parent::generate('Admin', 'ArticlesAdmin', $data);
    }

    public function insert()
    {
        $data = $this->conn->insertArticle();
        $data = $this->conn->all();
        parent::generate('Admin', 'ArticlesAdmin', $data);
    }

    public function select()
    {
        $objArticles = new Articles();
        $data = $objArticles->all();
        parent::generate('Admin', 'ArticlesAdmin', $data);
    }
}