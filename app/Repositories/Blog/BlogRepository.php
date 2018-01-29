<?php
namespace App\Repositories\Blog;

use App\Model\Blog\Article;

/**
 * Created by PhpStorm.
 * User: hongqiaohe
 * Date: 2018/1/19
 * Time: 22:49
 */
class BlogRepository
{
    protected $article;

    private static $_instance = null;
    //防止外部实例化
    private function __construct()
    {
        $this->article = new Article();
    }
    //防止外部克隆
    private function __clone()
    {
        // TODO: Implement __clone() method.
    }
    public static function getInstance(){
        if (is_null(static::$_instance) || !isset (static::$_instance)) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }

    /**
     * 创建文章
     * @param $data
     */
    public function createArticle($data){
        return $this->article->create($data);
    }

    /**
     * 修改文章
     * @param $data
     * @param $id
     * @return mixed
     */
    public function updateArticle($id,$data){
        return $this->article->whereId($id)->update($data);
    }

    public function getAllArticle(){
        return $this->article
                ->whereIn('article_status',[1,2,3])
                ->select('id','tag','title','created_at','describe')
                ->get();
    }

    public function getArticle($id){
        return $this->article->whereId($id)
                ->select('id','created_at','uid','content','title','created_at')
                ->first();
    }

}