<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use App\Services\Blog\BlogService;
use Illuminate\Http\Request;

class BlogController extends Controller
{

    protected $blogService;
    public function __construct(BlogService $blogService)
    {
        $this->blogService = $blogService;
    }

    public function getIndex(){
        $res = $this->blogService->getAllArticle();
        return view('home')->with(['articles'=>$res]);
    }

    public function getEditor(){

        return view('md-editor');
    }

    public function getViewContent($id){
        $article = $this->blogService->getArticle($id);
        return view('content')->with(['article'=>$article]);
    }
    public function postStoreContent(Request $request){
        $data = $request->except('_token','value');
        $result = $this->blogService->createArticle($data);
        if($request){
            return ['code'=>1,'msg'=>'success','data'=>['id'=>$result->id]];
        }
        return ['code'=>0,'msg'=>'fail'];
    }


}
