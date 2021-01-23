<?php

namespace App\Controllers\Admin;

use App\Controllers\General\Controller;
use App\Models\Articles;

class ArticlesAdminController extends Controller
{
    public function index()
    {
        $articles = new Articles();
        $data = $articles->all();
        $this->generate('Admin', 'ArticlesAdmin', $data);
    }

    public function update()
    {
        $articles = new Articles();
        $articles->updateArticles();
    }

    public function delete()
    {
        $articles = new Articles();
        $articles->deleteArticles();
        return header("Location: http://hilleltest/index.php/admin/articlesAdmin");
    }

    public function insert()
    {
        $articles = new Articles();
        $articles->insertArticles();
    }
}