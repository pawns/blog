<?php
namespace App\Services\Blog;

use App\Repositories\Blog\BlogRepository;


/**
 * Created by PhpStorm.
 * User: hongqiaohe
 * Date: 2018/1/19
 * Time: 22:47
 */
class BlogService
{
    protected  $blogArticle;

    public function __construct()
    {
        $this->blogArticle = BlogRepository::getInstance();
    }

    public function createArticle($data){
        return $this->blogArticle->createArticle($data);
    }

    public function getAllArticle(){
        return $this->blogArticle->getAllArticle();
    }
    public function getArticle($id){
        return $this->blogArticle->getArticle($id);
    }

}